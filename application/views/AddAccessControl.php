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
        <div class="panel-heading"><h3>Access Control</h3></div>
        <div class="panel-body">
            <div class="row">
                <div class="container col-sm-6">
                    <h2 class="text-primary">Access Control Add <a href="<?php echo base_url(); ?>super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
                   <!-- <form method="POST" style="overflow:scroll; max-height:400px" action="<?php echo base_url(); ?>super_admin/AccessControlUpload" enctype="multipart/form-data">
                        
                        <input type="submit" value="upload" name="upload">
                    </form>-->
                    <form action="<?php echo base_url(); ?>super_admin/AccessControlUpload" method="POST" enctype="multipart/form-data">
                        Select image to upload:
                        <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" value="Upload Image" name="submit">
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
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td><a href="" class="btn btn-info"><span class="glyphicon glyphicon-modal-window"></span>View</a></td>
                                <td><a href="" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit</a></td>
                                <td><a href="" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>Delete</a></td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>view</td>
                                <td>edit</td>
                                <td><a href="" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>view</td>
                                <td>edit</td>
                                <td>Delte</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>view</td>
                                <td>edit</td>
                                <td>Delte</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>view</td>
                                <td>edit</td>
                                <td>Delte</td>
                            </tr>
                          
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
                    <button type="submit" class="btn btn-danger">Delete</button>
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


