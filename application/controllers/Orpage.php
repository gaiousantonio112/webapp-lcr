<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orpage extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->model('pages/orpagemodel','model');
        }



public function saveor()
{

    $inputData = $this->input->post('saveor');
    

    echo json_encode($this->model->saveor($inputData));


}


public function getor()
{
    echo json_encode($this->model->getor());
}


public function selectorbetween()
{
    $inputData = $this->input->post('saveor');
    echo json_encode($this->model->selectorbetween($inputData));
}


public function checkorisdone()
{
    $id = $this->input->post('data');
    echo json_encode($this->model->checkorisdone($id));
}

public function getnextor()
{
    $id = $this->input->post('data');
    echo json_encode($this->model->getnextor($id));
}

public function  updateor()
{
    $id = $this->input->post('data');
    echo json_encode($this->model->updateor($id));
}






}


?>