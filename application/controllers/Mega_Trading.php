<?php
class Mega_Trading extends CI_Controller{
   public function index(){
        $data = array();
        $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
        $this->load->view('Mega trading about',$data);
    }
}
