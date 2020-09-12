<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller{

    public function index(){
      $data = array();
      $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
      $data['categories'] =   $this->All_Select_For_View->GetCategory();
      $data['products'] = $this->All_Select_For_View->Product_Select_ByCategory();
      //$data['SubCategoryProducts']= null;
      $this->load->view('products',$data);
    }
    
    //------------------product select by sub product category start here--------------------------------
      public function Sub_Category_Product_Select($categoryname,$subcategory_name,$id){
          $data = array();
          //echo print_r($categoryname);
          $data['SendTitle'] = str_replace("-", " ",$subcategory_name)." - ".str_replace("-", " ",$categoryname)." "."|"." "."Mega Trading";
          $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
          $data['categories'] =   $this->All_Select_For_View->GetCategory();
          //$data['products'] = $this->All_Select_For_View->Product_Select_ByCategory();
          $data['SubCategoryProducts']  = $this->All_Select_For_View->Product_Select_BySubProductCategory($id);
          $this->load->view('products',$data);
      }
    //------------------product select by sub product category end here --------------------------------
      
      
      
    //------------------product select by sub product parent category id start here--------------------------------
      public function Parent_Category_Product_Select($categoryName,$id){
          $data = array();
          $data['SendTitle'] = str_replace("-", " ",$categoryName)." - "."hikvision "."|"." "."Mega Trading";
          $data['categories'] =   $this->All_Select_For_View->GetCategory();
          $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
          //$data['products'] = $this->All_Select_For_View->Product_Select_ByCategory();
          $data['PCategoryProducts']  = $this->All_Select_For_View->Product_Select_By_Parent_Category($id);
          $this->load->view('products',$data);
      }
    //------------------product select by product parent category id end here --------------------------------
}
