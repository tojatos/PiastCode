<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Main extends MY_Controller
{
    public function index()
    {
        $filter_categories = $this->input->get('category[]');
        $filter_date = $this->input->get('date');
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
              $test = false;
              foreach ($event->category as $ev_cat) {
                foreach ($filter_categories as $cat) {
                if($cat==$ev_cat){
                  $test = true;
                  }
                }
                }
                if($test==false){
                  unset($data['events_data'][$key]);
                  break;
              }
            }
          }
        }
        if($filter_date!=null)
        {
          foreach ($data['events_data'] as $key => $event) {
            if (date_format(date_create($event->event_datetime_start), 'd.m.Y') > date_format(date_create($filter_date), 'd.m.Y')||date_format(date_create($event->event_datetime_end), 'd.m.Y') < date_format(date_create($filter_date), 'd.m.Y')) {
                unset($data['events_data'][$key]);
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
