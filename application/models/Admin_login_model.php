<?php

class Admin_login_model extends CI_Model {
    
    public function check_login($username,$password){
      $query =  $this->db->query("SELECT * FROM `admin` WHERE Admin_UserName = '$username'  AND Admin_Password = '$password'");
      return $query->row();
    }
    
}
