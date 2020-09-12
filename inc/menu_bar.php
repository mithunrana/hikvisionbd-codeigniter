<header class="site-header" id="header-nav">
<nav class="navbar  navbar-fixed-top">
<div id="site-navigation" class="tp-header">
<div class="container">
<div class="pull-right">
<ul class="primary-nav">                     
<li class="contact">Phone: 01550019955</li>
<li class="country-list">
<ul class="nav navbar-nav navbar-right country-menu">  
<li class="dropdown">
<a href="javascript:void(0);" class="dropdown dropdown-toggle">
    <img class='img-responsive' src="<?php echo base_url(); ?>Design image/hikvision bangladesh flag.png"/> Bangladesh </a><span class="bs-caret"><span class="caret"></span></span>
</li>
</ul>
</li>

<li>
    <a href="<?php echo base_url(); ?>user-login/" style="display: inline-block;height: 18px;line-height: 24px;">
        <img src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/img/user-login.png" alt="" class="img-responsive" />
    </a>
</li>
</ul>
</div>  
<div class="clearfix"></div>
</div>
</div>
    
    
    
<div class="bt-header site-secondary-navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" id="primaryNavToggle" class="navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="img-responsive" src="<?php echo base_url() ?>themes/vojtasvoboda-vega/assets/img/logo.png" alt="hikvision-logo" /></a>
        </div>

<nav class="hidden-xs">
    <ul class="nav navbar-nav navbar-right main-menu">     
        <li id="home" class="menu-item menu-item-287 menu-item-level-0 dropdown">
                <a href="<?php echo base_url(); ?>" title="" class="menu-title" target="_self">Home</a>
        </li>
            
        <li id="products" class="menu-item menu-item-288 mm-center menu-item-level-0 menu-item-has-children dropdown">
            <a href="<?php echo base_url(); ?>hikvision-product/Network-Camera/1" title="" class="menu-title" target="_self">Products</a>   
        </li>


    <li id="" class="menu-item menu-item-353 has-one-column left-initial menu-item-level-0 menu-item-has-children dropdown">
        <a href="<?php echo base_url();?>solution/Banking-And-Finance/1" title="" class="menu-title" target="_self">Solution</a>
        <ul class="dropdown-menu dropdown-large masonry">
            <?php  
            foreach($SolutionMenu as $d){
               echo '<li id="" class="menu-item menu-item-392 strong item menu-item-level-1">
                      <a href="'. base_url().'solution/'.str_replace(" ","-",$d->Solution_Name).'/'.$d->Solution_Id.'" title="" class="menu-title" target="_self">'.$d->Solution_Name.'</a>
                    </li>';
            }
            ?>
        </ul>
    </li>

    <li id="" class="menu-item menu-item-541 menu-item-level-0 dropdown">
        <a href="https://www.ezvizlife.com/" title="" class="menu-title" target="_blank">EZVIZ</a>
    </li>


    <li id="" class="menu-item menu-item-343 has-one-column mm-center menu-item-level-0 menu-item-has-children dropdown">
        <a href="<?php echo base_url(); ?>hikvision-support" title="hikvision-support" class="menu-title" target="_self">Support</a>               
    </li>
    
    <li id="" class="menu-item menu-item-343 has-one-column mm-center menu-item-level-0 menu-item-has-children dropdown">
        <a href="<?php echo base_url() ?>contact-us" title="hikvision-support" class="menu-title" target="_self">Contact</a>               
    </li>

    <li id="" class="menu-item menu-item-354 has-one-column left-initial menu-item-level-0 menu-item-has-children dropdown">
        <a href="<?php echo base_url();?>success-history-hikvision" title="" class="menu-title" target="_self">Corporate</a>
        <ul class="dropdown-menu dropdown-large masonry">
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
</ul>                  
</nav>
        
<ul class="search-list">
    <li class="search-icon"><a href="javascript:void(0);"><span class="fa fa-search"></span></a></li>
</ul>
</div>    
</div>
</nav>
</header>