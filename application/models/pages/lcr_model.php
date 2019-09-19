<?php
date_default_timezone_set('Asia/Manila');
  class Lcr_model extends CI_Model {

      public function __construct()
      {
              parent::__construct();
              $this->load->database();
              $this->load->library('session');
      }

      public function login_user($inputData)
      {

          $query = $this->db->select('*')->where([
          'username' => $inputData['username'],
          'password' => $inputData['password']
          ])->get('usercredentials');

          $dataArray = array();
          foreach ($query->result() as $r) {
            $this->session->set_userdata('user_id',$r->id);
            $this->session->set_userdata('full_name',$r->firstname.' '.$r->middlename.' '.$r->lastname);
            $this->session->set_userdata('user_level',$r->user_level);
            array_push($dataArray,$r);
          }
          return $dataArray;
      }

      public function getUserCredentials($id)
      {
        $this->db->where('id',$id);
        $query = $this->db->get('usercredentials');
        $dataArray = array();
        foreach ($query->result() as $r) {
          array_push($dataArray,$r);
        }

        return $dataArray;
      }

      public function searchPostwar($refnum)
      {

      }

      // For triple line charts
      public function getResultCharts($per_year)
      {



        $jan = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '1';");
        $feb = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '2';");
        $mar = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '3';");
        $apr = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '4';");
        $may = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '5';");
        $jun = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '6';");
        $jul = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '7';");
        $aug = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '8';");
        $sep = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '9';");
        $oct = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '10';");
        $nov = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '11';");
        $dec = $this->db->query("SELECT COUNT(*) AS num_bday FROM ".$per_year['table']." WHERE year(".$per_year['column'].") = '".$per_year['year']."' AND month(".$per_year['column'].") = '12';");

        $data['year'] = array(
          $jan->row(0)->num_bday,
          $feb->row(0)->num_bday,
          $mar->row(0)->num_bday,
          $apr->row(0)->num_bday,
          $may->row(0)->num_bday,
          $jun->row(0)->num_bday,
          $jul->row(0)->num_bday,
          $aug->row(0)->num_bday,
          $sep->row(0)->num_bday,
          $oct->row(0)->num_bday,
          $nov->row(0)->num_bday,
          $dec->row(0)->num_bday
        );

        return $data;
      }

      public function getUpdateUltimate()
      {

        // DateTime::createFromFormat('d/m/Y', "24/04/2012")->format('Y-m-d')
        $query = $this->db->query('SELECT * FROM lcr_death LIMIT 0, 20000');
        $data[] = array();
        $this->db->trans_start();
        foreach ($query->result() as $r) {
          $this->db->where('id', $r->id);
          $this->db->update('lcr_death',array('date_of_death' => date("Y-m-d",strtotime($r->date_of_death))));
          // $data[] = array(
          //   'id' => $r->id,
          //   'bday_strtime' => date("Y-m-d",strtotime($r->birthday))
          // );
        }

        return ($this->db->trans_complete()) ? true : false;

      }

      public function getYears()
      {
        $query = $this->db->query('SELECT YEAR(birthday) AS yrs FROM lcr_bday GROUP BY YEAR(birthday)');

        $data[] = array();

        foreach ($query->result() as $r) {
          $data[] = array(
            'yrs' => ($r->yrs == null) ? 'Choose Year' : $r->yrs
          );
        }

        return $data;

      }
      public function testTwoBday()
      {
        $result = $this->db->query('SELECT * FROM lcr_bday LIMIT 20001,40000')->result();
        
        
        // $result = array_merge($array1, $array2);
        return $result;
        
      }
      public function testTogetAllBday()
      {
        $result = $this->db->query('SELECT * FROM lcr_bday LIMIT 0,20000')->result();


        // $result = array_merge($array1, $array2);
        return $result;
      }

      // END
      // LCR BDAY CRUD
      public function showAllbday()
      {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $query = $this->db->query("SELECT * FROM lcr_bday  LIMIT 0,10");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'birthday' => $r->birthday,
            'full_name' => $r->First_name.' '.$r->Middle_name.' '.$r->Last_name,
            'btn' => $r->btn='<button onclick="view('.$r->id.',\''.$r->refno.'\',\''.$r->First_name.' '.$r->Middle_name.' '.$r->Last_name.'\',\''.$date.'\',\'---\') " data-code="'.$r->id.'" type="button" class="btn btn-outline-primary btn-sm"><!-- <img src=" '.base_url().'/assets/svg/open (ecris).svg  " style="height: 15px;"> --> Open</button>'
                              .'<button data-toggle="modal" data-target="#update" onclick="update('.$r->id.',\'lcr_bday\')" data-code="'.$r->id.'" type="button" class="btn btn-outline-info btn-sm"><!-- <img src=" '.base_url().'/assets/svg/updatefinal.svg  " style="height: 15px;"> --> Update</button>'
          );
        }
        $result = array(
                  "draw" => $draw,
                  "recordsTotal" => $query->num_rows(),
                  "recordsFiltered" => $query->num_rows(),
                  "data" => $data
              );


        return $result;

      }
      // NEW
      public function addBday($inputData,$filePath)
      {

        // $origDate = "2019-01-15";
        //
        // $newDate = date("m-d-Y", strtotime($origDate));
        // echo $newDate;
        $date = date('m/d/Y');
        $data = array(
          'refno' => $inputData['refno'],
          'First_name' => $inputData['first_name'],
          'Middle_name' => $inputData['middle_name'],
          'Last_name' => $inputData['last_name'],
          'annex' => $inputData['annex'],
          'birthday' => $inputData['bday_date'],
          'date_encoded' => $date,
          'filepath' => $filePath,
          'encoder' => $inputData['encoder'],
        );

        $query = $this->db->insert('lcr_bday',$data);

        return $query;
      }
      // UPDATE
      public function updateBday($inputData)
      {

        $date = date('d/m/Y');
        $data = array(
          'refno' => $inputData['refno'],
          'First_name' => $inputData['first_name'],
          'Middle_name' => $inputData['middle_name'],
          'Last_name' => $inputData['last_name'],
          'annex' => $inputData['annex'],
          'birthday' => $inputData['bday_date'],
          'date_encoded' => $date,
          'encoder' => $inputData['encoder'],
        );

        $this->db->where('id',$inputData['id']);
        $qry = $this->db->update('lcr_bday',$data);

        return $qry;
      }
      // DELETE
      public function deleteBday()
      {
        $this->db->where('id',$bday_id);
        $qry = $this->db->delete('lcr_bday');

        return $qry;
      }

      // END LCR BDAY CRUD


      // LCR DEATH
      public function showDeath()
      {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $query = $this->db->query("SELECT * FROM lcr_death LIMIT 0 , 10");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'date_of_death' => $r->date_of_death,
            'full_name' => $r->First_name.' '.$r->Middle_name.' '.$r->Last_name,
            'btn' => $r->btn='<button onclick="view('.$r->id.',\''.$r->refno.'\',\''.$r->First_name.' '.$r->Middle_name.' '.$r->Last_name.'\',\''.$date.'\',\'---\')" data-code="'.$r->id.'" type="button" class="btn btn-outline-primary btn-sm"> Open</button>'
                              .'<button  data-toggle="modal" data-target="#update" onclick="update('.$r->id.',\'lcr_death\')" data-code="'.$r->id.'" type="button" class="btn btn-outline-info btn-sm"> Update</button>'
          );
        }
        $result = array(
                  "draw" => $draw,
                  "recordsTotal" => $query->num_rows(),
                  "recordsFiltered" => $query->num_rows(),
                  "data" => $data
              );


        return $result;

      }

      public function addDeath($inputData,$fileName)
      {
        $date = date('d/m/Y');
        $data = array(
        'refno' => $inputData['refno'],
        'First_name' => $inputData['first_name'],
        'Middle_name' => $inputData['middle_name'],
        'Last_name' => $inputData['last_name'],
        'annex' => $inputData['annex'],
        'date_of_death' => $inputData['death_date'],
        'date_encoded' => $date,
        'filepath' => $fileName,
        'encoder' => $inputData['encoder']
        );

        $qry = $this->db->insert('lcr_death',$data);

        return $qry;
      }

      public function updateDeath($inputData)
      {


        $date = date('d/m/Y');
        $data = array(
        'refno' => $inputData['refno'],
        'First_name' => $inputData['first_name'],
        'Middle_name' => $inputData['middle_name'],
        'Last_name' => $inputData['last_name'],
        'annex' => $inputData['annex'],
        'date_of_death' => $inputData['death_date'],
        'date_encoded' => $date,
        'encoder' => $inputData['encoder']
        );

        $this->db->where('id',$inputData['id']);
        $qry = $this->db->update('lcr_death',$data);

        return $qry;
      }

      public function deleteDeath($dth_id)
      {
        $this->db->where('id',$dth_id);
        $qry = $this->db->delete('lcr_death');

        return $qry;
      }

      // LCR MARRIAGE CRUD
      public function showMarriage()
      {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $query = $this->db->query("SELECT * FROM lcr_marriage LIMIT 0 , 10");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
          $varWifeName = $r->First_name_w.' '.$r->Middle_name_w.' '.$r->Last_name_w;
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'date_of_marriage' => $r->date_of_marriage,
            'full_name' => $r->First_name_h.' '.$r->Middle_name_h.' '.$r->Last_name_h.' and '.$r->First_name_w.' '.$r->Middle_name_w.' '.$r->Last_name_w,
            'btn' => $r->btn='<button onclick="view('.$r->id.',\''.$r->refno.'\',\''.$r->First_name_h.' '.$r->Middle_name_h.' '.$r->Last_name_h.'\',\''.$date.'\',\''.$varWifeName.'\')" data-code="'.$r->id.'" type="button" class="btn btn-outline-primary btn-sm"><!-- <img src=" '.base_url().'/assets/svg/open (ecris).svg  " style="height: 15px;"> --> Open</button>'
                              .'<button  data-toggle="modal" data-target="#update" onclick="update('.$r->id.',\'lcr_marriage\')" data-code="'.$r->id.'" type="button" class="btn btn-outline-info btn-sm"><!-- <img src=" '.base_url().'/assets/svg/updatefinal.svg  " style="height: 15px;"> --> Update</button>'
          );
        }
        $result = array(
                  "draw" => $draw,
                  "recordsTotal" => $query->num_rows(),
                  "recordsFiltered" => $query->num_rows(),
                  "data" => $data
              );


        return $result;
      }

      public function addMarriage($inputData,$filePath)
      {
        $date = date('d/m/Y');
        $data = array(
          'refno' => $inputData['refno'],
          'First_name_h' => $inputData['First_name_h'],
          'Middle_name_h' => $inputData['Middle_name_h'],
          'Last_name_h' => $inputData['Last_name_h'],
          'annexh' => $inputData['annexh'],
          'First_name_w' => $inputData['First_name_w'],
          'Middle_name_w' => $inputData['Middle_name_w'],
          'Last_name_w' => $inputData['Last_name_w'],
          'annexw' => $inputData['annexw'],
          'date_of_marriage' => $inputData['date_of_marriage'],
          'date_encoded' => $date,
          'filepath' => $filePath,
          'encoder' => $inputData['encoder']
        );

        $qry = $this->db->insert('lcr_marriage',$data);

        return $qry;
      }

      public function updateMarriage($inputData)
      {

        $date = date('d/m/Y');
        $data = array(
          'refno' => $inputData['refno'],
          'First_name_h' => $inputData['First_name_h'],
          'Middle_name_h' => $inputData['Middle_name_h'],
          'Last_name_h' => $inputData['Last_name_h'],
          'annexh' => $inputData['annexh'],
          'First_name_w' => $inputData['First_name_w'],
          'Middle_name_w' => $inputData['Middle_name_w'],
          'Last_name_w' => $inputData['Last_name_w'],
          'annexw' => $inputData['annexw'],
          'date_of_marriage' => $inputData['date_of_marriage'],
          'date_encoded' => $date,
          'encoder' => $inputData['encoder']
        );
        $this->db->where('id',$inputData['id']);

        $qry = $this->db->update('lcr_marriage',$data);

        return $qry;
      }

      public function deleteMarriage($del_id)
      {
        $this->db->where('id',$del_id);
        $qry = $this->db->delete('lcr_marriage');

        return $qry;
      }







