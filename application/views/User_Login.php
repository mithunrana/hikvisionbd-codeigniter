<?php 
    $title = "Hikvision Bangladesh Login Form | Mega Trading";
    $description = "Login with hikvision bangladesh.and see all new hikvision product price, description.";
    $keyword = "security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
            . "storage ,mobile dvr,mobile nvr,video intercom";
?>
<?php include('inc/headerlink.php'); ?>
</head>
    <body>
        <div class="page-wrapper">        
            <style type="text/css">
    .asterisk{
        color:red;
    }

</style>

<script>
</script>

<?php include('inc/menu_bar.php'); ?>
<?php include('inc/responsive-menubar.php'); ?>
<?php include('inc/country_flag-_for_language.php'); ?>

<div class="search-block" style="display:none;">
    <form action="http://www.hikvisionindia.com/search-result" method="get" class="form-inline search-form" onsubmit="return checkHeaderSearchForm()">
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
<div class="login-modal" id="signInModal">
    <div class="" role="document">
        <div class="modal-content">
            <div class="modal-body xs-bg-image">
                <div class="row">
                    
                    <div class="col-md-6 col-sm-6 col-xs-6 no-leftpadding">
                        <div class="left-side"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form class="sign-in" id="loginForm">
                            <h4 class="modal-title" id="myModalLabel">Login</h4>
                            <div id="signIndisplay_error" style="display: none;"><p id="signInsuccess_message" style="color:red;"></p></div>
                            <div class="form-group">
                              <input type="text" class="form-control"  id="signInusername" name="signInusername" placeholder="Email address or mobile number" autocomplete="off" />
                              <div class="validationAlert" id="signInusername_alert"></div>
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control" name="signInpassword" id="signInpassword" placeholder="Password" autocomplete="off" />
                              <div class="validationAlert" id="signInpassword_alert"></div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-red" id="userSignIn" >Login</button>
                            </div>
                            <div class="form-group">
                                <div class="pull-left">
                                    <label class="item-checkbox has-text-icon">
                                        <input type="checkbox" name="logINform" id="logINform">
                                        <div class="checkbox-content">
                                            <i class="fa fa-square-o"></i>
                                            <span class="text">Stay Logged In</span>
                                        </div>
                                    </label>
                                </div>
                                <div class="pull-right text-right">
                                    <a href="javascript:void(0);" class="login-forgot-link">Forgot Password?</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <label>Don't have an account? Register Now</label>
                                <a href="<?php echo base_url()?>user-signup/">
                                <button type="button" class="btn btn-block btn-red" id="register-btn">Register</button>
                                </a> 
                            </div>
                            <input type="hidden" id="signIn-redirect-url" value="/post-query" />
                        </form>
                        <form class="login-forgot-form" style="display:none;" id="loginForgotForm">
                            <h4 class="modal-title"><a class="fa fa-long-arrow-left"  href="javascript:void(0);" id="backArrow"></a> Forgot Your Password ?</h4>

                            <div id="sigInforgpassmessage" style="display: none;" class="alert alert-success"></div>
                           
                            <div class="form-group">
                               <input type="text" class="form-control" placeholder="Email address or mobile number" name="signINresetPass" id="signINresetPass" />
                                <div class="adderror validation-alert" id="signINresetPass_alert"></div>
                            </div>
                            <div id="signInforgpasserror" style="display: none;color: #D8000C;background-color: #FFD2D2;" class="error"></div>

                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-red" id="login-forgotPass">Send</button>
                            </div>
                            <p class="note">You will receive an e-mail on your registered email to reset your password.</p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--login modal ends here-->

