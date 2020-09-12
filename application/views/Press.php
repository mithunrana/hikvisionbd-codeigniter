<?php 
    $title = "Mega Trading | Leader of innovative video surveillance solution";
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
    <body>
        <div class="page-wrapper">        
            <style type="text/css">
    .asterisk{
        color:red;
    }

</style>

<script>
  /*jQuery(document).ready(function($){
    $(".hidden-xs ul:first").append('<li class="search-icon"><a href="javascript:void(0);"><span class="fa fa-search"></span></a></li>');
  });*/
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

<!-- Google tracking for QA START -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118146689-1"></script> -->
<!-- Google tracking for END -->

<!-- Google tracking for LIVE START -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118694873-1"></script>

<!-- Google tracking for LIVE END -->
<!--search block ends here-->
<script type="text/javascript"> 
    
    /*Code for Google tracking QA START*/
    /*window.dataLayer = window.dataLayer || []; 
    function gtag(){
        dataLayer.push(arguments);
    } 
    gtag('js', new Date()); 
    gtag('config', 'UA-118146689-1');*/
    /*Code for Google tracking QA END*/

    /*Code for Google tracking Live START*/
    window.dataLayer = window.dataLayer || []; 
    function gtag(){
        dataLayer.push(arguments);
    } 
    gtag('js', new Date()); 
    gtag('config', 'UA-118694873-1');
    
    /*Code for Google tracking Live END*/


    function checkHeaderSearchForm() {
        jQuery('#searchHeaderPageText_alert').html('');
        var searchText = jQuery('#searchHeaderPageText').val();
        if(searchText.length >= 3){
            return true;
        }else{
            jQuery('#searchHeaderPageText_alert').html('Please enter atleast 3 characters for search.');
            return false;
        }
        return false;
    }

    jQuery(function($) {

        jQuery('.search-submit').click(function(e){
            e.preventDefault();
            var text = jQuery.trim(jQuery('.search-query').val());
            jQuery('.search-query').val(text);
            jQuery('.search-form').submit();
        });



        var path = location.pathname;
        if(path == '/' || path == ''){
            jQuery('#home').addClass('active');
        }


        jQuery('#userType option:eq(2)').attr('selected', 'selected');
        jQuery('#customerRegistration').show();
       
        $(".country-list .dropdown, .login-menu.dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
            $(this).toggleClass('open');

        },
        function() {
            $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
            $(this).toggleClass('open');

        });
        //for top country select script
        $('.custom-select').selectpicker({
            maxOptions: 1
        });
        $(".custom-select").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).fadeIn("fast");
                $('.custom-select').addClass("open");
                $('.custom-select').addClass("show-menu-arrow");

            },
            function() {
                $('.dropdown-menu', this).stop(true, true).fadeOut("fast");
                $('.custom-select').removeClass("open");
                $('.custom-select').removeClass("show-menu-arrow");

            });
        $('.custom-select').click(function(e) {
            $(".dropdown-toggle").removeAttr("data-toggle");
        })


        $(window).load(function() {
            var header_notice = 'open';
            if(header_notice == 'open'){
                $('.top-bar').slideDown(300);
            }
        });

        jQuery('.top-bar a').click(function() {
            jQuery.ajax({
                        'method':'POST',
                        'url' : '/onHeaderNotice',
                        'data':{'type': 'close'},
                        success:function(responseData){
                            if(responseData == 'close'){
                                jQuery('.top-bar').hide();
                            }else{
                                 jQuery('.top-bar').slideDown(300);
                            }
                        }
            });
            jQuery('.top-bar').slideUp(300);
        });


        jQuery("#partnerRegistration").hide();
        //jQuery("#customerRegistration").hide();
        //jQuery("#submitButton").hide();


    });

    jQuery('#userLogin').on('click', function(evt){

        var username = jQuery('#username').val();
        var password = jQuery('#password').val();
        var redirect_url = jQuery('#redirect-url').val();

        jQuery.ajax({
        'type': 'POST',
        'url' : '/admin/hikvision/loginauthcheck/onLogin',
        'data': {'username' : username, 'password': password},
            success:function(response){
                var success = response.success;
                if(success == 1){
                    jQuery('#loginModal').modal('hide');
                    jQuery('#registerModal').modal('hide');
                    if(redirect_url != ''){
                        location.href = redirect_url;
                    }else{
                        location.reload(true);
                    }
                }else{
                    jQuery("#display_error").show();
                    jQuery("#success_message").html(response.data); 
                }
            }  
        });
    });


    jQuery('#user_logout').on('click', function (){
        jQuery('#loaderDiv').show();
        jQuery('#redirect-url').val('');
        jQuery.ajax({
            'type': 'POST',
            'url' : '/admin/hikvision/loginauthcheck/onLogOut',
            'data': {},
            success:function(response){
               if(response == 'logout_true'){
                    location.reload(true);
               }else {
                  alert('unconditional error');
               }
               jQuery('#loaderDiv').hide();
            } 
        });
    });

    function clearAllFields() {
        jQuery('#partnerRegistration').find('input').each(function() {
                if(jQuery(this).attr('type') == 'checkbox'){
                    jQuery(this).attr('checked', false);
                }else{
                    jQuery(this).val('');
                }
            }
        );
        jQuery('#customerRegistration').find('input').each(function() {
                if(jQuery(this).attr('type') == 'checkbox'){
                    jQuery(this).attr('checked', false);
                }else{
                    jQuery(this).val('');
                }
            }
        );

    }
    jQuery('#userType').on('change', function(){
        clearAlertMsg(); 
        clearAllFields();
        var userType = jQuery('#userType').val();
        if (userType == '1') {
            jQuery("#partnerRegistration").show();
            jQuery("#submitButton").show();
            jQuery("#customerRegistration").hide();
        }else if (userType == '2') {
            jQuery("#partnerRegistration").hide();
            jQuery("#customerRegistration").show();
            jQuery("#submitButton").show();
        }else{
            /*jQuery('#loginModal').modal('hide');
            jQuery('#registerModal').modal('hide');
            location.reload(true);*/
            jQuery("#partnerRegistration").hide();
            jQuery("#customerRegistration").hide();
            jQuery("#submitButton").hide();
            clearAllFields();
        }
    });

    jQuery('#registerForm').on('click', function(){

        jQuery("div.adderror").addClass("validation-alert");
        if (jQuery('#regCiAgree').is(':checked')) {
             jQuery('#regCiAgree').val("isOn");
        }   
        else {
            jQuery('#regCiAgree').val("off");
        }

        if (jQuery('#regPiAgree').is(':checked')) {
            jQuery('#regPiAgree').val("isOn");
        }else {
            jQuery('#regPiAgree').val("off");
        }

        var userType = jQuery('#userType').val();
        var data = {};
        if(userType == 1){
            data['userType'] = userType;
            jQuery('#partnerRegistration').find('input').each(function() {
                data[jQuery(this).attr('name')] = jQuery(this).val();
            });
        }

        if(registerFormValidation()){
            var userType = jQuery('#userType').val();
            var data = {};
            data['userType'] = userType;
            if(userType == 1){
                jQuery('#partnerRegistration').find('input').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                });
                jQuery('#partnerRegistration').find('select').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                });
                jQuery('#partnerRegistration').find('checkbox').each(function() {
                    data[jQuery(this).attr('name')] = jQuery('#regPiAgree').val();;
                });

            }
            if(userType == 2){
                jQuery('#customerRegistration').find('input').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                }); 
                jQuery('#customerRegistration').find('select').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                });
                jQuery('#customerRegistration').find('checkbox').each(function() {
                    data[jQuery(this).attr('name')] = jQuery('#regCiAgree').val();
                });
            }
            jQuery.ajax({
                'type': 'POST',
                'url' : '/user-registration',
                'data': data,
                success:function(response){
                    if(response.success == 1){
                        jQuery("#success_Regmessage").html(response.data).show(); 
                        clearAllFields();
                        jQuery("#userType").val('');
                        jQuery("#regCiAgree").attr('checked', false);
                        jQuery("#regPiAgree").attr('checked', false);
                        
                    }else{
                        jQuery("#display_Regerror").html(response.data).show(); 
                    }
                },
                error: function(jqXhr, json, errorThrown){
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
                }  
            });
        }
    });

    function registerFormValidation() {
        
        clearAlertMsg(); 
        var userType = jQuery('#userType').val();
        var Vat_No = jQuery('#regPVatNo').val(); 
        var arrElemId = Array();    
        var arrCode = Array();    
        var arrRefValue = Array();    
        var arrMsg = Array();    
        var i = 0 ;
        
        arrElemId[i] = 'userType';    
        arrCode[i] = 'IS_EMPTY';     
        arrRefValue[i] = null;    
        arrMsg[i] = EMPTY_UserType;    
        i++;
        if(userType == 1){
            arrElemId[i] = 'regPUserProfile';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_USER_PROFILE;    
            i++;

            arrElemId[i] = 'regPEmail';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_EMAIL;    
            i++;

            arrElemId[i] = 'regPEmail';    
            arrCode[i] = 'EMAIL';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_EMAIL;    
            i++;

            arrElemId[i] = 'regPPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_PASSWORD;    
            i++;

            arrElemId[i] = 'regPConfirmPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONFIRM_PASSWORD;    
            i++;

            arrElemId[i] = 'regPConfirmPassword';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = jQuery('#regPPassword').val();    
            arrMsg[i] = SAME_CONFIRM_PASSWORD;    
            i++;
            
            arrElemId[i] = 'regPContactName';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONTACT_NAME;    
            i++;

            arrElemId[i] = 'regPCompanyName';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_COMPANY_NAME;    
            i++;

            arrElemId[i] = 'regPMobile';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_MOBILE;    
            i++;

            arrElemId[i] = 'regPMobile';    
            arrCode[i] = 'MOBILE';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_MOBILE;    
            i++;

           /* arrElemId[i] = 'regPVatNo';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_VAT_NO;    
            i++;*/


            arrElemId[i] = 'regPGstNo';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_GST_NO;    
            i++; 

            arrElemId[i] = 'regPGstNo';    
            arrCode[i] = 'ALPHANUM';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_GST_NO;    
            i++; 
            
            arrElemId[i] = 'regPGstNo';    
            arrCode[i] = 'EQUAL_LENGTH';     
            arrRefValue[i] = 15;    
            arrMsg[i] = INVALID_GST_NO;    
            i++;  

            arrElemId[i] = 'regPInvoice1';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_Invoice1;   
            i++;

            arrElemId[i] = 'regPInvoice1';    
            arrCode[i] = 'ALPHANUM';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_Invoice1;   
            i++;

            arrElemId[i] = 'regPLandlineNo';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_LandlineNo;    
            i++; 
            
            arrElemId[i] = 'regPVatNo';    
            arrCode[i] = 'ALPHANUM';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_VAT_NO;    
            i++;  

            arrElemId[i] = 'regPVatNo';    
            arrCode[i] = 'EQUAL_LENGTH';     
            arrRefValue[i] = 11;    
            arrMsg[i] = INVALID_VAT_NO;    
            i++;           

            arrElemId[i] = 'regPCompanyAddress1';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_COMPANY_ADDRESS1;    
            i++;

            arrElemId[i] = 'regPCompanyAddress2';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_COMPANY_ADDRESS2;    
            i++;

            arrElemId[i] = 'regPState';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_STATE;    
            i++; 

            arrElemId[i] = 'regPCity';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CITY;    
            i++; 

            arrElemId[i] = 'regPPincode';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_PINCODE;    
            i++; 

            arrElemId[i] = 'regPiAgree';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = 'isOn';    
            arrMsg[i] = EMPTY_CHECK;    
            i++;
  
        }   
                        
                            
        if(userType == 2){
            arrElemId[i] = 'regCEmail';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_EMAIL;    
            i++;

            arrElemId[i] = 'regCEmail';    
            arrCode[i] = 'EMAIL';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_EMAIL;    
            i++;

            arrElemId[i] = 'regCPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_PASSWORD;    
            i++;

            arrElemId[i] = 'regCConfirmPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONFIRM_PASSWORD;    
            i++;

            arrElemId[i] = 'regCConfirmPassword';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = jQuery('#regCPassword').val();    
            arrMsg[i] = SAME_CONFIRM_PASSWORD;    
            i++;
            
            arrElemId[i] = 'regCContactName';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONTACT_NAME;    
            i++;

            arrElemId[i] = 'regCMobile';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_MOBILE;    
            i++;

            arrElemId[i] = 'regCMobile';    
            arrCode[i] = 'MOBILE';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_MOBILE;    
            i++;

            arrElemId[i] = 'regCiAgree';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = 'isOn';    
            arrMsg[i] = EMPTY_CHECK;    
            i++;  
         
        } 
        result = validate(document.getElementById("registerForm") , arrElemId , arrCode , arrRefValue , arrMsg );
        return result;    
    }

    function getCities(stateId) {
        if(stateId != ''){
            jQuery('#loaderDiv').show();
            jQuery.ajax({
                'type': 'POST',
                'url' : '/get-cities-by-state',
                'data': { 
                    'stateId' : stateId
                },
                success:function(response){
                    console.log(response);
                    if(response.success == 1){
                        jQuery("#regPCity").html('');
                        jQuery("#regPCity").append(new Option('Select city',''));
                        jQuery.each(response.data, function(key,val) {
                            jQuery("#regPCity").append(new Option(val.name,val.id));
                        });
                        jQuery('#loaderDiv').hide();
                    }else{
                        jQuery('#modalData').html(response.data);
                        jQuery('#alertbox').modal('show');
                        jQuery('#loaderDiv').hide();
                    }
                }  
            });     
        }
    }

    jQuery('#cancelButton').on('click',function(){
        jQuery('#loginModal').modal('hide');
        jQuery('#registerModal').modal('hide');
    });

    jQuery('#forgotPass').on('click', function(){
        clearAlertMsg(); 
        jQuery("div.adderror").addClass("validation-alert");
         if(forgotPassEmailValidation()){

            var resetEmail = jQuery('#resetPass').val();
      
            
            jQuery.ajax({
            'method':'POST',
            'url' : '/reset-pass',
            'data':{'resetEmail':resetEmail},
                success:function(responseData){
                    if(responseData.success == 1){
                    jQuery("#success_forgpassmessage").html(responseData.data).show(); 

                    }else{
                     jQuery("#display_forgpasserror").html(responseData.data).show().fadeOut(3000); 
                    } 
                    //alert(responseData.data);
                },error: function(jqXhr, json, errorThrown){
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
                } 
            });
         }

    });

    function forgotPassEmailValidation() {

        clearAlertMsg(); 
        var arrElemId = Array();    
        var arrCode = Array();    
        var arrRefValue = Array();    
        var arrMsg = Array();    
        var i = 0 ;

        arrElemId[i] = 'resetPass';    
        arrCode[i] = 'IS_EMPTY';     
        arrRefValue[i] = null;    
        arrMsg[i] = EMPTY_EMAIL;    
        i++;

        arrElemId[i] = 'resetPass';    
        arrCode[i] = 'EMAIL';     
        arrRefValue[i] = null;    
        arrMsg[i] = INVALID_EMAIL;    
        i++;


        result = validate(document.getElementById("registerForm") , arrElemId , arrCode , arrRefValue , arrMsg );
        return result;    
    }


    jQuery('#curl_logIN').on('click', function(){
        var logedInUserID = 'notLoggin';
        jQuery.ajax({
        'method':'POST',
        'url' : '/onLoginCurl',
        'data':{'logedInUserID':logedInUserID},
            success:function(responseData){
                var resp = jQuery.parseJSON(responseData);
                if(resp.success == 1){
                    window.open(resp.data,"_self");
                }else{
                    alert('error');
                    alert(resp.data);
                }
            }
        });

    });



    jQuery('document').ready(function(){
        jQuery('.alert-success, .alert-error').fadeOut(4000);
    });

    /*sanjeev kumar on popup dismiss clear all fields*/
    jQuery('[data-dismiss=modal]').on('click', function (e) {

        jQuery(this).find('form').trigger('reset');
        
        jQuery("div.validation-alert").html("");
        jQuery("div.validation-alert").removeClass("validation-alert");
        jQuery('#userType option:eq(2)').attr('selected', 'selected');
        jQuery('#customerRegistration').show();
        jQuery("#partnerRegistration").hide();
        jQuery('#display_forgpasserror').hide();
        jQuery('#success_forgpassmessage').hide();
        jQuery("#resetPass").val('');
                    

        jQuery('#display_error').hide();
        jQuery('#username').val('');
        jQuery('#password').val('');
        jQuery('#redirect-url').val('');

    });

    jQuery('#registerModal').on('hidden.bs.modal', function () {

        jQuery(this).find('form').trigger('reset');
        jQuery("div.validation-alert").html("");
        jQuery("div.validation-alert").removeClass("validation-alert");
        jQuery('#userType option:eq(2)').attr('selected', 'selected');
        jQuery('#customerRegistration').show();
        jQuery("#partnerRegistration").hide();

        jQuery('#display_forgpasserror').hide();
        jQuery('#success_forgpassmessage').hide();
        jQuery("#resetPass").val('');
    })

    jQuery('#loginModal').on('hidden.bs.modal', function () {

        jQuery('#display_error').hide();
        jQuery('#username').val('');
        jQuery('#password').val('');
        jQuery('#redirect-url').val('');
    });

    /* Menu Script */
    jQuery(function($) {
         var path = location.pathname;
         var result = path.split('index.html');

         if (result[1] == 'products') {
          var prodctPath = location.href;
          //'/'+result[1]+'/'+result[2];
         }else if (result[1] == 'product-detail') {
          var prodctPath = jQuery('#category_url').val();
         }

         path = location.href;

          // because the 'href' property of the DOM element is the absolute path
          $('.main-menu.nav li a').each(function() {
             var href = $(this).attr('href');

             if (path == href) {
              $(this).addClass('active');
              $(this).parent().addClass('active');
              $(this).parent().parent().parent().addClass('active');

             }else if(prodctPath == href) {
              
              $(this).addClass('active');
              $(this).parent().addClass('active');
              $(this).parent().parent().parent().addClass('active');
             }
          });

        $('.main-menu.nav li ul li a').each(function() {
          var href = $(this).attr('href');
          
          if (result[1] == 'products') {
            var product_url = location.protocol+'//'+location.host+''+result[0]+'/'+result[1]+'/'+result[2];
           
            if(product_url == href){

                $(this).addClass('active');
                $(this).parent().parent().parent().addClass('active');
               
            }
            
          }else if(path == href) {
            //alert(path + ' == ' + href);
           $(this).addClass('active');
           $(this).css('color', '#d71920');
           $(this).parent().parent().parent().addClass('active');
           $(this).parent().parent().parent().parent().parent().addClass('active');
          }

         });

        if(path.search('career-detail/index.html') >= 0){
          $('.corporate, .career').addClass('active');
        }

        if(path.search('/career-apply-now') >= 0){
          $('.corporate, .career').addClass('active');
          $('.job_apply a').css('color', '#d71920');
        }


        if(path.search('press-release/index.html') >=0 ){
          $('.press, .press-release').addClass('active');
        }

        if(path.search('press-events/index.html') >= 0){
          $('.press, .events').addClass('active');
        }

        if(path.search('success-stories-details/index.html') >= 0){
          $('.press, .success-stories').addClass('active');
        }

        if(path.search('/compare') >= 0){
          $('.main-products').addClass('active');
        }

       });

      jQuery('#loginPopmenu').click(function(){
        jQuery('#loginModal').modal('show');
        jQuery('#registerModal').modal('hide');
       
       });

