<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Administrator extends MY_Controller
{
    public function index()
    {
        $create_category_form = $this->loadContent('Category/create_category_form');
        $view['content'] = $this->loadContent('Administrator/index', ['create_category_form' => $create_category_form]);
        $view['mainNav'] = $this->loadMainNav();
        $this->showMainView($view);
    }
}