//TABLEPRINT FUNCTION JANDEAN

    public function showprint()
      {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $query = $this->db->query("SELECT * FROM lcr_history WHERE ref_num IS NOT NULL AND (cash_rep = 'not done' OR st = 'printing') ORDER BY CONCAT(date_paid,time) DESC");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
              ///for certifate prin functuion
            switch ($r->type) {
              case 'birthdayform':
                $r->btn = '<button onclick="certprintnow(\''.$r->id.'\')" type="button" class="btn btn-outline-primary btn-sm" "><i class="fas fa-print text-primary fa-lg "></i> Print </button>
                <button onclick="cancelor(\''.$r->id.'\')" class="btn btn-sm btn-outline-danger"><i class="fas fa-times text-danger fa-lg"></i> Cancel</button>';
                $r->type = 'Birthday Certificate';
                  break;
                  case 'deathform':
                    $r->btn = '<button onclick="certprintnow(\''.$r->id.'\')" type="button" class="btn btn-outline-primary btn-sm" "><i class="fas fa-print text-primary fa-lg "></i> Print </button>
                    <button onclick="cancelor(\''.$r->id.'\')" class="btn btn-sm btn-outline-danger"><i class="fas fa-times text-danger fa-lg"></i> Cancel</button>';
                    $r->type = 'Death Certificate';
                      break;
                      case 'marrform':
                        $r->btn = '<button onclick="certprintnow(\''.$r->id.'\')" type="button" class="btn btn-outline-primary btn-sm" "><i class="fas fa-print text-primary fa-lg "></i> Print /button>
                        <button onclick="cancelor(\''.$r->id.'\')" class="btn btn-sm btn-outline-danger"><i class="fas fa-times text-danger fa-lg"></i> Cancel</button>';
                        $r->type = 'Marriage Certificate';
                          break;
              
                 default:
                     // <img src=" '.base_url().'/assets/svg/Print (ecris).svg ">
                $r->btn = '<button onclick="printPage(\''.$r->id.'\'  )" type="button" class="btn btn-outline-primary btn-sm" "><i class="fas fa-print text-primary fa-lg "></i> Print</button>
                <button onclick="cancelor(\''.$r->id.'\' ,\''.$r->or_num.'\' ,\''.$r->name.'\' )" class="btn btn-sm btn-outline-danger"><i class="fas fa-times text-danger fa-lg"></i> Cancel</button>
                
                ';
                break;
            }
        


          $data[] = array(
            // 'id' => $r->id,
            'ref_num' => $r->ref_num,
            'or_num' => $r->or_num,
            'name' => $r->name,
            'encoder_name' => $r->cs_encoder,
            'type' => $r->type,
            'date' => $r->date_paid,
            'page' => $r->page,
            'no_copy' => $r->no_copy,
            'btn' => $r->btn
                   );




        }
        $result = array(
                  "draw" => $draw,
                  "recordsTotal" => $query->num_rows(),
                  "recordsFiltered" => $query->num_rows(),
                  "data" => $data
              );


        return $result;

      }

      public function getPrintHistory($id)
      {
        $qry = $this->db->select('*')->where(['id'=> $id])->get('lcr_history');

        $data = array();
        foreach ($qry->result() as $r) {
          $data = array(
            'id' => $r->id,
            'ref_num' => $r->ref_num,
            'or_num' => $r->or_num,
            'req_name' => $r->req_name,
            'name' => $r->name,
            'type' => $r->type,
            'date' => $r->date,
            'page' => $r->page,
            'no_copy' => $r->no_copy,
            'verify_by' => $r->verify_by,
            'dt_print' => $r->dt_print,
            'date_paid' => $r->date_paid,
            'st' => $r->st,
            'remarks' => $r->remarks,
            'print' => $r->print,
            'cs_encoder' => $r->cs_encoder,
            'printed_by' => $r->printed_by,
            'or_amount' => $r->or_amount,
            'wife_name' => $r->wife_name,
            'time' => $r->time,
            'cash_rep' => $r->cash_rep,
            'rep_num' => $r->rep_num
          );
        }

        return $data;

      }

    // END PRINT TABLE


    public function getRequested_data($what)
    {
      $tropa = array();
      switch ($what['table']) {
        case 'birthday':
          $what['table'] = 'lcr_bday';
          break;
        case 'death':
          $what['table'] = 'lcr_death';
          break;
        case 'marriage':
          $what['table'] = 'lcr_marriage';
          break;
        default:
          // code...
          break;
      }

      $tagay = $this->db->query("SELECT * FROM ".$what['table']." WHERE id = ".$what['id']);

      foreach ($tagay->result() as $f) {
        array_push($tropa,$f);
      }

      return $tropa;
    }

    public function addHistory($inputData)
    {

      $date = date('Y-m-d', time());
      $data_add_history = array(
        // 'id' => $inputData['id'],
        'ref_num' => $inputData['ref_num'],
        'or_num' => $inputData['or_num'],
        'req_name' => $inputData['req_name'],
        'name' => $inputData['name'],
        'type' => $inputData['type'],
        'date' => $inputData['date'],
        'page' => $inputData['page'],
        'no_copy' => $inputData['no_copy'],
        'verify_by' => $inputData['verify_by'],
        'dt_print' => $date,
        'date_paid' => $date,
        'st' => 'printing',
        'remarks' => $inputData['remarks'],
        'print' => $inputData['print'],
        'cs_encoder' => $inputData['cs_encoder'],
        'printed_by' => $inputData['printed_by'],
        'or_amount' => $inputData['or_amount'],
        'wife_name' => $inputData['wife_name'],
        'time' => date('h:i:s a', time()),
        'cash_rep' => 'not done'
      );

      // $this->db->trans_start();
      $addhist = $this->db->insert('lcr_history',$data_add_history);

      // $data_update = array(
      //   'history_id'
      //   'ref_num'
      //   'date'
      //   'encoder'
      //
      // );

      // $this->db->trans_complete();
      // $last_id =  $this->db->insert_id();
      return $addhist;
    }

    public function ORnum_exist($or_num)
    {
      $qry = $this->db->select('count(or_num) as counts')->where([
        'or_num' => $or_num,
      ])->get('lcr_history');

      return ($qry->row(0)->counts == 0) ? array('response' => true) : array('response' => false);

    }


    public function updateHistory($inputData)
    {

      $date = date('Y-m-d h:i:s a', time());

      $data = array(
        'st' => $inputData['st'],
        'dt_print' => $date,
        'cash_rep' => 'done',
        'printed_by' => $inputData['printedby']
      );

      $this->db->where('id',$inputData['id']);
      $qry = $this->db->update('lcr_history', $data);

      return $qry;
    }

    public function dashboardStats()
    {

      $this->db->trans_start();

      $srvc_prvdd = $this->db->query("SELECT count(*) AS done_trans FROM lcr_history where st='done'");

      $ttl_rnngs = $this->db->query("SELECT sum(or_amount) AS earnings from lcr_history");

      $total_trns = $this->db->query("SELECT COUNT(*) AS total_trans FROM lcr_history");

      $pndng_rqst = $this->db->query("SELECT COUNT(*) AS pendings FROM lcr_history WHERE st = 'printing'");

      $earnings = $ttl_rnngs->row(0)->earnings;

      $total_trans = $total_trns->row(0)->total_trans;

      $done_trans = $srvc_prvdd->row(0)->done_trans;

      $pendings = $pndng_rqst->row(0)->pendings;

      $percentage = abs($total_trans - $done_trans) / $total_trans;

      $percentage = $percentage * 100;


      $this->db->trans_complete();

      $data = array(
        'service_provided' => $total_trans,
        'total_earnings' => $earnings,
        'task_text_percent' => round($percentage),
        'pending_request' => $pendings
      );

      return $data;

    }


    public function countPending()
    {
      $query = $this->db->select('*')->where([
        'st' => 'printing'
      ])->get('lcr_history');



      return array(
        'count' => $query->num_rows()
      );
    }

    public function loadNotifcations()
    {
      $query = $this->db->select('*')->where([
        'st' => 'printing'
        ])->get('lcr_history');
        $data = [];
        foreach ($query->result() as $r) {
          $data[] = array(
            'ref_no' => ($r->ref_num == null) ? '<span title="Unknown Data from old records please contact the administrator">Unknow Data </span>' : $r->ref_num,
            'type' => ($r->type == null) ? '<span title="Unknown Data from old records please contact the administrator">Unknow Data </span>' : $r->type,
            'issued_date' => ($r->date_paid == null) ? '<span title="Unknown Data from old records please contact the administrator">Unknow Data </span>' : $r->date_paid,
            'status' => ($r->st == null) ? '<span title="Unknown Data from old records please contact the administrator">Unknow Data </span>' : 'Pending',
            'from' => ($r->verify_by == null) ? '<span title="Unknown Data from old records please contact the administrator">User doesn\'t exist </span>' : $r->verify_by
          );
        }

        return $data;
    }












































































