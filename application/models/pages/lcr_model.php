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
      'id' => $r->id,
      'ref_num' => $r->ref_num,
      'or_num' => $r->or_num,
      'name' => $r->name,
      'type' => $r->type,
        'date' => $r->date,
      'page' => $r->page,
        'no_copy' => $r->no_copy,
        'btn' => $r->btn = '<button  data-toggle="modal" data-target="#reciept" type="button" class="btn btn-outline-primary btn-sm" "><i class="fas fa-search"></i>Print</button>'
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


  }
 ?>
