<?php
	include('curl.php');
	findMostVisitedPg($ash_rows, $shruti_rows, $ami_rows, $aj_rows, $manu_rows, $hiral_rows); 
    // print_r($id);
    // print_r($title);
    // print_r($page_url);
    // print_r($img_url);
    // print_r($avg_rating);
    // print_r($author);

	//Fetch just the top 4 services
	for($i=0;$i<count($top6Visits);$i++){
	printf('<div class="medium-3 small-12 columns wd100 product">');
	printf('<div class="product-image">');
	printf('<div class="sale-tag">Hot</div>');
	printf('<a href="%s">',$title[$i]);
	printf('<img style="height:150px;" src="%s" alt="">',$img_url[$i]);
	printf('<img style="height:150px;" src="%s" alt="">',$img_url[$i]);
	printf('</a>');
	printf('
	        <div class="pro-buttons menu-centered">
	            <ul class="menu">
	                <a href="javascript:void(0);" class="addCart" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
	            </ul>
	        </div><!-- product buttons /-->

	    </div><!-- Product Image /-->
	    <div class="product-title">
	 ',$id[$i]);

	       printf('<a href="%s">%s</a>',$id[$i],$title[$i]);
	    printf('</div><!-- product title /-->
	    <div class="product-meta">
	        <div class="prices">
	            $<span class="shippingPrice">%s</span>
	            
	        </div>
	        <div class="last-row">
	            <div class="pro-rating float-left">',$price[$i]);
	             printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$id[$i], $avg_rating[$i]);
	            printf('</div>
	            <div class="store float-right">By:'.$author[$i].'</div>
	        </div><!-- last row /-->
	        <div class="clearfix"></div>
	    </div><!-- product meta /-->
	</div><!-- Product /-->');
	}

?>
