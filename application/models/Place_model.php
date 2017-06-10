<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Place_model extends MY_Model
{
    public function create_place($data)
    {
        try {
            $insert_data = [
              'id_'.PLACE_TABLE => $this->get_next_id(PLACE_TABLE),
              'name' => $data['name'],
              'description' => $data['description'],
              'address' => $data['address'],
            ];
            // dump($insert_data);
            $this->db->insert(PLACE_TABLE, $insert_data);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function get_places()
    {
      $places = $this->db->get(PLACE_TABLE)->result();
      return $places;
    }
}
