<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Administrator extends MY_Controller
{
    public function index()
    {
        $this->load->model("Event_model");

        $data['events_data'] = $this->Event_model->get_event_unverified();
        $data['create_category_form'] = $this->loadContent('Category/create_category_form');
        $view['content'] = $this->loadContent('Administrator/index', $data);
        $view['mainNav'] = $this->loadMainNav();
        $this->showMainView($view);
    }
}
