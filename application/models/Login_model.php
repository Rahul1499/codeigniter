<?php
class Login_model  extends CI_Model
{
    public function login($email,$pass)
    { 
       $word=hash('sha256',$pass);
        $query=$this->db->where(array('email'=>$email,'password'=>$word));
        $query=$this->db->get('form');
       return $query->result_array();
    }
       
}
?>
