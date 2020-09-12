<?php 
    $title = "Contact Us - Hikvision Bangladesh | Mega Trading";
    $description = "mega trading specializes in video surveillance technology, as well as designing and
                        manufacturing a full-line of innovative CCTV and video surveillance products. The product 
                        line ranges from cameras and DVRs to video management software. Since its inception in 2001,
                         Hikvision has quickly achieved a
                        leading worldwide market position in the security industry.";
    $keyword = "security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
            . "storage ,mobile dvr,mobile nvr,video intercom";
?>


<?php include('inc/headerlink.php'); ?>
</head>
<?php
    $successmsg = $this->session->userdata('successmsg');
    if($successmsg){
    echo " <script>
            jQuery(document).ready(function(){
                     alertify.alert('Message', '.$successmsg.', function(){ alertify.success('Ok'); });
                });
            </script> ";
    $this->session->unset_userdata('successmsg');
    }
?>

<body>
<div class="page-wrapper">        
<style type="text/css">
    .asterisk{
        color:red;
    }
</style>

<?php include('inc/menu_bar.php'); ?>
<?php include('inc/responsive-menubar.php'); ?>
<?php include('inc/country_flag-_for_language.php'); ?>

<div class="search-block" style="display:none;">
    <form action="<?php echo base_url(); ?>" method="get" class="form-inline search-form" onsubmit="return checkHeaderSearchForm()">
        <div class="form-group col-md-8 col-sm-8 no-padding">
            <input name="q" type="text" id="searchHeaderPageText" placeholder="What are you looking for?" autocomplete="off" class="form-control search-query">
            <div class="validationAlert" id="searchHeaderPageText_alert"></div>
        </div>
        <div class="col-md-4 col-sm-4">
            <button type="submit" class="btn btn-block btn-red search-submit">Search</button>
        </div>
    </form>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118694873-1"></script> 


