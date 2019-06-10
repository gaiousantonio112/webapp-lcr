<?php
  class Login_model extends CI_Model {

      public function loginTest($username,$password)
      {
        $query = $this->db->select('*')->where(
          'username' => $username
          'password' => $password
          )->get('usercredentials');

          $dataArray = array();
          foreach ($query->result() as $r) {
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
