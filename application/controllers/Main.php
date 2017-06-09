<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Main extends MY_Controller
{
    public function index()
    {
        $view['content'] = $this->loadContent('main');
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
