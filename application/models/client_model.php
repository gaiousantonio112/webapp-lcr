<?php
date_default_timezone_set('Asia/Manila');
class Client_model extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
    }



  }
 ?>
