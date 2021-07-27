<?php
class Admin_model extends CI_Model
{
   public function admin()
   {
      $query = $this->db->get("form");
      return $query->result();
   }
   public function prefilled($id)
   {
      $query = $this->db->query("select * from form where id='$id'");
      return $query->result();
   }
   public function update($name, $number, $gender, $id,$image)
   {
      $query = $this->db->query("update form SET name='$name',number='$number',gender='$gender',image='$image' where id='$id'");
      //return $query->result();
   }

   //Delete Record
   public function deleterecord($id)
   {
      $this->db->query("DELETE FROM `form` WHERE id=$id");
      return true;
   }
}
?>
