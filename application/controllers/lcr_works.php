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

    // For the triple line Chart
    public function getResultCharts()
    {
      $per_year = $this->input->post('line');

      echo json_encode($this->works->getResultCharts($per_year));
    }

    public function getYears()
    {
       echo json_encode($this->works->getYears());
    }

    public function getUpdateUltimate()
    {
      echo json_encode($this->works->getUpdateUltimate());
    }

    // END




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

      echo '?orno='.$ins['orno'].'&totalpay='.$ins['totalpay'].'&what='.$ins['what'].'&payor='.$ins['payor'].'#toolbar=0&zoom=60%';

    }

    public function printPage()
    {
      $print = $this->input->post('print');

      echo base_url()."pages/viewpdf/".$print['f_id']."#toolbar=0&zoom=60%";
    }

    //TABLEPRINT
    public function showprint()
    {
      echo json_encode($this->works->showprint());
    }

    public function viewCerificate()
    {
      $ref = $this->input->post('what');

      //echo base_url()."pages/dashboard/viewCert/?ref=".$ref['refno']."&type=".$ref['categogry']."#toolbar=0&zoom=60%";
      echo "?ref=".$ref['refno']."&type=".$ref['categogry']."#toolbar=0&zoom=60%";
    }

    public function addHistory()
    {
      $inputData = $this->input->post('history');

      echo json_encode($this->works->addHistory($inputData));
    }

    public function getRequested_data()
    {
      $inputData = $this->input->post('data_what');

      echo json_encode($this->works->getRequested_data($inputData));
    }

    public function ORnum_exist()
    {
      $or_num = $this->input->post('or_no');

      echo json_encode($this->works->ORnum_exist($or_num));
    }

    public function updateHistory()
    {
      $inputData = $this->input->post('update');

      echo json_encode($this->works->updateHistory($inputData));
    }

    public function dashboardStats()
    {
      echo json_encode($this->works->dashboardStats());
    }



    public function updateBirth()
    {
      $inputData = $this->input->post('updatebday');

      echo json_encode($this->works->updateBday($inputData));
    }

    public function updateDeath()
    {
      $inputData = $this->input->post('updatedeath');

      echo json_encode($this->works->updateDeath($inputData));
    }

    public function updateMarr()
    {
      $inputData = $this->input->post('updatemarr');

      echo json_encode($this->works->updateMarriage($inputData));
    }


    // for the form gen
    public function formgenBday()
    {

      $inputData = $this->input->post('formgebday');

      $data = array(
        'Pageno' => $inputData['Pageno'],
        'Bookno' => $inputData['Bookno'],
        'bdayrefnum' => $inputData['bdayrefnum'],
        'lcr_regno' => $inputData['lcr_regno'],
        'date_reg' => $inputData['date_reg'],
        'name_child' => $inputData['name_child'],
        'sex' => $inputData['sex'],
        'bday_date' => $inputData['bday_date'],
        'birthplace' => $inputData['birthplace'],
        'mothername' => $inputData['mothername'],
        'mothernationality' => $inputData['mothernationality'],
        'fathername' => $inputData['fathername'],
        'fathernationality' => $inputData['fathernationality'],
        'marriagedate' => $inputData['marriagedate'],
        'issued' => $inputData['issued'],
        'remarks' => $inputData['remarks']
      );

      $this->load->view('pages/dashboard/birthformpreview.php',$data);

    }


}
 ?>
