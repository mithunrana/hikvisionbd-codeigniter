    
    <?php 
      $this->load->helper('url');
      $currentURL = current_url();
      $url = "http://www.hikvision.com.bd/".str_replace("http://www.hikvision.com.bd/","",$currentURL);
    ?>
    
<!DOCTYPE html>
<html lang="en"> 
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{!! csrf_token() !!}" />
        <meta name="format-detection" content="telephone=no">
        <meta http-equiv="Cache-Control" content="no-store" />
        <meta name="google-site-verification" content="z2noueocCrKi6moQSOCs5PXRw53glUgiL7XBuw3ROQc" />
        
        <meta name="title" content="<?php echo $title; ?>" />
        <meta name="keywords" content="<?php echo $keyword; ?>" />
        <meta name="description" content="<?php echo $description; ?>" />
        <meta http-equiv="refresh" content="">
        <meta name="google-site-verification" content="kcLkGhlQmZ7gz_HT7BeLBZiCOOgMrhEPEVixVyqMqhQ" />
        <title><?php echo $title; ?></title>
        <link rel="canonical" href="<?php echo $url ?>" />
        
        
        <link rel="shortcut icon" href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Lato|Oxygen:400,700" rel="stylesheet">
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/font-awesome.min.css" type="text/css" media="all" />
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/glyphter.css" type="text/css" media="all" /> 
        <!-- Fonts -->
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/bootstrap.min.css" type="text/css" media="all" />   
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/bootstrap-select.min.css" type="text/css" media="all" />
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/elasticstyle.css" type="text/css" media="all" />
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/slick.css" type="text/css" media="all" />
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/slick-theme.css" type="text/css" media="all" />
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/frontend/layoutacb8.css?v=0.25" type="text/css" media="all" />
        <link rel='stylesheet' href="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/css/jquery.mCustomScrollbar.min.css" type="text/css" media="all" />

        <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/lib_functions.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/messages.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
        
        
        <!-- For adsense code -->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script><script>
             (adsbygoogle = window.adsbygoogle || []).push({
                  google_ad_client: "ca-pub-2645454550256879",
                  enable_page_level_ads: true
             });
        </script>
        
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-2645454550256879", enable_page_level_ads: true }); 
        </script>
        
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> <script> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-2645454550256879", enable_page_level_ads: true }); </script>
        
        <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
        </script>
        
        <amp-auto-ads type="adsense"
              data-ad-client="ca-pub-2645454550256879">
        </amp-auto-ads>
        

        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128946536-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-128946536-1');
        </script>
        <script src="<?php echo base_url(); ?>self js/alertify.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/alertify.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>self css/default.css">