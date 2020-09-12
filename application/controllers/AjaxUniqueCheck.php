<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AjaxUniqueCheck extends CI_Controller{
    
    public function SolutionDescriptionUnique(){
       $id = $_POST['solutionid'];
       $result =  $this->UniqueCheck->SolutionDescriptionUniqueCheck($id);
       if($result==1){
           echo 1;
       }
       else{
          echo 0;
       }
    }
    
    public function DescriptionSecondTitle(){
       $id = $_POST['solutionid'];
       $result =  $this->UniqueCheck->DescriptionTitleUniqueCheck($id);
       if($result==1){
           echo 1;
       }
       else{
          echo 0;
       }
    }
    
    public function ProductUnique(){
      $ProductModel = $_POST['ProductModel'];
      $result =  $this->UniqueCheck->ProductUniqueCheck($ProductModel);
      if($result==1){
           echo 1;
       }
       else{
          echo 0;
       }
    }
    
}
