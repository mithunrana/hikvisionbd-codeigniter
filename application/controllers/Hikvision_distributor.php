<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class hikvision_distributor extends CI_Controller{
    public function index(){
        $data = array();
        $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
        $this->load->view('hikvision distributor',$data);
    }
}