////////////////////////////////////////////////////////////////////////////
//userpage



public function showuserstable()
{
  $draw = intval($this->input->get("draw"));
  $start = intval($this->input->get("start"));
  $length = intval($this->input->get("length"));
  $query = $this->db->query("SELECT * FROM usercredentials");
  $data = [];
  foreach ($query->result() as $r) {
  $data[] = array(

  'id' => $r->id,
  'username' => $r->username,
  'password' => $r->password,
  'fullname' => $r->firstname .' '.$r->lastname .' '.$r->middlename,
  'firstname' => $r->firstname,
  'lastname' => $r->lastname,
  'middlename' => $r->middlename,
  'address' => $r->address,
  'user_level' =>$r->user_level,
  'btn'=>'
  <div class="row">
  <button type="button" onclick="edituser('.$r->id.')" class="btn btn-md btn-outline-primary ml-3 mr-2 px-4 py-2" name="button">Edit</button>
  <button type="button" onclick="deleteuser('.$r->id.')" class="btn btn-md btn-outline-danger ml-2 mr-3 px-4 py-2" name="button">Delete</button>
  </div>

  '

  );
  }
  $result = array(
  "draw" => $draw,
  "recordsTotal" => $query->num_rows(),
  "recordsFiltered" => $query->num_rows(),
  "data" => $data
  );

  return $result;

}

