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
        <div class="panel-heading"><h3>Solution Name</h3></div>
        <div class="panel-body">
            <div class="row">
                <div class="container col-sm-4">
                    <h2 class="text-primary">Solution Setup <a href="<?php echo base_url(); ?>super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
                    <?php 
                        if($successmsg){
                        echo "<div id='dhide' class='alert alert-success alert-dismissible' >
                        <a  id='successmsg' class='close' data-dismiss='alert' style='cursor:pointer' aria-label='close'>&times;</a>
                        <strong>Success!</strong>$successmsg
                        </div>";
                        $this->session->unset_userdata('successmsg');
                        }
                    ?>
                    <form method="POST" style="overflow:scroll; max-height:400px" action="<?php echo base_url();?>super_admin/SolutinNameAdd" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Solution Name:</label>
                        <input type="text" name="SolutionName" class="form-control" id="">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Sort Description:</label>
                        <input type="text" name="sortdescription" class="form-control" id="sortdescription">
                    </div>
                        
                    <div class="form-group">
                        <label for="email">Solution Name:</label>
                        <input type="file" name="SolutionImage" class="form-control" id="">
                    </div>
                        <button type="submit" class="btn btn-primary btn-lg" id="SolutionaddButton">Add</button>
                   </form>
                </div>
                
                
                
                <div class="container col-sm-8" style="overflow:scroll">
                    <h2 class="text-success">Product List</h2>
                    <form method="POST" style="overflow:scroll; max-height:400px" action="">
                        <table id="example" class="display table-hover" style="width:100%">
                        <thead>
                            <tr style="background-color:#b7cef3">
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $slno = 0;
                                foreach($SolutionNameList as $d){
                                ++$slno;
                                echo"<tr><td>$slno</td>
                                    <td>$d->Solution_Name</td>
                                    <td><a href='' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'>Edit</a></td>
                                    <td><a href='' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span>Delete</a></td></tr>";
                                    }
                                ?>       
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sl No</th>
                                <th>Category Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                    </table>
                    </form>
                </div>
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
            
            $('#sortdescription').keyup(function(){
                var max = 72;
                var len = $(this).val().length;
                if (len >max) {
                  alert('Max 72 character support in sort description');
                  $('#SolutionaddButton').prop('disabled',true);
                }
                else{
                   $('#SolutionaddButton').prop('disabled',false); 
                }
            })
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


