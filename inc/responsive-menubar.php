<aside id="primaryMobNavbar" class="visible-xs mobile-primary-menu menu-left">
    <header class="select-country">
    <div class="item-country item-image-left"> <i aria-hidden="true" class="fa fa-map-o"></i>Hikvision</div>
    </header>
    <section class="nav-content">
        <div class="nav-wrapper">
            <ul class="nav">
                <li id ="" class=""><a href="<?php echo base_url(); ?>">Home</a>
                </li>
                
                <li id ="" class="">
                    <a href="<?php echo base_url(); ?>hikvision-products" title="" class="menu-title" target="_self">Products</a>
                </li>
                
                <li class="dropdown" id ="">
                    <a class="has-arrow collapsed" href="#SolutionMenu" data-toggle="collapse" aria-expanded="false" aria-controls="productsmenu">Solution<i aria-hidden="true" class="fa fa-plus"></i></a>
                    <ul class="nav collapse inner-list" id="SolutionMenu" aria-expanded="">                                                                    
                        <?php  
                        foreach($SolutionMenu as $d){
                           echo '<li id="" class="menu-item menu-item-392 strong item menu-item-level-1">
                                  <a href="'. base_url().'solution/'.str_replace(" ","-",$d->Solution_Name).'/'.$d->Solution_Id.'" title="" class="menu-title" target="_self">'.$d->Solution_Name.'</a>
                                </li>';
                        }
                        ?>
                    </ul>
                </li> 
                
                <li id ="" class="">
                    <a href="https://www.ezvizlife.com/" title="" class="menu-title" target="_blank">EZVIZ</a>
                </li>
                
                <li id ="" class="">
                    <a href="<?php echo base_url(); ?>hikvision-support" title="hikvision-support" class="menu-title" target="_self">Support</a>
                </li>
                
                <li class="dropdown" id ="">
                    <a class="has-arrow collapsed" href="#Coporate" data-toggle="collapse" aria-expanded="false" aria-controls="productsmenu">Corporate<i aria-hidden="true" class="fa fa-plus"></i></a>
                    <ul class="nav collapse inner-list" id="Coporate" aria-expanded="">                                                                                                                                                                                                                                             
                        <li id="" class="menu-item menu-item-394 item strong menu-item-level-1">
                        <a href="<?php echo base_url() ?>success-history-hikvision" title="" class="menu-title" target="_self">About Hikvision</a>
                        </li>
                        
                        <li id="" class="menu-item menu-item-394 item strong menu-item-level-1">
                            <a href="<?php echo base_url() ?>mega-trading" title="about mega-trading" class="menu-title" target="_self">About Mega Trading</a>
                        </li>
                        
                        <li id="" class="menu-item menu-item-396 item strong menu-item-level-2">
                            <a href="<?php echo base_url() ?>contact-us" title="contact-us" class="menu-title" target="_self">Contact Us</a>
                        </li>
                        
                        <li id="" class="menu-item menu-item-395 item strong menu-item-level-3 menu-item-has-children">
                            <a href="<?php echo base_url() ?>career-hikvision" title="career-hikvision" class="menu-title" target="_self">Career</a>
                        </li>
                        
                        <li id="" class="menu-item menu-item-395 item strong menu-item-level-3 menu-item-has-children">
                            <a href="<?php echo base_url() ?>hikvision-importer-bangladesh/" title="career-hikvision" class="menu-title" target="_self">Hikvision Importer</a>
                        </li>
                        
                       <li id="" class="menu-item menu-item-395 item strong menu-item-level-3 menu-item-has-children">
                         <a href="<?php echo base_url() ?>hikvision-distributor-bangladesh/" title="Hikvision Distributor In Bangladesh" class="menu-title" target="_self">Hikvision Distributor In Bangladesh</a>
                     </li>
                     
                    </ul>
                </li>
                <li id ="" class=""><a href="<?php echo base_url() ?>contact-us">Contact Us</a></li>
            </ul>
<script type="text/javascript">
  

  jQuery(function($) {

     var path = location.pathname;

     var result = path.split('index.html');
     var prodctPath = '';
     if (result[1] == 'products') {
      //var prodctPath = '/'+result[1]+'/'+result[2];
      prodctPath = location.href;
     }else if (result[1] == 'product-detail') {
      //var prodctPath = '/products/'+'';
      prodctPath = jQuery('#category_url').val();
     }
     
     path = location.href;

      if(location.pathname == '/' || location.pathname == ''){

          jQuery('#primaryMobNavbar .nav #home').addClass('active');
        }

      // because the 'href' property of the DOM element is the absolute path
      $('#primaryMobNavbar .nav li a').each(function() {
         
        var href = $(this).attr('href');
        if (path == href && href != '') {
          $(this).parent().addClass('active');
          //$(this).parent().parent().parent().children().css('color', '#d71920');
          //alert($(this).parent().parent().attr('href'));

         }else if(prodctPath == href && href != '' && prodctPath != '') {
          $(this).addClass('active');
          $(this).parent().addClass('active');
          //$(this).parent().parent().parent().addClass('active');
         }
      });

   });
</script>        
</div>
</section>
</aside>