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
        <div class="panel-heading"><h3>Description 2nd Title</h3></div>
        <div class="panel-body">
            <div class="row">
                
            <form method="POST" style="overflow:scroll; max-height:500px" action="<?php echo base_url();?>super_admin/TitleAdd" enctype="multipart/form-data">
                <div class="container col-sm-4">
                    <h2 class="text-primary">Solution 2nd Title <a href="<?php echo base_url(); ?>super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
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
                        <select class="form-control" id="solutiontitle" name="solutionid">
                            <?php
                              echo '<option value="" selected disabled>Select Solution Name</option>';
                              foreach($SolutionNameList as $d){
                                 echo '<option value="'.$d->Solution_Id.'">'.$d->Solution_Name.'</option>'; 
                              }
                            ?>
                       </select>
                    </div>
                        
                    <div class="form-group">
                        <label for="email">2nd Description Title:</label>
                        <input type="text" name="title" class="form-control" id="">
                    </div>
                    <button id="subbutton" type="submit" class="btn btn-primary btn-lg" disabled>Add Title</button>
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
           $('#solutiontitle').change(function(event){
              var id  = $(this).val();
              $.ajax({
                url:'<?php echo base_url(); ?>AjaxUniqueCheck/DescriptionSecondTitle',
                method:'POST',
                data:{solutionid:id},
                success:function(result){
                  if(result==1){
                   alertify.alert('Alert', 'Your Selected Solution Title Already Added!', function(){ alertify.success('Ok'); });
                  $('#subbutton').prop('disabled',true);
                }else{
                    $('#subbutton').prop('disabled',false);
                  }
                }
            });
           });
        });
    </script>
</body>
</html>


