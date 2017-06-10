<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Main extends MY_Controller
{
    public function index()
    {
        $filter_categories = $this->input->get('category[]');
        $this->load->model('Event_model');
        $this->load->model('Category_model');
        $data['events_data'] = $this->Event_model->get_events_data();
        if($filter_categories!=null)
        {
          foreach ($data['events_data'] as $key => $event) {
            if($event->category==null)
            {
              unset($data['events_data'][$key]);
            }
            else {
              foreach ($event->category as $ev_cat) {
                foreach ($filter_categories as $cat) {
                if($cat!=$ev_cat){
                  unset($data['events_data'][$key]);
                  break;
                  }
                }
              }
            }
          }
        }
        //dump($data['events_data']);
        $data['categories'] = $this->Category_model->get_categories();
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
