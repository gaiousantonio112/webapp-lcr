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
        foreach ($query as $r) {
          array_push($dataArray,$r);
        }

        return $dataArray;
      }

      // LCR BDAY CRUD
      public function showAllbday()
      {
        $query = $this->db->get('lcr_bday');

        $dataArray = array();
        foreach ($query->result() as $key => $value) {
          // code...
        }

        return $dataArray;
      }
      // NEW
      public function addBday($inputData)
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
        $qry = $this->db->get('lcr_death');
        $dataArray = array();

        foreach ($qry->result() as $r) {
          array_push($dataArray,$r);
        }

        return $dataArray;
      }

      public function addDeath($inputData)
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
        $qry = $this->db->get('lcr_marriage');
        $dataArray = array();
        foreach ($qry->result() as $r) {
          array_push($dataArray,$r);
        }

        return $dataArray;

      }

      public function addMarriage($inputData)
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

  }
 ?>
