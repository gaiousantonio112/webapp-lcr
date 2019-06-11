<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pages/Lcr_model','login');
    }

    public function index() {
        $this->load->view('pages/nav/nav');
        $this->load->view('pages/login/login');
        $this->load->view('pages/footer/foot');
    }

    public function login() {
        $this->load->view('pages/nav/nav');
        $this->load->view('pages/login/login');
     $this->load->view('pages/footer/foot');
    }
    public function dash($page){
        $this->load->view('pages/dashboard/sidenav');
        $this->load->view('pages/dashboard/'.$page);
        $this->load->view('pages/dashboard/dashfooter');

    }
    public function settings(){
        $this->load->view('pages/nav/nav');
        $this->load->view('pages/settings/settings');

    }

}
