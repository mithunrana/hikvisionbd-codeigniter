<?php

class Career extends CI_Controller{
    public function index(){
        $data = array();
        $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
        $this->load->view('Career',$data);
    }
}