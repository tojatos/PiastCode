<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Category_model extends MY_Model
{
    public function create_category($name)
    {
        try {
            $insert_data = [
              'id_'.CATEGORY_TABLE => $this->get_next_id(CATEGORY_TABLE),
              'name' => $name,
            ];
            $this->db->insert(CATEGORY_TABLE, $insert_data);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function get_categories()
    {
      $categories = $this->db->get(CATEGORY_TABLE)->result();
      return $categories;
    }
}
