<?php

class Menu extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('footer');
    }
}
