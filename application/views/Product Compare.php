<?php 
    $title = "Hikvision Products Compare | Mega Trading";
    $description = "Hikvision Products Compare in here compare hikvision product  specification and price and select best product from hikvision bangladesh | Mega Trading is the best hikvision products distributor in bangladesh";
    $keyword = "hikvision products, compare, security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
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

                <div class="grey-bg compare-block">
	<div class="container">
		<div class="breadcrumb-block row">
			<div class="col-md-6 no-leftpadding">
				<ol class="breadcrumb">
                                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
				  <li class="active">Compare</li>
				</ol>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="card">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 no-leftpadding">
					<h3>Compare</h3><p>4 items</p>
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 no-padding compare-right-block">
					<div class="row compare-row">
								<div class="col-md-3 col-sm-6 col-xs-12 dropdown-search">

									<div class="no-img"></div>
									<h4>Add a product</h4>
									<select class="form-control select_category" id="0">
=									</select>
									
									<select class="form-control select_product selectpicker" data-live-search="true" id="select_product_0">
									</select>

								</div>
													
							
								<div class="col-md-3 col-sm-6 col-xs-12 dropdown-search">

									<div class="no-img"></div>
									<h4>Add a product</h4>
									<select class="form-control select_category" id="1">
								</select>
									
									<select class="form-control select_product selectpicker" data-live-search="true" id="select_product_1">
																			</select>

								</div>
													
							
								<div class="col-md-3 col-sm-6 col-xs-12 dropdown-search">

									<div class="no-img"></div>
									<h4>Add a product</h4>
									<select class="form-control select_category" id="2">
														</select>
									
									<select class="form-control select_product selectpicker" data-live-search="true" id="select_product_2">
									</select>

								</div>
													
							
								<div class="col-md-3 col-sm-6 col-xs-12 dropdown-search">

									<div class="no-img"></div>
									<h4>Add a product</h4>
									<select class="form-control select_category" id="3">
													</select>
									
									<select class="form-control select_product selectpicker" data-live-search="true" id="select_product_3">
								</select>

								</div>
																			<input type="hidden" class="compare_product_id" value=''/>
					</div><!--row ends here-->
				</div>
			</div>

					</div>
	</div>
</div>


<script>
jQuery(document).ready(function(){
	/*highlight different value */
	jQuery(".different input, .different label").click(function() {
	    if(jQuery(this).is(":checked")) {
	        jQuery(".diff_value td").addClass('highlight');

	    } else {
	         jQuery(".diff_value td").removeClass('highlight');

	    }
	});

	/*hide same value */
	jQuery('#identical').click(function(){
		if(jQuery(this).is(":checked")){
			jQuery('.same_value').hide();
		}
		else{
			jQuery('.same_value').show();
		}
	});

	var old_product_id = jQuery('.compare_product_id').val();
	if(old_product_id == ''){
		jQuery('.select_category').show();
	}
	else{
		jQuery('.select_category').hide();
	}

	jQuery('.compare-close-btn').click(function(){
		jQuery('#loaderDiv').show();
		var remove_product_id = jQuery(this).attr('id');
		var old_product_id = jQuery('.compare_product_id').val();
		var old_product_id_arr = old_product_id.split(",");
		var revised_product_id = '';
		jQuery.each(old_product_id_arr, function(index, value){
			if(remove_product_id != value){
				revised_product_id = revised_product_id+value+',';
			}	
		});
		
		revised_product_id = revised_product_id.replace(/(^,)|(,$)/g, "");

		if(revised_product_id == ''){
			location.href = 'compare.html';
		}
		else if(revised_product_id == ','){
			location.href = 'compare.html';
			jQuery('.compare_product_id').val('');
		}
		else{
			location.href = '/compare?product_id='+revised_product_id;
		}
	});

	jQuery('.select_product').change(function(){
		jQuery('#loaderDiv').show();
		var product_id = jQuery(this).val();
		var old_product_id = jQuery('.compare_product_id').val();
		old_product_id = old_product_id.replace(",,", ",");

		if(old_product_id == ''){
			location.href = '/compare?product_id='+product_id;
		}
		else{
			var revised_product_id = old_product_id+','+product_id;
			revised_product_id = revised_product_id.replace(",,",",");
			location.href = '/compare?product_id='+revised_product_id;
		}

	});

	jQuery('.select_category').change(function(){
		jQuery('#loaderDiv').show();
		var category_id = jQuery(this).val();
		var field_id = jQuery(this).attr('id');
		jQuery.ajax({
			'type':'POST',
			'url' : '/admin/jiri/jkshop/products/selectcategory',
			'data': {'category_id' : category_id},
			success:function(data){
				var optionHTML = '<option>Select Product</option>';
				if(data != ''){
            		jQuery.each(data, function(val) {
						optionHTML += '<option value="'+data[val].id+'">'+data[val].title+'</option>';
            		});	
            	}
            	jQuery('#select_product_'+field_id).html(optionHTML);
            	jQuery('.selectpicker').selectpicker();
                jQuery('.selectpicker').selectpicker('refresh');
            	jQuery('#loaderDiv').hide();	
			}
		});
	});

	/*Code for Selectpicker START*/
	jQuery('.selectpicker').selectpicker({
	    dropupAuto: false
	});
	/*Code for Selectpicker END*/

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

<!-- Mirrored from www.hikvisionindia.com/compare by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Oct 2018 10:08:05 GMT -->
</html>