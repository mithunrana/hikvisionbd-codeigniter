<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('Admin_Id');
        if($user_id){
            redirect('super-admin','refresh');
        }
    }
    
    public function index(){
       $data = array();
       $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
       $this->load->view('admin-login',$data);
    }
    
     public function login()
     {
     $username = $this->input->post('username');
     $pass = $this->input->post('password');
     $result = $this->Admin_login_model->check_login($username,$pass);
     $sdata = array();
      if($result)
        {
         $sdata['Admin_Email'] = $result->Admin_Email;
         $sdata['Admin_Id'] = $result->Admin_Id;
         $data['Admin_Name'] = $result->Admin_Name;
         $data['Admin_Username'] = $result->Admin_UserName;
         $this->session->set_userdata($sdata);
         redirect('super-admin','refresh');  
        }
       else{
           $sdata['login_fail_message'] = 'Email or Password Incorrect';
           $this->session->set_userdata($sdata);
           redirect('admin-login','refresh');
           echo 'fail';
           }
     }
    
   
}
