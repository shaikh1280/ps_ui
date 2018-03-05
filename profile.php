<html style="height: auto; min-height: 100%;">
    <head>
        <?php include('./include/global_header.php') ?>
        <link rel="stylesheet" href="./assets/plainsurf/css/user/profile.css">
    </head>
    <body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
        <div class="wrapper" style="height: auto; min-height: 100%;">
            <?php include('./include/page_header.php') ?>
            <!-- modal starts here  -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close pull-right" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Your Browser Agent</h4>
                        </div>
                        <div class="modal-body">
                            <p>Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/64.0.3282.167 Chrome/64.0.3282.167 Safari/537.36</p>
                        </div>
                    </div>                    
                </div>                
            </div>
            <!-- modal ends here-->            
            <div class="content-wrapper" style="min-height: 218px;">
                <div class="container">                   
                    <section class="content">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        <h2 style="text-align:center">Profile</h2>
                                        <img class="profile-user-img img-responsive img-circle" src="../assets/dist/img/user.jpg" alt="User profile picture">
                                        <h3>User Example</h3>
                                        <p class="title">Display Name</p>
                                        <p>User Name</p>
                                        <p><a href=""><button>Hello User</button></a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Settings</a></li>
                                        <li class=""><a href="#last" data-toggle="tab" aria-expanded="false">Last Devices </a></li>
                                        <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Blocked URL's</a></li>
                                        <li class=""><a href="#activity" data-toggle="tab" aria-expanded="false">History</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="settings">
                                            <form class="form-horizontal">
                                                <div class="form-group">
                                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="inputName" placeholder="Name" type="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="inputEmail" placeholder="Email" type="email">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName" class="col-sm-2 control-label">Contact No</label>

                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="inputName" placeholder="Contact No" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputExperience" class="col-sm-2 control-label">Feedback</label>

                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="inputExperience" placeholder="Feedback"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                                                    <div class="col-sm-10">
                                                        <input class="form-control" id="inputSkills" placeholder="Skills" type="text">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn bg-navy margin">Update Profile</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane" id="last">                                         
                                            <div class="box box-solid">
                                                <div class="box-header">
                                                    <h3 class="box-title"><b>Device : 1</b></h3>
                                                    <div class="box-tools">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body no-padding">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Device : </b>Linux</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>IP : </b>178.192.45.52</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Location : </b>Pune</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Browser : </b><i class="fa fa-fw fa-globe" data-toggle="modal" data-target="#modal-default"></i>
                                                                    </span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Time : </b>18:00 Hrs</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Sessions : </b>2</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="box box-solid">
                                                <div class="box-header">
                                                    <h3 class="box-title"><b>Device : 2</b></h3>
                                                    <div class="box-tools">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body no-padding">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Device : </b>Linux</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>IP : </b>178.192.45.52</span></li>
                                                            </ul>
                                                        </div><!-- /.col -->
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Location : </b>Pune</span></li>
                                                            </ul>
                                                        </div><!-- /.col -->
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Browser : </b><i class="fa fa-fw fa-globe" data-toggle="modal" data-target="#modal-default"></i>
                                                                    </span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Time : </b>18:00 Hrs</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Sessions : </b>2</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="box box-solid">
                                                <div class="box-header">
                                                    <h3 class="box-title"><b>Device : 3</b></h3>
                                                    <div class="box-tools">
                                                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="box-body no-padding">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Device : </b>Linux</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>IP : </b>178.192.45.52</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Location : </b>Pune</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Browser : </b><i class="fa fa-fw fa-globe" data-toggle="modal" data-target="#modal-default"></i>
                                                                    </span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Time : </b>18:00 Hrs</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-4 col-xs-12 col-sm-6">
                                                            <ul><li><span class="info-box-text"><b>Sessions : </b>2</span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="timeline">
                                            <ul class="timeline timeline-inverse">
                                                <li>
                                                    <div class="timeline-item">
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-comments bg-yellow"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                                                        <h3 class="timeline-header"><a href="#"></a> https://</h3>
                                                        <div class="timeline-footer">
                                                            <a class="btn btn-warning btn-flat btn-xs">Unblock</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <i class="fa fa-comments bg-yellow"></i>
                                                    <div class="timeline-item">
                                                        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                                        <h3 class="timeline-header"><a href="#"></a> https://</h3>
                                                        <div class="timeline-footer">
                                                            <a class="btn btn-warning btn-flat btn-xs">Unblock</a>
                                                        </div>
                                                    </div>
                                                </li>                                               
                                                <li>
                                                    <i class="fa fa-clock-o bg-gray"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane" id="activity">
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="../assets/dist/img/avatar3.png" alt="user image">

                                                    <span class="username">
                                                        <a href="#">Page Title Sample-1</a>
                                                        <a href="#" class="pull-right btn-box-tool"></a>
                                                    </span>
                                                    <span class="description">Last Visit - 7:30 PM today</span>
                                                </div>
                                                <input class="form-control input-sm" placeholder="https://" type="text">
                                            </div>
                                            <div class="post">
                                                <div class="user-block">                                                   
                                                    <img class="img-circle img-bordered-sm" src="../assets/dist/img/avatar5.png" alt="user image">

                                                    <span class="username">
                                                        <a href="#">Page Title Sample-2</a>
                                                        <a href="#" class="pull-right btn-box-tool"></a>
                                                    </span>
                                                    <span class="description">Last Visit - 5:50 AM yesterday</span>
                                                </div>
                                                <input class="form-control input-sm" placeholder="https://" type="text">
                                            </div>
                                            <div class="post">
                                                <div class="user-block">
                                                    <img class="img-circle img-bordered-sm" src="../assets/dist/img/avatar5.png" alt="user image">
                                                    <span class="username">
                                                        <a href="#">Page Title Sample-3</a>
                                                        <a href="#" class="pull-right btn-box-tool"></a>
                                                    </span>
                                                    <span class="description">Last Visit - 5:50 AM yesterday</span>
                                                </div>
                                            </div>
                                            <div class="post clearfix">
                                                <div>                                                                                                    
                                                    <button type="submit" class="btn-danger pull-right">Clear History</button>
                                                    </form>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>                                    
                                </div>                                
                            </div>                            
                    </section>                    
                </div>
            </div>
            <?php include('./include/global_footer.php') ?>
        </div>
    </body>
</html>
