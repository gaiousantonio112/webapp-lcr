<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lcr_works extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pages/Lcr_model','works');
    }

    public function login_user()
    {
      $inputData = $this->input->post('login');

      echo json_encode($this->works->login_user($inputData));
    }

    public function getUserCredentials()
    {
      $id = $this->input->post('id');

      echo json_encode($this->works->getUserCredentials($id));
    }


    public function loadTableBday()
    {
      echo json_encode($this->works->showAllbday());
    }

    public function loadTableDeath()
    {
      echo json_encode($this->works->showDeath());
    }

    public function loadTableMarr()
    {
      echo json_encode($this->works->showMarriage());
    }


}
 ?>
