<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Super_admin extends CI_Controller {
   
  
    
    
    //<------------admin login logout start here------->
     public function __construct() {
         parent::__construct();
         $user_id = $this->session->userdata('Admin_Id');
         if(!$user_id){
             redirect('admin-login','refresh');
         }
     }

     public function index(){
        $data = array();
        $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
        $this->load->view('adminpannel');
     }

     public function logout(){
        $adminid = $this->session->userdata('Admin_Id');
        $this->session->unset_userdata('Admin_Id');
        redirect('admin-login','refresh');
     }
   //<------------admin login logout end here------->
    
    
    
    
    
    
    
    
    
    
    
    //<------------add category  start here--------->
        public function CategorySetup(){
            $data = array();
            $data['categoryList'] = $this->All_select_for_admin->AllCategoryList();
            $this->load->view('AddProductCatergory',$data);
        }
        
        public function    AddCategory(){
          $data = array();
          $data['Category_Name'] = $this->input->post('categoryname');
          $result =  $this->All_Insert_For_Admin->CategorySetup($data);
          if($result==1){
            $sdata = array();
            $sdata['successmsg'] = "Category Add Successfully";
            $this->session->set_userdata($sdata);
            redirect('super-admin/CategorySetup','refresh'); 
          }
          else{
            $sdata = array();
            $sdata['successmsg'] = "Category Add Fail";
            $this->session->set_userdata($sdata);
            redirect('super-admin/CategorySetup','refresh'); 
          }
        }
    //<------------add category  end here--------->
    
        
        
        
        
        
        
    
    //<---------sub category setup start here----------------------->
        public function SubCategorySetup(){
            $data = array();
            $data['categoryList'] = $this->All_select_for_admin->AllCategoryList();
            $data['SubCategoryWithParentCategory']=$this->All_select_for_admin->SelectSubCategoryWithParentCategory();
            $this->load->view('AddProductSubCategory',$data);
        }

        public function SubCategoryAddHere(){
           $data = array();
           $data['Parent_Category_Id']  = $this->input->post('rootCategoryId');
           $data['Sub_Category_Name']  = $this->input->post('subCategoryName');
           $result =  $this->All_Insert_For_Admin->SubCategorySetup($data);
           if($result==1){
            $sdata = array();
            $sdata['successmsg'] = "Sub Category Add Successfully";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SubCategorySetup','refresh'); 
          }
          else{
            $sdata = array();
            $sdata['successmsg'] = "Sub Category Add Fail";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SubCategorySetup','refresh'); 
          }
        }
    //<---------sub category end here------------------------------->
    
        
        
      //--------select sub category by parent category id---------------------
        public function SubCategoryByParentCategoryId(){
          $parent_Category_Id = $_POST['categoryId'];
          $result = $this->All_select_for_admin->SubCategoryByParentCategoryId($parent_Category_Id);
          //echo "hello";
          foreach($result as $d){
              echo "<option value='$d->Sub_Category_Id '>$d->Sub_Category_Name</option>";
          }
        }
        //--------select sub category by parent category id-------------------
        
        
        
        
        
  
    
    //<----------- network camera add start here----------------->
    public function AddProducts(){
        $dataobj = array();
        $dataobj['category'] = $this->All_select_for_admin->AllCategoryList();
        $dataobj['subcategory'] = $this->All_select_for_admin->NetworkingCameraSubCategory();
        $dataobj['productList'] = $this->All_select_for_admin->ProductsList();
        $this->load->view('AddProduct',$dataobj);
     }
     public function UploadProducts(){
        $data = array();
        $data['Product_Category'] = $this->input->post('productCategory');
        $data['Model'] = $this->input->post('cameramodel');
        $data['Name'] = $this->input->post('cameraname');
        $data['Sort_Description'] = $this->input->post('description');
        $data['Pdf_Link'] = $this->input->post('pdflink');

        $config['upload_path'] = './product image/';
        if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|PNG';
        $config['max_size'] = '1024';
        //$config['max_width'] = '270';
        //$config['min_width'] = '270';
        //$config['max_height'] = '190';
        //$config['min_height'] = '190';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('cameraimage'))
        {   $sdata = array();
            $sdata['successmsg'] = "please select valid image max size:1024kb";
            $this->session->set_userdata($sdata);
            redirect('super-admin/AddProducts','refresh');
           exit();
        }
        else{
         $fileData = $this->upload->data();
         $data['Image'] = $fileData['file_name'];
         $result = $this->All_Insert_For_Admin->AddNetWorkCamera($data);
         if($result==1){
            $sdata = array();
            $sdata['successmsg'] = "Camera Added Sucessfully";
            $this->session->set_userdata($sdata);
            redirect('super-admin/AddProducts','refresh'); 
         }
         else{
            $sdata = array();
            $sdata['successmsg'] = "Camera Add Fail";
            $this->session->set_userdata($sdata);
            redirect('super-admin/AddProducts','refresh'); 
         }
        }     
     }
    //<------------camera add  end  here----------------->
    
     
     
     
    //--------------Solution Name setup here-----------------
     public function SetupSolution(){
         $data = array();
         $data['SolutionNameList'] = $this->All_select_for_admin->SolutionList();
         $this->load->view('SolutionSetup',$data);
     }
     public function SolutinNameAdd(){
        $data = array();
        $data['Solution_Name']=$this->input->post('SolutionName');
        $data['SortDescription']=$this->input->post('sortdescription');
        $config['upload_path'] = './Solution image/';
        if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $config['allowed_types'] = 'gif|ico|jpg|png|jpeg|jpg|mp4|MKV';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        
        
        if (!$this->upload->do_upload('SolutionImage'))
        {   $sdata = array();
            $sdata['successmsg'] = "please select valid image, max-image size:1024kb";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SetupSolution','refresh');
           exit();
        }
        else{
         $fileData = $this->upload->data();
         $data['Solution_Image'] = $fileData['file_name'];
         $result = $this->All_Insert_For_Admin->AddSolutionName($data);
         if($result==1){
            $sdata = array();
            $sdata['successmsg'] = "Solutin Added Sucessfully";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SetupSolution','refresh'); 
         }
         else{
            $sdata = array();
            $sdata['successmsg'] = "Camera Add Fail";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SetupSolution','refresh'); 
         }
        } 
     }
    //--------------Solution Name setup here-----------------
   
     
   //---------------solution Description Setup-------------------
   public function SolutionDescription(){
       $data = array();
       $data['SolutionNameList'] = $this->All_select_for_admin->SolutionList();
       $this->load->view('SolutionDescriptionSetup',$data);
   }
   
   public function SolutionDescriptionUpload(){
       $data = array();
       $data['SolutionId'] = $this->input->post('solutionid');
       $data['YoutubeLink'] = $this->input->post('youtubelink');
       $data['DownloadLink'] = $this->input->post('Downloadlink');
       $data['Description'] = $this->input->post('descriptionid');
       
       $config['upload_path'] = './Solution Description Image/';
       if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
       $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|mp4|MKV';
       $config['max_size'] = '1024';
       $this->load->library('upload', $config);
       
       
       if (!$this->upload->do_upload('SolutionApplicationImage'))
        {   $sdata = array();
            $sdata['successmsg'] = "please select valid image, max-image size:1024kb";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SolutionDescription','refresh');
           exit();
        }
        else{
         $fileData = $this->upload->data();
         $data['ApplicationImage'] = $fileData['file_name'];
        } 
       
       
       if (!$this->upload->do_upload('SolutionBannerImage'))
        {   $sdata = array();
            $sdata['successmsg'] = "please select valid image, max-image size:1024kb";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SolutionDescription','refresh');
           exit();
        }
        else{
         $fileData = $this->upload->data();
         $data['BannerImage'] = $fileData['file_name'];
         $result = $this->All_Insert_For_Admin->SolutionDescriptionInsert($data);
         if($result==1){
            $sdata = array();
            $sdata['successmsg'] = "Description Added Sucessfully";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SolutionDescription','refresh'); 
         }
         else{
            $sdata = array();
            $sdata['successmsg'] = "Camera Add Fail";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SolutionDescription','refresh'); 
         }
        } 
       
       
   }
   //---------------solution Description Setup-------------------  
      

    
    //-------------solution 2nd description title setup----------
       public function TitleSetup(){
          $data = array();
          $data['SolutionNameList'] = $this->All_select_for_admin->SolutionList();
          $this->load->view('Solution 2nd Description Title Setup',$data);
       }
       
       public function TitleAdd(){
           $data= array();
           $data['SolutionId'] = $this->input->post('solutionid');
           $data['SolutionTitle'] = $this->input->post('title');
           
           $result = $this->All_Insert_For_Admin->SecondDescriptionTitleAdd($data);
           if($result==1){
            $sdata = array();
            $sdata['successmsg'] = "2nd Title Added Sucessfully";
            $this->session->set_userdata($sdata);
            redirect('super-admin/TitleSetup','refresh');  
           }
           else{
            $sdata = array();
            $sdata['successmsg'] = "2nd Title Added Fail";
            $this->session->set_userdata($sdata);
            redirect('super-admin/TitleSetup','refresh');  
           }
        
       }
    //-------------solution 2nd description title setup----------

    
    //-------------solution 2nd description title  content setup----------
      public function Second_Description_TitleContent(){
          $data = array();
          $data['SolutionNameList'] = $this->All_select_for_admin->SolutionDescriptionTitleWithSolutionName();
          $this->load->view('SecondDescriptionTitleContent',$data);
      }
      
      public function Second_Description_Contet(){
          $data =array();
          $data['Description_Title_Id'] = $this->input->post('Description_title_id');
          $data['Description'] = $this->input->post('SecondSolutionDescriptinContent');
          
          $result = $this->All_Insert_For_Admin->SecondDescriptionTitle_ContentAdd($data);
           if($result==1){
            $sdata = array();
            $sdata['successmsg'] = "Content Added Sucessfully";
            $this->session->set_userdata($sdata);
            redirect('super-admin/Second_Description_TitleContent','refresh');  
           }
           else{
            $sdata = array();
            $sdata['successmsg'] = "Content Added Fail";
            $this->session->set_userdata($sdata);
            redirect('super-admin/Second_Description_TitleContent','refresh');  
           }
          
      }
    //-------------solution 2nd description title content setup----------
      
      
      
      
   //-----------solution blog post upload -----------------------------
    
    public function ProductSelectBySubCategoryId(){
        $SubProductCategoryId = $_POST['categoryId'];
        $result = $this->All_select_for_admin->ProductSelectBysubProductCategoryId($SubProductCategoryId);      
        foreach($result as $d){
          echo "<option value='$d->Product_Id'>$d->Model</option>";
       }
    }
    
    public function TempProductAdd(){
        
        if(isset($_POST['categoryId'])){
            if(isset($_SESSION['TempProduct'])){
                $addedProductId = array_column($_SESSION['TempProduct'], "proid");
                if(!in_array($_POST['categoryId'], $addedProductId)){
                   $count = count($_SESSION["TempProduct"]);
                   $item_array = array('proid'     => $_POST["categoryId"]);
                   $_SESSION["TempProduct"][$count] = $item_array;
                   echo "Product Id ".$_POST["categoryId"]." add successfully";
                }
                else{
                    echo "Product Id ".$_POST["categoryId"]." Already Added";
                }
           }
            else{
                $item_array = array('proid'     => $_POST["categoryId"]);
                $_SESSION['TempProduct'][0] = $item_array;
                echo "Product Id ".$_POST["categoryId"]." add successfully";
            }
        }
        else{
            if(isset($_SESSION['TempProduct'])){
                $starray = array();
                foreach ($_SESSION['TempProduct'] as $d){
                    $starray[] = $d['proid'];
                }
                $str = implode(",", $starray);
                return $str;
            }
            else{
                return "";
            }
            
        }
        
    }
    
    public function SolutionBlog(){
        $data = array();
        $data['SolutionNameList'] = $this->All_select_for_admin->SolutionList();
        $data['ProductCategory'] = $this->All_select_for_admin->AllCategoryList();
        $this->load->view('SolutionBlogPost',$data);
    }
    
    
    public function SolutionUpload(){
        $data = array();
        $data['RecommendProList'] = $this->TempProductAdd();
        $data['	SolutionBlogTitle'] = $this->input->post('SolutionBlogTitle');
        $data['SolutionId'] = $this->input->post('solutionid');
        $data['BlogPostDescription'] = $this->input->post('BlogDescription');
        
       $config['upload_path'] = './Solution Blog Image/';
       if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
       $config['allowed_types'] = 'gif|jpg|png|jpeg|jpg|mp4|MKV';
       $config['max_size'] = '1024';
       $this->load->library('upload', $config);
       
       if (!$this->upload->do_upload('SolutionBlogImage'))
        {   $sdata = array();
            $sdata['successmsg'] = "please select valid image, max-image size:1024kb";
            $this->session->set_userdata($sdata);
            redirect('super-admin/SolutionBlog','refresh');
           exit();
        }
        else{
            if($data['RecommendProList']==""){
                $sdata = array();
                $sdata['successmsg'] = "Please Add Some Recommend Product";
                $this->session->set_userdata($sdata);
                unset($_SESSION["TempProduct"]);
                redirect('super-admin/SolutionBlog','refresh');
            }
            else{
                $fileData = $this->upload->data();
                $data['SolutionBlogImage'] = $fileData['file_name'];
                $result = $this->All_Insert_For_Admin->SolutionBlogUpload($data);
                if($result==1){
                   $sdata = array();
                   $sdata['successmsg'] = "Solution Blog Add Successfully";
                   $this->session->set_userdata($sdata);
                   unset($_SESSION["TempProduct"]);
                   redirect('super-admin/SolutionBlog','refresh'); 
                }
                else{
                   $sdata = array();
                   $sdata['successmsg'] = "Camera Add Fail";
                   $this->session->set_userdata($sdata);
                   redirect('super-admin/SolutionBlog','refresh'); 
                }
            }
          
        }
    }
   //-----------solution blog post upload -----------------------------
    
    
   //----------------------Add Trouble Shoot------------------------------
      public function AddTroubleShoot(){
        $data = array();
        $data['TroubleShootList'] = $this->All_select_for_admin->TroubleShootList();
        $this->load->view('Trouble Shoot Add',$data);
      }
      
      public function TroubleShootUpload(){
         $data = array();
         $data['Trouble_Shoot_Name'] = $this->input->post('troubleShootingName');
         $data['Trouble_Shoot_Step'] = $this->input->post('WorkingStep');
         $data['Trouble_Shoot_Video'] = $this->input->post('YoutubeVideo');
         
         $result = $this->All_Insert_For_Admin->ToubleShootUpload($data);
         if($result==1){
                $sdata = array();
                $sdata['successmsg'] = "Trouble Shoot Add Successfully";
                $this->session->set_userdata($sdata);
                redirect('super-admin/AddTroubleShoot','refresh'); 
                }
            else{
                $sdata = array();
                $sdata['successmsg'] = "Trouble Shoot Add Fail";
                $this->session->set_userdata($sdata);
                redirect('super-admin/AddTroubleShoot','refresh'); 
            }
      }
   //----------------------Add Trouble Shoot------------------------------
      
  //----------------------Add Software-----------------------------------
        
        public function  AddSoftware(){
            $data = array();
            $data['SoftwareList'] = $this->All_select_for_admin->SoftwareList();
            $data['SoftwareTypeList'] = $this->All_select_for_admin->SoftwareType();
            $this->load->view('Software Add', $data);
        }
        
        public function  UploadSoftware(){
            $data = array();
            $data['Software_Name'] = $this->input->post('softwareName');
            $data['Software_Download_Link'] = $this->input->post('DownloadUrl');
            $data['Software_Type_Id'] = $this->input->post('softwareType');
            $result = $this->All_Insert_For_Admin->UploadSoftware($data);
            if($result==1){
                $sdata = array();
                $sdata['successmsg'] = "Software Add Successfully";
                $this->session->set_userdata($sdata);
                redirect('super-admin/AddSoftware','refresh'); 
                }
            else{
                $sdata = array();
                $sdata['successmsg'] = "Software Add Fail";
                $this->session->set_userdata($sdata);
                redirect('super-admin/AddSoftware','refresh'); 
            } 
        }
  //----------------------Add Software-----------------------------------
}