</script>            
            <main role="main">
            <div class="middle-content">

                <div class="grey-bg">
  	<div class="container">
	    <!--breadcrumb blocks Starts here-->
	    <div class="breadcrumb-block">
	      <ol class="breadcrumb">
	        <li><a href="index.html">Home</a></li>
	        <li class="active">Press Releases</li>
	      </ol>
	    </div>
	    <!--breadcrumb blocks ends here-->

	    <!--press container Starts here-->

	    <div class="press-container">
	      	<div class="row" id="load-pressdata">
	      		
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/fsai-bravery-awards-presented-four-bravehearts-pacc-2018-jaipur.html'">
			<h2>FSAI Bravery Awards Presented to Four Bravehearts at PACC 2018, Jaipur</h2>
			<p class="date">September 14, 2018</p>
			<p class="desc">FSAI Bravery Awards were given to four Bravehearts at the 6th Edition of PACC on 8th September in Jaipur. The FSAI Award is prestigious recognition given for acts of bravery in extraordinary circumstances that are considered worthy of honour. The award winners were felicitated on 8th September 2018, coinciding with the 6th edition of Projects heads, Architects &amp; Consultants Conclave (PACC),2018 being held from 7th – 9th September at Jaipur. The awards are dedicated to salute brave policemen who have shown exceptional courage beyond the call of duty.</p> 
	    <a href="press-release/fsai-bravery-awards-presented-four-bravehearts-pacc-2018-jaipur.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/hikvision-presents-ai-enabled-security-solutions-latest-innovative-products-pacc-2018.html'">
			<h2>Hikvision Presents AI Enabled Security Solutions with Latest Innovative Products at PACC 2018</h2>
			<p class="date">September 14, 2018</p>
			<p class="desc">Hikvision, the world&#039;s leading provider of innovative video surveillance products and solutions, has showcased the AI enabled Security solutions along with the latest innovative products at PACC 2018, Jaipur. It has recently participated as the presenting partner for the 6th edition of Fire and Security Association of India’s Project heads, Architects &amp; Consultants Conclave PACC 2018.</p> 
	    <a href="press-release/hikvision-presents-ai-enabled-security-solutions-latest-innovative-products-pacc-2018.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/hikvision-training-program-creates-awareness-about-ai-enabled-solutions-among-security-professionals-aurangabad.html'">
			<h2>Hikvision Training Program Creates Awareness about AI Enabled Solutions among Security Professionals in Aurangabad</h2>
			<p class="date">September 5, 2018</p>
			<p class="desc">To impart security product knowledge and training, Hikvision recently organized Hikvision Training Program at Hotel Ambassador in Aurangabad on 8th July. A comprehensive product introduction, live demos and training program were the key highlights of the event.</p> 
	    <a href="press-release/hikvision-training-program-creates-awareness-about-ai-enabled-solutions-among-security-professionals-aurangabad.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/prama-hikvision-india-signs-mou-andhra-pradesh-government-pledges-invest-rs-500-crore.html'">
			<h2>Prama Hikvision India Signs MOU with Andhra Pradesh Government, Pledges to Invest Rs. 500 crore</h2>
			<p class="date">August 28, 2018</p>
			<p class="desc">Prama Hikvision India has announced plans to invest Rs.500 crore in a manufacturing facility for electronic security and surveillance products in Andhra Pradesh. The company, Prama Hikvision India on 27th August signed a Memorandum of Understanding (MoU) with the state government of Andhra Pradesh.</p> 
	    <a href="press-release/prama-hikvision-india-signs-mou-andhra-pradesh-government-pledges-invest-rs-500-crore.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/hikvision-certified-security-associate-hcsa-program-gets-overwhelming-response-bangalore.html'">
			<h2>Hikvision Certified Security Associate (HCSA) Program Gets Overwhelming Response in Bangalore</h2>
			<p class="date">August 28, 2018</p>
			<p class="desc">Hikvision, the world&#039;s leading supplier in innovative video surveillance products and solutions, has conducted the Hikvision Certified Security Associates (HCSA) Program recently in Silicon City Bangalore. The three day HCSA training program was conducted from 26th July to 28th July 2018 in Bangalore. It got an overwhelming response from the young security professional community. The participants came from Bangalore, Hubli and Hyderabad cities to take part in HCSA program.</p> 
	    <a href="press-release/hikvision-certified-security-associate-hcsa-program-gets-overwhelming-response-bangalore.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/hikvision-achieves-fips-140-2-certification.html'">
			<h2>Hikvision Achieves FIPS 140-2 Certification</h2>
			<p class="date">August 20, 2018</p>
			<p class="desc">Relied on by federal government agencies, regulated industries, and commercial businesses, FIPS 140-2 is the defacto standard for cryptographic modules</p> 
	    <a href="press-release/hikvision-achieves-fips-140-2-certification.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/hikvision-presents-education-security-solutions-12th-world-education-summit.html'">
			<h2>Hikvision Presents Education Security Solutions at 12th World Education Summit</h2>
			<p class="date">August 16, 2018</p>
			<p class="desc">Hikvision was part of the recently held 12th World Education Summit to showcase its innovative solutions for the education sector. The event was organized by Elets technomedia in New Delhi on 9-10 August. It was inaugurated by Uttarakhand’s Higher Education Minister Mr. Dhan Singh Rawat and Nagaland’s Higher and Technical Education Minister Mr. Temjen Imna along with other eminent dignitaries. The World education Summit was divided into four segments: School Education, Higher education, Expo and Awards.</p> 
	    <a href="press-release/hikvision-presents-education-security-solutions-12th-world-education-summit.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/hikvision-wins-psi-cctv-product-year-award-third-year-running.html'">
			<h2>Hikvision Wins PSI CCTV Product of the Year Award for the Third Year Running</h2>
			<p class="date">August 14, 2018</p>
			<p class="desc">Hikvision, the leading supplier of innovative video surveillance products and solutions, has won the PSI Premier Awards ‘CCTV Product of The Year’ for the third year running. The Hikvision product honoured this year was the PanoVu Mini Series IR Network PTZ Camera (DS-2PT3326IZ-DE3), which integrates four cameras into one to provide both panoramic video images for general observation or detection, and close-ups of any areas where more detail is required.</p> 
	    <a href="press-release/hikvision-wins-psi-cctv-product-year-award-third-year-running.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
   	<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">
	  <div class="press-block" onclick="window.location.href='press-release/hikvision-wins-prestigious-benchmark-innovation-award.html'">
			<h2>Hikvision Wins Prestigious Benchmark Innovation Award</h2>
			<p class="date">August 14, 2018</p>
			<p class="desc">Hikvision, the leading supplier of innovative video surveillance solutions, has won the Video Surveillance Hardware category in the Benchmark Innovation Awards 2018.</p> 
	    <a href="press-release/hikvision-wins-prestigious-benchmark-innovation-award.html" class="link">Read More</a>
	    <div class="clearfix"></div>
	  </div>
	</div>
	
	     	</div>
	     	
	     		    	<div class="row" id="pressdiv">
		        <div class="load-more text-center">
		          <button class="btn btn-primary loadPressRelese" id="1">Load More</button>
		        </div>
		    </div>
		    	    </div>
  	</div>
