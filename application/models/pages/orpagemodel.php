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
        $this->db->select('*');
        $this->db->from('or_pool');
        $this->db->where('owned_by =' , $id);
        $this->db->where('or_status =' , 'READY');
       $query =  $this->db->get();
        // $query = $this->db->get_where('', array('' => $id));

        foreach ($query->result() as $data) {
            array_push($result,$data);
            }
            return $result;
    }



    public function getnextor($id)
    {
      $this->db->select('or_next');
      $this->db->where('owned_by',$id);
      $this->db->where('or_status', 'READY');
      $sql =  $this->db->get('or_pool');
      $dataArray = array();
      foreach ($sql->result() as $r) {
  array_push($dataArray,$r);
}

return $dataArray;

    }




  public function updateor($id)
  {
    
      $this->db->select('*');
      $this->db->from('or_pool');
      $this->db->where('owned_by = ' , $id);
      $this->db->where('or_status =' , 'READY');
      $query1 = $this->db->get();
      $dataArray = array();
      foreach ($query1->result() as $r) {
       $addnxt = $r->or_next + 1;
          $remain = $r->or_remaining - 1;
      }
      // foreach ($query1 as $sq) {
      //     $addnxt = $sq->or_next + 1;
      //     $remain = $sq->or_remaining - 1;
      // }

      if($remain == 0){
          $status = 'DONE';
        // $res =  DB::table('cash_or_pool')
        //   ->where('owned_by' ,Auth::user()->id )
        //   ->where('status' , 'READY')
        //   ->update([
          // 'or_next' => $addnxt,
          // 'or_remaining' => $remain,
          // 'status' => $status
        //   ]);
     
          $data = array(
            'or_next' => $addnxt,
            'or_remaining' => $remain,
            'or_status' => $status
          );
          $this->db->where('owned_by', $id);
          $qry = $this->db->update('or_pool',$data);
  
      }else{

          $data1 = array(
            'or_next' => $addnxt,
            'or_remaining' => $remain,
          );
          $this->db->where('owned_by', $id);
          $qry = $this->db->update('or_pool',$data1);
      }
      return  $qry ;
     
      // $query = DB::table('users')
      //     ->where('id', 1)
      //     ->update(['votes' => 1]);

         
  }

  public function cancelor($or)
  {
  
    $data = array(
      'or_number' => $or['or'],
      'cancelled_by' =>$this->session->userdata('user_id'),
      'remarks' =>  $or['remarks']
    );


    $qry = $this->db->insert('or_cancelled',$data);

    $this->db->where('id',$or['id']);
    $del = $this->db->delete('lcr_history');

  


    return $qry + $del;

  }


  public function searchdatanow($name , $typeval)
  {
    $result =  array();

   

switch ($typeval) {
  case 'birthday':
    $type = 'lcr_bday';

    $draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));
    $date = date('Y-m-d');
    // $query = $this->db->query('SELECT * FROM  buss_profile WHERE buss_id = '.$inputData['search1'].  or buss_name  = .$inputData['search1']);
        $this->db->select("*");
        $this->db->from('lcr_bday');
        $this->db->like('First_name', $name);
        $this->db->or_like('Middle_name', $name);
        $this->db->or_like('Last_name', $name);
       
     
        // $this->db->or_like('buss_status', $inputData['search1']);
        $query =$this->db->get();
        $data = [];
        foreach ($query->result() as $r) {
        // array_push($result,$data);

        $data[] = array(
          'id' => $r->id,
          'refno' => $r->refno,
          'date' => $r->birthday,
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
    break;
    case 'death':
    $type = 'lcr_death';

    $draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));

    $date = date('Y-m-d');

          $this->db->select("*");
        $this->db->from($type);
        $this->db->like('First_name', $name);
        $this->db->or_like('Middle_name', $name);
        $this->db->or_like('Last_name', $name);
       
        $query =$this->db->get();
        $data = [];
        foreach ($query->result() as $r) {
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'date' => $r->date_of_death,
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




    break;
    case 'marriage':
    $type = 'lcr_marriage';

    $draw = intval($this->input->get("draw"));
    $start = intval($this->input->get("start"));
    $length = intval($this->input->get("length"));

    $date = date('Y-m-d');
    $data = [];
        // $query = $this->db->query('SELECT * FROM  buss_profile WHERE buss_id = '.$inputData['search1'].  or buss_name  = .$inputData['search1']);
        $this->db->select("*");
        $this->db->from($type);
        $this->db->like('First_name_h', $name);
        $this->db->or_like('Middle_name_h', $name);
        $this->db->or_like('Last_name_h', $name);
        $this->db->or_like('First_name_w', $name);
        $this->db->or_like('Middle_name_w', $name);
        $this->db->or_like('Last_name_w', $name);
       
     
        // $this->db->or_like('buss_status', $inputData['search1']);
        $query =$this->db->get();
        foreach ($query->result() as $r) {
          $varWifeName = $r->First_name_w.' '.$r->Middle_name_w.' '.$r->Last_name_w;
          $data[] = array(
            'id' => $r->id,
            'refno' => $r->refno,
            'date' => $r->date_of_marriage,
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
    break;
  
  default:
    # code...
    break;
}


  





  }

}
 ?>
