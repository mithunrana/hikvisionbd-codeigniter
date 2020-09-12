<?php 
    $title = "Hikvision Bangladesh Registraton | Mega Trading";
    $description = "Registration In Hikvision Bangladesh And Get all new all hikvision products news. and service";
    $keyword = "security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
            . "storage ,mobile dvr,mobile nvr,video intercom";
?>
<?php include('inc/headerlink.php'); ?>
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
    <form action="http://www.hikvisionindia.com/search-result" method="get" class="form-inline search-form" onsubmit="return checkHeaderSearchForm()">
        <div class="form-group col-md-8 col-sm-8 no-padding">
            <input name="q" type="text" id="searchHeaderPageText" placeholder="What are you looking for?" autocomplete="off" class="form-control search-query">
            <div class="validationAlert" id="searchHeaderPageText_alert"></div>
        </div>
        <div class="col-md-4 col-sm-4">
            <button type="submit" class="btn btn-block btn-red search-submit">Search</button>
        </div>
    </form>
</div
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118694873-1"></script>


<main role="main">
<div class="middle-content">
<div class="register-modal" id="registerModalform" tabindex="-1" aria-labelledby="myModalLabel">
    <div class="" role="document">
        <div class="modal-content">
<!--        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
             -->
            <div class="modal-body xs-bg-form">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 no-leftpadding"> 
                        <div class="left-side">

                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12"> 
                        <form class="signup-form">
                            <h4 class="modal-title" id="myModalLabel">User Registration</h4>
                            <div id="display_Signuperror" style="display: none;" class="alert alert-error"></div>
                                <div id="success_Signupmessage" style="display: none;" class="alert alert-success"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    <div class="form-group">
                                        <select class="form-control" name="userTypeform" id="userTypeform">
                                            <option value="">Select User</option>
                                            <option value="1">Partner</option>
                                            <option value="2">Customer</option>
                                        </select>
                                    </div>
                                    <div class="adderror validation-alert" id="userTypeform_alert"></div>
                                </div>
                                <div class="clearfix"></div>
                            <div class="row" id="partnerRegistrationform" style="display: none;">
                                <!-- <div  style="max-height: 230px;overflow-y: scroll;"> -->
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                        <select class="form-control" name="sinupPUserProfile" id="sinupPUserProfile">
                                            <option value="">Select User Profile</option>
                                            <option value="RD">RD</option>
                                            <option value="SI">SI</option>
                                            <option value="O">Other</option>
                                        </select>
                                        
                                        <div class="adderror validation-alert" id="sinupPUserProfile_alert"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                   
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="sinupPEmail" id="sinupPEmail" placeholder="Email *"/>

                                        <div class="adderror validation-alert" id="sinupPEmail_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                   
                                    <div class="form-group">
                                       <input type="password" class="form-control" name="sinupPPassword" id="sinupPPassword" placeholder="Password *"/>
                                       
                                        <div class="adderror validation-alert" id="sinupPPassword_alert"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                      <input type="password" class="form-control" id="sinupPConfirmPassword" placeholder="Confirm Password *" name="sinupPConfirmPassword"/>
                                      
                                    <div class="adderror validation-alert" id="sinupPConfirmPassword_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                 
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="sinupPContactName" id="sinupPContactName" placeholder="Contact Name *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPContactName_alert"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="sinupPCompanyName" id="sinupPCompanyName" placeholder="Company Name *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPCompanyName_alert"></div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupPMobile" id="sinupPMobile" placeholder="Mobile No *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPMobile_alert"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupPVatNo" id="sinupPVatNo" placeholder="VAT/TIN No."/>

                                        <div class="adderror validation-alert" id="sinupPVatNo_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                               
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupPGstNo" id="sinupPGstNo" placeholder="GST No. *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPGstNo_alert"></div>

                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2 no-leftpadding initial-code">PH -</div>
                                        <div class="col-md-10 col-xs-10 no-padding"><input type="tel" class="form-control" name="sinupPInvoice1" id="sinupPInvoice1" placeholder="Invoice No 1 *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPInvoice1_alert"></div></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2 no-leftpadding initial-code">PH -</div>
                                        <div class="col-md-10 col-xs-10 no-padding"><input type="tel" class="form-control" name="sinupPInvoice2" id="sinupPInvoice2" placeholder="Invoice No 2"/>
                                        <div class="adderror validation-alert" id="sinupPInvoice2_alert"></div></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    <div class="form-group">
                                        <div class="col-md-2 col-xs-2 no-leftpadding initial-code">PH -</div>
                                        <div class="col-md-10 col-xs-10 no-padding"><input type="tel" class="form-control" name="sinupPInvoice3" id="sinupPInvoice3" placeholder="Invoice No 3"/>
                                        <div class="adderror validation-alert" id="sinupPInvoice3_alert"></div></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                   
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupPLandlineNo" id="sinupPLandlineNo" placeholder="Landline number *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPLandlineNo_alert"></div>
                                        <div>Enter landline number with STD code. Eg. 02261721525</div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                   
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupPCompanyAddress1" id="sinupPCompanyAddress1" placeholder="Company Address Line1 *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPCompanyAddress1_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupPCompanyAddress2" id="sinupPCompanyAddress2" placeholder="Company Address Line2 *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPCompanyAddress2_alert"></div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                  
                                    <div class="form-group">
                                       <select class="form-control" name="sinupPState" id="sinupPState" onchange="getSinupCities(this.value)">
                                            <option value="">Select state</option>
                                                                                        <option value="26">Andaman and Nico.In.</option>
                                                                                         <option value="1">Andhra Pradesh</option>
                                                                                         <option value="2">Arunachal Pradesh</option>
                                                                                         <option value="3">Assam</option>
                                                                                         <option value="4">Bihar</option>
                                                                                         <option value="27">Chandigarh</option>
                                                                                         <option value="32">Chhattisgarh</option>
                                                                                         <option value="28">Dadra and Nagar Hav.</option>
                                                                                         <option value="29">Daman and Diu</option>
                                                                                         <option value="30">Delhi</option>
                                                                                         <option value="5">Goa</option>
                                                                                         <option value="6">Gujarat</option>
                                                                                         <option value="7">Haryana</option>
                                                                                         <option value="8">Himachal Pradesh</option>
                                                                                         <option value="9">Jammu and Kashmir</option>
                                                                                         <option value="33">Jharkhand</option>
                                                                                         <option value="10">Karnataka</option>
                                                                                         <option value="11">Kerala</option>
                                                                                         <option value="12">Madhya Pradesh</option>
                                                                                         <option value="13">Maharashtra</option>
                                                                                         <option value="14">Manipur</option>
                                                                                         <option value="15">Meghalaya</option>
                                                                                         <option value="16">Mizoram</option>
                                                                                         <option value="17">Nagaland</option>
                                                                                         <option value="18">Orissa</option>
                                                                                         <option value="35">Other</option>
                                                                                         <option value="31">Pondicherry</option>
                                                                                         <option value="19">Punjab</option>
                                                                                         <option value="20">Rajasthan</option>
                                                                                         <option value="21">Sikkim</option>
                                                                                         <option value="22">Tamil Nadu</option>
                                                                                         <option value="23">Tripura</option>
                                                                                         <option value="24">Uttar Pradesh</option>
                                                                                         <option value="34">Uttaranchal</option>
                                                                                         <option value="25">West Bengal</option>
                                                                                     </select>
                                        
                                        <div class="adderror validation-alert" id="sinupPState_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                 <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                        <select class="form-control" name="sinupPCity" id="sinupPCity">
                                            <option value="">Select city</option>
                                        </select>
                                        
                                        <div class="adderror validation-alert" id="sinupPCity_alert"></div>
                                    </div>
                                </div>
                               
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupPPincode" id="sinupPPincode" placeholder="Pincode *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupPPincode_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <!-- </div> -->
                                 <div class="form-group row check-box" style="padding-top: 10px;">
                                    <div class="col-md-12">
                                        <input type="checkbox" name="sinupPiAgree" id="sinupPiAgree" tabindex="0">
                                        <label class="check" for="sinupPiAgree">I Agree to the <a href="#" target="_blank">Terms and Conditions</a> </label>
                                        <div class="adderror validation-alert" id="sinupPiAgree_alert"></div>
                                    </div>
                                </div>
                                
                            </div>

                           
                            <div class="row" id="customerRegistrationform">
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                 
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="sinupCEmail" id="sinupCEmail" placeholder="Email *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupCEmail_alert"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                       <input type="password" class="form-control" name="sinupCPassword" id="sinupCPassword" placeholder="Password*"/>
                                       
                                        <div class="adderror validation-alert" id="sinupCPassword_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                 <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                      <input type="password" class="form-control" id="sinupCConfirmPassword" placeholder="Confirm Password *" name="sinupCConfirmPassword"/>
                                      
                                    <div class="adderror validation-alert" id="sinupCConfirmPassword_alert"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="sinupCContactName" id="sinupCContactName" placeholder="Contact Name *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupCContactName_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">

                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="sinupCMobile" id="sinupCMobile" placeholder="Mobile No *"/>
                                        
                                        <div class="adderror validation-alert" id="sinupCMobile_alert"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group">
                                    <label class="item-checkbox has-text-icon">
                                        <input type="checkbox" name="sinupCiAgree" id="sinupCiAgree">
                                        <div class="checkbox-content">
                                            <i class="fa fa-square-o"></i>
                                            <span class="text">I Agree to the <a href="#" target="_blank">Terms and Conditions</a></span>
                                        </div>
                                    </label>
                                    
                                    <div class="adderror validation-alert" id="sinupCiAgree_alert"></div>                                   
                                </div>
                                <!-- <div class="clearfix"></div> -->
                            </div>
                            <div class="form-group" id="submitButtonform">
                                <!-- <div class="col-md-6 col-sm-6 col-xs-6 no-leftpadding">
                                    <button type="button" class="btn btn-block btn-grey col-md-6" id="cancelButtonform">Cancel</button>
                                </div> -->
                                <button type="button" class="btn btn-block btn-red" id="signupForm">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register modal ends here-->

