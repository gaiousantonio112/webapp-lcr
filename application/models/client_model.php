<?php
date_default_timezone_set('Asia/Manila');
class Client_model extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
    }

    public function insert_as_response($inputData,$type)
    {

      $this->load->helper('url');
      $this->load->library('user_agent');

      $browser_type['browser'] = $this->agent->browser();
      $browser_type['browserVersion'] = $this->agent->version();
      $browser_type['platform'] = $this->agent->platform();
      $browser_type['full_user_agent_string'] = $_SERVER['HTTP_USER_AGENT'];

      $data = array(
        'type' => $type,
        'data_input' => json_encode($inputData),
        'ip_address' => $this->input->ip_address(),
        'browser_type' => json_encode($browser_type)
      );

      return $this->db->insert('online_request',$data);
    }

    public function getIP()
    {
      $query = $this->db->get('online_request');

      $data = [];

      foreach ($query->result() as $r) {
        $data[] = array(
          'id' => $r->id,
          'type' => $r->type,
          'data_input' => json_decode($r->data_input),
          'ip_address' => $r->ip_address,
          'browser_type' => json_decode($r->browser_type),
          'created_at' => $r->created_at
        );
      }

      return $data;
    }


  }
 ?>
