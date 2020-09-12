<?php
class All_select_for_admin extends CI_Model {
    
    
        //-------------select category--------------------------
         public function AllCategoryList(){
          $query =  $this->db->query("SELECT * FROM `product_category` ORDER BY `Category_Id` ASC");
          return $query->result();
         }
        //-------------select category--------------------------
    
         
         
         
        //--------select sub category by parent category id---------------------
        public function SubCategoryByParentCategoryId($id){
         $query =  $this->db->query("SELECT sub_product_category.Sub_Category_Name,sub_product_category.Sub_Category_Id FROM sub_product_category
         INNER JOIN product_category on product_category.Category_Id = sub_product_category.Parent_Category_Id WHERE product_category.Category_Id = $id");
         return $query->result();  
        }
        //--------select sub category by parent category id-------------------
        
         
         
         
        //------------------------------networking camera---------------------
        public function NetworkingCameraSubCategory(){
          $query =  $this->db->query("SELECT sub_product_category.Sub_Category_Name,sub_product_category.Sub_Category_Id,"
                  . "product_category.Category_Name FROM sub_product_category INNER"
                  . " JOIN product_category on product_category.Category_Id = "
                  . "sub_product_category.Parent_Category_Id WHERE "
                  . "product_category.Category_Id = 1");
          return $query->result();
        }
        //------------------------------networking camera---------------------
        
       
        
        
        //----------------------------Access Control Category List----------------------------
         public function AccessControlSubCategory(){
             $query =  $this->db->query("SELECT * FROM sub_product_category WHERE Parent_Category_Id = 16");
             return $query->result();
         }
        //--------------------------accsss control category list-------------------------------
        
         
         
         
        //--------select sub category with parent category---------------
         public function SelectSubCategoryWithParentCategory(){
          $query =  $this->db->query("SELECT sub_product_category.Sub_Category_Name,sub_product_category.Sub_Category_Id,"
                  . "product_category.Category_Name FROM sub_product_category "
                  . "INNER JOIN product_category on sub_product_category.Parent_Category_Id = "
                  . "product_category.Category_Id");
          return $query->result();
         }
        //--------select sub category with parent category---------------
         
         
         
         
        //------------Select networking camera product start here--------------------------
         public function ProductsList(){
            $query =  $this->db->query("SELECT products.Name,products.Model,"
                    . "products.Image,products.Sort_Description,sub_product_category.Sub_Category_Name "
                    . "FROM products INNER JOIN sub_product_category "
                    . "on products.Product_Category = sub_product_category.Sub_Category_Id");  
            return $query->result();
         }
        //------------Select networking camera product end here----------------------------
        
        
       //----------------------All Solution Name Select start here------------------- 
         public function SolutionList(){
            $query =  $this->db->query("SELECT * FROM `solution`");  
            return $query->result(); 
         }  
       //----------------------All Solution Name Select start here-------------------  
         
         
         
       //---------------select solution 2nd title with solution name------------
         public function SolutionDescriptionTitleWithSolutionName(){
             $query =  $this->db->query("SELECT second_solution_description_title.SolutionTitle,second_solution_description_title.Solution_D2_Id,solution.Solution_Name FROM second_solution_description_title INNER JOIN solution on solution.Solution_Id = second_solution_description_title.SolutionId");  
           return $query->result();
         }
       //-------------- select solutin 2nd title with solution name-------------
         
         
      //----------all product select by sub product category id --------------------
       public function ProductSelectBysubProductCategoryId($id){
           $query =  $this->db->query("SELECT products.Model,products.Product_Id FROM products WHERE products.Product_Category = $id");  
           return $query->result();
       }
      //----------all product select by sub product category id --------------------
      
       
    //----------all product select by sub product category id --------------------
       public function TroubleShootList(){
           $query =  $this->db->query("SELECT * FROM `troube_shooting`");  
           return $query->result();
       }
    //----------all product select by sub product category id --------------------
    
    
    //-------------Software Type List--------------------------------------------
       public function SoftwareType(){
         $result =  $this->db->query("SELECT * FROM `sofware_type`");
         return $result->result();
       }
    //-------------Software Type List--------------------------------------------
       
       
    //-------------Software list--------------------------------------------
       public function SoftwareList(){
         $result =  $this->db->query("SELECT * FROM `software`");
         return $result->result();
       }
    //-------------Software list--------------------------------------------
}
