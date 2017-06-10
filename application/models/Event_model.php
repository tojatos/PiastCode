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
          PLACE_TABLE.'.address as place_address,'.
          CATEGORY_TABLE.'.name as category_name,'
        )
        ->from(EVENT_TABLE)
        ->join(PLACE_TABLE, PLACE_TABLE.".id_".PLACE_TABLE." = ".EVENT_TABLE.".fk_".PLACE_TABLE,'left')
        ->join(EVENT_CATEGORY_TABLE, EVENT_TABLE.".id_".EVENT_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".EVENT_TABLE,'left')
        ->join(CATEGORY_TABLE, CATEGORY_TABLE.".id_".CATEGORY_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".CATEGORY_TABLE,'left'
        ->where(CATEGORY_TABLE."name" = $category OR EVENT_TABLE."datetime_start" = $datetime));
        $events_data = $this->db->get();
        if($events_data==null)
        {
          return false;
        }
        else
        {
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
          PLACE_TABLE.'.address as place_address,'.
          CATEGORY_TABLE.'.name as category_name,'
        )
        ->from(EVENT_TABLE)
        ->join(PLACE_TABLE, PLACE_TABLE.".id_".PLACE_TABLE." = ".EVENT_TABLE.".fk_".PLACE_TABLE,'left')
        ->join(EVENT_CATEGORY_TABLE, EVENT_TABLE.".id_".EVENT_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".EVENT_TABLE,'left')
        ->join(CATEGORY_TABLE, CATEGORY_TABLE.".id_".CATEGORY_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".CATEGORY_TABLE,'left')
        ->where(['id_'.EVENT_TABLE => $event_id]);
        $event_data = $this->db->get();
        if($event_data==null)
        {
          return false;
        }
        else
        {
          if($event_data->result()==null)
          {
            return null;
          }
          else
          {
            return $event_data->result()[0];
          }
        }

    }

    public function get_event_verified(){
       $this->db
        ->select(
          EVENT_TABLE.'.id_'.EVENT_TABLE.' as event_id,'.
          EVENT_TABLE.'.name as event_name,'.
          EVENT_TABLE.'.description as event_description,'.
          EVENT_TABLE.'.datetime_start as event_datetime_start,'.
          EVENT_TABLE.'.datetime_end as event_datetime_end,'.
          PLACE_TABLE.'.name as place_name,'.
          PLACE_TABLE.'.address as place_address,'.
          CATEGORY_TABLE.'.name as category_name,'
        )
        ->from(EVENT_TABLE)
        ->join(PLACE_TABLE, PLACE_TABLE.".id_".PLACE_TABLE." = ".EVENT_TABLE.".fk_".PLACE_TABLE,'left')
        ->join(EVENT_CATEGORY_TABLE, EVENT_TABLE.".id_".EVENT_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".EVENT_TABLE,'left')
        ->join(CATEGORY_TABLE, CATEGORY_TABLE.".id_".CATEGORY_TABLE." = ".EVENT_CATEGORY_TABLE.".fk_".CATEGORY_TABLE,'left')
        ->where(['verified' => 0]);
        $events_data = $this->db->get();
        if($events_data==null)
        {
          return false;
        }
        else
        {
          return $events_data->result();
        }
    }



    public function verify_event($id_event){
      $this->db->where(['id_event' => $id_event])
      ->update(EVENT_TABLE, ['verified' => 1]);
    }
}
