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
        <div class="panel-heading"><h3>Solution Description Setup</h3></div>
        <div class="panel-body">
            <div class="row">
                
            <form method="POST" style="overflow:scroll; max-height:500px" action="<?php echo base_url();?>super_admin/SolutionUpload" enctype="multipart/form-data">
                <div class="container col-sm-4">
                    <h2 class="text-primary">Blog Description <a href="<?php echo base_url(); ?>Super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
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
                        <select class="form-control" id="sel1" name="solutionid" required>
                            <?php
                              echo '<option value="" selected disabled>Select Solution Name</option>';
                              foreach($SolutionNameList as $d){
                                 echo '<option value="'.$d->Solution_Id.'">'.$d->Solution_Name.'</option>'; 
                              }
                            ?>
                       </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Solution Blog Title:</label>
                        <input type="text" name="SolutionBlogTitle" class="form-control"  required>
                    </div>
                    
                    <div class="form-group">
                        <label for="image">Solution Blog Image:</label>
                        <input type="file" name="SolutionBlogImage" class="form-control" id="SolutionblogImag" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Select Product Category:</label>
                        <select class="form-control"  name="producatcategory" id="rootproductcategory">
                            <?php
                              echo '<option value="" selected disabled>Select Product Category</option>';
                              foreach($ProductCategory as $d){
                                 echo '<option value="'.$d->Category_Id.'">'.$d->Category_Name.'</option>'; 
                              }
                            ?>
                        </select>
                    </div>
                        
                    <div class="form-group">
                        <label for="email">Select Product Sub-category:</label>
                        <select class="form-control" id="prosubcategory" name="subcategoryid">
                            <option value="">Select Sub category</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Select Product For Recommend:</label>
                        <select class="form-control" id="RecomededProduct" name="RecomededProduct">
                            <option value="">Select recommend Product</option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-lg">Upload</button>
                    <p id="rpaddbutton" class="btn btn-success btn-sm">RP-Add</p>
                </div>
                
                
                
                <div class="container col-sm-8" style="overflow:scroll">
                    <h2 class="text-success">Solution Blog Description</h2>
                    <div class="form-group">
                        <label for="email">Selected Solution image:</label>
                        <img src="" style="max-height:250px;width:100%;border:1px solid black;" id="selectedimage"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Solution Blog Description:</label>
                        <textarea  name="BlogDescription" class="form-control" rows="5" id="comment" required></textarea>
                    </div>
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
            $("#SolutionblogImag").change(function(){
             readImageData(this);
            });
        });
        
        
        $('#rootproductcategory').change(function(){
                var ParentCategoryId = $(this).val();
                $.ajax({
                url:'<?php echo base_url(); ?>Super_admin/SubCategoryByParentCategoryId',
                method:'POST',
                data:{categoryId:ParentCategoryId},
                success:function(result){
                 $('#prosubcategory').html(result);
                 $('#prosubcategory').append('<option value="" selected disabled>select</option>');
                }
            });  
        });
        
        $('#prosubcategory').change(function(){
          var SubcategoryID = $(this).val();
          $.ajax({
                url:'<?php echo base_url(); ?>Super_admin/ProductSelectBySubCategoryId',
                method:'POST',
                data:{categoryId:SubcategoryID},
                success:function(result){
                  //alert(result);
                  $('#RecomededProduct').html(result);
                 //$('#RecomededProduct').append('<option value="" selected disabled>Select Recomeded Product</option>');
                }
            });  
        });
        
        
        $('#rpaddbutton').click(function(){
          var proid =  $('#RecomededProduct').val();
          if(proid==""){
              alert('Product Id Null');
          }else if(proid===null){
              alert('Your product is is null');
             
          }
          else{
              $.ajax({
                url:'<?php echo base_url(); ?>Super_admin/TempProductAdd',
                method:'POST',
                data:{categoryId:proid},
                success:function(result){
                 alert(result);
                }
              });
          }
        });
        
        function readImageData(imgData)
        {
            if (imgData.files && imgData.files[0])
            {
                var readerObj = new FileReader();
                readerObj.onload = function (element)
                {
                 $('#selectedimage').attr('src', element.target.result);
                };
                readerObj.readAsDataURL(imgData.files[0]);
            }
        }
    </script>
</body>
</html>