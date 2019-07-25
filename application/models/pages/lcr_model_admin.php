<?php

date_default_timezone_set('Asia/Manila');
class pylonadmin_model extends lcr_model_admin {
public function __construct()
{
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->load->helper(array('form', 'url'));
}





}

?>
