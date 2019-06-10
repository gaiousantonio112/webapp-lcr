<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $this->load->view('pages/nav/nav');
        $this->load->view('pages/index');
        $this->load->view('pages/footer/foot');
    
    }
    public function login() {
        $this->load->view('pages/nav/nav');
        $this->load->view('pages/login/login');
     $this->load->view('pages/footer/foot');
    }

}