public function addusers($inputData)
{
  $data = array(

  'username' => $inputData['Username'],
  'password' => $inputData['Password'],
  'firstname' => $inputData['First'],
  'lastname' => $inputData['Last'],
  'middlename' => $inputData['Middle'],
  'address' => $inputData['Address'],
  'user_level' => $inputData['type']
  );
  return $this->db->insert('usercredentials' , $data);
}

public function get_data_user($id){
    $result =  array();

    $query = $this->db->query("SELECT * FROM  usercredentials WHERE id = ".$id['id']);

    foreach ($query->result() as $data) {
    array_push($result,$data);
    }
    return $result;
}


public function updateusers($inputData){
$pas = $inputData['password'] ;
  if($pas =!null){
//
// $pass1 = array('password' => 'asd');
// return $pass1;
//     $this->db->where('id', $inputData['id']);
//     $this->db->update('usercredentials',$pass1 );

$query = $this->db->query("
Update db_lcr.usercredentials set password = '" .$inputData['password']. "' where id = '" .$inputData['id']."'
");
  }else {
    // code...
  }

  $data = array(

      'username' => $inputData['Username'],
      'firstname' => $inputData['First'],
      'lastname' => $inputData['Last'],
      'middlename' => $inputData['Middle'],
      'address' => $inputData['Address'],
      'user_level' => $inputData['type'],

          );


    $this->db->where('id', $inputData['id']);
    $this->db->update('usercredentials', $data);
    }

    public function deleteuser($inputData){
        $this->db->delete('usercredentials', array('id' => $inputData['id']));
    }


  ///////////////reciept save data
    public function savegenfromrecipthistory($inputData , $json)
    {
      $data = json_encode($json);

      $date = date('Y-m-d', time());
      $data_add_history = array(
        // 'id' => $inputData['id'],
        'ref_num' => $inputData['ref_num'],
        'or_num' => $inputData['or_num'],
        'req_name' => $inputData['req_name'],
        'name' => $inputData['name'],
        'type' => $inputData['type'],
        'date' => date('d/m/Y'),
        'page' => $inputData['page'],
        'no_copy' => $inputData['no_copy'],
        'verify_by' => $inputData['verify_by'],
        'dt_print' => $date,
        'date_paid' => $date,
        'st' => 'printing',
        'remarks' =>  $data ,
        'print' => $inputData['print'],
        'cs_encoder' => $inputData['cs_encoder'],
        'printed_by' => $inputData['printed_by'],
        'or_amount' => $inputData['or_amount'],
        'wife_name' => $inputData['wife_name'],
        'time' => date('h:i:s a', time()),
        'cash_rep' => 'not done',
      
      );

      // $this->db->trans_start();
      $addhist = $this->db->insert('lcr_history',$data_add_history);
    }



//get print cer data


function getprintcertdata($id)
{

$result =  array();

$query = $this->db->query("SELECT * FROM  lcr_history WHERE id = ".$id['id']);

foreach ($query->result() as $data) {
array_push($result,$data);
}
return $result;

}


  } ?>
