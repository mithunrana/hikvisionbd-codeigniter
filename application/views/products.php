<?php
   if(isset($SubCategoryProducts))
   { 
        $title = $SendTitle;
        $description = "hikvision products specializes in video surveillance technology, as well as designing and
                        manufacturing a full-line of innovative CCTV and video surveillance products. The product 
                        line ranges from cameras and DVRs to video management software. Since its inception in 2001,
                         Hikvision has quickly achieved a
                        leading worldwide market position in the security industry.";
        $keyword = "hikvision, products,hikvision-products, security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
            . "storage ,mobile dvr,mobile nvr,video intercom";
   }
   
   elseif(isset($PCategoryProducts)){
        $title = $SendTitle;
        $description = "hikvision products specializes in video surveillance technology, as well as designing and
                        manufacturing a full-line of innovative CCTV and video surveillance products. The product 
                        line ranges from cameras and DVRs to video management software. Since its inception in 2001,
                         Hikvision has quickly achieved a
                        leading worldwide market position in the security industry.";
        $keyword = "hikvision, products,hikvision-products, security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
            . "storage ,mobile dvr,mobile nvr,video intercom"; 
   }
   
   else{
        $title = "Hikvision Products In Bangladesh | Mega Trading";
        $description = "hikvision products specializes in video surveillance technology, as well as designing and
                        manufacturing a full-line of innovative CCTV and video surveillance products. The product 
                        line ranges from cameras and DVRs to video management software. Since its inception in 2001,
                         Hikvision has quickly achieved a
                        leading worldwide market position in the security industry.";
        $keyword = "hikvision, products,hikvision-products, security cameras, surveillance cameras, cctv cameras, security camera, surveillance camera, cctv Camera, video surveillance, dvr, nvr, intelligent video surveillance, video surveillance solution, ip camera,"
                . " analogue camera, mega-trding,mega,trading, hikvision bangladesh,hikvision, hcsa ,2mp camera , 2mp dvr, thermal camera, ptz , network video recorder, digital video recorder ,enterprise network "
            . "storage ,mobile dvr,mobile nvr,video intercom";
   }
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
        <div class="products grey-bg">
	<div class="container">
	        
            <div class="breadcrumb-block row">
                <div class="row">
                    <div style="padding-left:0px;;" class="col-sm-6">
                        <h2 style="color:#d71920">Hikvision Products</h2>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-md-12 col-sm-12 col-xs-12 no-rightpadding search-btns">
                            <div class="right-btn-grp">
                                <button type="button" class="btn btn-red product-search-btn" data-toggle="tooltip" title="Search Product"><span class="fa fa-search"></span></button>
                                <button type="button" class="btn btn-red comp-btn" onclick="window.location.href='<?php echo base_url() ?>hikvision-products-compare/'" data-toggle="tooltip" title="Product_Compare"><span class="fa fa-exchange"></span> </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--For add start here-->
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Banner automatic size responsive -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-2645454550256879"
                     data-ad-slot="8920980622"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                <!--For add end here-->
                
                <div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">			
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active">Network Camera</li>
                    </ol>
                </div>
                
                <div class="clearfix"></div>
        
                <div class="product-search" style="display:none;">
                        <form class="form-inline" action="" method="Post">
                        <div class="form-group col-md-3 col-sm-3 no-leftpadding">
                                <select class="form-control" id="dropdown">
                                    <option value="null">Select Category</option>																						
                                </select>
                        </div>
                        <div class="form-group col-md-3 col-sm-3 no-leftpadding">
                                <select class="form-control" id="childCategory">
                                    <option value ="null">Select Series</option>
                                </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-4 no-leftpadding">
                            <input type="text" value= "" class="form-control" placeholder="Search Keywords"  id="text_search">
                        </div>
                        <div class="col-md-2 col-sm-2 text-left">
                            <button type="button" class="btn btn-block btn-red" id="product_search">Search</button>
                            <button type="button" class="btn btn-block btn-red" id="reset">Reset</button>
                        </div>		
                        </form>
                        <div class="close" aria-hidden="true">×</div>
                </div>
	    </div>
  
          
<div class="row product-row">
	    
<div class="category-btn">
        <button class="btn btn-red"><i class="fa fa-filter"></i> Categories</button>
</div>
  
<?php
   $P_Category_Name ="";
   $P_S_Category_Name = "";
   $category_Id = "";
   if(isset($SubCategoryProducts)){
        foreach($SubCategoryProducts as $d){
           $P_Category_Name = $d->Category_Name;
           $P_S_Category_Name = $d->Sub_Category_Name;
           $category_Id = $d->Category_Id;
           break;
        }
   }
   elseif(isset($PCategoryProducts)){
        foreach($PCategoryProducts as $d){
           $P_Category_Name = $d->Category_Name;
           $P_S_Category_Name = $d->Sub_Category_Name;
           $category_Id = $d->Category_Id;
           break;
        }
   }
   else
   {
        foreach($products as $d){
         $P_Category_Name = $d->Category_Name;
         $P_S_Category_Name = $d->Sub_Category_Name;
         $category_Id = $d->Category_Id;
         break;
        } 
   }
   
