<?php

namespace App\Controllers;
use App\Libraries\Mailer;

class Contact extends BaseController
{

    public function __construct()
    {
        $this->data['site_title'] = "Contact us - Swadakta";
        $this->data['wrapper'] = false;
    }

    public function index()
    {
        //return view('welcome_message');
        return $this->_renderPage('home/Contact/index', $this->data);
    }
    public function mailto(){
        if ($this->request->getPost()) {
            $name = $this->request->getPost('name');
            $from = $this->request->getPost('email');
            $phone = $this->request->getPost('phone');
            $subject = $this->request->getPost('subject');
            $to = get_option('mailer_email_from', 'info@pkarungari.co.ke');
            $message = $this->request->getPost('message');
            $message = $message . ' with mobile number ' . $phone;
            $subject = "New $subject request from $name";
            try {
                $response = @(new Mailer())->sendMessage($from, $name, $subject, $message, $to);
                if ($response) {
                    //dd($response);
                    return $response;
                }

            } catch (\Exception $e) {
                log_message('debug', 'API:MAILER' . $e->getMessage());
                return $e->getMessage();
            }
        }
        return FALSE;

    }
}