<main role="main">
    <div class="middle-content">
    <div class="grey-bg contact-block">
	<div class="breadcrumb-block">
		<div class="container">
			<ol class="breadcrumb">
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
			  <li><a href="<?php echo base_url(); ?>AboutHikvision.html">Corporate</a></li>
			  <li class="active">Contact</li>
			</ol>
		</div>
	</div>
    
    <!-- For add here -->
    <div class="container">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Text & Display Responsive Add -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-2645454550256879"
         data-ad-slot="8541592705"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-format="fluid"
         data-ad-layout-key="-dq-1g+k+18+5t"
         data-ad-client="ca-pub-2645454550256879"
         data-ad-slot="2442491741"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    </div>
     <!-- For add end here -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
        <div class="map-block">
	<div class="container">
            <div class="contact-form"> 
		<div class="row">
                        <div class="col-md-9 col-sm-8 col-xs-12">
                            <div class="col-md-12 col-sm-12 col-xs-12"> 
                                <h2 class="red-txt">Contact us for your Inquiry</h2>
                            </div>
                        <div class="clearfix"></div>

                        <div id="scf-message-contactForm">

                        </div>

                        <div id="scf-form-contactForm">
                            <form method="POST" action="<?php echo base_url(); ?>PhpMailSend" accept-charset="UTF-8" class="">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label class="control-label " for="name">Your Name</label>
                                        <input id="name" name="name" class="form-control" value="" type="text" style="margin-bottom:6px" required>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label class="control-label " for="phone_no">Phone No.</label>
                                        <input id="phone_no" name="phone_no" class="form-control" value="" type="text" style="margin-bottom:6px" required>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label class="control-label " for="email">Email Address</label>
                                        <input id="email" name="email" class="form-control" value="" type="email" style="margin-bottom:6px" required>
                                    </div>
                                    
                                    <div class="clearfix"></div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                        <label class="control-label " for="enquiry_type">Customer Type</label>
                                        <select id="customertype" name="customertype" class="form-control" required>
                                            <option value="" selected disabled>Select Customer Type</option>
                                                <option value="Retailer">Retailer</option>
                                                <option value="Corporate">Corporate</option>
                                                <option value="End User">End User</option>
                                        </select>				
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12" id="company" style="display:none;">
                                        <label class="control-label " for="name">Company Name</label>
                                        <input id="name" name="companyname" class="form-control" value="" type="text" style="margin-bottom:6px">
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12 textarea-block">
                                        <label class="control-label " for="address">Address</label><input id="address" name="address" class="form-control" value="" type="text" style="margin-bottom:6px" required>
                                    </div>
                                    
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <label class="control-label " for="zip_code">Zip Code</label>
                                        <input id="zip_code" name="zip_code" class="form-control" value="" type="text" style="margin-bottom:6px" required>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                        <label class="control-label " for="enquiry_type">Enquiry Type</label>
                                        <select id="enquiry_type" name="enquiry_type" class="form-control" required>
                                                <option value="">Select Enquiry Type</option>
                                                <option value="product_quality">Product Quality</option>
                                                <option value="technical_support">Technical Support</option>
                                                <option value="sales">Sales</option>
                                                <option value="marketing">Marketing</option>
                                                <option value="website">Website</option>
                                        </select>				
                                    </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 textarea-block">
                                    <label class="control-label " for="message">Message/Query</label>
                                    <input id="message" name="message" class="form-control" value="" type="text" style="margin-bottom:6px" required>
                                </div>

                                <div id="submit-wrapper" class="col-md-12 col-sm-12 col-xs-12 textarea-block">
                                    <button type="submit" data-attach-loading class="oc-loader send-btn"><span class="fa fa-send"></span></button>
                                </div>
                            </form>
                        </div>						
                    </div>
                    <script>
                        jQuery(document).ready(function(){
                           jQuery('#customertype').change(function(){
                                var CustomerId =  jQuery('#customertype').val();
                                if((CustomerId=='Retailer')||(CustomerId=='Corporate')){
                                   jQuery('#company').show();
                                }
                                else{
                                    jQuery('#company').hide();
                                }
                           });
                        });
                    </script>                            
                    <div class="col-md-3 col-sm-4 col-xs-12 address-block">
                    <h4>Hikvision BD | Mega Trading </h4>
                    <ul class="list">
                        <li><div class="icon"><span class="fa fa-map-marker"></span></div><p>
                            Ga-92,Gulshan Badda Link Road,Dhaka-1212,Bangladesh</p>
                        </li>
                        
                        <li><div class="icon"><span class="fa fa-phone"></span></div><p>+88 01550019955</p></li>
                        
                        <li>
                            <div class="icon"><span class="fa fa-envelope"></span></div><p>info@hikvision.com.bd</p></li><br>																							
                    </ul>
                    <h4>Headquarters</h4>
                    <ul class="list">
                    <li>
                        <div class="icon"><span class="fa fa-map-marker"></span></div>
                        <p>
                           Ga-92,Gulshan Badda Link Road,Dhaka-1212,Bangladesh
                        </p>
                    </li>
                    <li><div class="icon"><span class="fa fa-phone"></span></div><p>+88 01550019955</p></li>
                    <li><div class="icon"><span class="fa fa-envelope"></span></div><p>info@hikvision.com.bd</p></li>
                        </ul>
                    </div>
                </div>
</div>
</div>
                  
        <!--<div class="country-tabs">
            <div class="container">			
            <ul class="row address-list" id="sort-me" >
            <li class="col-md-12 col-sm-12 col-sm-12 india" id="india-map">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                            <h4>Hikvision Bangladesh</h4>
                        </div>
                    </div>
                    <div class="card india-location">
                            <div class="img-wrap india_map">
                                <iframe src="https://www.google.com/maps/place/Bangladesh/@23.7927147,90.4022894,15.33z/data=!4m5!3m4!1s0x30adaaed80e18ba7:0xf2d28e0c4e1fc6b!8m2!3d23.684994!4d90.356331" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                                <ul class="list">
                                    <li><div class="icon"><span class="fa fa-map-marker"></span></div><p>North badda,Dhaka-1212,Bangladesh</p></li>
                                    <li><div class="icon"><span class="fa fa-phone"></span></div><p>+88 01915878800</p></li>
                                    <li><div class="icon"><span class="fa fa-envelope"></span></div><p><a href="mailto:sayeed.wsc@gmail.com">sayeed.wsc@gmail.com</a></p></li>
                                </ul>
                            </div>
                    </div>
            </li>								
            </ul>
            </div>
	</div>-->
    </div>
