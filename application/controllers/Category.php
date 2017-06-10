<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Category extends MY_Controller
{
    public function ajax_create_category()
    {
        try {
            $post_data = [
              'name' => $this->input->post('name'),
            ];
            $this->validate_ajax_create_category($post_data);

            $this->load->model('Category_model');
            $try = $this->Category_model->create_category($post_data['name']);

            if ($try != null) {
                throw new Exception($try);
            }

            echo '<h2>Pomyślnie dodano kategorię.</h2><br>';
        } catch (Exception $e) {
            echo '<h2>Dodanie kategorii nie powiodło się:</h2><br>';
            echo $e->getMessage();
        }
    }
    private function validate_ajax_create_category($d)
    {
        validateForm([
        'name' => [$d['name'], 100],
        ]);

    }

}
