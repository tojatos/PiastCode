<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Event_model extends MY_Model
{
    public function create_event($event_data)
    {
        try {
            //$this->validate_event_data($event_data);
            $datetime_start = $event_data['date_start'].' '.$event_data['time_start'];
            $datetime_end = $event_data['date_end'].' '.$event_data['time_end'];
            $insert_data = [
              'id_'.EVENT_TABLE => $this->get_next_id(EVENT_TABLE),
              'name' => $event_data['name'],
              'description' => $event_data['description'],
              'datetime_start' => $datetime_start,
              'datetime_end' => $datetime_end,
              'fk_user_creator' => $event_data['creator'],
              'fk_place' => $event_data['place_id'],
            ];
            $this->db->insert(EVENT_TABLE, $insert_data);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
  
}
