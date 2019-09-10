<?php
date_default_timezone_set('Asia/Manila');
class orpagemodel extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
    }


    
public function selectorbetween($inputData)
{
   
   $from = $inputData['from'];
   $to =  $inputData['to'];
   $result =  array();
   $query = $this->db->query('SELECT or_num FROM lcr_history WHERE or_num >=  '.$from.' AND or_num <= '.$to.'');

   foreach ($query->result() as $data) {
    array_push($result,$data);
    }
    return $result;

 
}


  
    public function getor()
    { 
          $draw = intval($this->input->get("draw"));
        $start = intval($this->input->get("start"));
        $length = intval($this->input->get("length"));

       $this->db->query("SELECT * FROM or_pool");
        $this->db->select('
        a.idor_pool,
        a.or_from,
        a.or_to,
        a.owned_by,
        a.created_at,
        b.firstname,
        b.middlename,
        b.lastname
        ');
        $this->db->from('db_lcr.or_pool a');
        $this->db->join('db_lcr.usercredentials b', 'a.owned_by = b.id', 'inner');
        $query = $this->db->get();
        
        $data = [];
        foreach ($query->result() as $r) {
          $data[] = array(
            'idor_pool' => $r->idor_pool,
            'or_from' => $r->or_from,
            'or_to' => $r->or_to,
            'owned_by' =>$r->firstname.' '.$r->middlename.' '.$r->lastname,
            'created_at' => $r->created_at);
            // 'btn' => $r->btn='<button class="btn btn-info">INFO</button>');
        }

        $result = array(
                  "draw" => $draw,
                  "recordsTotal" => $query->num_rows(),
                  "recordsFiltered" => $query->num_rows(),
                  "data" => $data
              );


        return $result;
 

    }
    public function saveor($inputdata)
    {
   
       
        $range = range($inputdata['from'],$inputdata['to']);
     
      $data = array(
        'or_from'=>$inputdata['from'],
        'or_to'=>$inputdata['to'],
        'or_next'=>$inputdata['from'],
        'or_remaining'=>count($range),
        'owned_by'=> $this->session->userdata('user_id'),
        'or_status' => 'READY',
        'created_at' => date("Y-m-d H:i:s")
            );
    
            $query = $this->db->insert('or_pool',$data);
        return $query;




    }


    public function checkorisdone($id)
    {
        $result =  array();
        $query = $this->db->get_where('or_pool', array('owned_by' => $id));

        foreach ($query->result() as $data) {
            array_push($result,$data);
            }
            return $result;
    }

  }
 ?>
