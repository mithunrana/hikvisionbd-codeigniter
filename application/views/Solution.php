<?php 
    if(isset($SendTitle)){
      $title = $SendTitle;
        $description = "Banking Finance solution hikvision specializes in video surveillance technology, as well as designing and
                            manufacturing a full-line of innovative CCTV and video surveillance products. The product 
                            line ranges from cameras and DVRs to video management software. Since its inception in 2001,
                             Hikvision has quickly achieved a
                            leading worldwide market position in the security industry.";
        $keyword = "banking finance, finance, banking,hikvision solution, security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                    . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
                . "storage ,mobile dvr,mobile nvr,video intercom";     
    }
    else{
        $title = "Banking Finance - Solution Hikvision | Mega Trading";
        $description = "Banking Finance solution hikvision specializes in video surveillance technology, as well as designing and
                            manufacturing a full-line of innovative CCTV and video surveillance products. The product 
                            line ranges from cameras and DVRs to video management software. Since its inception in 2001,
                             Hikvision has quickly achieved a
                            leading worldwide market position in the security industry.";
        $keyword = "banking finance, finance, banking,hikvision solution, security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                    . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
                . "storage ,mobile dvr,mobile nvr,video intercom";   
    }
?>
<?php include('inc/headerlink.php'); ?>
</head>
    <body>
        <div class="page-wrapper">        
        <style type="text/css">
            .asterisk{color:red;}
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
    <div class="solutions grey-bg">
        <div class="container">
            
            <?php
            $SolutionName = "";
            $img = "";
            foreach ($SolutinDescription as $d){
              $SolutionName =  $d->Solution_Name;
              $img = $d->BannerImage;
            }
            ?>

            <div class="breadcrumb-block">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="#">Solutions</a></li>
                    <li class="active"><?php echo $SolutionName;  ?></li>
                </ol>
            </div>

            <div class="banner">
                <img class="img-responsive" src="<?php echo base_url()."Solution Description Image/".$img ?>" alt="1512280244514451.jpg" style="width:100%"/>
            </div>

            <div class="solution-desc">
                    <?php 
                     foreach($SolutinDescription as $des){ ?>
                        <div class="border-bottom">
                               <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
                                        <h2 class="heading"><?php echo $SolutionName;  ?></h2>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 no-rightpadding">
                                        <div class="btn-block">
                                            <a href="<?php echo $des->DownloadLink ?>" class="btn btn-red" target="_blank" ><span class="fa fa-download"></span> Download Brochure</a>
                                            <a href="<?php echo $des->YoutubeLink ?>" target="_blank" class="btn btn-red" ><span class="fa fa-youtube-play"></span> Smart Banking Solution</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div style="font-family:arial">
                                    <p><?php echo htmlspecialchars($des->Description, ENT_NOQUOTES) ?></p>
                                </div>
                            </div>
                            
                            <div style="font-family:arial">
                                <h3><?php echo $des->SolutionTitle ?></h3>
                                           <?php
                                           if(!empty($des->subcontent)){
                                             foreach($des->subcontent as $d){
                                                 echo "<pre style='font-weight:bold;font-size:18px;font-family: Arial, Helvetica, sans-serif'>$d->Description</pre>";
                                             }  
                                           }
                                           ?>
                                <h3>Application Scenarios</h3>
                                <p><img class="fr-fic fr-dii" src="<?php echo base_url()."Solution Description Image/".$des->ApplicationImage; ?>" alt="adfkjasdf" usemap="#Map" title="" style="width:100%;" border="0"></p>
                            </div>
                       <?php } 
                    ?>
                
                
            <?php
            foreach($SolutionBlogDescription as $BD){?>
                <div class="area-details">
                <h3 class="red-txt"><?php echo $BD->SolutionBlogTitle ?></h3>
                    <div class="img-wrap">

                    </div>
                <div class="solution_desc">
                    <div style="font-family:arial">
                        <p>
                            <strong>
                                <img src="<?php echo base_url()."Solution Blog Image/".$BD->SolutionBlogImage; ?>" style="width: 100%;" class="fr-fic fr-dib fr-fil" data-result="success">&nbsp;
                            </strong>
                        </p>
                        <pre style='font-weight:bold;font-size:18px;font-family: Arial, Helvetica, sans-serif'><?php echo $BD->BlogPostDescription; ?></pre>
                    </div>
                </div>

                <h3 class="red-txt">Recommended Products</h3>
                    <div class="row product-list">
                        <section class="product-carousel slider">
                            <?php
                               if(!empty($BD->ReProList)){
                                   foreach($BD->ReProList as $d){?>
                                        <div class="col-md-3 col-sm-3 col-xs-12 no-leftpadding">
                                            <a class="product-block" href="<?php     echo base_url()."products/".str_replace(" ","-",$d->Category_Name)."/".str_replace(" ","-",$d->Sub_Category_Name)."?model=".$d->Model;
                                            ?>">
                                            <div class="img-wrap">                                                                                                                                                                                        
                                                <img src="<?php echo base_url()."product image/".$d->Image; ?>" alt="image not fount" class="img-responsive">
                                            </div>
                                            <div class="desc-block">
                                                <h4><?php echo $d->Model ?></h4>
                                                <p><?php echo $d->Name ?></p>
                                            </div>
                                            </a>
                                        </div>
                                  <?php }
                               }
                            ?>
                        </section>
                    </div>
                </div>
            <?php }
            ?> 
        </div>
        </div>
    </div>

    
<script>
    jQuery(document).on('ready', function() {
        jQuery(".product-carousel").slick({
            dots: true,
            draggable: false,
            infinite: true,
            slidesToShow: 4,
            arrows:false,
            slidesToScroll: 4,
            autoplay:false,
            pauseOnHover: true,
            autoplaySpeed: 4000,

            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        dots: true,
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        autoplay: true,
                        autoplaySpeed: 2000,
                    }
                }, {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
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

<script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/chatscripthikvision.js"></script>
</html>