<script type="text/javascript">
	jQuery('.login-forgot-link').click(function(){
        jQuery("#signInforgpasserror").html('').hide();         
        jQuery("#sigInforgpassmessage").html('').hide();         
        jQuery('.sign-in').hide();
        jQuery('.login-forgot-form').show(100); 
    });

    jQuery('#backArrow').click(function(){
      jQuery('.sign-in').show();
      jQuery('.login-forgot-form').hide(100);   
    });

    jQuery('#userSignIn').on('click', function(evt){
        jQuery('#loaderDiv').show();
        jQuery("#signIndisplay_error").hide();
        jQuery("#signInsuccess_message").html('');
        jQuery("#signInsuccess_message").hide();
        if(loginFormValidate()){
            var username = jQuery('#signInusername').val();
            var password = jQuery('#signInpassword').val();
            var redirect_url = jQuery('#signIn-redirect-url').val();

            jQuery.ajax({
                'type': 'POST',
                'url' : '/admin/hikvision/loginauthcheck/onLogin',
                'data': {'username' : username, 'password': password},
                beforeSend : function(){
                    jQuery('#userSignIn').attr('disabled',true);
                },
                success:function(response){
                    jQuery('#userSignIn').attr('disabled',false);
                    var success = response.success;
                    if(success == 1){
                        jQuery('#signInModal').modal('hide');
                        
                        if(redirect_url != ''){
                            location.href = redirect_url;
                        }else{
                            window.location.href = "index.html";
                        }
                        jQuery('#loaderDiv').hide();
                    }else{
                        jQuery('#loginForm')[0].reset();
                        jQuery("#signIndisplay_error").show();
                        jQuery("#signInsuccess_message").html(response.data); 
                        jQuery("#signIndisplay_error").show();
                        jQuery("#signInsuccess_message").show()
                        jQuery('#loaderDiv').hide();
                    }
                }  
            }); 
        }else{
            jQuery('#loaderDiv').hide();
        }
    });

    function loginFormValidate() {
        clearAlertMsg(); 
        var arrElemId = Array();    
        var arrCode = Array();    
        var arrRefValue = Array();    
        var arrMsg = Array();    
        var i = 0 ;

        arrElemId[i] = 'signInusername';    
        arrCode[i] = 'IS_EMPTY';     
        arrRefValue[i] = null;    
        arrMsg[i] = EMPTY_EMAIL_MOBILE;    
        i++;
        
    
        arrElemId[i] = 'signInpassword';    
        arrCode[i] = 'IS_EMPTY';     
        arrRefValue[i] = null;    
        arrMsg[i] = EMPTY_PASSWORD;    
        i++;

        result = validate(document.getElementById("loginForm") , arrElemId , arrCode , arrRefValue , arrMsg );
        return result;    
    }

    jQuery('#login-forgotPass').on('click', function(){
        clearAlertMsg(); 
        jQuery("div.adderror").addClass("validation-alert");
         if(forgotPass_EmailValidation()){
            jQuery('#loaderDiv').show();

            var signINresetPass = jQuery('#signINresetPass').val();
            jQuery.ajax({
            'method':'POST',
            'url' : '/signInreset-pass',
            'data':{'signINresetPass':signINresetPass},
            beforeSend: function() {
                jQuery('#login-forgotPass').attr('disabled',true);
            },
            success:function(responseData){
                if(responseData.success == 1){
                    jQuery("#sigInforgpassmessage").html(responseData.data).show(); 
                    jQuery('#loginForgotForm')[0].reset();                   
                }else{
                    //jQuery("#signInforgpasserror").html(responseData.data).show(); 
                    jQuery("#signINresetPass_alert").html(responseData.data).show(); 
                    
                } 
                jQuery('#login-forgotPass').attr('disabled',false);
                jQuery('#loaderDiv').hide();
            },error: function(jqXhr, json, errorThrown){
                var statusCode = jqXhr.status; 
                var errors = jqXhr.responseJSON;
                jQuery('#login-forgotPass').attr('disabled',false);
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

    function forgotPass_EmailValidation() {
    	var signINresetPass = jQuery('#signINresetPass').val();

    	var inputDigit = jQuery.isNumeric(jQuery('#signINresetPass').val());
    	clearAlertMsg(); 
        var arrElemId = Array();    
        var arrCode = Array();    
        var arrRefValue = Array();    
        var arrMsg = Array();    
        var i = 0 ;

		if((signINresetPass != '') && (inputDigit == true)){
			
            arrElemId[i] = 'signINresetPass';    
            arrCode[i] = 'MOBILE';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_MOBILE;    
            i++;
            
		}else{
			arrElemId[i] = 'signINresetPass';    
	        arrCode[i] = 'IS_EMPTY';     
	        arrRefValue[i] = null;    
	        arrMsg[i] = EMPTY_EMAIL_mobile;    
	        i++;

	        arrElemId[i] = 'signINresetPass';    
	        arrCode[i] = 'EMAIL';     
	        arrRefValue[i] = null;    
	        arrMsg[i] = INVALID_EMAIL;    
	        i++;
              
		}

        result = validate(document.getElementById("login-forgotPass") , arrElemId , arrCode , arrRefValue , arrMsg );
        return result;    
    }

    document.onkeydown=function(evt){
        var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
        if(keyCode == 13)
        {
            if(jQuery('.sign-in').is(':visible')){
                jQuery("#userSignIn").trigger("click");
            }else{
                jQuery("#login-forgotPass").trigger("click");
            }
            evt.preventDefault();
        }
    }
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
</script>

<script type="text/javascript">
/*by : Sanjeev 0ct 18*/
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
    
    /*for elastic slider*/
     jQuery('#ei-slider').eislideshow({
                    animation           : 'center',
                    autoplay            : true,
                    slideshow_interval  : 3000,
                    titlesFactor        : 0
                });
     
    // manual carousel controls
   (function($){
        $(window).on("load",function(){
            $(".content").mCustomScrollbar();
        });
    })(jQuery);
    
  </script>
</body>
<script type="text/javascript" src="themes/vojtasvoboda-vega/assets/js/chatscripthikvision.js"></script>
</html>