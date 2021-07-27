<?php
class Signup_Model  extends CI_Model{
    public function saverecords($data)
    { 
        $this->db->insert('form',$data);
        return true;
       
    }
      
}
?>
