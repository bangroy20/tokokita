<?php

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['active'] = 'pages';
        $this->load->view('user/header', $data);
        $this->load->view('user/checkout');
        $this->load->view('user/footer');
    }
}