?>
           
<div class="col-md-3 col-sm-3 col-xs-12 no-padding left-box"> 
    <div class="left-sidebar">
        <h4 class="heading">Products Categories</h4>
        <?php include('inc/Product Details/Categoy MenuBar.php'); ?>
    </div>  
    <script type="text/javascript" src="<?php echo base_url(); ?>themes/vojtasvoboda-vega/assets/js/sticky-kit.min.js"></script>
    <script>
            jQuery(document).ready(function(){
                setStickyfunc();

                jQuery(window).scroll(function(){
                  setStickyfunc();
                });

              function setStickyfunc(){
                //console.log('Here');
                if(jQuery(window).width() > 768){
                  //jQuery(".left-box,.right-box").stick_in_parent({
                  jQuery(".left-box").stick_in_parent({
                    //offset_top: 110
                    parent: '.row',
                    bottoming: true
                  }).on('sticky_kit:bottom', function(e) {
                    jQuery(this).parent().css('position', 'static');
                    //console.log('bottomed');
                  }).on('sticky_kit:unbottom', function(e) {
                    jQuery(this).parent().css('position', 'relative');
                   // console.log('unbottomed');
                  });
                 //console.log(1);
                }
              }
            });
    </script>
</div>
           
           
<div class="col-md-9 col-sm-9 col-xs-12 no-rightpadding right-box">
<div class="right-side">
<script type="text/javascript">
	jQuery('.subcat-dropdown').change(function(){
		var current_value = jQuery(this).val();
		if(current_value != ''){
			window.location.href = current_value;
		}else{
			var path = location.pathname;
			path = path.slice(0, path.lastIndexOf('../index.html'));
			window.location.href = path;
		}
	});
</script>



<div class="row topborder">
	<div class="col-md-6 col-sm-6 col-xs-12 no-leftpadding">
		<h2 c_view_id="<?php echo $category_Id; ?>" class="category_title">
                    <?php 
                        if($P_Category_Name==""){echo "Your Selected Category Camera Not Found";}
                        else{ echo $P_Category_Name; }
                    ?>
                </h2>
		<input type="hidden" class="product_slug" value="network-camera"/>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 no-rightpadding">	
           <div class="small-card">
		<label>Sort By</label>
		<div class="form-group check-box">
			<input type="checkbox" name="whatsnew" id="whatsnew">
			<label class="check" for="whatsnew">Latest Products </label>
		</div>
	    </div>
	</div>
	<div class="clearfix"></div>
</div>	