</div>
</div>
</div>

    <div class="container">
            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-format="fluid"
                 data-ad-layout-key="-fb+5w+4e-db+86"
                 data-ad-client="ca-pub-2645454550256879"
                 data-ad-slot="5657366923"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
    </div> 
    
<script type="text/javascript" src="<?php echo base_url(); ?>/themes/vojtasvoboda-vega/assets/js/jquery.sdFilterMe.js"></script>
<script type="text/javascript">

function onstateChange(stateId) {
	
	var state_id = stateId;
	if(state_id != ''){
		jQuery('#loaderDiv').show();
		jQuery.ajax({
				type:'POST',
		        url:'/admin/hikvision/branchlocator/onSelectState',
		        data: {state_id: state_id, type:'state'},
		        success:function(result){
		        	var option_html = "<option value=''>Select City</option>";
		        	if(result != ''){
			        	jQuery.each(result, function(val) {

			        		option_html += "<option value='"+result[val].id+"'>"+result[val].name+"</option>";
			        	});
		          	}
		        	jQuery('.city_dropdown').html(option_html);
		        	jQuery('#loaderDiv').hide();
		        }
		});
	}else if(state_id == ''){
		jQuery('.city_dropdown').html("<option value=''>Select City</option>");
		jQuery('#loaderDiv').hide();
	}
}

function oncityChange(cityId){
	var city_id = cityId;

		if(city_id != ''){
			jQuery('#loaderDiv').show();
			jQuery.ajax({
					type:'POST',
			        url:'/admin/hikvision/branchlocator/onSelectState',
			        data: {city_id: city_id, type:'city'},
			        success:function(result){
			        	var map_location = result[0].new_map_location;

			        	if(map_location != ''){
			        		var map_html = map_location;
							map_html += '<ul class="list">';
								map_html += '<li><div class="icon"><span class="fa fa-map-marker"></span></div><p>'+result[0].address+'</p></li>';
								if(result[0].phone_number != ''){
									map_html += '<li><div class="icon"><span class="fa fa-phone"></span></div><p>'+result[0].phone_number+'</p></li>';
								}
								if(result[0].fax_number != ''){
									map_html += '<li><div class="icon"><span class="fa fa-fax"></span></div><p>'+result[0].fax_number+'</p></li>';
								}
								if(result[0].sales_email != ''){
									map_html += '<li><div class="icon"><span class="fa fa-user"></span></div><p><a href="mailto:'+result[0].sales_email+'">'+result[0].sales_email+'</a></p></li>';
								}
								if(result[0].support_email != ''){
									map_html += '<li><div class="icon"><span class="fa fa-envelope"></span></div><p><a href="mailto:'+result[0].support_email+'">'+result[0].support_email+'</a></p></li>';
								}
							map_html += '</ul>';

			        		jQuery('.india_map').html(map_html);
			        		jQuery('#loaderDiv').hide();
			        	}
			        	
			        }
			});
		}
}

