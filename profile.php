<html style="height: auto; min-height: 100%;"><head>
<?php include('./include/global_header.php') ?>
<link rel="stylesheet" href="./assets/plainsurf/css/user/profile.css">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
<div class="wrapper" style="height: auto; min-height: 100%;">

  <?php include('./include/page_header.php')?>
  <!-- Full Width Column -->
  <div class="content-wrapper" style="min-height: 364px;">
    <div class="container">
      <!-- Content Header (Page header) -->
      
 <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <h2 style="text-align:center">Profile Card</h2>
 <img class="profile-user-img img-responsive img-circle" src="../assets/dist/img/user.jpg" alt="User profile picture">
  <h3>User Example</h3>
  <p class="title">Display Name</p>
  <p>User Name</p>
 
 <p><a href=""><button>Hello User</button></a></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#last" data-toggle="tab" aria-expanded="true">Devices </a></li>
              <li class=""><a href="#activity" data-toggle="tab" aria-expanded="false">History</a></li>
              <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Blocked URL's</a></li>
              <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Settings</a></li>
            </ul>


            <div class="tab-content">
<div class="tab-pane active" id="last">
                <div class="box box-success box-solid">
            
            <!-- /.box-header -->
            
            <div class="box-header with-border">
              <h3 class="box-title">Last 10 Devices</h3>

              <div class="box-tools">
                
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <b>Device : </b>PC/Dell/Ubuntu-16.04</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <b>IP : </b>178.192.52.48</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> <b>Location : </b>Pune,India</a></li>
              <li><div class="box-body" style="display: none;">
              <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <b>Time : </b>18:00 Hrs</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <b>Browser agent : </b>Chrome</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> <b>Sessions : </b>2</a></li>
              </ul>
            </div>

            </div></li>
</ul>

            </div>

            <!-- /.box-body -->
          
            <!-- /.box-body -->
          
             </div>
<div class="box box-default collapsed-box">
            <div class="box-header with-border">
              <h3 class="box-title">More</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <b>Time : </b>18:00 Hrs</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <b>Browser agent : </b>Chrome</a></li>
                <li><a href="#"><i class="fa fa-circle-o text-light-blue"></i> <b>Sessions : </b>2</a></li>
              </ul>
            </div>

            </div>
            <!-- /.box-body -->
          </div>

              </div>


              <div class="tab-pane" id="activity">

                <!-- Post -->
                <div class="post">
                  <div class="user-block">

                    <!-- favicon of the web page -->
                    <img class="img-circle img-bordered-sm" src="../assets/dist/img/avatar3.png" alt="user image">
                    <!-- favicon of the web page end here-->
                        <span class="username">
                          <a href="#">Page Title Sample-1</a>
                          <a href="#" class="pull-right btn-box-tool"></a>
                        </span>
                    <span class="description">Last Visit - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  
                  
                  
                  <input class="form-control input-sm" placeholder="https://www.facebook.com/johncena" type="text">
                  
                 
                </div>
                  <!-- blocked URL's 2 -->
                  <div class="post">
                  <div class="user-block">

                    <!-- favicon of the web page -->
                    <img class="img-circle img-bordered-sm" src="../assets/dist/img/avatar5.png" alt="user image">
                    <!-- favicon of the web page end here-->
                        <span class="username">
                          <a href="#">Page Title Sample-2</a>
                          <a href="#" class="pull-right btn-box-tool"></a>
                        </span>
                    <span class="description">Last Visit - 5:50 AM yesterday</span>
                  </div>
                  <!-- /.user-block -->
                  
                  
                  
                  <input class="form-control input-sm" placeholder="https://www.whatsapp.com/chat" type="text">
                  
                 
                </div>
               <!-- Blocked URL's 3 -->

                  <div class="post">
                  <div class="user-block">

                    <!-- favicon of the web page -->
                    <img class="img-circle img-bordered-sm" src="../assets/dist/img/avatar5.png" alt="user image">
                    <!-- favicon of the web page end here-->
                        <span class="username">
                          <a href="#">Page Title Sample-3</a>
                          <a href="#" class="pull-right btn-box-tool"></a>
                        </span>
                    <span class="description">Last Visit - 5:50 AM yesterday</span>
                  </div>
                  <!-- /.user-block -->
                  
                  
                  
                  <input class="form-control input-sm" placeholder="https://www.whatsapp.com/chat" type="text">
                  
                 
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    
                        <span class="username">
                          <a href="#"></a>
                          <a href="#" class="pull-right btn-box-tool">
                        </span>
                    
                  </div>
                  <!-- /.user-block -->
                  

                  <form class="form-horizontal">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-flat">Clear History</button>
                     </form>
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      

                      <h3 class="timeline-header no-border"><a href="#">List of Blocked URL's -</a> 
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#"></a> https://www.googleadsense.com</h3>

                      
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">Unblock</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  
                  
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                   <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#"></a> https://www.9xmclassicmusic.com</h3>

                      
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">Unblock</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
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
               
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div><!-- /.content-wrapper -->
    </div>
<?php include('./include/global_footer.php') ?>
</body>
</html>
