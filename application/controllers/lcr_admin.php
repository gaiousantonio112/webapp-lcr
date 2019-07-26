<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lcr_admin extends CI_Controller {
  public function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('pages/lcr_model_admin','app');
  }


/////////////////////////////////////////////////////////////////////////////////////////
//usermanager
public function showusers()
{
  echo json_encode($this->app->showusers());
}

public function addusers()
{
  $inputData = $this->input->post('user');
  echo json_encode($this->app->addusers($inputData));

}

public function get_data_user()
{
  $inputData = $this->input->post('data');
  echo json_encode($this->app->get_data_user($inputData));

}
public function updateusers()
{
  $inputData = $this->input->post('edit');
  echo json_encode($this->app->updateusers($inputData));

}
public function deleteuser()
{
  $inputData = $this->input->post('del');
  echo json_encode($this->app->deleteuser($inputData));
}





// //////////////////////////////////////////////////////////////////////////////////////
//birthday
public function loadTableBday()
{
  echo json_encode($this->app->showAllbday());
}





}


?>