</div>
<script type="text/javascript">
	jQuery('.loadPressRelese').on('click', function(){
		jQuery('#loaderDiv').show();
		var pageID = jQuery(this).attr('id');
		var records_Page = '9';
		jQuery.ajax({
            type:'POST',
            url:'/admin/hikvision/news/news/onPressRelease',
            data: {id: pageID , records_Page: records_Page},
            success:function(result){
            	if(result != ''){
            		var pressHTML = '';
					jQuery.each(result, function(val) {
					    pressHTML +='<div class="col-md-4 col-sm-4 col-xs-12 no-leftpadding">';
				    	pressHTML += '<div class="press-block" onclick="window.location.href=\'/press-release/'+ result[val].slug + '\'">';
				    	pressHTML += '<h2>'+ result[val].name + '</h2>';
				    	pressHTML += '<p class="date">'+ result[val].newDate + '</p>';
				    	pressHTML += '<p class="desc">' + result[val].short_description + '</p>'; 
				    	pressHTML += ' <a href="/press-release/'+result[val].slug+'" class="link">Read More</a>';
				    	pressHTML += '<div class="clearfix"></div>';
				    	pressHTML += '</div>';
				    	pressHTML += '</div>';
				    });
					jQuery('#load-pressdata').append(pressHTML);
					jQuery('.loadPressRelese').attr('id',parseInt(pageID)+1 );
					
					if (result.length < records_Page) {
						
				    	jQuery('#pressdiv').remove();
				    }
            	}else{
					jQuery('#pressdiv').remove();
            	}
            	jQuery('#loaderDiv').hide();
            }
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

 <div class="loading-container" id="loaderDiv" style="display: none;">
    <img src="themes/vojtasvoboda-vega/assets/img/loading.svg" alt="loader">
</div>

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
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
// window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
// d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
// _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
// $.src="//v2.zopim.com/?2zpTb29Isj9UckrDo7eXcWeaT73XcHlL";z.t=+new Date;$.
// type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
        <!--End of Zopim Live Chat Script-->
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


/*jq('#gotaQueryp, #gotaQueryloginPop').click(function(){
    var redirect = jq(this).attr('data-href');
    jq('#loginModal #redirect-url').val(redirect);
    jq('#signInModal #signIn-redirect-url').val(redirect);
    jq('#loginModal').modal('show');
    jq('#registerModal').modal('hide');
   
}); */ 
</script>        </div>  
       
      <!-- Vendor js -->
      <script type="text/javascript" src="themes/vojtasvoboda-vega/assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="themes/vojtasvoboda-vega/assets/js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="themes/vojtasvoboda-vega/assets/js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="themes/vojtasvoboda-vega/assets/js/jquery.eislideshow.js"></script>
      <script type="text/javascript" src="themes/vojtasvoboda-vega/assets/js/slick.min.js"></script>
      <script type="text/javascript" src="themes/vojtasvoboda-vega/assets/js/main.js"></script>
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

<!-- Mirrored from www.hikvisionindia.com/press-release by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 09:48:48 GMT -->
</html>