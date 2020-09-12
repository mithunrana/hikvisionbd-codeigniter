<?php 
    $title = "Hikvision Support In Bangladesh | Mega Trading";
    $description = "Hikvision support in bangladesh,we are hikvision supporter and distributor in bangaldesh and we are sell all hikvision product. all time online and off line specializes in video surveillance technology, as well as designing and";
    
    $keyword = "hikvision support, support, security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
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
        <div class="grey-bg notice-block">
        <div class="container">
            <div class="banner-wrap">
                <img src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/img/support.jpg" alt="support" class="img-responsive">
            </div>
        </div>
        
<div class="container">
        <div class="breadcrumb-block">
          <ol class="breadcrumb">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <li><a href="#">Support</a></li>
          </ol>
        </div>
        <h1 style="color:#d71920;">Hikvision Support In Bangladesh | Emergency Call: 01550019955</h1>
<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-12 no-leftpadding bar-sticky">         
        <div class="left-sidebar">
           <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">    
                        
                        <h4 style="background-color:#d71920;color:white" class="panel">
                            <a style="color:white" href="javascript:void(0)">
                           Trouble Shooting List
                           </a>
                        </h4>
                        
                        <?php
                            foreach($TroubleShootList as $T){
                                echo "<h4 class='panel'>
                                        <a class='troubleshootgetid' id='$T->Trouble_Shoot_Id'  href='javascript:void(0)'>
                                        $T->Trouble_Shoot_Name
                                       </a>
                                    </h4>";
                            }
                        ?>
                        
                        <h4 style="background-color:#d71920;color:white" class="panel">
                            <a style="color:white" href="javascript:void(0)">
                                Software Download
                            </a>
                        </h4>
                        
                        <?php 
                        foreach($SoftwareList as $T){
                            echo "<h4 class='panel'>
                                        <a class='SoftwareClass' id='$T->Software_Type_Id'  href='javascript:void(0)'>
                                        $T->Software_Type_Name
                                       </a>
                                    </h4>";
                            }
                        ?>
                    </div>
                </div>
           </div>
        </div>
    </div>
    <?php
        $troubleShootName = "";
        $troubleId = "";
        $Trouble_Shoot_Video = "";
        $Trouble_Shoot_Step = "";
        
        foreach($TroubleShootList as $T){
          $troubleId = $T->Trouble_Shoot_Id;
          $troubleShootName = $T->Trouble_Shoot_Name;
          $Trouble_Shoot_Step = $T->Trouble_Shoot_Step;
          $Trouble_Shoot_Video = $T->Trouble_Shoot_Video;
          break;
        }
    ?>
    <div class="col-md-9 col-sm-9 col-xs-12 no-padding">
        <div class="row" id="AjaxTroubleDetails">
            <div class="col-md-12 col-sm-12 col-xs-12 no-padding" id="InfoPannel">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div style="margin-top:10px;" class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">Problems Solve Working Process</h4>
                        </div>

                        <div class="panel-body" style="padding:0px;max-height:350px;overflow:scroll;">
                            <pre style="font-family:normal;font-size:17px;background-color: white;"><?php echo $Trouble_Shoot_Step; ?></pre>
                        </div>

                        <div class="panel-heading">
                            <h4 class="panel-title"><?php echo $troubleShootName." "."Solve Video"; ?></h4>
                        </div>

                        <div class="panel-body" style="padding:0px;">
                           <?php echo $Trouble_Shoot_Video; ?>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
</div>
</div>
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
<script type="text/javascript">
        jQuery(document).ready(function(){
            
            jQuery('.troubleshootgetid').click(function(){
               jQuery('#InfoPannel').hide();
               var TroubleId = jQuery(this).attr('id');
               jQuery.ajax({
                url:'<?php echo base_url(); ?>Support/TroubleDetalis',
                method:'POST',
                data:{TroubleId:TroubleId},
                success:function(result){
                  jQuery('#AjaxTroubleDetails').html(result);
                }
              });
            });
         
         jQuery('.SoftwareClass').click(function(){
            jQuery('#InfoPannel').hide();
            jQuery('#AjaxTroubleDetails').append('<div class="panel-heading"><h4 class="panel-title">fafasdf</h4></div>');
            var SoftwareTypeId = jQuery(this).attr('id');
            jQuery.ajax({
                url:'<?php echo base_url(); ?>Support/SoftwareSelectByType',
                method:'POST',
                data:{TypeId:SoftwareTypeId},
                success:function(result){
                  //jQuery('#AjaxTroubleDetails').append('<div class="panel-heading"><h4 class="panel-title">fafasdf</h4></div>');
                  jQuery('#AjaxTroubleDetails').html(result); 
                }
              });
         });
        });
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/chatscripthikvision.js"></script>
</html>