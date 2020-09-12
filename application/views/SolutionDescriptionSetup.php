<?php
    $successmsg = $this->session->userdata('successmsg');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>self js/alertify.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/alertify.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/default.css">
</head>
<body>
 
<div class="container-fluid">  
  <div class="panel-group">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3>Solution Description Setup</h3></div>
        <div class="panel-body">
            <div class="row">
                
            <form method="POST" style="overflow:scroll; max-height:500px" action="<?php echo base_url();?>super_admin/SolutionDescriptionUpload" enctype="multipart/form-data">
                <div class="container col-sm-4">
                    <h2 class="text-primary">Solution Description <a href="<?php echo base_url(); ?>super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
                    <?php 
                        if($successmsg){
                        echo "<div id='dhide' class='alert alert-success alert-dismissible' >
                        <a  id='successmsg' class='close' data-dismiss='alert' style='cursor:pointer' aria-label='close'>&times;</a>
                        <strong>Success!</strong>$successmsg
                        </div>";
                        $this->session->unset_userdata('successmsg');
                        }
                    ?>
                    
                    <div class="form-group">
                        <label for="email">Solution Name:</label>
                        <select class="form-control" id="SolutionId" name="solutionid" required>
                            <?php
                              echo '<option value="" selected disabled>Select Solution Name</option>';
                              foreach($SolutionNameList as $d){
                                 echo '<option value="'.$d->Solution_Id.'">'.$d->Solution_Name.'</option>'; 
                              }
                            ?>
                       </select>
                    </div>
                        
                    <div class="form-group">
                        <label for="email">Youtube Link:</label>
                        <input type="text" name="youtubelink" class="form-control" id="" required>
                    </div>
                        
                    <div class="form-group">
                        <label for="email">Download Link:</label>
                        <input type="text" name="Downloadlink" class="form-control" id="" required>
                    </div>
                        
                    <div class="form-group">
                        <label for="email">Solution Banner Image:</label>
                        <input type="file" name="SolutionBannerImage" class="form-control" id="bannerimg" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Solution Application Image:</label>
                        <input type="file" name="SolutionApplicationImage" class="form-control" id="Applicationimg" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg" id="subbutton" disabled>Description Upload</button>
                    
                </div>
                
                
                
                <div class="container col-sm-8" style="overflow:scroll">
                    <h2 class="text-success">Solution Description</h2>
                    <div class="form-group">
                        <label for="email">Solution Description:</label>
                        <textarea  name="descriptionid" class="form-control" rows="5" id="comment" required></textarea>
                    </div>
                    <p>Application Image:</p>
                    <img src="" id="ApplicationImage" style="max-height:250px;width:100%;" class="img-thumbnail">
                    <p>Banner Image:</p>
                    <img src="" id="bannerimage" style="max-height:250px;width:100%;" class="img-thumbnail">
                </div>
            </form>
            </div>
        </div>
        <div class="panel-footer" style="background-color:#c7c9cd;">Panel Footer</div>
    </div>
  </div>
</div>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $('#SolutionId').change(function(){
                var SolutionId = $(this).val();
                $.ajax({
                url:'<?php echo base_url(); ?>AjaxUniqueCheck/SolutionDescriptionUnique',
                method:'POST',
                data:{solutionid:SolutionId},
                success:function(result){
                  if(result==1){
                   alertify.alert('Alert', 'Your Selected Solution Descriptin Already Added!', function(){ alertify.success('Ok'); });
                  $('#subbutton').prop('disabled' , true);
                  //alertify.error('Error message');
                  }else{
                      $('#subbutton').prop('disabled' , false);
                  }
                }
            });
            });
            
            $("#Applicationimg").change(function(){
             readImageData(this);
            });
            
            $('#bannerimg').change(function(){
                readImageData2(this);
            });

        });
        
        function readImageData(imgData)
        {
            if (imgData.files && imgData.files[0])
            {
                var readerObj = new FileReader();
                readerObj.onload = function (element)
                {
                 $('#ApplicationImage').attr('src', element.target.result);
                };
                readerObj.readAsDataURL(imgData.files[0]);
            }
        }
        
        function readImageData2(imgData)
        {
            if (imgData.files && imgData.files[0])
            {
                var readerObj = new FileReader();
                readerObj.onload = function (element)
                {
                 $('#bannerimage').attr('src', element.target.result);
                };
                readerObj.readAsDataURL(imgData.files[0]);
            }
        }
    </script>
</body>
</html>


