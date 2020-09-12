<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hikvision  extends CI_Controller{
    
   
    public function index(){
       $data = array();
       $data['PopularProducts'] = $this->All_Select_For_View->Popular_Porduct();
       $data['modalProducts'] = $this->All_Select_For_View->Popular_Porduct();
       $data['discover_Products'] = $this->All_Select_For_View->Get_Category_With_Image();
       $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
       $this->load->view('index',$data);
    }
    
}
