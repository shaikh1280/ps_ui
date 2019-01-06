<html style="height: auto; min-height: 100%;"><head>
        <?php include('./include/global_header.php') ?>
    </head>
    <body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
        <div class="wrapper" style="height: auto; min-height: 100%;">
            <?php include('./include/page_header.php') ?>
            <div class="content-wrapper" style="min-height: 364px;">
                <div class="container">
                    <div class="login-box">
                        <div class="login-logo">
                            <b>Reset</b>Password
                        </div>
                        <div class="login-box-body">
                            <p class="login-box-msg">Reset Your Password</p>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Enter New Password">
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" placeholder="Re-type New Password">
                            </div>
                            <a href="./login.php"><button type="button" class="btn btn-danger">Cancel</button></a>
                            <a href=""><button type="button" class="btn bg-blue pull-right">Submit</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('./include/global_footer.php') ?>
    </body>
</html>
