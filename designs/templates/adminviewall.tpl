<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fat Panda</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Infinitude Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    {literal}
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    {/literal}
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="user/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="user/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="user/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->

</head>
<body>
    <!--/home -->
   
        <!-- //top-nav -->
        <!-- banner slider -->
   
    <!-- //banner -->

    <!-- //home -->

    <!-- about -->
 
    <!-- //about -->
    <!--/ab-->

    <!--//ab-->

    <!--/services-->
   
    <!--//services-->
    <!-- /projects -->
    <section class="projects py-5" id="gallery">
        <div class="container py-md-5">
            <div class="row news-grids mt-md-5 mt-4 text-center">

                {foreach from=$view item='b'}
                <div class="col-md-4 gal-img">
                    <a href="#{$b.id}"><img src="{$b.image}" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                       <a href="restprofileadmin.php?v={$b.rrkey}" ><h5>{$b.restname}<span class="decription">{$b.city}</span></h5></a>
                    </div>
                    <a href="approve.php?v={$b.lkey}"><Button class="btn btn-success btn-sm">Approve</Button></a>
                </div>
                {/foreach}               

            </div>
            <!-- popup-->
             {foreach from=$view item='b1'}
            <div id="{$b1.id}" class="pop-overlay">
                <div class="popup">
                    <img src="{$b1.image}" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">{$b1.contactno}</p>
                    <p class="mt-4">{$b1.city},{$b1.id}</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
                 {/foreach}
            <!-- //popup -->
            <!-- popup--
            <div id="gal2" class="pop-overlay">
                <div class="popup">
                    <img src="user/images/g2.jpg" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">Nulla viverra pharetra se, eget pulvinar neque pharetra ac int. placerat placerat dolor.</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
             //popup -->
            <!-- popup-->
           
            <!-- //popup3 -->
            <!-- popup-->
         
            <!-- //popup -->
            <!-- popup-->
          
            <!-- //popup -->
          
            <!-- //popup -->
            <!-- popup-->
           
            <!-- //popup -->
        </div>
    </section>
    <!-- //projects -->
    <!-- /blogs -->
    
    <!-- //blogs -->
    <!--/mid-->
   
    <!--//mid-->

    <!--/services-->
   
    <!--//testimonials-->

   
    <!-- //news-letter -->

   <!--  -->
    <!-- copyright -->
    <div class="copy_right p-3 d-flex">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 copy_w3pvt">
                    <p class="text-lg-left text-center">© 2019 Infinitude. All rights reserved | Design by
                        <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>

                </div>
                <!-- move top -->
                <div class="col-lg-3 move-top text-lg-right text-center">
                    <a href="#home" class="move-top">
                        <span class="fa fa-angle-double-up mt-3" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- move top -->
            </div>
        </div>

    </div>
    <!-- //copyright -->
</body>

</html>
