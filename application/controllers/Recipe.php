<?php

class Recipe extends CI_Controller
{

    public function index()
    {
        $this->load->view('header');
        $this->load->view('recipe');
        $this->load->view('footer');
    }
}
