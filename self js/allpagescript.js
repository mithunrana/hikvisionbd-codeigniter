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
         var result = path.split('../index.html');

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

        if(path.search('../career-detail/index.html') >= 0){
          $('.corporate, .career').addClass('active');
        }

        if(path.search('/career-apply-now') >= 0){
          $('.corporate, .career').addClass('active');
          $('.job_apply a').css('color', '#d71920');
        }


        if(path.search('../press-release/index.html') >=0 ){
          $('.press, .press-release').addClass('active');
        }

        if(path.search('../press-events/index.html') >= 0){
          $('.press, .events').addClass('active');
        }

        if(path.search('../success-stories-details/index.html') >= 0){
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