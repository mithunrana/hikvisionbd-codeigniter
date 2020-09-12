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
  <script src="<?php echo base_url(); ?>self js/alertify.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/alertify.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/default.css">
</head>
<body>
 
<div class="container-fluid"> 
  <div class="panel-group">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3>Network Camera</h3></div>
        <div class="panel-body">
            <div class="row">
                <div class="container col-sm-6">
                    <h2 class="text-primary">Network Camera Add Here<a href="<?php echo base_url(); ?>super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
                    <?php 
                        if($successmsg){
                        echo "<div id='dhide' class='alert alert-success alert-dismissible' >
                        <a  id='successmsg' class='close' data-dismiss='alert' style='cursor:pointer' aria-label='close'>&times;</a>
                        <strong>Success!</strong>$successmsg
                        </div>";
                        $this->session->unset_userdata('successmsg');
                        }
                    ?>
                    <form action="<?php echo base_url(); ?>super_admin/UploadProducts" method="POST" enctype="multipart/form-data" style="overflow:scroll; max-height:400px">
                        
                        <div class="row">
                            <div class="container col-sm-6">
                               <div class="form-group">
                                    <label for="sel1">Root Product Category:</label>
                                    <select class="form-control" id="ParentCategory">
                                        <option value="" selected disabled>select root category</option>
                                        <?php 
                                            foreach($category as $d){
                                              echo "<option value='$d->Category_Id'>$d->Category_Name</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="container col-sm-6">
                                <div class="form-group">
                                    <label for="sel1">Product Subcategory:</label>
                                    <select class="form-control" id="subcategory" name="productCategory" required="">
                                        <option value="">Select sub category</option>
                                    </select>
                                 </div>
                            </div>
                        </div>
                      
                        
                        
                        <div class="panel-group">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse1">Camera Model With Name</a>
                              </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Camera Model:</label>
                                        <input name="cameramodel" id="cameramodel" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Camera Name:</label>
                                        <input name="cameraname" type="text" class="form-control">
                                    </div>
                                </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        
                        <div class="panel-group">
                          <div class="panel panel-info">
                            <div class="panel-heading">
                              <h4 class="panel-title">
                                <a data-toggle="collapse" data-target="#collapse2" href="#collapse2">Product Image With Description</a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">image:</label>
                                        <input  id="selectimage" name="cameraimage" type="file" class="form-control">
                                    </div>
                                </li>
                                
                                <img class="img-thumbnail" id="preview_img" src="" style="max-height: 100%;max-width: 100%;margin: auto;">
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">sort Description:</label>
                                        <textarea rows="4" name="description" type="text" class="form-control">
                                            
                                        </textarea>
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Pdf Link:</label>
                                        <input type="text" class="form-control" name="pdflink" placeholder="">
                                    </div>
                                </li>
                                </ul>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="AddProductButton" disabled>Upload Camera</button>
                   </form>
                </div>
                
                
                
                <div class="container col-sm-6" style="overflow:scroll">
                    <h2 class="text-success">Product List</h2>
                    <form method="POST" style="overflow:scroll; max-height:400px" action="">
                        <table id="example" class="display table-hover" style="width:100%">
                        <thead>
                            <tr style="background-color:#b7cef3">
                                <th>Model</th>
                                <th>Name</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delte</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($productList as $d){
                                echo "<tr>
                                <td>$d->Model</td>
                                <td>$d->Name</td>
                                <td><a href='' class='btn btn-info'><span class='glyphicon glyphicon-modal-window'></span>View</a></td>
                                <td><a href='' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'>Edit</a></td>
                                <td><a href='' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span>Delete</a></td>
                                </tr>";
                                }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
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
            
            $("#selectimage").change(function(){
              readImageData(this);
            });
            
            
            $('#cameramodel').keyup(function(){
              var Model = $(this).val();
              $.ajax({
                url:'<?php echo base_url(); ?>AjaxUniqueCheck/ProductUnique',
                method:'POST',
                data:{ProductModel:Model},
                success:function(result){
                  if(result==1){
                    $('#AddProductButton').prop('disabled',true);
                    alertify.alert('Alert', 'Inserted Product Model Already Added!', function(){ alertify.success('Ok'); });
                  }
                  else{
                    $('#AddProductButton').prop('disabled',false);
                  }
                }
              });
            });
            
            
            $('#ParentCategory').change(function(){
                var ParentCategoryId = $(this).val();
                $.ajax({
                url:'<?php echo base_url(); ?>Super_admin/SubCategoryByParentCategoryId',
                method:'POST',
                data:{categoryId:ParentCategoryId},
                success:function(result){
                 $('#subcategory').html(result);
                }
               });  
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
