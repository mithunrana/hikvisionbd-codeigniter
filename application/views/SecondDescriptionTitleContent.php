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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container-fluid">  
  <div class="panel-group">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3>Description 2nd Title</h3></div>
        <div class="panel-body">
            <div class="row">
                
            <form method="POST" style="overflow:scroll; max-height:500px" action="<?php echo base_url();?>super_admin/Second_Description_Contet" enctype="multipart/form-data">
                <div class="container col-sm-4">
                    <h2 class="text-primary">2nd Title Content <a href="<?php echo base_url(); ?>super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
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
                        <select class="form-control" id="sel1" name="Description_title_id" required>
                            <?php
                              echo '<option value="" selected disabled>Select Solution Title</option>';
                              foreach($SolutionNameList as $d){
                                 echo '<option value="'.$d->Solution_D2_Id.'">'.$d->Solution_Name.' || '.$d->SolutionTitle.'</option>'; 
                              }
                            ?>
                       </select>
                    </div>
                        
                    <div class="form-group">
                        <label for="email">2nd Description Ttile Content:</label>
                        <textarea rows="5" type="text" name="SecondSolutionDescriptinContent" class="form-control" id=""></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">2nd Description Content</button>
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
            $('#example').DataTable();
            $("#selecteaccessimage").change(function(){
             readImageData(this);
            });
        });
        
        function readImageData(imgData)
        {
            if (imgData.files && imgData.files[0])
            {
                var readerObj = new FileReader();
                readerObj.onload = function (element)
                {
                 $('#preview_img').attr('src', element.target.result);
                };
                readerObj.readAsDataURL(imgData.files[0]);
            }
        }
    </script>
</body>
</html>