<div class="row product-list popular-products" id="searchData">
    <?php
        if(isset($SubCategoryProducts)){
            foreach($SubCategoryProducts as $d){
              echo '<div class="col-md-4 col-sm-6 col-xs-12">
                <div class="white-box">
                    <a href="javascript:void(0);" class="plus-icon" data-toggle="modal" data-target="#'.$d->Model.'">
                        <img src="'. base_url().'/themes/vojtasvoboda-vega/assets/img/plus.png" alt="plus" />
                    </a>
                    <div class="top-block" onclick="">
                        <div class="img-wrap">                    
                            <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">
                            
                            <img src="'. base_url().'product image/'.$d->Image.'" alt="'.$d->Model.'" title="'.$d->Name.'" class="img-responsive cursor-pointer"></a>
                        </div>
                        <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">
                            <h4 class="product-name">'.$d->Model.'</h4>
                            <p class="desc">'.$d->Name.'</p>
                        </a>
                    </div>
                    <div class="bottom-block">
                        <div class="form-group row check-box">
                            <div class="col-md-12">
                                <input type="checkbox" name="compare" id="'.$d->Product_Id.'">
                                <label class="check" for="'.$d->Product_Id.'">Add to Compare </label>
                            </div>
                        </div>
                        <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'"> </a>
                    </div>
                </div>
                </div>



                <div class="modal fade productModal" id="'.$d->Model.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <div class="row"> 
                                <div class="col-md-7 col-sm-7 col-xs-12">
                                    <div id="carousel-product" class="carousel slide" data-ride="carousel" data-interval="false">
                                        <div class="carousel-inner" role="listbox">
                                            <div  class="item active">
                                                <img src="'. base_url().'product image/'.$d->Image.'" alt="'.$d->Model.'" title="'.$d->Name.'" class="img-responsive">
                                            </div>                                                                                                                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-12 grey-bg">
                                    <h4>'.$d->Model.'</h4>
                                    <h4 class="red-txt">'.$d->Name.'</h4>
                                    <div class="product-detail-content">
                                        <div class="mCustomScrollbar content">
                                            <ul>'.$d->Sort_Description.'</ul>
                                        </div>
                                    </div>
                                    <div class="form-group row check-box">
                                        <div class="col-md-6">
                                            <input type="checkbox" name="compare" id="'.$d->Product_Id.'" tabindex="0">
                                            <label class="check" for="'.$d->Product_Id.'">Add to Compare </label>
                                        </div>
                                        <div class="col-md-6 no-rightpadding">
                                            <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">See Product Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> '; 
            }
        }
        elseif(isset($PCategoryProducts)){
            foreach($PCategoryProducts as $d){
              echo '<div class="col-md-4 col-sm-6 col-xs-12">
            <div class="white-box">
                <a href="javascript:void(0);" class="plus-icon" data-toggle="modal" data-target="#'.$d->Model.'">
                    <img src="'. base_url().'/themes/vojtasvoboda-vega/assets/img/plus.png" alt="plus" />
                </a>
                <div class="top-block" onclick="">
                    <div class="img-wrap">  
                        <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">  <img src="'. base_url().'product image/'.$d->Image.'" alt="'.$d->Model.'" title="'.$d->Name.'" class="img-responsive cursor-pointer">
                        </a>
                    </div>
                    <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">
                        <h4 class="product-name">'.$d->Model.'</h4>
                        <p class="desc">'.$d->Name.'</p>
                    </a>
                </div>
                <div class="bottom-block">
                    <div class="form-group row check-box">
                        <div class="col-md-12">
                            <input type="checkbox" name="compare" id="'.$d->Product_Id.'">
                            <label class="check" for="'.$d->Product_Id.'">Add to Compare </label>
                        </div>
                    </div>
                    <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'"> </a>
                </div>
            </div>
            </div>



            <div class="modal fade productModal" id="'.$d->Model.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="row"> 
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div id="carousel-product" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner" role="listbox">
                                        <div  class="item active">
                                            <img src="'. base_url().'product image/'.$d->Image.'" alt="'.$d->Model.'" title="'.$d->Name.'" class="img-responsive">
                                        </div>                                                                                                                                           
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 grey-bg">
                                <h4>'.$d->Model.'</h4>
                                <h4 class="red-txt">'.$d->Name.'</h4>
                                <div class="product-detail-content">
                                    <div class="mCustomScrollbar content">
                                        <ul>'.$d->Sort_Description.'</ul>
                                    </div>
                                </div>
                                <div class="form-group row check-box">
                                    <div class="col-md-6">
                                        <input type="checkbox" name="compare" id="'.$d->Product_Id.'" tabindex="0">
                                        <label class="check" for="'.$d->Product_Id.'">Add to Compare </label>
                                    </div>
                                    <div class="col-md-6 no-rightpadding">
                                        <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">See Product Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> ';  
            }
        }
        else
        {
            foreach($products as $d){
            echo '<div class="col-md-4 col-sm-6 col-xs-12">
            <div class="white-box">
                <a href="javascript:void(0);" class="plus-icon" data-toggle="modal" data-target="#'.$d->Model.'">
                    <img src="'. base_url().'/themes/vojtasvoboda-vega/assets/img/plus.png" alt="plus" />
                </a>
                <div class="top-block" onclick="">
                    <div class="img-wrap">                                                                                                             
                        <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'"><img src="'. base_url().'product image/'.$d->Image.'" alt="'.$d->Model.'" title="'.$d->Name.'" class="img-responsive cursor-pointer"></a>
                    </div>
                    <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">
                        <h4 class="product-name">'.$d->Model.'</h4>
                        <p class="desc">'.$d->Name.'</p>
                    </a>
                </div>
                <div class="bottom-block">
                    <div class="form-group row check-box">
                        <div class="col-md-12">
                            <input type="checkbox" name="compare" id="'.$d->Product_Id.'">
                            <label class="check" for="'.$d->Product_Id.'">Add to Compare </label>
                        </div>
                    </div>
                    <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'"> </a>
                </div>
            </div>
            </div>



            <div class="modal fade productModal" id="'.$d->Model.'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="row"> 
                            <div class="col-md-7 col-sm-7 col-xs-12">
                                <div id="carousel-product" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner" role="listbox">
                                        <div  class="item active">
                                            <img src="'. base_url().'product image/'.$d->Image.'" alt="'.$d->Model.'" title="'.$d->Name.'" class="img-responsive">
                                        </div>                                                                                                                                           
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 grey-bg">
                                <h4>'.$d->Model.'</h4>
                                <h4 class="red-txt">'.$d->Name.'</h4>
                                <div class="product-detail-content">
                                    <div class="mCustomScrollbar content">
                                        <ul>'.$d->Sort_Description.'</ul>
                                    </div>
                                </div>
                                <div class="form-group row check-box">
                                    <div class="col-md-6">
                                        <input type="checkbox" name="compare" id="'.$d->Product_Id.'" tabindex="0">
                                        <label class="check" for="'.$d->Product_Id.'">Add to Compare </label>
                                    </div>
                                    <div class="col-md-6 no-rightpadding">
                                        <a href="'. base_url()."products/".str_replace(" ", "-",$P_Category_Name)."/".str_replace(" ", "-",$P_S_Category_Name)."?model=".$d->Model.'">See Product Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> ';
          }
    }
    ?>
</div>


