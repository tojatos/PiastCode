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
    public function create_event_form()
    {
        $view['mainNav'] = $this->loadMainNav();
        $view['content'] = $this->loadContent('Event/create_event_form');
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
    public function sendVerifyEmail($email)
    {
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from(MAIN_MAIL, 'Verifier');
        $this->email->to($email);
        $this->email->subject('Piast Code - Weryfikacja');
        $this->email->message('
      <h1>Witamy nowego użytkownika!</h1>
      Możesz potwierdzić swoją rejestrację klikając w <a href="'.site_url('Verify/').sha1($email).'">ten link</a>.<br><br>
      Jeżeli nie rejestrowałeś się na '.base_url().' zignoruj tę wiadomość.
      ');
        $this->email->send();
    }
    // public function test()
    // {
    //   $this->sendVerifyEmail('tojatos@gmail.com');
    // }
}