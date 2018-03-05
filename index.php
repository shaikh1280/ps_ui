<html style="height: auto; min-height: 100%;">
    <head>
        <?php include('./include/global_header.php') ?>
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
        <div class="wrapper" style="height: auto; min-height: 100%;">
            <?php include('./include/page_header.php') ?>           
            <div class="content-wrapper" style="min-height: 364px;">
                <div class="container">                    
                    <br>
                    <div class="box box-success box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">All URL's</h3>
                            <div class="box-tools pull-right">
                            </div>                          
                        </div>                      
                        <div class="box-body">
                            <ul class="nav nav-stacked">
                                <li><a href="./profile.php">Profile</a></li>
                                <li><a href="./login.php">Log In</a></li>
                                <li><a href="./signup.php">Sign Up</a></li>
                                <li><a href="./resetpart1.php">Reset Password Part 1</a></li>
                                <li><a href="./resetpart2.php">Reset Password Part 2</a></li>
                            </ul>
                        </div>                        
                    </div>                                       
                </div>               
            </div>           
        </div>
        <?php include('./include/global_footer.php') ?>
    </body>
</html>