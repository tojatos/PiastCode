<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Place extends MY_Controller
{
    public function ajax_create_place()
    {
        try {
            $post_data = [
              'name' => $this->input->post('name'),
              'description' => $this->input->post('description'),
              'address' => $this->input->post('address'),
            ];
            $this->validate_ajax_create_place($post_data);

            $this->load->model('Place_model');

            $try = $this->Place_model->create_place($post_data);

            if ($try != null) {
                throw new Exception($try);
            }

            echo '<h2>Pomyślnie dodano miejsce.</h2><br>';
        } catch (Exception $e) {
            echo '<h2>Dodanie miejsca nie powiodło się:</h2><br>';
            echo $e->getMessage();
        }
    }
    private function validate_ajax_create_place($d)
    {
        validateForm([
        'name' => [$d['name'], 100],
        'address' => [$d['address'], 100],
        ]);

    }
}
