<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lcr_works extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pages/Login_model','login');
    }

    public function login_user()
    {
      $inputData = $this->input->post('login');

      echo json_encode($this->login->login_user($inputData));
    }


}
 ?>