jQuery(document).ready(function(){

  jQuery('#sort-me').sdFilterMe({
      filterSelector: '.sorter', // string: selector
     
      duration: 1000, // integer: in ms
      animation: 'ease', // string: ease | ease-in | ease-out | linear | ease-in-out
      hoverEffect: true, // boolean
      sortedOut: 'disappear', // string: disappear | opacity
      css: { // object

          overlay: { // object
              background: { // object
                  r: 0, // integer: as in CSS
                  v: 0, // integer: as in CSS
                  b: 0 // integer: as in CSS
              },
              duration: 250, // integer: in ms
              border: '1px solid white', // string: as in CSS
              color: 'white', // string: color
              opacity: 0.5 // float: as in CSS
          },
          border: { // object
              width: 0, // integer: in px
              color: '#2A4153' // string: color
          },
          margin: 0, // integer: in px
          pointer: true // boolean
      },
      nothingToShow: {
          text: 'Nothing to show', // string: text
          color: '#777' // string: color
    }

  }).on('fm.boxClicked', function(e, position, order) {
        console.log('Box position is ' + position);
        
  });

  jQuery('.state-list li ').on('click',function(){
      jQuery('.state-list li').removeClass('active-work');
      jQuery(this).addClass('active-work');
  	  jQuery(".sdfm-inner-wrapper").addClass( "animated , bounceInUp");
    });
});
</script>
            </div>
            </main>
           
            <style type="text/css">
    #mypipe{
    list-style: none;
}
#mypipe li{
    display: inline;
    padding: 0 6px;
    border-left: solid 1px #fff;
}
#mypipe li:first-child{
    border-left: none;
}
</style>
<script>
  jQuery(document).ready(function($){
    $('.footer_menu ul:first').addClass('main-list');
    $('.footer_menu ul li ul').addClass('inner-list');
    $('.footer_menu ul li span').replaceWith(function () {
      return $('<h5/>', {
          html: $(this).html()
      });
    });
   
    });
  
</script>

<?php include('inc/footer_file.php'); ?>

<?php include('inc/subscribe_modal_form.php'); ?>

<script type="text/javascript">
   jQuery('#subscribeModal').on('hide.bs.modal', function () {
      jQuery("#success-alert").hide();
      jQuery('#subscriber_name').val('');
      jQuery('#subscriber_email').val('');
      jQuery('#subscriber_phone').val('');
      jQuery('#subscriber_company').val('');
      jQuery("#form_errors").html('').hide();
   });

   jQuery('#subscribeModal').on('show.bs.modal', function () {
      clearAlertMsg();
      jQuery("#success-alert").hide();
      jQuery('#subscriber_name').val('');
      jQuery('#subscriber_email').val('');
      jQuery('#subscriber_phone').val('');
      jQuery('#subscriber_company').val('');
      jQuery("#form_errors").html('').hide();
   });

   jQuery('#subscriber_save').on('click',function(){
      if(formSubscribeValidation()){
         jQuery('#loaderDiv').show();
         var data = {};
         jQuery('#form_subscribe_now').find('input').each(function() {
            data[jQuery(this).attr('name')] = jQuery(this).val();
         });
         jQuery.ajax({
            'type': 'POST',
            'url' : '/admin/hikvision/subscribenewsletter/SubscribeNewsletter/onSubscribeSave',
            'data': data,
            beforeSend : function(){
               jQuery("#subscriber_save").attr('disable', true);
            },
            success:function(response){
              if (response.success == 1) {
                  jQuery('#subscriber_name').val('');
                  jQuery('#subscriber_email').val('');
                  jQuery('#subscriber_phone').val('');
                  jQuery('#subscriber_company').val('');
                  jQuery('#success-alert').show();
                  jQuery("#subscriber_save").attr('disable', false);
              }
               jQuery('#loaderDiv').hide();
              
            },
            error: function(jqXhr, json, errorThrown){
               jQuery("#subscriber_save").attr('disable', false);
                 var statusCode = jqXhr.status; 
                 var errors = jqXhr.responseJSON;
                 console.log(statusCode);
                 if(statusCode === 422){
                     var responseJSON = JSON.parse(jqXhr.responseText);
                     jQuery.each(responseJSON.data, function(key,val) {
                         jQuery("#"+key+"_alert").html(val).show();
                     });
                 }else{
                     console.log("other than 422")
                 }

               jQuery('#loaderDiv').hide();
            }   
         });
      }
   });

   function formSubscribeValidation() {
         clearAlertMsg(); 
         var arrElemId = Array();    
         var arrCode = Array();    
         var arrRefValue = Array();    
         var arrMsg = Array();    
         var i = 0 ;

    
         arrElemId[i] = 'subscriber_name';    
         arrCode[i] = 'IS_EMPTY';     
         arrRefValue[i] = null;    
         arrMsg[i] = EMPTY_Subscriber_NAME;    
         i++;

         arrElemId[i] = 'subscriber_email';    
         arrCode[i] = 'IS_EMPTY';     
         arrRefValue[i] = null;    
         arrMsg[i] = EMPTY_EMAIL;    
         i++;

         arrElemId[i] = 'subscriber_email';    
         arrCode[i] = 'EMAIL';     
         arrRefValue[i] = null;    
         arrMsg[i] = INVALID_EMAIL;    
         i++;

         arrElemId[i] = 'subscriber_phone';    
         arrCode[i] = 'IS_EMPTY';     
         arrRefValue[i] = null;    
         arrMsg[i] = EMPTY_Subscriber_PHONE;    
         i++;

         arrElemId[i] = 'subscriber_phone';    
         arrCode[i] = 'MOBILE';     
         arrRefValue[i] = null;    
         arrMsg[i] = INVALID_MOBILE;    
         i++;

         arrElemId[i] = 'subscriber_company';    
         arrCode[i] = 'IS_EMPTY';     
         arrRefValue[i] = null;    
         arrMsg[i] = EMPTY_COMPANY_NAME;    
         i++;
      result = validate(document.getElementById("form_subscribe_now'") , arrElemId , arrCode , arrRefValue , arrMsg );
      return result;    
   }

   jQuery('document').ready(function(){
      jQuery('#subscriber_phone').ForceNumericOnly();
   })

   function validate_email( email ) {
      var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      if (filter.test(email)) {
         return true;
      }else {
         return false;
      }   
   }