</div>				
</div>
</div>
</div>
</div>
<div class="compare-wrap">
	<div class="compare-block">
	    <ul class="compare_block_html"></ul>
	    <a href="javascript:void(0);" class="remove-btn">Remove All</a>
	</div>
	<input type="hidden" class="product_to_compare" value=""/>
	<button type="button" class="btn btn-red compare-btn">Compare <span class="count">0</span></button>
</div>
        
<script type="text/javascript" src="<?php echo base_url();?>themes/vojtasvoboda-vega/assets/js/sticky-kit.min.js"></script>
<script>
jQuery(document).ready(function(){
    /*Code for sticky kit START*/
    /*jQuery(".bar-sticky,.no-padding").stick_in_parent({
      //parent: '.row',
      //bottoming: true

    });*/
  
    jQuery(window).scroll(function(){
      
      if(jQuery(window).width() > 768){
          jQuery(".no-leftpadding,.no-padding").stick_in_parent({
            //offset_top: 110
            parent: '.row',
      		bottoming: true
         }).on('sticky_kit:bottom', function(e) {
            jQuery(this).parent().css('position', 'static');
         }).on('sticky_kit:unbottom', function(e) {
            jQuery(this).parent().css('position', 'relative');
         });
         //console.log(1);

      }

    });
});
</script>

<script type="text/javascript">

