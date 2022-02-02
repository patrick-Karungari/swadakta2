<?php

namespace App\Controllers;

class About extends BaseController
{

    public function __construct()
    {
        $this->data['site_title'] = "About us";
        $this->data['wrapper'] = false;
    }

    public function index()
    {
        //return view('welcome_message');
        return $this->_renderPage('home/About/index', $this->data);
    }
}
