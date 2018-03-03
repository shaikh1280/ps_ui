<html style="height: auto; min-height: 100%;"><head>
        <?php include('./include/global_header.php') ?>
    </head>
    <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
    <body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
        <div class="wrapper" style="height: auto; min-height: 100%;">

            <?php include('./include/page_header.php') ?>
            <!-- Full Width Column -->
            <div class="content-wrapper" style="min-height: 364px;">
                <div class="container">
                    <!-- Content Header (Page header) -->


                    <div class="login-box">
                        <div class="login-logo">
                            <a href="../../index2.html"><b>Plain</b>Surf</a>
                        </div>
                        <!-- /.login-logo -->
                        <div class="login-box-body">
                            <p class="login-box-msg">Sign in to start your session</p>

                            <form action="../../index2.html" method="post">
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="checkbox icheck">
                                            <label>
                                                <input type="checkbox"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <div class="social-auth-links text-center">
                                <p>- OR -</p>
                                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                                    Facebook</a>
                                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                                    Google+</a>
                            </div>
                            <!-- /.social-auth-links -->

                            <a href="./resetpart1.php">I forgot my password</a><br>
                            <a href="./signup.php" class="text-center">Register a new membership</a>

                        </div>
                        <!-- /.login-box-body -->
                    </div>
                    <!-- /.login-box -->

                    <!-- /.content -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- ./wrapper -->


        <?php include('./include/global_footer.php') ?>



    </body></html>
