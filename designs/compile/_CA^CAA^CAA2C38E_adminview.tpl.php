<?php /* Smarty version 2.6.26, created on 2020-01-28 15:56:50
         compiled from adminview.tpl */ ?>
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


   <!-- /projects -->
    <section class="projects py-5" id="gallery">
        <div class="container py-md-5">
           <div class="row news-grids mt-md-5 mt-4 text-center">
                
               <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
                <div class="col-md-4 gal-img">
                    <a href="#<?php echo $this->_tpl_vars['b']['id']; ?>
"><img src="<?php echo $this->_tpl_vars['b']['image']; ?>
" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                       <a href="restprofileadmin.php?v=<?php echo $this->_tpl_vars['b']['rrkey']; ?>
" > <h5><?php echo $this->_tpl_vars['b']['restname']; ?>
<span class="decription"><?php echo $this->_tpl_vars['b']['city']; ?>
</span></h5></a>
                    </div>
                </div>
                <?php endforeach; endif; unset($_from); ?>               

            </div>
            <!-- popup-->
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
                 <?php endforeach; endif; unset($_from); ?> 
            <!-- //popup -->
        </div>
    </section>
    <!-- //projects -->