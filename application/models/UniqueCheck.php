<?php

class UniqueCheck extends CI_Model{
    
    public function SolutionDescriptionUniqueCheck($id){
      $query =  $this->db->query("SELECT * FROM `solution_descripition` WHERE `SolutionId` = $id");
      $result = $query->row();
      if($result){
          return  1;
      }else{
          return 0;
      }
    }
    
   public function DescriptionTitleUniqueCheck($id){
      $query =  $this->db->query("SELECT * FROM `second_solution_description_title` WHERE `SolutionId` = $id");
      $result = $query->row();
      if($result){
          return 1;
      }else{
          return 0;
      }  
    }
    
    public function ProductUniqueCheck($model){
      $query =  $this->db->query("SELECT * FROM `products` WHERE `Model` = '$model' ORDER BY `Model` ASC");
      $result = $query->row();
      if($result){
          return 1;
      }else{
          return 0;
      }    
    }
    
}
