<?php
    $successmsg = $this->session->userdata('successmsg');
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>self js/alertify.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/alertify.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/default.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container com-sm-7">
            <div class="panel-group">
                 <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Trouble Shooting Add Here</h3></div>
                        <div class="panel-body">
                            <div class="row">
                            <div class="container col-sm-6">
                                <h2>Trouble Shoot Add form<a href="<?php echo base_url(); ?>super_admin" class="btn btn-primary" style="float:right">Admin Pannel</a></h2>
                                <?php 
                                    if($successmsg){
                                    echo "<div id='dhide' class='alert alert-success alert-dismissible' >
                                    <a  id='successmsg' class='close' data-dismiss='alert' style='cursor:pointer' aria-label='close'>&times;</a>
                                    <strong>Success!</strong>$successmsg
                                    </div>";
                                    $this->session->unset_userdata('successmsg');
                                    }
                                ?>
                                <form action="<?php echo base_url() ?>Super_admin/UploadSoftware" method="POST">
                                    <div class="form-group">
                                        <label for="SoftwareType">Which This Software:</label>
                                        <select class="form-control" id="SoftwareType" name="softwareType" required="Select Software Type">
                                            <option value="" selected disabled>Select Software Type</option>
                                            <?php
                                             foreach($SoftwareTypeList as $d){
                                                echo'<option value="'.$d->Software_Type_Id.'">'.$d->Software_Type_Name.'</option>';  
                                             }
                                            ?>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="email">Trouble Shoot Name:</label>
                                      <input type="text" class="form-control" name="softwareName" id="softwareName" placeholder="Enter Trouble Shoot Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Embedded URL:</label>
                                        <textarea name="DownloadUrl" class="form-control" rows="3" id="comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                                
                                
                                
                            <div class="container col-sm-6" style="overflow:scroll">
                                <h2 class="text-success">Trouble List</h2>
                                <form method="POST" style="overflow:scroll; max-height:400px" action="">
                                    <table id="example" class="display table-hover" style="width:100%">
                                    <thead>
                                        <tr style="background-color:#b7cef3">
                                            <th>Sl-no</th>
                                            <th>Trouble Name</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delte</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $sl = 0;
                                            foreach ($SoftwareList as $d){
                                            ++$sl;
                                            echo "<tr>
                                            <td>$sl</td>
                                            <td>$d->Software_Name</td>
                                            <td><a href='' class='btn btn-info'><span class='glyphicon glyphicon-modal-window'></span>View</a></td>
                                            <td><a href='' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'>Edit</a></td>
                                            <td><a href='' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span>Delete</a></td>
                                            </tr>";
                                            }
                                        ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl-no</th>
                                            <th>Software Name</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delte</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                </form>
                            </div>
                            </div>
                        </div>
                    <div class="panel-footer">Hikvision Software Add Here</div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
</html>
