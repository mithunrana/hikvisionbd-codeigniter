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
        <div class="panel-heading"><h3>Video Recorder</h3></div>
        <div class="panel-body">
            <div class="row">
                <div class="container col-sm-6">
                    <h2 class="text-primary">Recorder Add Here</h2>
                    <form method="GET" style="overflow:scroll; max-height:400px" action="">
                        
                        <div class="row">
                            <div class="container col-sm-6">
                               <div class="form-group">
                                    <label for="sel1">Product Category:</label>
                                    <select class="form-control" id="sel1">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="container col-sm-6">
                                <div class="form-group">
                                    <label for="sel1">Product Sub category:</label>
                                    <select class="form-control" id="sel1">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
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
                                        <input name="cameramodel" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse3">Compression Standard Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Video Compression:</label>
                                        <input name="videocompression" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Audio Compression:</label>
                                        <input name="audiocompression" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Video Bit Rate:</label>
                                        <input name="videobitrate" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Audio Bit Rate:</label>
                                        <input  name="audiobitrate" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">H.264 Type:</label>
                                        <input name="h.256codecprofile" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">H.264+:</label>
                                        <input name="h.264plus" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">H.265 Type:</label>
                                        <input name="h.265type" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">H.265+ :</label>
                                        <input name="h.265plus" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Dual Streams :</label>
                                        <input name="dualstreams" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse2">Camera Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Image Sensor :</label>
                                        <input name="imagesensor" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Min. Illumination :</label>
                                        <input name="minillumination" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Shutter Speed :</label>
                                        <input name="shutterspeed" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Lens :</label>
                                        <input name="lens" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Lens Mount :</label>
                                        <input name="lensmount" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Day &Night :</label>
                                        <input name="daynight" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Digital Noise Reduction :</label>
                                        <input name="digitalnoisereducation" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Wide Dynamic Range :</label>
                                        <input name="witedynamicrange" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse4">Image Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Max. Resolution :</label>
                                        <input name="maxresulation" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Frame Rate :</label>
                                        <input name="framerate" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Third Stream :</label>
                                        <input name="thirdstream" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Image Enhancement:</label>
                                        <input name="imageenhancement" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Image Setting :</label>
                                        <input name="imagesetting" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Day/Night Switch :</label>
                                        <input name="deynightswitch" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Picture Overlay :</label>
                                        <input name="pictureoverlay" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Regional Cropping:</label>
                                        <input name="regionalcroping" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Max Frame Rate:</label>
                                        <input name="maxframerate" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Sub Stream:</label>
                                        <input name="substream" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Backlight compensation:</label>
                                        <input name="Backlightcompensation" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Backlight compensation:</label>
                                        <input name="Backlightcompensation" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">ROI:</label>
                                        <input name="roi" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Main Stream:</label>
                                        <input name="mainstream" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Fourth Stream:</label>
                                        <input name="forthstreram" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Fifth Stream:</label>
                                        <input name="fifthstream" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Custom Stream:</label>
                                        <input name="coustomstream" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Target Cropping:</label>
                                        <input name="targetcroping" type="text" class="form-control">
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">SVC:</label>
                                        <input name="svc" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse5">Network Parameter Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse5" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Network Storage :</label>
                                        <input name="networkstorage" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Alarm Trigger :</label>
                                        <input name="alarmtriger" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Protocols :</label>
                                        <input name="protocol" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Security :</label>
                                        <input name="security" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Standard :</label>
                                        <input name="standard" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Detection :</label>
                                        <input name="detection" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">General :</label>
                                        <input name="general" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Security Measures :</label>
                                        <input name="securitymeasure" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">API :</label>
                                        <input name="api" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Simultaneous Live View :</label>
                                        <input name="simultaneous" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">User/Host :</label>
                                        <input name="userhost" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Client :</label>
                                        <input name="client" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Web Browser :</label>
                                        <input name="webbrowser" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse6">Interface Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse6" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Audio :</label>
                                        <input name="Audiointerface" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Communication Interface:</label>
                                        <input name="CommunicationInterface" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Alarm:</label>
                                        <input name="Alarminterface" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Video Output :</label>
                                        <input name="VideoOutputiterface" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">On-board storage :</label>
                                        <input name="onboardstorage" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Reset Button :</label>
                                        <input name="resetbutton" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">BNC :</label>
                                        <input name="BNCinterface" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse7">Smart Feature Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse7" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Behavior Analysis :</label>
                                        <input name="BehaviorAnalysis" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Line Crossing Detection:</label>
                                        <input name="LineCrossingDetection" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Intrusion Detection:</label>
                                        <input name="IntrusionDetection" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Region Entrance:</label>
                                        <input name="RegionEntrance" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Region Exiting:</label>
                                        <input name="RegionExiting" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Unattended Baggage:</label>
                                        <input name="UnattendedBaggage" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Object Removal :</label>
                                        <input name="ObjectRemoval" type="text" class="form-control">
                                    </div>
                                </li> 
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Exception Detections :</label>
                                        <input name="ExceptionDetections" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Face Detection :</label>
                                        <input name="FaceDetection" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Statistics :</label>
                                        <input name="Statistics" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse8">Wi-Fi Specification Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse8" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Wireless Standards :</label>
                                        <input name="WirelessStandards" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Frequency Range:</label>
                                        <input name="FrequencyRange" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Channel Bandwidth:</label>
                                        <input name="ChannelBandwidth" type="text" class="form-control">
                                    </div>
                                </li>
                                
                                
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Wireless Range :</label>
                                        <input name="WirelessRange" type="text" class="form-control">
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
                                <a data-toggle="collapse" href="#collapse9">Lens Parameter</a>
                              </h4>
                            </div>
                            <div id="collapse9" class="panel-collapse collapse">
                              <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="form-group">
                                        <label for="pwd">Lens Mount :</label>
                                        <input name="LensMount" type="text" class="form-control">
                                    </div>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <script>
        $(document).ready(function(){
            $('#example').DataTable();
        });
    </script>
</body>
</html>

