<?php
class Solution extends CI_Controller {
  
    public function index(){
     $dataobj = array();
     $dataobj['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
     $dataobj['SolutionBlogDescription'] = $this->All_Select_For_View->SolutionBlogDescription();
     $dataobj['SolutinDescription'] =  $this->All_Select_For_View->SolutionDescription();
     $this->load->view('Solution',$dataobj);
   }
   
   public function Solutions($solution_name,$id){
     $dataobj = array();
     $dataobj['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
     $dataobj['SolutionBlogDescription'] = $this->All_Select_For_View->SolutionBlogDescriptionById($id);
     $dataobj['SolutinDescription'] =  $this->All_Select_For_View->SolutionDescriptionById($id);
     //print_r($dataobj['SolutinDescription']);
     $dataobj['SendTitle'] = str_replace("-And-", " ",$solution_name)." - Solution Hikvision | Mega Trading";
     $this->load->view('Solution',$dataobj); 
   }
   
}
