<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/index');
        $this->load->view('landing/footer');
    }

    public function cart()
    {
        $this->load->view('landing/header');
        $this->load->view('landing/cart');
        $this->load->view('landing/footer');
    }
}
