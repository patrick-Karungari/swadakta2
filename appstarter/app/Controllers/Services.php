<?php

namespace App\Controllers;

class Services extends BaseController
{

    public function __construct()
    {
        $this->data['site_title'] = "Services - What we offer";
        $this->data['wrapper'] = false;
    }

    public function index()
    {
        //return view('welcome_message');
        return $this->_renderPage('home/Services/index', $this->data);
    }
}