<script type="text/javascript">

	jQuery(window).load(function($) {
		 
	 jQuery('#userTypeform option:eq(2)').attr('selected', 'selected');
	    jQuery("#partnerRegistrationform").hide();
        jQuery('#customerRegistrationform').show();
	 
	});

	function clearAllFields() {
        jQuery('#partnerRegistrationform').find('input').each(function() {
                if(jQuery(this).attr('type') == 'checkbox'){
                    jQuery(this).attr('checked', false);
                }else{
                    jQuery(this).val('');
                }
            }
        );
        jQuery('#customerRegistrationform').find('input').each(function() {
                if(jQuery(this).attr('type') == 'checkbox'){
                    jQuery(this).attr('checked', false);
                }else{
                    jQuery(this).val('');
                }
            }
        );

    }

    jQuery('#userTypeform').on('change', function(){
        clearAlertMsg(); 
        clearAllFields();
        var userTypeform = jQuery('#userTypeform').val();
        
        if (userTypeform == '1') {
            jQuery("#partnerRegistrationform").show();
            jQuery("#submitButtonform").show();
            jQuery("#customerRegistrationform").hide();
        }else if (userTypeform == '2') {
            jQuery("#partnerRegistrationform").hide();
            jQuery("#customerRegistrationform").show();
            jQuery("#submitButtonform").show();
        }else{
            /*jQuery('#loginModal').modal('hide');
            jQuery('#registerModal').modal('hide');
            location.reload(true);*/
            jQuery("#partnerRegistrationform").hide();
            jQuery("#customerRegistrationform").hide();
            jQuery("#submitButtonform").hide();
            clearAllFields();
        }
    });
    jQuery('#signupForm').on('click', function(){

        jQuery("div.adderror").addClass("validation-alert");
        if (jQuery('#sinupCiAgree').is(':checked')) {
             jQuery('#sinupCiAgree').val("isOn");
        }   
        else {
            jQuery('#sinupCiAgree').val("off");
        }

        if (jQuery('#sinupPiAgree').is(':checked')) {
            jQuery('#sinupPiAgree').val("isOn");
        }else {
            jQuery('#sinupPiAgree').val("off");
        }

        var userTypeform = jQuery('#userTypeform').val();
        var data = {};
        if(userTypeform == 1){
            data['userTypeform'] = userTypeform;
            jQuery('#partnerRegistrationform').find('input').each(function() {
                data[jQuery(this).attr('name')] = jQuery(this).val();
            });
        }

        if(signupFormValidation()){
            var userTypeform = jQuery('#userTypeform').val();
            var data = {};
            data['userTypeform'] = userTypeform;
            if(userTypeform == 1){
                jQuery('#partnerRegistrationform').find('input').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                });
                jQuery('#partnerRegistrationform').find('select').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                });
                jQuery('#partnerRegistration').find('checkbox').each(function() {
                    data[jQuery(this).attr('name')] = jQuery('#sinupPiAgree').val();;
                });

            }
            if(userTypeform == 2){
                jQuery('#customerRegistrationform').find('input').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                }); 
                jQuery('#customerRegistrationform').find('select').each(function() {
                    data[jQuery(this).attr('name')] = jQuery(this).val();
                });
                jQuery('#customerRegistrationform').find('checkbox').each(function() {
                    data[jQuery(this).attr('name')] = jQuery('#sinupCiAgree').val();
                });
            }
            jQuery.ajax({
                'type': 'POST',
                'url' : '/user-signup',
                'data': data,
                success:function(response){
                    if(response.success == 1){
                        jQuery("#success_Signupmessage").html(response.data).show(); 
                        clearAllFields();
                        jQuery("#userTypeform").val('');
                        jQuery("#sinupCiAgree").attr('checked', false);
                        jQuery("#sinupPiAgree").attr('checked', false);
                        
                    }else{
                        jQuery("#display_Signuperror").html(response.data).show(); 
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

    function signupFormValidation() {
        
        clearAlertMsg(); 
        var userTypeform = jQuery('#userTypeform').val();
        var Vat_No = jQuery('#sinupPVatNo').val(); 
        var arrElemId = Array();    
        var arrCode = Array();    
        var arrRefValue = Array();    
        var arrMsg = Array();    
        var i = 0 ;
        
        arrElemId[i] = 'userTypeform';    
        arrCode[i] = 'IS_EMPTY';     
        arrRefValue[i] = null;    
        arrMsg[i] = EMPTY_UserType;    
        i++;


        if(userTypeform == 1){
            arrElemId[i] = 'sinupPUserProfile';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_USER_PROFILE;    
            i++;

            arrElemId[i] = 'sinupPEmail';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_EMAIL;    
            i++;

            arrElemId[i] = 'sinupPEmail';    
            arrCode[i] = 'EMAIL';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_EMAIL;    
            i++;

            arrElemId[i] = 'sinupPPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_PASSWORD;    
            i++;

            arrElemId[i] = 'sinupPConfirmPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONFIRM_PASSWORD;    
            i++;

            arrElemId[i] = 'sinupPConfirmPassword';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = jQuery('#sinupPPassword').val();    
            arrMsg[i] = SAME_CONFIRM_PASSWORD;    
            i++;
            
            arrElemId[i] = 'sinupPContactName';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONTACT_NAME;    
            i++;

            arrElemId[i] = 'sinupPCompanyName';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_COMPANY_NAME;    
            i++;

            arrElemId[i] = 'sinupPMobile';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_MOBILE;    
            i++;

            arrElemId[i] = 'sinupPMobile';    
            arrCode[i] = 'MOBILE';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_MOBILE;    
            i++;

           /* arrElemId[i] = 'sinupPVatNo';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_VAT_NO;    
            i++;*/


            arrElemId[i] = 'sinupPGstNo';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_GST_NO;    
            i++; 

            arrElemId[i] = 'sinupPGstNo';    
            arrCode[i] = 'ALPHANUM';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_GST_NO;    
            i++; 
            
            arrElemId[i] = 'sinupPGstNo';    
            arrCode[i] = 'EQUAL_LENGTH';     
            arrRefValue[i] = 15;    
            arrMsg[i] = INVALID_GST_NO;    
            i++;  

            arrElemId[i] = 'sinupPInvoice1';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_Invoice1;   
            i++;

            arrElemId[i] = 'sinupPInvoice1';    
            arrCode[i] = 'ALPHANUM';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_Invoice1;   
            i++;

            arrElemId[i] = 'sinupPLandlineNo';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_LandlineNo;    
            i++; 
            
            arrElemId[i] = 'sinupPVatNo';    
            arrCode[i] = 'ALPHANUM';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_VAT_NO;    
            i++;  

            arrElemId[i] = 'sinupPVatNo';    
            arrCode[i] = 'EQUAL_LENGTH';     
            arrRefValue[i] = 11;    
            arrMsg[i] = INVALID_VAT_NO;    
            i++;           

            arrElemId[i] = 'sinupPCompanyAddress1';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_COMPANY_ADDRESS1;    
            i++;

            arrElemId[i] = 'sinupPCompanyAddress2';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_COMPANY_ADDRESS2;    
            i++;

            arrElemId[i] = 'sinupPState';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_STATE;    
            i++; 

            arrElemId[i] = 'sinupPCity';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CITY;    
            i++; 

            arrElemId[i] = 'sinupPPincode';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_PINCODE;    
            i++; 

            arrElemId[i] = 'sinupPiAgree';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = 'isOn';    
            arrMsg[i] = EMPTY_CHECK;    
            i++;
  
        }   
                        
                            
        if(userTypeform == 2){
            arrElemId[i] = 'sinupCEmail';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_EMAIL;    
            i++;

            arrElemId[i] = 'sinupCEmail';    
            arrCode[i] = 'EMAIL';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_EMAIL;    
            i++;

            arrElemId[i] = 'sinupCPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_PASSWORD;    
            i++;

            arrElemId[i] = 'sinupCConfirmPassword';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONFIRM_PASSWORD;    
            i++;

            arrElemId[i] = 'sinupCConfirmPassword';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = jQuery('#sinupCPassword').val();    
            arrMsg[i] = SAME_CONFIRM_PASSWORD;    
            i++;
            
            arrElemId[i] = 'sinupCContactName';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_CONTACT_NAME;    
            i++;

            arrElemId[i] = 'sinupCMobile';    
            arrCode[i] = 'IS_EMPTY';     
            arrRefValue[i] = null;    
            arrMsg[i] = EMPTY_MOBILE;    
            i++;

            arrElemId[i] = 'sinupCMobile';    
            arrCode[i] = 'MOBILE';     
            arrRefValue[i] = null;    
            arrMsg[i] = INVALID_MOBILE;    
            i++;

            arrElemId[i] = 'sinupCiAgree';    
            arrCode[i] = 'EQUAL_VAL';     
            arrRefValue[i] = 'isOn';    
            arrMsg[i] = EMPTY_CHECK;    
            i++;  
         
        } 
        result = validate(document.getElementById("signupForm") , arrElemId , arrCode , arrRefValue , arrMsg );
        return result;    
    }

    function getSinupCities(stateId) {
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
                        jQuery("#sinupPCity").html('');
                        jQuery("#sinupPCity").append(new Option('Select city',''));
                        jQuery.each(response.data, function(key,val) {
                            jQuery("#sinupPCity").append(new Option(val.name,val.id));
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

    jQuery('#cancelButtonform').on('click',function(){
        jQuery('#registerModalform').modal('hide');
        location.reload(true);
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

<!-- Mirrored from www.hikvisionindia.com/signup-form by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 10:08:08 GMT -->
</html>