<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lcr_works extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('pages/Lcr_model','works');
    }

    public function index()
    {
      $this->load->view('404');
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

      echo '?orno='.$ins['orno'].'&totalpay='.$ins['totalpay'].'&what='.$ins['what'].'&payor='.$ins['payor'].'#toolbar=0&zoom=80%';

    }

    public function printPage()
    {
      $print = $this->input->post('print');

      echo base_url()."pages/viewpdf/".$print['f_id']."#toolbar=0&zoom=60%&navpanes=0&scrollbar=0&view=fitH,100";
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
      echo "?ref=".$ref['refno']."&type=".$ref['categogry']."#toolbar=0&zoom=70%";
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

      $inputData = $this->input->post('formgenbday');

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

      $this->load->view('pages/dashboard/birthformpreview',$data);

      // echo '/Lcr_works/formgenBday';

    }

    public function formgenDeath()
    {
      $inputData = $this->input->post('formgendeath');

      $data = array(
        'pageno' => $inputData['pageno'],
        'bookno' => $inputData['bookno'],
        'reference_num' => $inputData['reference_num'],
        'Name' => $inputData['Name'],
        'death_date_reg' => $inputData['death_date_reg'],
        'name_deceased' => $inputData['name_deceased'],
        'sex' => $inputData['sex'],
        'age' => $inputData['age'],
        'civilstats' => $inputData['civilstats'],
        'nationality' => $inputData['nationality'],
        'death_day' => $inputData['death_day'],
        'place_death' => $inputData['place_death'],
        'cause_death' => $inputData['cause_death'],
        'issued' => $inputData['issued'],
        'remarks' => $inputData['remarks']
      );

        $this->load->view('pages/dashboard/deathformpreview',$data);
    }

    public function formgenMarriage()
    {
      $inputData = $this->input->post('marrform');

      $data = array(
          'pageno' => $inputData['pageno'],
          'bookno' => $inputData['bookno'],
          'refno' => $inputData['refno'],
          'husband_name' => $inputData['husband_name'],
          'wife_name' => $inputData['wife_name'],
          'hus_age' => $inputData['hus_age'],
          'wife_age' => $inputData['wife_age'],
          'Husband_Nationality' => $inputData['Husband_Nationality'],
          'Wife_Nationality' => $inputData['Wife_Nationality'],
          'hus_civil_status' => $inputData['hus_civil_status'],
          'wife_civil_status' => $inputData['wife_civil_status'],
          'husband_mother' => $inputData['husband_mother'],
          'wife_mother' => $inputData['wife_mother'],
          'husband_father' => $inputData['husband_father'],
          'wife_father' => $inputData['wife_father'],
          'lcr_registry_num' => $inputData['lcr_registry_num'],
          'date_reg' => $inputData['date_reg'],
          'date_marriage' => $inputData['date_marriage'],
          'place_marriage' => $inputData['place_marriage'],
          'issued' => $inputData['issued'],
          'Remarks' => $inputData['Remarks']
      );

      $this->load->view('pages/dashboard/marriageformpreview',$data);
    }


    public function socketTest()
    {
      echo $_SESSION['full_name'];
    }

    public function countPending()
    {
      echo json_encode($this->works->countPending());
    }

    public function loadNotifcations()
    {
      echo json_encode($this->works->loadNotifcations());
    }




////////////////////////////////////////////////////////////
//userpage

public function showuserstable()
{
  echo json_encode($this->works->showuserstable());
}

public function addusers()
{
  $inputData = $this->input->post('user');
  echo json_encode($this->works->addusers($inputData));

}

public function get_data_user()
{
  $inputData = $this->input->post('data');
  echo json_encode($this->works->get_data_user($inputData));

}
public function updateusers()
{
  $inputData = $this->input->post('edit');
  echo json_encode($this->works->updateusers($inputData));

}
public function deleteuser()
{
  $inputData = $this->input->post('del');
  echo json_encode($this->works->deleteuser($inputData));
}

////////////////////////////////////////////////////////////
//end userpage



//////////////////////////formgen reciept


    // for the form gen
    public function formgenBdayreciept()
    {

      $inputData = $this->input->post('formgenbday');

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
        'remarks' => $inputData['remarks'],
        'payor' => $inputData['payor'],
        'amount' => $inputData['amount'],
        'type' => $inputData['type']
      );
    
      $this->load->view('pages/dashboard/PDFgenformreciept',$data);

      // echo '/Lcr_works/formgenBday';

    }

public function deathformreciept()
{

  $inputData = $this->input->post('formgendeath');

  $data = array(
    'pageno' => $inputData['pageno'],
    'bookno' => $inputData['bookno'],
    'reference_num' => $inputData['reference_num'],
    'Name' => $inputData['Name'],
    'death_date_reg' => $inputData['death_date_reg'],
    'name_deceased' => $inputData['name_deceased'],
    'sex' => $inputData['sex'],
    'age' => $inputData['age'],
    'civilstats' => $inputData['civilstats'],
    'nationality' => $inputData['nationality'],
    'death_day' => $inputData['death_day'],
    'place_death' => $inputData['place_death'],
    'cause_death' => $inputData['cause_death'],
    'issued' => $inputData['issued'],
    'remarks' => $inputData['remarks'],
    'payor' => $inputData['payor'],
    'amount' => $inputData['amount'],
    'type' => $inputData['type']
  );


 
$this->load->view('pages/dashboard/PDFgenformreciept',$data);






}



public function marrformreciept()
{


  $inputData = $this->input->post('marrform');

  $data = array(
      'pageno' => $inputData['pageno'],
      'bookno' => $inputData['bookno'],
      'refno' => $inputData['refno'],
      'husband_name' => $inputData['husband_name'],
      'wife_name' => $inputData['wife_name'],
      'hus_age' => $inputData['hus_age'],
      'wife_age' => $inputData['wife_age'],
      'Husband_Nationality' => $inputData['Husband_Nationality'],
      'Wife_Nationality' => $inputData['Wife_Nationality'],
      'hus_civil_status' => $inputData['hus_civil_status'],
      'wife_civil_status' => $inputData['wife_civil_status'],
      'husband_mother' => $inputData['husband_mother'],
      'wife_mother' => $inputData['wife_mother'],
      'husband_father' => $inputData['husband_father'],
      'wife_father' => $inputData['wife_father'],
      'lcr_registry_num' => $inputData['lcr_registry_num'],
      'date_reg' => $inputData['date_reg'],
      'date_marriage' => $inputData['date_marriage'],
      'place_marriage' => $inputData['place_marriage'],
      'issued' => $inputData['issued'],
      'Remarks' => $inputData['Remarks'],
      'payor' => $inputData['payor'],
      'amount' => $inputData['amount'],
      'type' => $inputData['type']
  );

  $this->load->view('pages/dashboard/PDFgenformreciept',$data);

}





public function savegenfromrecipthistory()
{
  $input1 = $this->input->post('history');
 $input2 = $this->input->post($input1['inputname']);

      echo json_encode($this->works->savegenfromrecipthistory($input1 , $input2));

}

    
//////end form gen reciept 
}
 ?>
