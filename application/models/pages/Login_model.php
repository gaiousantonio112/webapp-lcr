<?php
  class Login_model extends CI_Model {

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
  }
 ?>
