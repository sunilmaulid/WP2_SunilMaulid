<?php

class Web extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }
    
    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header')
        $this->load->view('v_index')
        $this->load->view('v_footer')
    }
}