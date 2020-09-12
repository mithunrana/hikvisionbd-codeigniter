<?php
class All_Select_For_View extends CI_Model {
    
     
    //--------------------------solution menu bar --------------------------------
     public function SolutionMenu(){
       $query =  $this->db->query('SELECT * FROM `solution`');
       return $query->result();  
     }
    //--------------------------solution menu bar --------------------------------
    
    
    //--------------------------select category with subcategory start here ------------------------ 
      public function GetCategory(){
        $query =  $this->db->query('SELECT * FROM `product_category`');
        $result = $query->result();
        $data = array();
                    //print_r($data['categories']);
                   /*foreach ($data['categories'] as $d){
                      echo $d->Category_Name."</br>";
                      if(!empty($d->subcat)){
                          foreach($d->subcat as $subcat){
                              echo $subcat->Sub_Category_Name;
                          }
                      }
                   }*/
        foreach ($result as $category)
        {
            $data[$category->Category_Id] = $category;
            $data[$category->Category_Id]->subcat = $this->GetSubCategory($category->Category_Id);// Get the categories sub categories
            //$data[subcat] = $this->GetSubCategory($category->Category_Id);
        }
        
        return $data;
      }   
      
      
      
      public function GetSubCategory($category_id){
        $query = $this->db->query("SELECT * FROM sub_product_category WHERE sub_product_category.Parent_Category_Id = $category_id");
        return $query->result();
      }
    //--------------------------select category with subcategory end here ------------------------ 
     
     
    
         
    //--------------Product select by category ------------------------------
     public function Product_Select_ByCategory(){
        $query =  $this->db->query("SELECT products.Product_Id,products.Model,products.Name,products.Image,"
                . "products.Sort_Description,product_category.Category_Name,product_category.Category_Id,sub_product_category.Sub_Category_Name FROM products INNER "
                . "JOIN sub_product_category on sub_product_category.Sub_Category_Id= products.Product_Category"
                . " INNER join product_category on product_category.Category_Id = sub_product_category."
                . "Parent_Category_Id WHERE sub_product_category.Parent_Category_Id = 1");
        return $query->result(); 
     }
    //---------------------------Product select by category ------------------------------
    
    
    //-----------popular products select start here--------------------
    public function Popular_Porduct(){
        //$query =  $this->db->query("SELECT * FROM `products` ORDER BY Product_Id DESC LIMIT 15;");
        $query =  $this->db->query("SELECT products.Product_Id,products.Sort_Description,products.Product_Category,products.Model,products.Name,products.Image,sub_product_category.Sub_Category_Name,product_category.Category_Name FROM products INNER JOIN sub_product_category on sub_product_category.Sub_Category_Id = products.Product_Category INNER JOIN product_category on product_category.Category_Id = sub_product_category.Parent_Category_Id LIMIT 15");
        return $query->result();
    }
    //-----------popular products select end here----------------------
    
    
    
    
    //----------- products details select start here--------------------
     public function Products_Details($product_model){
        $query =  $this->db->query("SELECT products.Model,products.Name,products.Image,products.Sort_Description,products.Pdf_Link,products.Product_Id,products.Product_Category,sub_product_category.Sub_Category_Id,product_category.Category_Id FROM products INNER JOIN sub_product_category on sub_product_category.Sub_Category_Id = products.Product_Category INNER JOIN product_category on product_category.Category_Id = sub_product_category.Parent_Category_Id WHERE products.Model = '$product_model'");
        return $query->row(); 
     }
    //----------- products details select end here----------------------
     
     
     //------------------product select by sub product category start here--------------------------------
      public function Product_Select_BySubProductCategory($id){
          $query  = $this->db->query("SELECT products.Product_Id,products.Product_Category,products.Model,"
                  . "products.Name,products.Image,products.Sort_Description,products.Pdf_Link,product_category.Category_Id,product_category.Category_Name,"
                  . "sub_product_category.Sub_Category_Name FROM products INNER JOIN sub_product_category on "
                  . "sub_product_category.Sub_Category_Id = products.Product_Category INNER JOIN product_category "
                  . "on product_category.Category_Id = "
                  . "sub_product_category.Parent_Category_Id WHERE sub_product_category.Sub_Category_Id = $id");
          return $query->result();
      }
    //------------------product select by sub product category end here --------------------------------
     
    

      
      
