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
      if ($this->is_login()) {
        if ($page == "") {
          $this->index();
        }else{
          $this->load->view('pages/dashboard/sidenav');
          $this->load->view('pages/dashboard/'.$page);
          $this->load->view('pages/dashboard/dashfooter');
        }
      }else{
        $this->login();
      }

    }
    public function settings(){
        $this->load->view('pages/nav/nav');
        $this->load->view('pages/settings/settings');

    }

    public function is_login()
    {

      return $this->session->userdata('user_id') ? true : false;

    }


    public function viewpdf()
    {
        $this->load->view('pages/dashboard/pdfmerge');
    }

    public function viewreciepter()
    {

        $this->load->view('pages/dashboard/viewreciept');

    }
    public function printreciept()
    {

        $this->load->view('pages/dashboard/printreciept');

    }

}
