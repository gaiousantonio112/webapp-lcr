<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Client_model','client');
    }

    public function index()
    {
      // $this->load->view('client/nav');
      $data = array(
        'file_name' => 'index.js'
      );
      $this->load->view('client/indexmain',$data);

      //
      // $this->load->view('client/footer',$data);
      //
      // $this->load->view('client/step');
    }

    public function pages($page = '')
    {
      $this->load->view('client/nav');
      $this->load->view('client/'.$page);
      $this->load->view('client/footer');
          $this->load->view('client/step');
    }
    public function addRequest_died()
    {
      $inputData = $this->input->post('death');

      echo json_encode($this->client->insert_as_response($inputData,'Death'));

    }

    public function addRequest_bday()
    {
      $inputData = $this->input->post('birthday');

      echo json_encode($this->client->insert_as_response($inputData,'Birthday'));

    }


    public function addRequest_marr()
    {
      $inputData = $this->input->post('marr');

      echo json_encode($this->client->insert_as_response($inputData,'Marriage'));

    }

    public function getIP()
    {
      echo json_encode($this->client->getIP());
    }
  }
 ?>
