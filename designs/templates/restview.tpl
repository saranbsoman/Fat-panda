<!--  {literal}
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    {/literal} -->
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="admin/css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="admin/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="admin/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">







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
    <section class="main-content" id="home">
        <!-- /header -->
        <header>
            <div class="container-fluid px-lg-5 px-3">
                <!-- nav -->
                <nav class="py-2 d-lg-flex">
                    <div id="logo">
                        <h1><a class="navbar-brand logo" href="index.php">
                                 Fat Panda
                            </a></h1>
                    </div>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu ml-auto">
                        <li class="active"><a href="restview.php">Home</a></li>
                       <!--  <li ><a href="adminrequest.php">Requests <span class="badge"><h6><font color="red">({$count})</font></h6></span></a><br></li> -->
                        <li><a href="reststaff.php">Staff</a></li>
                        
                           <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Settings<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul class="inner-ul">
                                <li><a href="changepassword.php">Change Password</a></li>
                                
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                           <li><a href="restgallery.php">Gallery</a></li>
                        <li><a href="recipe.php">Recipe</a></li> 
                          <li><a href="resttable.php">Add Table</a></li>    
                        <li><a href="restaccount.php">Account</a></li>    
                        <li>{foreach from=$view item='b'}<img src="{$b.image}" alt=""  class="rounded-circle" alt="Cinque Terre" width="40px" height="40px">{/foreach}</li>   
    

                        </li>
                        <!--  -->
                       
                    </ul>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
         <div class="page-inner">

        </div>
        <!---->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active">Contact</li>
        </ol>
        <!-- //banner-inner -->

    </section>


            
            <div class="row news-grids mt-md-5 mt-4 text-center">

             {foreach from=$view1 item='b'}
                <div class="col-md-4 gal-img">
                    <a href="#{$b.id}"><img src="{$b.image}" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <a href="#.php?v={$b.rkey}" ><h5>{$b.name}<span class="decription">{$b.amount}</span></h5></a>
                    </div>
                  <!--   <a href="approve.php?v={$b.lkey}"><Button class="btn btn-success btn-sm">Approve</Button></a>
                    <a href="reject.php?v={$b.lkey}"><Button class="btn btn-danger btn-sm">Reject</Button></a>
 -->
                </div>
                {/foreach}               

            </div>
            <!-- popup-->
             {foreach from=$view1 item='b1'}
            <div id="{$b1.id}" class="pop-overlay">
                <div class="popup">
                    <img src="{$b1.image}" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4">{$b1.contactno}</p>
                    <p class="mt-4">{$b1.city},{$b1.id}</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
                 {/foreach} 









<!-- footer -->
{literal}
    <footer class="footer-content py-sm-5 py-4">
        <div class="container py-xl-5 py-lg-3">
            <div class="contact_grid_left">
                <ul class="list-unstyled row loaction-content">
                    <li class="col-lg-4 address-content-inf-w3ls">
                        <div class="row">
                            <div class="col-md-3 icon-left">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="col-md-9 icon-right">
                                <h6>Address</h6>
                                <p>The company name
                                    <br>New York City. </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 address-content-inf-w3ls">
                        <div class="row">
                            <div class="col-md-3 icon-left">
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="col-md-9 icon-right">
                                <h6>Email</h6>
                                <a href="mailto:info@example.com">mail@example.com</a>
                                <br>
                                <a href="mailto:info@example.com">mail2@example.com</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 address-content-inf-w3ls">
                        <div class="row">
                            <div class="col-md-3 icon-left">
                                <span class="fa fa-phone"></span>
                            </div>
                            <div class="col-md-9 icon-right">
                                <h6>Phone Number</h6>
                                <p>+ 1234567890</p>
                                <p>+ 0987654321</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            
            <!-- social icons footer -->
            <div class="w3ls-footer text-center mt-4">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
                            <span class="fa fa-facebook-f"></span>
                        </a>
                    </li>
                    <li class="mx-1">
                        <a href="#">
                            <span class="fa fa-twitter"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="fa fa-dribbble"></span>
                        </a>
                    </li>
                    <li class="ml-1">
                        <a href="#">
                            <span class="fa fa-vk"></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- copyright -->
            <p class="copy-right-grids text-li text-center my-sm-4 my-4">© 2019 Conveyance. All Rights Reserved | Design by
                <a href="http://w3layouts.com/"> W3layouts </a>
            </p>
            <div class="top_move text-center">
                <a href="#home" class="move-top"><span class="fa fa-angle-up  mb-3" aria-hidden="true"></span></a>
            </div>
            <!-- //copyright -->
        </div>
    </footer>
    <!-- footer -->
    {/literal}