jQuery('#reset').click(function(){
    window.location.href = window.location.pathname;
});
	function get_subcategory(dropdownval){
 //               var search_subcategory = window.location.pathname.substr(window.location.pathname.lastIndexOf('/') + 1);
                var search_subcategory = '';
                /*jQuery.ajax({
                        'type':'POST',
                        'url' : '/admin/jiri/jkshop/categories/onChild',
                        'data': {'value' : dropdownval},
                        success:function(data){
                                if (data != '') {
                                        var appenddata = '<option value="">Select Series</option>';
                                        jQuery.each(data, function(val) {
                                                if(search_subcategory == data[val].slug){
                        							appenddata += "<option selected value = '" + data[val].slug + "'>" + data[val].title + " </option>";
                                                }
                                                else{
                                                    appenddata += "<option value = '" + data[val].slug + "'>" + data[val].title + " </option>";
                                                }
                                        });
                                        jQuery("#childCategory").html('');
                                        jQuery("#childCategory").html(appenddata);
                                }else {
                                       
                                        //jQuery("#childCategory").html('<option value="null">Select Series</option>');
                                }
                        }
 
                });*/
        }



	//sidebae panel
	var per_page = 21;
	jQuery('.panel-collapse').on('show.bs.collapse', function () {
	  jQuery(this).parent('.panel').find('.fa-minus').show();
	  jQuery(this).parent('.panel').find('.fa-plus').hide();
	})
	jQuery('.panel-collapse').on('hide.bs.collapse', function () {
	  jQuery(this).parent('.panel').find('.fa-minus').hide();
	  jQuery(this).parent('.panel').find('.fa-plus').show();
	})

	jQuery('.product-search-btn').click(function(){
	  jQuery('.product-search').slideDown();
	});
	jQuery('.close').click(function(){
	  jQuery('.product-search').slideUp();
	});

	var text_search = jQuery('#text_search').val();

	if(text_search != '')
	{
		jQuery('.product-search').slideDown();
	}else{
		jQuery('.product-search').slideUp();
	}

	/* compare start*/

		jQuery(".compare-block,.compare-btn").hide();


		jQuery("body").on("click", ".bottom-block .check-box input, .productModal .check-box input", function() {
		
			jQuery('#loaderDiv').show();
			if(jQuery(this).is(":checked")) {
		    	jQuery(".compare-block").show();
		        jQuery(".compare-block").delay(5000).fadeOut();
		        jQuery(".compare-btn").show();
		        var product_id = jQuery(this).attr('id');
		        var product_id_arr = [];
		    	product_id_arr = product_id.split('_');
		        var count = jQuery('.compare-btn .count').html();
				jQuery("#productModal_"+product_id_arr[1]+" .check-box input").prop('checked', true);
				jQuery('#'+product_id).prop('checked', true);

				//max 4 product copmare
				if(count <= 3){
					jQuery.ajax({
					            type:'POST',
					            url:'/admin/jiri/jkshop/products/onAddtocompare',
					            data: {product: product_id },
					            success:function(data){
					            	if(data != ''){
					            		var loadData = JSON.stringify(data);
					            		var compareHTML = '';
										jQuery.each(data, function(val) {

											compareHTML += '<li class="card" id="product_'+ data[val].id +'">';
											//compareHTML += '<a class=" fa fa-times close-btn" href="javascript.void(0);" id="'+ data[val].id +'"></a>';
											if(data[val].newImg != ''){
												compareHTML += '<div class="img-wrap"><img src="'+data[val].newImg +'" alt="product-list7" class="img-responsive"/></div>';
											}else{
												compareHTML += '<div class="img-wrap"><img src="/themes/vojtasvoboda-vega/assets/img/default.jpg" alt="product-list7" class="img-responsive"/></div>';
											}
											compareHTML += '<p>'+ data[val].title +'</p></li>';


											var compare_product_id = jQuery('.product_to_compare').val();
					            	
							            	if(compare_product_id == ''){
												jQuery('.product_to_compare').val(data[val].id);
											}else{
							            		jQuery('.product_to_compare').val(compare_product_id+','+data[val].id);
							            	}

									    });
					            	}
					            	jQuery('.compare_block_html').append(compareHTML);
					            	
					            	jQuery('.compare-btn .count').html(parseInt(count)+1);
					            }
					        }); 
				}else{
					alert('Only 4 items can be compared at a time.');
				}	

		    }
		    else {
		    	console.log("i m on product listing page");
		    	var product_id = jQuery(this).attr('id');
		    	var product_id_arr = [];
		    	if(product_id !== undefined){
	                product_id_arr = product_id.split('_');
	                jQuery("#productModal_"+product_id_arr[1]+" .check-box input").prop('checked', false);
	            }
		    	var count = jQuery('.compare-btn .count').html();
		    	var compare_product_id = jQuery('.product_to_compare').val();
		    	jQuery('#'+product_id).prop('checked', false);
		    	console.log("count "+ parseInt(count));
		    	if(parseInt(count) > 0){
		    		var newCount = parseInt(count)-1;
	                jQuery('.compare-btn .count').html(newCount);
	                if(newCount <= 0){
		    			jQuery('.compare-btn .count').html('0');
		    			jQuery(".compare-block,.compare-btn").hide();
		    		}
		    	}else if(parseInt(count) <= 0){
		    		jQuery('.compare-btn .count').html('0');
		    		jQuery(".compare-block,.compare-btn").hide();
		    	}

				compare_product_id = compare_product_id.replace(","+product_id_arr[1]+",", ",");
				compare_product_id = compare_product_id.replace(product_id_arr[1]+",", "");
				compare_product_id = compare_product_id.replace(","+product_id_arr[1], "");
				compare_product_id = compare_product_id.replace(product_id_arr[1], "");

		    	jQuery('.product_to_compare').val(compare_product_id);
	        	jQuery('#product_'+product_id_arr[1]).remove();
		        

		    }
		    setTimeout(function(){ 
	            jQuery('#loaderDiv').hide();
	        }, 400);
		});

		jQuery('.compare-btn').mouseenter(function(){
			jQuery(".compare-block").css('display','block');
		})
		jQuery('html').click(function() {
		   jQuery(".compare-block").css('display','none');
		});

		jQuery('.compare-block').click(function(event){
		    event.stopPropagation();
		});

		jQuery(".remove-btn").click(function(){
		  jQuery(".compare-block").hide();
		  jQuery(".compare_block_html").html('');
		  jQuery('.compare-btn .count').html('0');
		  jQuery(".compare-btn").hide();
		  jQuery('.product_to_compare').val('');
		  location.reload();	

		});

		jQuery(".close-btn").on('click',function(){
			var product_id = jQuery(this).attr('id');
			jQuery("#product_"+product_id).remove();
			var count = jQuery('.compare-btn .count').html();
			jQuery('.compare-btn .count').html(parseInt(count)-1);

			var compare_product_id = jQuery('.product_to_compare').val();
			compare_product_id = compare_product_id.replace(","+product_id+",", ",");
			compare_product_id = compare_product_id.replace(product_id+",", "");
			compare_product_id = compare_product_id.replace(","+product_id, "");
			compare_product_id = compare_product_id.replace(product_id, "");

		    jQuery('.product_to_compare').val(compare_product_id);

		});

		//send to compare page
		jQuery('.compare-btn').click(function(){
			var product_id = jQuery('.product_to_compare').val();
			if(product_id == ''){
				location.href = '../compare.html';
			}
			else{
				location.href = '/compare?product_id='+product_id;
			}
			
		});

	/*compare end*/
	

	/*dropdown on change according to Category :-by SAnjeev Kumar*/

	/*URL of this page is made up of the author name, plugin name, controller name and action name.==> backend/[author name]/[plugin name]/[controller name]/[action name]*/

	var category = jQuery('#dropdown').val();
	if(category != ''){
		get_subcategory(category);
	}

	jQuery('#dropdown').on('change', function(){
		var dropdownval = jQuery(this).val();
		if(dropdownval != ''){
			get_subcategory(dropdownval);
		}else if(dropdownval == ''){
			jQuery("#childCategory").html('<option value="null">Select Series</option>');
		}

	});

	/*after onclick on childcategory dropdown call ajax request :By- sanjeev*/
    var curr_url = window.location.href;
    var search_val = curr_url.split('?text=')[1];
    if(search_val != '' && jQuery.type(search_val) != 'undefined'){
        jQuery('#text_search').val(decodeURIComponent(search_val));     
    }

    jQuery('.form-inline').on('keyup keypress', function(e) {
    	  var keyCode = e.keyCode || e.which;
    	  if (keyCode === 13) { 
    	    e.preventDefault();
    	    return false;
    	  }
    });

	jQuery('#product_search').on('click', function(){
		var parentCategory = jQuery.trim(jQuery('#dropdown').val());
		var childCategory = jQuery.trim(jQuery('#childCategory').val());
		var textSearch = jQuery.trim(jQuery('#text_search').val());
		if(parentCategory !='null' && childCategory!='null'){
			if(textSearch == ''){
				if(childCategory != 'null'){
					window.location.href = '/products/'+parentCategory+'/'+childCategory;
				}else{
					window.location.href = '/products/'+parentCategory;
				}
			}else{
				if(childCategory != 'null'){
					window.location.href = '/products/'+parentCategory+'/'+childCategory+'?text='+textSearch;
				}else{
					window.location.href = '/products/'+parentCategory+'?text='+textSearch;
				}
			}
		}else if(parentCategory !='null' && childCategory =='null'){
			if(textSearch == ''){
					window.location.href = '/products/'+parentCategory;
			}else{
				window.location.href = '/products/'+parentCategory+'?text='+textSearch;
			}
		}else{
			if(textSearch != ''){
				window.location.href = '?text='+textSearch;
			}
		}
	});

