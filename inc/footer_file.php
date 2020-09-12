<footer style="width:96%;margin:auto;">
    <div class="container">        
        <div class="top-footer"><!--top footer starts from here-->
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <h5>Bangladesh Operations</h5>
                    <div class="img-wrap">
                        <a href="">
                            <img src="<?php echo base_url() ?>our_service_operation_map.png" alt="map" style="max-width: 100%;max-height: 100%;"/>
                        </a>
                    </div>
                </div>
                
    <div class="col-md-6 col-sm-6 col-xs-12 footer_menu">
        <ul class="main-list">
			<li>
                            <h5>Solutions</h5>
				<ul class="inner-list">					
				<?php  
            foreach($SolutionMenu as $d){
               echo '<li style="background-color:transparent;" id="" class="menu-item menu-item-392 strong item menu-item-level-1">
                      <a href="'. base_url().'solution/'.str_replace(" ","-",$d->Solution_Name).'/'.$d->Solution_Id.'" title="" class="menu-title" target="_self">'.$d->Solution_Name.'</a>
                    </li>';
            }
            ?>										
                </ul>
               </li>

			<li>
                            <h5>Corporate</h5>
                            <ul class="inner-list">
                                <li><a href="<?php echo base_url(); ?>success-history-hikvision">About Hikvision</a></li>
				<li><a href="<?php echo base_url(); ?>career-hikvision">Career</a></li>
				<li><a href="<?php echo base_url(); ?>contact-us">Contact Us</a></li>																																																														
                            </ul>
                        </li>
        </ul>
   </div>  
            <div class="col-md-3 col-sm-3 col-xs-12 no-rightpadding">
                <h5>#1 ranking in A&amp;S Security 50</h5>
                <p>Hikvision has achieved number one overall position, being placed at the highest of the rankings in A&S Magazines.</p>
                    <button type="button" class="btn subscribe-btn" data-toggle="modal" data-target="#subscribeModal">Subscribe to Newsletter <span class="msg-box fa fa-envelope"></span></button>

                    <div class="social-icons">
                        <ul>
                            <li class="uppercase">Follow us :</li>
                            <li><a href="" target="_blank" class="fa fa-facebook"></a></li>
                            <li><a href=""  target="_blank" class="fa fa-twitter"></a></li>
                            <li><a href="" target="_blank" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
            </div>
            </div>
            
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <a href="<?php echo base_url(); ?>" style="color:white;"><p class="uppercase">HIKVISION DISCLAIMER: HIKVISION doesn't SUPPORT PURCHASES created THROUGH UNAUTHORIZED CHANNELS</p></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="social-icons download">
                        <ul>
                            <li class="uppercase">Download :</li>
                            <li><a href="" target="_blank" class="fa fa-android"></a></li>
                            <li><a href="" target="_blank" class="fa fa-apple"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="bootom-footer"><!--bottom footer starts from here-->
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
                    <p>2018 Mega Trading Digital Technology Co. All Rights Reserved.</p>
                    <p>Dessign Development By <a style="color:white;font-size: 17px;" target="_blank" href="https://www.mithunrana.com">Mithun Rana</a></p>
                    <div class="list">
                        <ul>
                            <li><a data-target="#legal" data-toggle="modal" href="javascript:void(0);">Legal </a><span class="pipe">|</span></li>
                            <li><a href="">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-top">
        <a href="javascript:void(0);" id="scrollToTop"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>
</footer>