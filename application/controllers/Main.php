<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Main extends MY_Controller
{
    public function index()
    {
        $this->load->model('Event_model');
        $data['events_data'] = $this->Event_model->get_events_data();
        $view['content'] = $this->loadContent('main', $data);
        $view['mainNav'] = $this->loadMainNav();
        $this->showMainView($view);
    }
    public function error404()
    {
        $this->showView('404');
    }
    public function About()
    {
        $view['mainNav'] = $this->loadMainNav();
        $view['content'] = $this->loadContent('About/index');
        $this->showMainView($view);
    }
}