    //-------------------------category select with image start here -----------------------------
        public function Get_Category_With_Image(){
            $query = $this->db->query("SELECT * FROM `product_category`");
            return $query->result();
        }
    //-------------------------category select with image end here-----------------------------------
      
        
        
    //-------------------------category select with image start here -----------------------------
        public function Product_Select_By_Parent_Category($id){
        $query =  $this->db->query("SELECT products.Product_Id,products.Model,products.Name,products.Image,"
                . "products.Sort_Description,product_category.Category_Id,product_category.Category_Name,sub_product_category.Sub_Category_Name FROM products INNER "
                . "JOIN sub_product_category on sub_product_category.Sub_Category_Id= products.Product_Category"
                . " INNER join product_category on product_category.Category_Id = sub_product_category."
                . "Parent_Category_Id WHERE sub_product_category.Parent_Category_Id = $id");
        return $query->result(); 
     }
    //-------------------------category select with image end here-----------------------------------  
      
     
     
     
    
    //-------------solution basic description select----------------------
       public function SolutionDescription(){
         $query =  $this->db->query("SELECT solution.Solution_Name,solution.Solution_Id,solution_descripition."
                 . "Description,solution_descripition.DownloadLink,solution_descripition.YoutubeLink,solution_descripition."
                 . "BannerImage,solution_descripition.ApplicationImage,second_solution_description_title.SolutionTitle,"
                 . "second_solution_description_title.Solution_D2_Id,second_solution_description.Description_Id FROM solution "
                 . "INNER JOIN solution_descripition on solution_descripition.SolutionId = solution.Solution_Id INNER JOIN "
                 . "second_solution_description_title on second_solution_description_title.SolutionId = "
                 . "solution.Solution_Id INNER JOIN second_solution_description on"
                 . " second_solution_description.Description_Title_Id = "
                 . "second_solution_description_title.Solution_D2_Id WHERE solution.Solution_Id = 1");
         $result =  $query->result(); 
         $data  = array();
         
         
         foreach($result as $d){
           $data[$d->Solution_D2_Id] = $d;
           $data[$d->Solution_D2_Id]->subcontent = $this->Desc2TitleContent($d->Solution_D2_Id);
         }
         
         //print_r($data);
         return $data;
       }
       
       public function Desc2TitleContent($id){
          $result =  $this->db->query("SELECT second_solution_description.Description FROM second_solution_description WHERE second_solution_description.Description_Title_Id = $id");
          return $result->result();
          //print_r($result->result());
       }
    //-------------solution basic description select------------------------------
      
   
    //-------------solution basic description select----------------------
       public function SolutionDescriptionById($id){
         $query =  $this->db->query("SELECT solution.Solution_Name,solution.Solution_Id,solution_descripition."
                 . "Description,solution_descripition.DownloadLink,solution_descripition.YoutubeLink,solution_descripition."
                 . "BannerImage,solution_descripition.ApplicationImage,second_solution_description_title.SolutionTitle,"
                 . "second_solution_description_title.Solution_D2_Id,second_solution_description.Description_Id FROM solution "
                 . "INNER JOIN solution_descripition on solution_descripition.SolutionId = solution.Solution_Id INNER JOIN "
                 . "second_solution_description_title on second_solution_description_title.SolutionId = "
                 . "solution.Solution_Id INNER JOIN second_solution_description on"
                 . " second_solution_description.Description_Title_Id = "
                 . "second_solution_description_title.Solution_D2_Id WHERE solution.Solution_Id = $id");
         $result =  $query->result(); 
         $data  = array();
         
         
         foreach($result as $d){
           $data[$d->Solution_D2_Id] = $d;
           $data[$d->Solution_D2_Id]->subcontent = $this->Desc2TitleContentById($d->Solution_D2_Id);
         }
         
         //print_r($data);
         return $data;
       }
       
