<?php
	//include('curl.php');
	findMostRatedPg($ash_rows, $shruti_rows, $ami_rows, $aj_rows, $manu_rows, $hiral_rows); 
    // print_r($id);
    // print_r($title);
    // print_r($page_url);
    // print_r($img_url);
    // print_r($avg_rating_r);
    // print_r($author_r);

	//Fetch just the top 4 services
	for($i=0;$i<count($top3Rated);$i++){
	printf('<div class="medium-6 small-12 columns wd100 product">');
	printf('<div class="product-image">');
	printf('<div class="sale-tag">Hot</div>');
	printf('<a href="%s">',$id_r[$i]);
	printf('<img style="height:150px;" src="%s" alt="">',$img_url_r[$i]);
	printf('<img style="height:150px;" src="%s" alt="">',$img_url_r[$i]);
	printf('</a>');
	printf('
	        <div class="pro-buttons menu-centered">
	            <ul class="menu">
	                <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to wish list"><i class="fa fa-heart"></i></a></li>
	                <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Open Product Page"><i class="fa fa-retweet"></i></a></li>
	                <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Quick View"><i class="fa fa-search-plus"></i></a></li>
	                <li><a href="http://www.webfulcreations.com/envato/webful_marketplace/html/index.html#" title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
	            </ul>
	        </div><!-- product buttons /-->

	    </div><!-- Product Image /-->
	    <div class="product-title">
	 ');

	       printf('<a href="%s">%s</a>',$id_r[$i],$title_r[$i]);
	    printf('</div><!-- product title /-->
	    <div class="product-meta">
	        <div class="prices">
	            <span class="price">Custom</span>
	            
	        </div>
	        <div class="last-row">
	            <div class="pro-rating float-left">');
	             printf(' <input id="%s" type="hidden" class="rating rate" value="%s" data-readonly data-filled="fa fa-star fa-x" data-empty="fa fa-star-o fa-x" data-fractions="2"/>',$id_r[$i], $avg_rating_r[$i]);
	            printf('</div>
	            <div class="store float-right">
	                By: <a href="http://www.webfulcreations.com/envato/webful_marketplace/html/store-front.html">'.$author_r[$i].'</a>
	            </div>
	        </div><!-- last row /-->
	        <div class="clearfix"></div>
	    </div><!-- product meta /-->
	</div><!-- Product /-->');
	}

?>