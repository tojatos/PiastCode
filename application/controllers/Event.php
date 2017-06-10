<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Event extends MY_Controller
{
    public function index()
    {
        $view['mainNav'] = $this->loadMainNav();
        $view['content'] = $this->loadContent('Event/index');
        $this->showMainView($view);
    }
    public function show_single_event($id)
    {
      try{
        $this->load->model('Event_model');
        $event_data = $this->Event_model->get_event_data($id);
        if($event_data==null)
        {
          throw new Exception("<p><b>Nie ma takiego wydarzenia!</b></p> <a href='".site_url()."'>Wróć do strony głównej</a>");

        }
        $data['event'] = $event_data;
        $view['mainNav'] = $this->loadMainNav();
        $view['content'] = $this->loadContent('Event/single_event', $data);
        $this->showMainView($view);
      } catch (Exception $e) {
           $this->showMessage($e->getMessage());
      }
    }
    public function create_event_form()
    {
        $this->load->model("Place_model");
        $places = $this->Place_model->get_places();
        $data['select_places'] = $this->loadContent('Place/select_places', ['places' => $places]);
        $data['create_place_form'] = $this->loadContent('Place/create_place_form');
        $view['content'] = $this->loadContent('Event/create_event_form', $data);
        $view['mainNav'] = $this->loadMainNav();
        $this->showMainView($view);
    }
    public function ajax_create_event()
    {
        try {
            $post_data = [
              'name' => $this->input->post('name'),
              'description' => $this->input->post('description'),
              'date_start' => $this->input->post('date_start'),
              'time_start' => $this->input->post('time_start'),
              'date_end' => $this->input->post('date_end'),
              'time_end' => $this->input->post('time_end'),
              'place_id' => $this->input->post('place_id'),
            ];
            $this->validate_ajax_create_event($post_data);

            $this->load->model('Event_model');
            $this->load->model('User_model');
            $user_id = $this->User_model->get_user_id($this->session->user_name);
            $event_data = [
              'name' => $post_data['name'],
              'description' => $post_data['description'],
              'date_start' => $post_data['date_start'],
              'time_start' => $post_data['time_start'],
              'date_end' => $post_data['date_end'],
              'time_end' => $post_data['time_end'],
              'place_id' => $post_data['place_id'],
              'creator' => $user_id,
            ];
            $try = $this->Event_model->create_event($event_data);

            if ($try != null) {
                throw new Exception($try);
            }

            echo '<h2>Pomyślnie dodano wydarzenie.</h2><br>';
        } catch (Exception $e) {
            echo '<h2>Dodanie wydarzenia nie powiodło się:</h2><br>';
            echo $e->getMessage();
        }
    }
    private function validate_ajax_create_event($d)
    {
        validateForm([
        'name' => [$d['name'], 100],
        'description' => [$d['description'], 1000],
        'date_start' => [$d['date_start'], 50],
        'time_start' => [$d['time_start'], 50],
        'date_end' => [$d['date_end'], 50],
        'time_end' => [$d['time_end'], 50],
        'place_id' => [$d['place_id'], 100],
        ]);

    }

    public function ajax_verify_event()
    {
        try {
            $post_data = [
              'event_id' => $this->input->post('event_id'),
            ];
            $this->validate_ajax_verify_event($post_data);

            $this->load->model('Event_model');
            $try = $this->Event_model->verify_event($post_data['event_id']);

            if ($try != null) {
                throw new Exception($try);
            }

            echo '<h2>Pomyślnie zweryfikowano wydarzenie.</h2><br>';
        } catch (Exception $e) {
            echo '<h2>Weryfikacja wydarzenia nie powiodło się:</h2><br>';
            echo $e->getMessage();
        }
    }
    private function validate_ajax_verify_event($d)
    {
        validateForm([
        'event_id' => [$d['event_id'], 11]
        ]);

    }
}
