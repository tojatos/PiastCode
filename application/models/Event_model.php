<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Event_model extends MY_Model
{
    public function create_event($event_data)
    {
            //$this->validate_event_data($event_data);
            $datetime_start = $event_data['date_start'].' '.$event_data['time_start'];
            $datetime_end = $event_data['date_end'].' '.$event_data['time_end'];
            $id_event = $this->get_next_id(EVENT_TABLE);
            $insert_data = [
              'id_'.EVENT_TABLE => $id_event,
              'name' => $event_data['name'],
              'description' => $event_data['description'],
              'datetime_start' => $datetime_start,
              'datetime_end' => $datetime_end,
              'fk_user_creator' => $event_data['creator'],
              'fk_place' => $event_data['place_id'],
            ];
            $this->db->insert(EVENT_TABLE, $insert_data);
            $category_ids = $event_data['category_ids'];
            if($category_ids!=null)
            {
              foreach ($category_ids as $category_id)
              {
                $insert_cat_data = [
                  'id_'.EVENT_CATEGORY_TABLE => $this->get_next_id(EVENT_CATEGORY_TABLE),
                  'fk_'.EVENT_TABLE => $id_event,
                  'fk_'.CATEGORY_TABLE => $category_id
                ];
                $this->db->insert(EVENT_CATEGORY_TABLE, $insert_cat_data);
              }
            }
            return $id_event;
    }
    public function get_events_data()
    {
        $this->db
        ->select(
          EVENT_TABLE.'.id_'.EVENT_TABLE.' as event_id,'.
          EVENT_TABLE.'.name as event_name,'.
          EVENT_TABLE.'.description as event_description,'.
          EVENT_TABLE.'.datetime_start as event_datetime_start,'.
          EVENT_TABLE.'.datetime_end as event_datetime_end,'.
          EVENT_TABLE.'.verified as event_verified,'.
          PLACE_TABLE.'.name as place_name,'.
          PLACE_TABLE.'.address as place_address,'
        )
        ->from(EVENT_TABLE)
        ->join(PLACE_TABLE, PLACE_TABLE.".id_".PLACE_TABLE." = ".EVENT_TABLE.".fk_".PLACE_TABLE,'left');
        $events_data = $this->db->get();
        if($events_data==null)
        {
          return false;
        }
        else
        {
          $this->db
          ->select(EVENT_CATEGORY_TABLE.".fk_".EVENT_TABLE.','.CATEGORY_TABLE.'.name as category_name')
          ->from(EVENT_CATEGORY_TABLE)
          ->join(CATEGORY_TABLE, CATEGORY_TABLE.".id_".CATEGORY_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".CATEGORY_TABLE,'left');
          $event_category_data = $this->db->get()->result();
          foreach ($events_data->result() as $event) {
            $event->category = [];
            foreach ($event_category_data as $e_c) {
              if($event->event_id==$e_c->fk_event)
              {
                array_push($event->category, $e_c->category_name);
              }
            }
          }
          return $events_data->result();
        }

    }
    public function get_event_data($event_id)
    {

        $this->db
        ->select(
          EVENT_TABLE.'.id_'.EVENT_TABLE.' as event_id,'.
          EVENT_TABLE.'.name as event_name,'.
          EVENT_TABLE.'.description as event_description,'.
          EVENT_TABLE.'.datetime_start as event_datetime_start,'.
          EVENT_TABLE.'.datetime_end as event_datetime_end,'.
          EVENT_TABLE.'.verified as event_verified,'.
          PLACE_TABLE.'.name as place_name,'.
          PLACE_TABLE.'.address as place_address,'
        )
        ->from(EVENT_TABLE)
        ->join(PLACE_TABLE, PLACE_TABLE.".id_".PLACE_TABLE." = ".EVENT_TABLE.".fk_".PLACE_TABLE,'left')
        ->where(['id_'.EVENT_TABLE => $event_id]);;
        $events_data = $this->db->get();
        if($events_data==null)
        {
          return false;
        }
        else
        {
          $this->db
          ->select(EVENT_CATEGORY_TABLE.".fk_".EVENT_TABLE.','.CATEGORY_TABLE.'.name as category_name')
          ->from(EVENT_CATEGORY_TABLE)
          ->join(CATEGORY_TABLE, CATEGORY_TABLE.".id_".CATEGORY_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".CATEGORY_TABLE,'left')
          ->where([EVENT_CATEGORY_TABLE.".fk_".EVENT_TABLE => $event_id]);
          $event_category_data = $this->db->get()->result();
          foreach ($events_data->result() as $event) {
            $event->category = [];
            foreach ($event_category_data as $e_c) {
              if($event->event_id==$e_c->fk_event)
              {
                array_push($event->category, $e_c->category_name);
              }
            }
          }
          return $events_data->result()[0];
        }

    }

    public function get_event_unverified(){
      $this->db
      ->select(
        EVENT_TABLE.'.id_'.EVENT_TABLE.' as event_id,'.
        EVENT_TABLE.'.name as event_name,'.
        EVENT_TABLE.'.description as event_description,'.
        EVENT_TABLE.'.datetime_start as event_datetime_start,'.
        EVENT_TABLE.'.datetime_end as event_datetime_end,'.
        EVENT_TABLE.'.verified as event_verified,'.
        PLACE_TABLE.'.name as place_name,'.
        PLACE_TABLE.'.address as place_address,'
      )
      ->from(EVENT_TABLE)
      ->join(PLACE_TABLE, PLACE_TABLE.".id_".PLACE_TABLE." = ".EVENT_TABLE.".fk_".PLACE_TABLE,'left')
      ->where(['verified' => 0]);
      $events_data = $this->db->get();
      if($events_data==null)
      {
        return false;
      }
      else
      {
        $this->db
        ->select(EVENT_CATEGORY_TABLE.".fk_".EVENT_TABLE.','.CATEGORY_TABLE.'.name as category_name')
        ->from(EVENT_CATEGORY_TABLE)
        ->join(CATEGORY_TABLE, CATEGORY_TABLE.".id_".CATEGORY_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".CATEGORY_TABLE,'left');
        $event_category_data = $this->db->get()->result();
        foreach ($events_data->result() as $event) {
          $event->category = [];
          foreach ($event_category_data as $e_c) {
            if($event->event_id==$e_c->fk_event)
            {
              array_push($event->category, $e_c->category_name);
            }
          }
        }
        return $events_data->result();
      }

    }



    public function verify_event($id_event){
      $this->db->where(['id_event' => $id_event])
      ->update(EVENT_TABLE, ['verified' => 1]);
    }
}
