<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lcr_admin extends CI_Controller {
  public function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('pages/lcr_model_admin','app');
  }










}


?>
