<?php
class All_Insert_For_Admin extends CI_Model{
    
   public function CategorySetup($data){
     $result = $this->db->insert('product_category',$data);
     if($result){
         return 1;
     }else{
         return 0;
     }
   }
   
   
   public function SubCategorySetup($data){
     $result = $this->db->insert('sub_product_category',$data);
     if($result){
         return 1;
     }else{
         return 0;
     } 
   }
   
   
   public function AddNetWorkCamera($data)
   {
     $result = $this->db->insert('products',$data);
     if($result){
         return 1;
     }else{
         return 0;
     }  
   }
   
   public function  AddSolutionName($data){
     $result = $this->db->insert('solution',$data);
     if($result){
         return 1;
     }else{
         return 0;
     }    
   }
   
   public function  SolutionDescriptionInsert($data){
     $result = $this->db->insert('solution_descripition',$data);
     if($result){
         return 1;
     }else{
         return 0;
     }    
   }
   
   public function  SecondDescriptionTitleAdd($data){
     $result = $this->db->insert('second_solution_description_title',$data);
     if($result){
         return 1;
     }else{
         return 0;
     }    
   }
   
   public function  SecondDescriptionTitle_ContentAdd($data){
     $result = $this->db->insert('second_solution_description',$data);
     if($result){
         return 1;
     }else{
         return 0;
     }    
   }
   
   public function SolutionBlogUpload($data){
       $result = $this->db->insert('solutionblog',$data);
        if($result){
         return 1;
        }else{
            return 0;
        }
   }
   
   public function ToubleShootUpload($data){
       $result = $this->db->insert('troube_shooting',$data);
        if($result){
         return 1;
        }else{
            return 0;
        }
   }
   
    public function UploadSoftware($data){
       $result = $this->db->insert('Software',$data);
        if($result){
         return 1;
        }else{
            return 0;
        }
   }
}
