<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['active'] = 'home';
        $this->load->view('user/header', $data);
        $this->load->view('user/index');
        $this->load->view('user/footer');
    }

    public function contact()
    {
        $data['active'] = 'contact';
        $this->load->view('user/header', $data);
        $this->load->view('user/contact');
        $this->load->view('user/footer');
    }
}
