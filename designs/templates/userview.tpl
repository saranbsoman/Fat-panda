<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Infinitude Corporate Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


</head>
<body>
    <div id="home" class="inner-w3pvt-page">
        <div class="overlay-innerpage">
            <!--/top-nav -->
            <div class="top_w3pvt_main container">
                <!--/header -->
                <header class="nav_w3pvt text-center">
                    <!-- nav -->
                    <nav class="wthree-w3ls">
                        <div id="logo">
                            <h1> <a class="navbar-brand px-0 mx-0" href="index.php">Fat Panda
                                </a>
                            </h1>
                        </div>

                        <label for="drop" class="toggle">Menu</label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu mr-auto">
                            <li class="active"><a href="userview.php">Home</a></li>
                            <li><a href="usercomplaintview.php">My Complaints</a></li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle toggle-2">Settings <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                                <a href="#">Settings  <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                                <input type="checkbox" id="drop-2" />
                                <ul>

                                    <!-- <li><a href="deactivate.php" class="drop-text">Deactivate</a></li> -->
                                     <li><a href="changepassword.php" class="drop-text">Change Password</a></li>
                                    <li></li>
                                    <li><a href="logout.php" class="drop-text">Logout</a></li>
                                    
                                </ul>
                                <li>{foreach from=$view2 item='b'}<a href="order.php?w={$b.rrkey}">My Order</a>{/foreach}</li>  
                             <li>{foreach from=$view3 item='b'}<a href="userprofile.php" class="drop-text">My Account</a><img src="{$b.image}" alt=""  class="rounded-circle" alt="Cinque Terre" width="50px" height="50px">{$b.restname}{/foreach}</li>   
                            </li>
                           <!--  <li><a href="index.html">Projects</a></li>
                            <li><a href="contact.html">Contact</a></li> -->

                            </ul>


                    </nav>
                    <!-- //nav -->
                    <div class="container">
                        <center>
                        <form method="post" action="userview.php">
                            <input type="hidden" name="hide" value="h">
                            <input class="form-inline form-control input-sm col-3" type="text" name="search" class="search" placeholder="search here">
                            <button class="btn btn-primary btn-xs" type="submit">Search</button>
                        </form>
                        </center>
                    </div>
                </header>
                <!--//header -->

                <!--/breadcrumb-->
                
                <!--//breadcrumb-->
            </div>
            <!-- //top-nav -->
        </div>
    </div>

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
          <!--   <h3 class="tittle-w3ls text-left mb-5"><span class="pink">Stunning</span> Projects</h3> -->
            <div class="row news-grids mt-md-5 mt-4 text-center">

                 {foreach from=$view item='b'}
                <div class="col-md-4 gal-img">
                    <a href="#{$b.id}"><img src="{$b.image}" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                       <a href="restprofile.php?v={$b.rrkey}" > <h5>{$b.restname}<span class="decription">{$b.district}</span></h5></a>
                    </div>
                </div>
                {/foreach}               

            </div>
            <!-- popup-->
             {foreach from=$view item='b1'}
            <div id="{$b1.id}" class="pop-overlay">
                <div class="popup">
                    <img src="{$b1.image}" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">{$b1.contactno}</p>
                    <p class="mt-4">{$b1.city}</p>
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

    <!-- footer -->
    <footer class="py-lg-5 py-4">
        <div class="container py-sm-3">
            <div class="row footer-grids">
                <div class="col-lg-4 mt-4">

                    <h2> <a class="navbar-brand px-0 mx-0 mb-4" href="index.html">Infinitude
                        </a>
                    </h2>
                    <p class="mb-3">Lorem Ipsum is simply text the printing and typesetting standard industry. Onec Consequat sapien ut cursus rhoncus. Nullam dui mi, vulputate ac metus.</p>
                    <h5>Trusted by <span>500+ People</span> </h5>
                    <div class="icon-social mt-4">
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-facebook"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-twitter"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-dribbble"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-pinterest"></span>
                        </a>
                        <a href="#" class="button-footr">
                            <span class="fa mx-2 fa-google-plus"></span>
                        </a>

                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <h4 class="mb-4">Quick Links</h4>
                    <div class="links-wthree d-flex">
                        <ul class="list-info-wthree">
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Online Websites</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Free Application</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Support Helpline</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Privacy Ploicy</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Ready to Build</a></li>
                            <li><a href="#"><span class="fa fa-angle-double-right" aria-hidden="true"></span> Free Application</a></li>
                        </ul>
                        <ul class="list-info-wthree ml-5">
                            <li>
                                <a href="index.html"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="about.html"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="single.html"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Single Page
                                </a>
                            </li>
                            <li>
                                <a href="team.html"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Team
                                </a>
                            </li>
                            <li>
                                <a href="contact.html"><span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 ad-info">
                    <h4 class="mb-4">Contact Info</h4>
                    <p><span class="fa fa-map-marker"></span>90 nsequursu dsdesdc,
                        xxx Honey Street 049436.<span>Newyork, NY.</span></p>
                    <p class="phone"><span class="fa fa-phone"></span> +1(12) 123 456 789 </p>
                    <p class="phone"><span class="fa fa-fax"></span> +1(12) 123 456 789 </p>
                    <p><span class="fa fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- //footer -->
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
