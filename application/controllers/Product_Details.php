<?php

class Product_Details extends CI_Controller {
   public function index(){
       $data = array();
       $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
       $data['categories'] =   $this->All_Select_For_View->GetCategory();
       $this->load->view('ProductDetails',$data);
   }
   
   public function ProductDetails($ProductCategory,$P_Subcategory){
       $data = array();
       $data['SendTitle'] = $P_Subcategory;
       $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
       $data['categories'] =   $this->All_Select_For_View->GetCategory();
       $this->load->view('ProductDetails',$data); 
   }
}
