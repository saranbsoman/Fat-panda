<?php /* Smarty version 2.6.26, created on 2020-02-07 08:02:26
         compiled from staffaddmenu.tpl */ ?>
<!--  <?php echo '
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    '; ?>
 -->
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">







<?php echo '
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    '; ?>

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
                        <h1><a class="navbar-brand logo" href="index.html">
                                 Fat Panda
                            </a></h1>
                    </div>
                    <label for="drop" class="toggle">Menu</label>
                    <input type="checkbox" id="drop" />
                    <ul class="menu ml-auto">
                        <li class="active"><a href="staffview.php">Home</a></li>
                       <!--  <li ><a href="adminrequest.php">Requests <span class="badge"><h6><font color="red">(<?php echo $this->_tpl_vars['count']; ?>
)</font></h6></span></a><br></li> -->
                        <li><a href="staffview.php">Menu</a></li>
                        <li><a href="#">Add Menu</a></li>
                           <li>
                            <!-- First Tier Drop Down -->
                            <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                            <a href="#">Settings<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                            <input type="checkbox" id="drop-2" />
                            <ul class="inner-ul">
                                <li><a href="changepassword.php">Change Password</a></li>
                                <li><a href="staffaccount.php">Account</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                            <li><?php $_from = $this->_tpl_vars['view3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?><img src="<?php echo $this->_tpl_vars['b']['image']; ?>
" alt=""  class="rounded-circle" alt="Cinque Terre" width="40px" height="40px"><?php echo $this->_tpl_vars['b']['restname']; ?>
<?php endforeach; endif; unset($_from); ?></li> 
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


            
           <!--  <div class="row news-grids mt-md-5 mt-4 text-center">

             <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
                <div class="col-md-4 gal-img">
                    <a href="#<?php echo $this->_tpl_vars['b']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['b']['image']; ?>
" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <a href="#.php?v=<?php echo $this->_tpl_vars['b']['rkey']; ?>
" ><h5><?php echo $this->_tpl_vars['b']['name']; ?>
<span class="decription"><?php echo $this->_tpl_vars['b']['amount']; ?>
</span></h5></a>
                    </div>
                    <a href="approve.php?v=<?php echo $this->_tpl_vars['b']['lkey']; ?>
"><Button class="btn btn-success btn-sm">Approve</Button></a>
					<a href="reject.php?v=<?php echo $this->_tpl_vars['b']['lkey']; ?>
"><Button class="btn btn-danger btn-sm">Reject</Button></a>

                </div>
                <?php endforeach; endif; unset($_from); ?>               

            </div>
                         <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b1']):
?>
            <div id="<?php echo $this->_tpl_vars['b1']['id']; ?>
" class="pop-overlay">
                <div class="popup">
                    <img src="<?php echo $this->_tpl_vars['b1']['image']; ?>
" alt="Popup Image" class="img-fluid" />
                    <p class="mt-4"><?php echo $this->_tpl_vars['b1']['contactno']; ?>
</p>
                    <p class="mt-4"><?php echo $this->_tpl_vars['b1']['city']; ?>
,<?php echo $this->_tpl_vars['b1']['id']; ?>
</p>
                    <a class="close" href="#gallery">&times;</a>
                </div>
            </div>
                 <?php endforeach; endif; unset($_from); ?>  -->
<form method="post" action="">
    <input type="hidden" name="hide" value="h">

                 <table border="2" class="table">
        <tr><th>Category</th><th>Name</th><th>Amount</th><th>Details</th></tr>
    <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
    <tr><td><?php echo $this->_tpl_vars['b']['category']; ?>
</td><
    <td><?php echo $this->_tpl_vars['b']['name']; ?>
</td>
    <td><?php echo $this->_tpl_vars['b']['amount']; ?>
</td>
    <td><?php echo $this->_tpl_vars['b']['details']; ?>
</td>
    <!-- <td><?php echo $this->_tpl_vars['b']['image']; ?>
</td> -->
   <!--  <td><a href="deletemenu.php?v=<?php echo $this->_tpl_vars['b']['mkey']; ?>
"><Button class="btn btn-outline-danger btn-sm">Delete</Button></a></td>--> 
   <td><input type="checkbox" name="add[]" value="<?php echo $this->_tpl_vars['b']['id']; ?>
"></td>
             
    <?php endforeach; endif; unset($_from); ?>
</tr>

</table>
<center><input type="submit" value="ADD" class="btn btn-success"></center>


</form>





<!-- footer -->
<?php echo '
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
    '; ?>