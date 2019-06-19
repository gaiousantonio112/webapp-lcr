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


    public function addBirthday()
    {
      $inputData = $this->input->post('bday');
      // UPLOAD

      // END UPLOAD

      echo json_encode($this->works->addBday($inputData,"dump.pdf"));
    }

    public function addDeath()
    {
      $inputData = $this->input->post('death');

      echo json_encode($this->works->addDeath($inputData,"dump_death.pdf"));
    }

    public function addMarriage()
    {
      $inputData = $this->input->post('marr');

      echo json_encode($this->works->addMarriage($inputData,"dump_marriage.pdf"));
    }

    public function viewPrint()
    {
      $ins = $this->input->post('rec');
      // $ins['what']
      // $ins['orno']
      // $ins['totalpay']

      echo base_url().'/pages/viewreciepter/?orno='.$ins['orno'].'&totalpay='.$ins['totalpay'].'&what='.$ins['what'].'&payor='.$ins['payor'].'#toolbar=0&zoom=60%';
    }

    public function printPage()
    {
      $print = $this->input->post('print');

      echo base_url()."pages/viewpdf/?f_id=".$print['f_id']."&ref_num=".$print['ref_num']."&or_no=".$print['or_no']."&name_cus=".$print['name_cus']."&name_encoder=".$print['name_encoder']."&type=".$print['type']."&paid=".$print['paid']."&page=".$print['page']."&copy=".$print['copy']."&print=".$print['print']."#toolbar=0&zoom=60%";
    }

    //TABLEPRINT
    public function showprint()
    {
      echo json_encode($this->works->showprint());
    }


}
 ?>