/*product sorting BY: Sanjeev*/
	jQuery('#whatsnew').on('click', function(){
		jQuery('#loaderDiv').show();
		var parentCategory = jQuery.trim(jQuery('#dropdown').val());
		var childCategory = jQuery.trim(jQuery('#childCategory').val());
		var textSearch = jQuery('#text_search').val();
		var product_slug = jQuery('.product_slug').val();
		var page_number = jQuery('.loadproduct').attr('rel');
		var sort = '';
		if(jQuery(this).is(':checked')){
			sort = 'desc';
		}else{
			sort = 'asc';
        }
        
        jQuery.ajax({
			'type':'POST',
			'url' : '/admin/jiri/jkshop/products/onSearch',
			'data': {'parentCategory' : parentCategory, 'childCategory': childCategory, 'textSearch': textSearch, 'sort': sort, 'product_slug':product_slug, 'per_page':per_page  },
			success:function(response){

				jQuery(".compare-block").hide();
				jQuery(".compare_block_html").html('');
				jQuery('.compare-btn .count').html('0');
				jQuery(".compare-btn").hide();
				jQuery('.product_to_compare').val('');
				var searchHTML = '';

				if(response != ''){
					var newImg = "../themes/vojtasvoboda-vega/assets/img/new.png";
					
            		jQuery('#searchData').html('');
            		jQuery.each(response, function(val) {
						searchHTML = '';
            			searchHTML +='<div class="col-md-4 col-sm-4 col-xs-12">';
				    	searchHTML += '<div class="white-box">';
				    	searchHTML += '<a href="javascript:void(0);" class="plus-icon" data-toggle="modal" data-target="#productModal_'+response[val].id+'"><img src="/themes/vojtasvoboda-vega/assets/img/plus.png" alt="plus" /> </a>';
				    	searchHTML += '<div class="top-block" onclick="window.location.href=\'/product-detail/'+ response[val].slug + '\'">';
				    	searchHTML += '<div class="img-wrap">';
				    	if(response[val].isNew == 'Y'){
				    		searchHTML += '<a href="javascript:void(0)" class="new-icon"><img src="'+newImg+'" alt="new" /></a>';
				    	}
						if(response[val].newImg != ''){
							searchHTML += '<img src="'+response[val].newImg +'" alt="product-list7" class="img-responsive cursor-pointer"/>';
						}else{
							searchHTML += '<img src="/themes/vojtasvoboda-vega/assets/img/default.jpg" alt="product-list7" class="img-responsive cursor-pointer"/>';
						}

				    	searchHTML += '</div>';
				    	searchHTML += '<h4 class="product-name">'+response[val].title+'</h4>';
				    	searchHTML += '<p class="desc">'+response[val].new_short_description+'</p>';
				    	searchHTML += '</div>';
				    	searchHTML += '<div class="bottom-block">';
				    	searchHTML += '<div class="form-group row check-box">';
				    	searchHTML += '<div class="col-md-12">';
				    	searchHTML += '<input type="checkbox" name="compare" id="compare_'+response[val].id+'">';
				    	searchHTML += '<label class="check" for="compare_'+response[val].id+'">Add to Compare </label>';				    	
				    	searchHTML += '</div>';
				    	searchHTML += '</div>';
				    	searchHTML += '<a href="" class="product-detail-icon pull-right"> </a>';
				    	searchHTML += '</div>'; 
				    	searchHTML += '</div>';
				    	searchHTML += '</div>';

				    	searchHTML += '<div class="modal fade productModal" id="productModal_'+response[val].id+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">';
						    searchHTML += '<div class="modal-dialog" role="document">';
						        searchHTML += '<div class="modal-content">';
						            searchHTML += '<div class="modal-body">';
						            searchHTML += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
						                searchHTML += '<div class="row">';
						                    searchHTML += '<div class="col-md-7 col-sm-7 col-xs-12">';
						                        searchHTML += '<div id="carousel-product_'+response[val].id+'" class="carousel slide" data-ride="carousel" data-interval="false">';
						                            searchHTML += '<div class="carousel-inner" role="listbox">';
						                                searchHTML += '<div  class="item active">';
						                                	if(response[val].newImg != ''){
																searchHTML += '<img src="'+response[val].newImg+'" alt="'+response[val].title+'" class="img-responsive">';

															}else{
																searchHTML += '<img src="/themes/vojtasvoboda-vega/assets/imgs/default.jpg" alt="product-list" class="im g-responsive"/>';
															}
                                            			searchHTML += '</div>';
						                            searchHTML += '</div>';
						                        searchHTML += '</div>';
						                    searchHTML += '</div>';
						                    searchHTML += '<div class="col-md-5 col-sm-5 col-xs-12 grey-bg">';
						                        searchHTML += '<h4>'+response[val].title+'</h4>'
						                        searchHTML += '<h4 class="red-txt">'+response[val].new_short_description+'</h4>';
						                        searchHTML += '<div class="product-detail-content">';
						                        if(response[val].description == ''){
						                        	searchHTML += '<div class="mCustomScrollbar content">'+response[val].feature_and_functions+'</div>';
						                        }else{
						                            searchHTML += '<div class="mCustomScrollbar content">'+response[val].description+'</div>';
						                        }
                        
						                        searchHTML += '</div>';
						                        searchHTML += '<div class="form-group row check-box">';
						                            searchHTML += '<div class="col-md-6">';
						                                searchHTML += '<input type="checkbox" name="compare" id="compare_'+response[val].id+'" tabindex="0">'
						                                searchHTML += '<label class="check" for="compare_'+response[val].id+'">Add to Compare </label>';
						                            searchHTML += '</div>';
						                            searchHTML += '<div class="col-md-6 no-rightpadding">';
						                                searchHTML += '<a href="/product-detail/'+response[val].slug+'" class="see-details pull-right">See Product Details</a>';
						                            searchHTML += '</div>';
						                        searchHTML += '</div>';
						                    searchHTML += '</div>';
						                searchHTML += '</div>';
						            searchHTML += '</div>';
						        searchHTML += '</div>';
						    searchHTML += '</div>';
						searchHTML += '</div>';
						
					jQuery('#searchData').append(searchHTML);

					//console.log("length -> " +response.length);
					//console.log("pageNumber -> " +page_number);
					
					if (response.length < per_page) {
						jQuery('.loadproduct').hide();
					}else if (response.length == per_page) {
						jQuery('.loadproduct').attr('rel',1);
						jQuery('.loadproduct').show();
					}

				});
					jQuery('#loaderDiv').hide();
				}
                                
				else {
					jQuery('#searchData').html('<div class="white-box no-data"><img src="http://www.hikvisionindia.com/themes/vojtasvoboda-vega//assets/img/default.jpg" alt="Default Product"><h3>No products were found matching your selection</h3></div>');
					jQuery('.loadproduct').hide();
					jQuery('.category_title, .small-card').hide();
					jQuery('#loaderDiv').hide();
				}
				jQuery(".content").mCustomScrollbar();
			}	
		});
	});

	//normal page loding option on listing page
	jQuery('.loadproduct').click(function(){
		jQuery('#loaderDiv').show();
		var parentCategory = jQuery('#dropdown').val();
		var childCategory = jQuery('#childCategory').val();
		var textSearch = jQuery('#text_search').val();
		var product_slug = jQuery('.product_slug').val();
		var page_number = jQuery(this).attr('rel');
		var per_page = 21;
		var sort = '';
		if (jQuery('#whatsnew').is(":checked")){
			sort = 'desc';
		}else{
			sort = 'asc';
		}

		console.log("before ajax -> " + page_number);
		/*jQuery.ajax({
			'type':'POST',
			'url' : '/admin/jiri/jkshop/products/onSearch',
			'data': {'parentCategory' : parentCategory, 'childCategory': childCategory, 'textSearch': textSearch, 'product_slug': product_slug, 'page_number':page_number, 'per_page':per_page, 'sort':sort },
			success:function(response){
				if(response != ''){
					var newImg = "../themes/vojtasvoboda-vega/assets/img/new.png";
            		var searchHTML = '';
            		jQuery.each(response, function(val) {
            			searchHTML +='<div class="col-md-4 col-sm-4 col-xs-12">';
				    	searchHTML += '<div class="white-box">';
				    	searchHTML += '<a href="javascript:void(0);" class="plus-icon" data-toggle="modal" data-target="#productModal_'+response[val].id+'"><img src="/themes/vojtasvoboda-vega/assets/img/plus.png" alt="plus" /> </a>';
				    	searchHTML += '<div class="top-block" onclick="window.location.href=\'/product-detail/'+ response[val].slug + '\'">';
				    	searchHTML += '<div class="img-wrap">';
				    	if(response[val].isNew == 'Y'){
				    		searchHTML += '<a href="javascript:void(0)" class="new-icon"><img src="'+newImg+'" alt="new" /></a>';
				    	}
						if(response[val].newImg != ''){
							searchHTML += '<img src="'+response[val].newImg +'" alt="product-list7" class="img-responsive cursor-pointer"/>';
						}else{
							searchHTML += '<img src="/themes/vojtasvoboda-vega/assets/img/default.jpg" alt="product-list7" class="img-responsive cursor-pointer"/>';
						}

				    	searchHTML += '</div>';
				    	searchHTML += '<h4 class="product-name">'+response[val].title+'</h4>';
				    	searchHTML += '<p class="desc">'+response[val].new_short_description+'</p>';
				    	searchHTML += '</div>';
				    	searchHTML += '<div class="bottom-block">';
				    	searchHTML += '<div class="form-group row check-box">';
				    	searchHTML += '<div class="col-md-12">';
				    	searchHTML += '<input type="checkbox" name="compare" id="compare_'+response[val].id+'">';
				    	searchHTML += '<label class="check" for="compare_'+response[val].id+'">Add to Compare </label>';				    	
				    	searchHTML += '</div>';
				    	searchHTML += '</div>';
				    	searchHTML += '<a href="" class="product-detail-icon pull-right"> </a>';
				    	searchHTML += '</div>'; 
				    	searchHTML += '</div>';
				    	searchHTML += '</div>';

				    	searchHTML += '<div class="modal fade productModal" id="productModal_'+response[val].id+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">';
						    searchHTML += '<div class="modal-dialog" role="document">';
						        searchHTML += '<div class="modal-content">';
						            searchHTML += '<div class="modal-body">';
						            searchHTML += '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
						                searchHTML += '<div class="row">';
						                    searchHTML += '<div class="col-md-7 col-sm-7 col-xs-12">';
						                        searchHTML += '<div id="carousel-product_'+response[val].id+'" class="carousel slide" data-ride="carousel" data-interval="false">';
						                            searchHTML += '<div class="carousel-inner" role="listbox">';
						                                searchHTML += '<div  class="item active">';
						                                	if(response[val].newImg != ''){
																searchHTML += '<img src="'+response[val].newImg+'" alt="'+response[val].title+'" class="img-responsive">';

															}else{
																searchHTML += '<img src="/themes/vojtasvoboda-vega/assets/img/default.jpg" alt="product-list" class="img-responsive"/>';
															}
                                            			searchHTML += '</div>';
						                            searchHTML += '</div>';
						                        searchHTML += '</div>';
						                    searchHTML += '</div>';
						                    searchHTML += '<div class="col-md-5 col-sm-5 col-xs-12 grey-bg">';
						                        searchHTML += '<h4>'+response[val].title+'</h4>'
						                        searchHTML += '<h4 class="red-txt">'+response[val].new_short_description+'</h4>';
						                        searchHTML += '<div class="product-detail-content">';
						                        if(response[val].description == ''){
						                        	searchHTML += '<div class="mCustomScrollbar content">'+response[val].feature_and_functions+'</div>';
						                        }else{
						                            searchHTML += '<div class="mCustomScrollbar content">'+response[val].description+'</div>';
						                        }
                        
						                        searchHTML += '</div>';
						                        searchHTML += '<div class="form-group row check-box">';
						                            searchHTML += '<div class="col-md-6">';
						                                searchHTML += '<input type="checkbox" name="compare" id="compare_'+response[val].id+'" tabindex="0">'
						                                searchHTML += '<label class="check" for="compare_'+response[val].id+'">Add to Compare </label>';
						                            searchHTML += '</div>';
						                            searchHTML += '<div class="col-md-6 no-rightpadding">';
						                                searchHTML += '<a href="/product-detail/'+response[val].slug+'" class="see-details pull-right">See Product Details</a>';
						                            searchHTML += '</div>';
						                        searchHTML += '</div>';
						                    searchHTML += '</div>';
						                searchHTML += '</div>';
						            searchHTML += '</div>';
						        searchHTML += '</div>';
						    searchHTML += '</div>';
						searchHTML += '</div>';

				    });
				   
					jQuery('#searchData').append(searchHTML);
					console.log("length -> " +response.length);
					console.log("pageNumber -> " +page_number);
					if (response.length < per_page) {
						jQuery('.loadproduct').hide();
					}else if (response.length == per_page) {
						jQuery('.loadproduct').attr('rel',parseInt(page_number)+1 );
					}
					jQuery('#loaderDiv').hide();
				}				
				else {
					jQuery('.loadproduct').hide();
					jQuery('#loaderDiv').hide();
				}
				jQuery(".content").mCustomScrollbar();
			}	
		});*/

	});
	
	jQuery('.category-btn').click(function(){
		jQuery('.left-box').slideToggle('slow');
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
            });

    });
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
       var cid =  jQuery('.category_title').attr('c_view_id');
       var mcid =  jQuery('#colid').attr('cid');
    });
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>/themes/vojtasvoboda-vega/assets/js/chatscripthikvision.js"></script>
</html>