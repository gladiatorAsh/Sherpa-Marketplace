<?php include('includes/nav.php')?>








        <!-- Banner Section Starts -->
        <div class="banner row module">

            <!-- Categories -->
            <div class="medium-3 columns no-pad-left">
                <div class="widget categories">
                    <h2>Websites</h2>

                    <nav class="widget-content">
                        <ul class="menu vertical dropdown" data-responsive-menu="accordion medium-dropdown" role="menubar" data-dropdown-menu="vtz2ih-dropdown-menu">
                             <li class="menuitem"><a href="productList.php?product_group=ash" tabindex="0">Code Warriors</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=shruti">SMedia</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=manu">Agent Immobilier</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=hiral">Parikh's Snooker Club</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=aj"> Cleaner City</a></li>
                            <li role="menuitem"><a href="productList.php?product_group=ami"> TravelHack</a></li>
                        </ul>
                    </nav><!-- widget-content /-->

                </div><!-- widget /-->
            </div>
            <!-- Categories -->
            <!-- Main slider -->
              <div class="medium-9 columns no-pad-left" style="background-color:white">
          
 <?php 
    

include('includes/curl.php');
$product_no = $_GET['product_detail'];

$productgr = $_GET['product_gr'];
$insertURL="";
      function view_products($rows, $author,$productno){
        
          printf(' <div class="banner row module" style="background-color:#FF5733">
                     <center> <h1 style="color:white;font-family:comic sans mf;" class="lazyEffect productName"  >
                        %s
                        </h1></center>
                     </div>
                     <div class="banner row module">
                          <div class="medium-6 columns no-pad-left" >
                                   <center><img src="%s" height="400" width="400" class="img-thumbnail productImg"></img></center>
                                <br><br>   <h3  style="color:blue;font-family:comic sans mf;" class="price">Price : <span class="FinalCost"> %s </span></h3><h3  style="color:blue;font-family:comic sans mf;" class="price" style="align:left"> Ratings : %s /5 </h3>
                          
                                 <br>   
                             <form><a href="javascript:void(0);"  class="btn btn-primary addCart" name="atc" style="background-color:#4CAF50; color: white;padding: 15px 32px;text-align: center;font-size: 16px;height:100;width:500;"> Add to Cart</a></form>
                             <br>
                          </div>
                     <div class="medium-6 columns no-pad-left" style="color:black;"> %s
                         </div>  
                              
                    </div>
                        ',$rows[$productno][1],$rows[$productno][3],$rows[$productno][8],round($rows[$productno][9]),$rows[$productno][4]);

        

    }

 if($productgr=="ami"){
        $visits=$ami_rows[$product_no][7]+1;
        $insertURL="http://sign-privilege.000webhostapp.com/increaseVisits.php?prodid=".$ami_rows[$product_no][0]."&&visits=".$visits ;
        view_products($ami_rows,"Ami Patel",$product_no);

    }
 
else if($productgr=="shruti"){
    $visits=$shruti_rows[$product_no][7]+1;
    $insertURL="http://smedia.herokuapp.com/services/increaseVisits.php?prodid=".$shruti_rows[$product_no][0]."&&visits=".$visits ;
    view_products($shruti_rows,"Shruti",$product_no);
}
else if($productgr=="manu"){

    $visits=$manu_rows[$product_no][7]+1;
    $insertURL= "http://agentimmobilier.000webhostapp.com/increaseVisits.php?prodid=".$manu_rows[$product_no][0]."&&visits=".$visits ;   
    view_products($manu_rows,"Manu",$product_no);
}
else if($productgr=="ash"){
    $visits=$ash_rows[$product_no][7]+1;
    $insertURL="http://codewarriors.herokuapp.com/services/increaseVisits.php?prodid=".$ash_rows[$product_no][0]."&&visits=".$visits ;  
    view_products($ash_rows,"Ashutosh",$product_no);
}
else if($productgr=="aj"){
    $visits=$aj_rows[$product_no][7]+1;
    $insertURL="http://cleanercity.co/increaseVisits.php?prodid=".$aj_rows[$product_no][0]."&&visits=".$visits ;
        
 view_products($aj_rows,"AJ",$product_no);
}
else if($productgr=="hiral"){
    $visits=$hiral_rows[$product_no][7]+1;
    $insertURL="http://hiralparikh.000webhostapp.com/increaseVisits.php?prodid=".$hiral_rows[$product_no][0]."&&visits=".$visits ;
        
 view_products($hiral_rows,"Hiral",$product_no);
}
 get_data($insertURL);
 
    ?>           
</div>
          <!-- Main Slider /-->

        </div>
        <!-- Banner Section Ends /-->

        <div class="footer">
      
        </div>
        <!-- Footer Ends here -->
    </div>
    <!-- MAIN Container Ends here. -->
    <a href="index.html#top" id="top" class="animated fadeInUp start-anim" style="display: none;"><i class="fa fa-angle-up"></i></a>
    <!-- Page Preloader -->
    <div class="preloader" style="display: none;"></div>

    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"></script>

    <!-- Crousel JS -->
    <script type="text/javascript" src="./assets/owl.carousel.min.js.download"></script>
    <!-- jQuery Timer plugin delete if not using -->
    <script src="./assets/jquery.simple.timer.js.download"></script>

   
    
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    
    <script type="text/javascript" src="js/bootstrap-rating.min.js"></script>
    <script type="text/javascript" src="js/rating.js"></script>
    <script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items:3,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [980,3],
            itemsTablet: [768,2],
            itemsTabletSmall: false,
            itemsMobile : [479,1],
            singleItem : false,
            itemsScaleUp : false,
            // Responsive 
            responsive: true,
            responsiveRefreshRate : 200,
            responsiveBaseWidth: window,
            //Lazy load
            lazyLoad : false,
            lazyFollow : true,
            lazyEffect : "fade",
            
            // Navigation
            navigation : true,
            navigationText : ["Prev","Next"],
            rewindNav : true,
            scrollPerPage : true
            
        });
     });

    </script>
    <script type="text/javascript" src="js/viewProductCart.js"></script>
     <script>
    $(document).ready(function() {
    ShoppingCart.init();
    
    });
   </script>
</body>
</html>