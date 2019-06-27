<?php
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

      // LCR BDAY CRUD
      public function showAllbday()
      {
        $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

        $query = $this->db->query("SELECT * FROM lcr_bday LIMIT 0 , 20000");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'birthday' => $r->birthday,
            'full_name' => $r->First_name.' '.$r->Middle_name.' '.$r->Last_name,
            'btn' => $r->btn='<button onclick="view('.$r->id.',\''.$r->refno.'\',\''.$r->First_name.' '.$r->Middle_name.' '.$r->Last_name.'\',\''.$date.'\',\'---\') " data-code="'.$r->id.'" type="button" class="btn btn-outline-primary btn-sm" "><i class="fas fa-search"></i> View</button>'
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
        $date = date('d/m/Y');
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
        $data = array(
          'refno' => $inputData['refno'],
          'First_name' => $inputData['First_name'],
          'Middle_name' => $inputData['Middle_name'],
          'Last_name' => $inputData['Last_name'],
          'annex' => $inputData['annex'],
          'birthday' => $inputData['birthday'],
          'date_encoded' => $inputData['date_encoded'],
          'filepath' => $inputData['filepath'],
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

        $query = $this->db->query("SELECT * FROM lcr_death");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'date_of_death' => $r->date_of_death,
            'full_name' => $r->First_name.' '.$r->Middle_name.' '.$r->Last_name,
            'btn' => $r->btn='<button onclick="view('.$r->id.',\''.$r->refno.'\',\''.$r->First_name.' '.$r->Middle_name.' '.$r->Last_name.'\',\''.$date.'\',\'---\')" data-code="'.$r->id.'" type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-search"></i> View</button>'
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
        $data = array(
        'refno' => $inputData['refno'],
        'First_name' => $inputData['First_name'],
        'Middle_name' => $inputData['Middle_name'],
        'Last_name' => $inputData['Last_name'],
        'annex' => $inputData['annex'],
        'date_of_death' => $inputData['date_of_death'],
        'date_encoded' => $inputData['date_encoded'],
        'filepath' => $inputData['filepath'],
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

        $query = $this->db->query("SELECT * FROM lcr_marriage LIMIT 0 , 20000");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
          $varWifeName = $r->First_name_w.' '.$r->Middle_name_w.' '.$r->Last_name_w;
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'date_of_marriage' => $r->date_of_marriage,
            'full_name' => $r->First_name_h.' '.$r->Middle_name_h.' '.$r->Last_name_h.' and '.$r->First_name_w.' '.$r->Middle_name_w.' '.$r->Last_name_w,
            'btn' => $r->btn='<button onclick="view('.$r->id.',\''.$r->refno.'\',\''.$r->First_name_h.' '.$r->Middle_name_h.' '.$r->Last_name_h.'\',\''.$date.'\',\''.$varWifeName.'\')" data-code="'.$r->id.'" type="button" class="btn btn-outline-primary btn-sm"><i class="fas fa-search"></i> View</button>'
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
          'date_encoded' => $inputData['date_encoded'],
          'filepath' => $inputData['filepath'],
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

        $query = $this->db->query("SELECT * FROM lcr_history where cash_rep = 'not done'");
        $date = date('Y-m-d');
        $data = [];
        foreach ($query->result() as $r) {
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
            'btn' => $r->btn = '<button onclick="printPage(\''.$r->id.'\')" type="button" class="btn btn-outline-primary btn-sm" "><i class="fas fa-search"></i>Print</button>'
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

      $date = date('Y-m-d h:i:s a', time());
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
        'cash_rep' => 'done'
      );

      $this->db->where('id',$inputData['id']);
      $qry = $this->db->update('lcr_history', $data);

      return $qry;
    }


  }
 ?>
