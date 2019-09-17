<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pages/Lcr_model','login');
    }

    public function index() {
      if ($this->is_login()) {
        $this->load->view('pages/login/login');
        $this->load->view('pages/footer/foot');
      }else{
        $this->login();
      }
    }

    public function login() {
        // $this->load->view('pages/nav/nav');
        $this->load->view('pages/login/login');
        $this->load->view('pages/footer/foot');
    }

    public function dash($page = null){
      // $page = $this->uri->segment(3);
      $data = array();
      if ($this->is_login()) {
      $data['user_level']  = $this->session->userdata('user_level');
      $data['js_file'] = $page.'.js';
        if ($page == null) {
          $this->index();
          // die('ohno');
        }else{
          $this->load->view('pages/dashboard/sidenav0', $data);
          $this->load->view('pages/dashboard/'.$page );
          $this->load->view('pages/dashboard/dashfooter');
        }
      }else{
        $this->login();
      }

    }


  public function admin($page = null){
    if ($this->is_login()) {
      if ($page == null) {
        $this->index();
     // die('ohno');
      }else{
        $this->load->view('pages/admin/Slidenav');
        $this->load->view('pages/admin/'.$page);
        $this->load->view('pages/admin/adminfoot');
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


    public function viewpdf($id)
    {

        $data = $this->login->getPrintHistory($id);

        $this->load->view('pages/dashboard/pdfmerge',$data);
    }

    public function viewreciepter()
    {

        $this->load->view('pages/dashboard/viewreciept');

    }
    public function printreciept()
    {
        $this->load->view('pages/dashboard/printreciept');
    }

    public function viewCerts()
    {

        $this->load->view('pages/dashboard/viewCert');
    }

    // FORM GEN
    public function viewlcrform()
    {
      $this->load->view('pages/dashboard/birthformpreview.php');
    }

    public function viewdeathlcrform()
    {
      $this->load->view('pages/dashboard/deathformpreview.php');
    }

    public function viewmarriagelcrform()
    {
      $this->load->view('pages/dashboard/marriageformpreview.php');
    }

    public function LCR()
    {

      $this->session->sess_destroy();
      $this->login();
    }

    public function book(){
      $this->load->view('pages/turnjsbook');

    }

//client
    public function client($page = '')
    {
      $this->load->view('client/nav');
      $this->load->view('client/'.$page);
      $this->load->view('client/footer');
          $this->load->view('client/step');
    }

}