       public function Desc2TitleContentById($id){
          $result =  $this->db->query("SELECT second_solution_description.Description FROM second_solution_description WHERE second_solution_description.Description_Title_Id = $id");
          return $result->result();
          //print_r($result->result());
       }
    //-------------solution basic description select------------------------------
       
       
       
       
    //---------------------solution blog details select-------------
       public function SolutionBlogDescription(){
          $query =  $this->db->query("SELECT solutionblog.SolutionBlogId,solutionblog.SolutionId,solutionblog.SolutionBlogTitle,solutionblog.SolutionBlogImage,solutionblog.BlogPostDescription,solutionblog.RecommendProList FROM solutionblog WHERE solutionblog.SolutionId = 1");
          $result =  $query->result();
          $data = array();
          foreach($result as $d){
            $data[$d->SolutionBlogId] = $d;
            $data[$d->SolutionBlogId] ->ReProList = $this->RecommendProductDetailsSelect($d->RecommendProList);
          }
          //print_r($data);
          return $data;
       }
       
       public function RecommendProductDetailsSelect($proList){
          $result =  $this->db->query("SELECT products.Product_Id,products.Model,products.Name,products.Image,product_category.Category_Id,product_category.Category_Name,sub_product_category.Sub_Category_Name,sub_product_category.Sub_Category_Id FROM products inner join sub_product_category on sub_product_category.Sub_Category_Id  = products.Product_Category inner join product_category on product_category.Category_Id = sub_product_category.Parent_Category_Id WHERE (Product_Id IN ($proList))");
          return $result->result();
          /*$dataobj = array();
          $i = 5;
          foreach($result->result() as $d){
              $dataobj[$i] = $d;
              ++$i;
          }
          print_r($dataobj);*/
       }
    //---------------------solution blog details select-------------
       
       
       
    //---------------------solution blog details select-------------
       public function SolutionBlogDescriptionById($id){
          $query =  $this->db->query("SELECT solutionblog.SolutionBlogId,solutionblog.SolutionId,solutionblog.SolutionBlogTitle,solutionblog.SolutionBlogImage,solutionblog.BlogPostDescription,solutionblog.RecommendProList FROM solutionblog WHERE solutionblog.SolutionId = $id");
          $result =  $query->result();
          $data = array();
          foreach($result as $d){
            $data[$d->SolutionBlogId] = $d;
            $data[$d->SolutionBlogId] ->ReProList = $this->RecommendProductDetailsSelectById($d->RecommendProList);
          }
          //print_r($data);
          return $data;
       }
       
       public function RecommendProductDetailsSelectById($proList){
          $result =  $this->db->query("SELECT products.Product_Id,products.Model,products.Name,products.Image,product_category.Category_Id,product_category.Category_Name,sub_product_category.Sub_Category_Name,sub_product_category.Sub_Category_Id FROM products inner join sub_product_category on sub_product_category.Sub_Category_Id  = products.Product_Category inner join product_category on product_category.Category_Id = sub_product_category.Parent_Category_Id WHERE (Product_Id IN ($proList))");
          return $result->result();
          
          
          /*$dataobj = array();
          $i = 5;
          foreach($result->result() as $d){
              $dataobj[$i] = $d;
              ++$i;
          }
          print_r($dataobj);*/
       }
    //---------------------solution blog details select-------------
     
     
     
     
   //-------------Trouble details select by trouble name--------------
       public function TroubleDetailsSelect($id){
         $result =  $this->db->query("SELECT * FROM `troube_shooting` WHERE `Trouble_Shoot_Id` = $id");
         return $result->row();  
       }
   //-------------Trouble details select by trouble name--------------  
       
       
       
    //-------------Software Type List--------------------------------------------
       public function SoftwareType(){
         $result =  $this->db->query("SELECT * FROM `sofware_type`");
         $result2 =  $result->result();
         $data = array();
         foreach($result2 as $r){
           $data[$r->Software_Type_Id] = $r;
           $data[$r->Software_Type_Id] ->SoftwareList = $this->TypeSoftwareSelect($r->Software_Type_Id);
         }
         //print_r($data);
         return $data;
       }
       
       public function TypeSoftwareSelect($id){
         $result =  $this->db->query("SELECT * FROM `software` WHERE software.Software_Type_Id = $id");
         return $result->result();
       }
    //-------------Software Type List--------------------------------------------

       
}
