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

            
            <div class="row news-grids mt-md-5 mt-4 text-center">

             {foreach from=$view item='b'}
                <div class="col-md-4 gal-img">
                    <a href="#{$b.id}"><img src="{$b.image}" alt="w3pvt" class="img-fluid"></a>
                    <div class="gal-info">
                        <a href="restprofileadmin.php?v={$b.rrkey}" ><h5>{$b.restname}<span class="decription">{$b.city}</span></h5></a>
                    </div>
                    <a href="approve.php?v={$b.lkey}"><Button class="btn btn-success btn-sm">Approve</Button></a>
					<a href="reject.php?v={$b.lkey}"><Button class="btn btn-danger btn-sm">Reject</Button></a>

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

