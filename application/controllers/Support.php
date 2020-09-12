<?php
class Support extends CI_Controller{
    public function index(){
       $data = array();
       $data['SolutionMenu'] = $this->All_Select_For_View->SolutionMenu();
       $data['TroubleShootList'] = $this->All_select_for_admin->TroubleShootList();
       $data['SoftwareList'] = $this->All_Select_For_View->SoftwareType();
       $this->load->view('Support',$data);
    }
   
    public function TroubleDetalis(){
       $Id = $_POST['TroubleId'];
       $result =  $this->All_Select_For_View->TroubleDetailsSelect($Id);
       if($result){
           echo '<div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="InfoPannel">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div style="margin-top:10px;" class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Problems Solve Working Process</h4>
                    </div>
                    
                    <div class="panel-body" style="padding:0px;max-height:350px;overflow:scroll;">
                        <pre style="font-family:normal;font-size:17px;background-color: white;">'.$result->Trouble_Shoot_Step.'</pre>
                    </div>
                    
                    <div class="panel-heading">
                        <h4 class="panel-title">'.$result->Trouble_Shoot_Name. 'Solve Video</h4>
                    </div>
                    
                    <div class="panel-body" style="padding:0px;">
                     '.$result->Trouble_Shoot_Video.'
                    </div>
                </div>
            </div>
            </div>';
       }
       else{
           echo "Probles Solve At present Not Found";
       }
   }
   
   public function  SoftwareSelectByType(){
       $type = $_POST['TypeId'];
       $result =  $this->All_Select_For_View->TypeSoftwareSelect($type);
       if(!empty($result)){ ?>
        <div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="InfoPannel">
                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div style="margin-top:10px;" class="panel panel-primary">
                         <div class="panel-heading">
                             <h4 class="panel-title">Download Your Needed Software</h4>
                         </div>
                         <?php
                         foreach($result as $d){
                            echo '<div style="background-color:#fffdfe;color:#d71920;font-size:17px;border-bottom:1px solid #d71920;" class="panel-heading">'.$d->Software_Name.'<a style="float:right;padding:0px;color:#d71920;" href="'.$d->Software_Download_Link.'" rel="nofollow" target="_blank"><span class="glyphicon glyphicon-download-alt"></span>Download</a></div>';  
                         }
                         ?>

                        <div class="panel-footer">Download Your Needed Software</div>
                     </div>
                 </div>
         </div>
       <?php }
       else{ ?>
          <div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="InfoPannel">
                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                     <div style="margin-top:10px;" class="panel panel-primary">
                         <div class="panel-heading">
                             <h4 class="panel-title">Download Your Needed Software</h4>
                         </div>
                         <div style="background-color:#fffdfe;color:#d71920;font-size: 17px;" class="panel-heading">Could Not Found Your Selected Category Software</div>
                        <div class="panel-footer">Download Your Needed Software</div>
                     </div>
                 </div>
         </div> 
      <?php }
    }
}