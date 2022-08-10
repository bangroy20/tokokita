<?php

class Produck extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['active'] = 'produck';
        $this->load->view('user/header', $data);
        $this->load->view('user/produck');
        $this->load->view('user/footer');
    }
}