</script>

    <?php  include('inc/sidebar_event.php'); ?>

<div class="modal alert-modal fade" id="alertbox" tabindex="-1" role="dialog" aria-labelledby="privacyLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title" id="privacyLabel">Alert</h1>
      </div>
      <div class="modal-body">
        <p id="modalData"></p>
        <button class="btn btn-primary" type="submit" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

        
<script type="text/javascript">
var jq=jQuery.noConflict();
jq(document).on('ready', function() {
    /* for serach box jquery*/
    jq('.search-icon > a').click(function(){
        jq('.search-block').slideToggle(300);
    });
    /* for login box jquery*/
    jq('.user-login').click(function(){
        jq('#loginModal').modal('show');
        jq('#registerModal').modal('hide');
        jq('.search-block').slideUp(300);
    });
    jq('.forgot-link').click(function(){
        jq('.login-form').hide();
        jq('.forgot-form').show(100); 
    });

    jq('#back-arrow').click(function(){
      jq('.login-form').show();
      jq('.forgot-form').hide(100);   
    });


    jq(".middle-content").click(function(){
      jq('.search-block').slideUp(300);
    }); 
    jq('#register-btn').click(function(){
      jq('#loginModal').modal('hide');
      jq('#registerModal').modal('show');
    });


}); 
</script>
</div>  
       
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/jquery.eislideshow.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/main.js"></script>
  
    <script>
    jQuery(document).ready(function($){
        $(".alert-success, .alert-danger").fadeOut('1000');
         $(window).scroll(function() {
            if ( $(this).scrollTop() > 50 ) {
                $('#scrollToTop').addClass('show');
            } else {
                $('#scrollToTop').removeClass('show');
            }
        });
        $('#scrollToTop').on('click', function() {            
            $("html, body").animate({ scrollTop: 0 }, 1000 );
            return false;
        });
        $(function () {
              $('[data-toggle="tooltip"]').tooltip();
              // $('#primaryMobNavbar .has-arrow').collapse();
            })

    });
    
     jQuery('#ei-slider').eislideshow({
                    animation           : 'center',
                    autoplay            : true,
                    slideshow_interval  : 3000,
                    titlesFactor        : 0
                });
     
   (function($){
        $(window).on("load",function(){
            $(".content").mCustomScrollbar();
        });
    })(jQuery);
    
  </script>
</body>
    <script>
       
    </script>
<script type="text/javascript" src="<?php base_url() ?>themes/vojtasvoboda-vega/assets/js/chatscripthikvision.js"></script>
</html>