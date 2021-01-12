<?php include 'core.php';?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Buttercups Tours">
    <meta name="keywords" content="Buttercups Tours">
    <meta name="Buttercups" content="PIXINVENT">
    <title>Buttercups Tours - Edit Activities</title>
    <link rel="apple-touch-icon" href="https://www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern boxicon-layout no-card-shadow 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    <!-- <nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top ">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="navbar-collapse" id="navbar-mobile">
            <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav">
                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="form-layout.html#"><i class="ficon bx bx-menu"></i></a></li>
              </ul>
              <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon bx bx-envelope"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon bx bx-chat"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon bx bx-check-circle"></i></a></li>
                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon bx bx-calendar-alt"></i></a></li>
              </ul>
              <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon bx bx-star warning"></i></a>
                  <div class="bookmark-input search-input">
                    <div class="bookmark-input-icon"><i class="bx bx-search primary"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Frest..." tabindex="0" data-search="template-search">
                    <ul class="search-list"></ul>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="form-layout.html#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="form-layout.html#" data-language="en"><i class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item" href="form-layout.html#" data-language="fr"><i class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item" href="form-layout.html#" data-language="de"><i class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item" href="form-layout.html#" data-language="pt"><i class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
              </li>
              <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon bx bx-search"></i></a>
                <div class="search-input">
                  <div class="search-input-icon"><i class="bx bx-search primary"></i></div>
                  <input class="input" type="text" placeholder="Explore Frest..." tabindex="-1" data-search="template-search">
                  <div class="search-input-close"><i class="bx bx-x"></i></div>
                  <ul class="search-list"></ul>
                </div>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="form-layout.html#" data-toggle="dropdown"><i class="ficon bx bx-bell bx-tada bx-flip-horizontal"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <div class="dropdown-header px-1 py-75 d-flex justify-content-between"><span class="notification-title">7 new Notification</span><span class="text-bold-400 cursor-pointer">Mark all as read</span></div>
                  </li>
                  <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Congratulate Socrates Itumay</span> for work anniversaries</h6><small class="notification-text">Mar 15 12:32pm</small>
                        </div>
                      </div></a>
                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New Message</span> received</h6><small class="notification-text">You have 18 unread messages</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center py-0">
                        <div class="media-left pr-0"><img class="mr-1" src="app-assets/images/icon/sketch-mac-icon.png" alt="avatar" height="39" width="39"></div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Updates Available</span></h6><small class="notification-text">Sketch 50.2 is currently newly added</small>
                        </div>
                        <div class="media-right pl-0">
                          <div class="row border-left text-center">
                            <div class="col-12 px-50 py-75 border-bottom">
                              <h6 class="media-heading text-bold-500 mb-0">Update</h6>
                            </div>
                            <div class="col-12 px-50 py-75">
                              <h6 class="media-heading mb-0">Close</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar bg-primary bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content text-primary font-medium-2">LD</span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New customer</span> is registered</h6><small class="notification-text">1 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="cursor-pointer">
                      <div class="media d-flex align-items-center justify-content-between">
                        <div class="media-left pr-0">
                          <div class="media-body">
                            <h6 class="media-heading">New Offers</h6>
                          </div>
                        </div>
                        <div class="media-right">
                          <div class="custom-control custom-switch">
                            <input class="custom-control-input" type="checkbox" checked id="notificationSwtich">
                            <label class="custom-control-label" for="notificationSwtich"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar bg-danger bg-lighten-5 mr-1 m-0 p-25"><span class="avatar-content"><i class="bx bxs-heart text-danger"></i></span></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Application</span> has been approved</h6><small class="notification-text">6 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between read-notification cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-4.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New file</span> has been uploaded</h6><small class="notification-text">4 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center">
                        <div class="media-left pr-0">
                          <div class="avatar bg-rgba-danger m-0 mr-1 p-25">
                            <div class="avatar-content"><i class="bx bx-detail text-danger"></i></div>
                          </div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">Finance report</span> has been generated</h6><small class="notification-text">25 hrs ago</small>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between cursor-pointer">
                      <div class="media d-flex align-items-center border-0">
                        <div class="media-left pr-0">
                          <div class="avatar mr-1 m-0"><img src="app-assets/images/portrait/small/avatar-s-16.jpg" alt="avatar" height="39" width="39"></div>
                        </div>
                        <div class="media-body">
                          <h6 class="media-heading"><span class="text-bold-500">New customer</span> comment recieved</h6><small class="notification-text">2 days ago</small>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item p-50 text-primary justify-content-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="form-layout.html#" data-toggle="dropdown">
                  <div class="user-nav d-sm-flex d-none"><span class="user-name">John Doe</span><span class="user-status text-muted">Available</span></div><span><img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span></a>
                <div class="dropdown-menu dropdown-menu-right pb-0"><a class="dropdown-item" href="page-user-profile.html"><i class="bx bx-user mr-50"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="bx bx-envelope mr-50"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="bx bx-check-square mr-50"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="bx bx-message mr-50"></i> Chats</a>
                  <div class="dropdown-divider mb-0"></div><a class="dropdown-item" href="auth-login.html"><i class="bx bx-power-off mr-50"></i> Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav> -->
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <?php include 'sidebar.php';?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-12 mb-2 mt-1">
            <!-- <div class="row breadcrumbs-top">
              <div class="col-12">
                <h5 class="content-header-title float-left pr-1 mb-0">Form Layouts</h5>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb p-0 mb-0">
                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="form-layout.html#">Forms</a>
                    </li>
                    <li class="breadcrumb-item active"><a href="form-layout.html#">Form Layouts</a>
                    </li>
                  </ol>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <div class="content-body"><!-- Basic Horizontal form layout section start -->
<section id="basic-horizontal-layouts">
  <div class="row match-height">
    <div class="col-md-10 col-12">
      <div class="card">
        <div class="card-header">
          <center><h4 class="card-title"> EDIT ACTIVITY</h4></center>
        </div>
        <div class="card-content">
          <div class="card-body">


          <?php
                include 'db.php';
                $id = $_GET['id'];
                $geto  = mysqli_query($conn,"SELECT * FROM activities WHERE  id = '$id' ");
                $row = mysqli_fetch_array($geto);
          ?>
            <form class="form form-horizontal" id="uptactfrm">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-4">
                    <label>Name of Actitvity</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="text" id="first-name" class="form-control" name="title" placeholder="activity" value="<?php echo $row['title'];?>">
                    <input type="hidden" id="first-name" class="form-control" name="id" placeholder="activity" value="<?php echo $row['id'];?>">
                    <input type="hidden" id="first-name" class="form-control" name="oldpic" placeholder="activity" value="<?php echo $row['pic'];?>">
                  </div>
                  <!-- <div class="col-md-4">
                    <label>Email</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="email" id="email-id" class="form-control" name="email-id" placeholder="Email">
                  </div> -->
                  <div class="col-md-4">
                    <label>Price in Dollars</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <input type="number" id="contact-info" class="form-control" name="price" placeholder="prcie" value="<?php echo $row['price'];?>">
                  </div>
                  <div class="col-md-4">
                    <label>Description</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <textarea   class="form-control" name="description" placeholder="describe the activity"><?php echo $row['description'];?></textarea>
                  </div>
                  <div class="col-md-4">
                    <label>Picture of Activity</label>
                  </div>
                  <div class="col-md-8 form-group">
                  <div class="custom-file">
                        <input type="file" class="custom-file-input pselect" id="inputGroupFile01" name="image" >
                        <label class="custom-file-label" for="inputGroupFile01">  (Leave it blank to maintain current picture)</label>
                      </div>
                  </div>
               
                    <img src="../upload/<?php echo $row['pic'];?>" alt="<?php echo $row['title'];?>" style="width:100%;height:350px;"  id="myp"/>
                 

                 


                  
                  <div class="col-12 col-md-8 offset-md-4 form-group">
                    <fieldset id="myresp">
                        <div class="loodding">
                            <div class="spinner-grow text-primary" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-secondary" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-success" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-danger" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-warning" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-info" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-light" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                            <div class="spinner-grow text-dark" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </fieldset>
                  </div>
                  <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Horizontal Form with Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-horizontal">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-4">
                    <label>First Name</label>
                  </div>
                  <div class="col-md-8 form-group ">
                    <div class="position-relative has-icon-left">
                      <input type="text" id="fname-icon" class="form-control" name="fname-icon"
                        placeholder="First Name">
                      <div class="form-control-position">
                        <i class="bx bx-user"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label>Email</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <div class="position-relative has-icon-left">
                      <input type="email" id="email-icon" class="form-control" name="email-id-icon" placeholder="Email">
                      <div class="form-control-position">
                        <i class="bx bx-mail-send"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label>Mobile</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <div class="position-relative has-icon-left">
                      <input type="number" id="contact-icon" class="form-control" name="contact-icon"
                        placeholder="Mobile">
                      <div class="form-control-position">
                        <i class="bx bx-mobile"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label>Password</label>
                  </div>
                  <div class="col-md-8 form-group">
                    <div class="position-relative has-icon-left">
                      <input type="password" id="pass-icon" class="form-control" name="contact-icon"
                        placeholder="Password">
                      <div class="form-control-position">
                        <i class="bx bx-lock"></i>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-8 offset-md-4">
                    <fieldset>
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox2">
                        <label for="checkbox2">Remember me</label>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-12 d-flex justify-content-end ">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>
<!-- // Basic Horizontal form layout section end -->

<!-- Basic Vertical form layout section start -->
<!-- <section id="basic-vertical-layouts">
  <div class="row match-height">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vertical Form</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-vertical">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="first-name-vertical">First Name</label>
                      <input type="text" id="first-name-vertical" class="form-control" name="fname"
                        placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email-id-vertical">Email</label>
                      <input type="email" id="email-id-vertical" class="form-control" name="email-id"
                        placeholder="Email">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="contact-info-vertical">Mobile</label>
                      <input type="number" id="contact-info-vertical" class="form-control" name="contact"
                        placeholder="Mobile">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password-vertical">Password</label>
                      <input type="password" id="password-vertical" class="form-control" name="contact"
                        placeholder="Password">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox3">
                        <label for="checkbox3">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vertical Form with Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form form-vertical">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label for="first-name-icon">First Name</label>
                      <div class="position-relative has-icon-left">
                        <input type="text" id="first-name-icon" class="form-control" name="fname-icon"
                          placeholder="First Name">
                        <div class="form-control-position">
                          <i class="bx bx-user"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="email-id-icon">Email</label>
                      <div class="position-relative has-icon-left">
                        <input type="email" id="email-id-icon" class="form-control" name="email-id-icon"
                          placeholder="Email">
                        <div class="form-control-position">
                          <i class="bx bx-mail-send"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="contact-info-icon">Mobile</label>
                      <div class="position-relative has-icon-left">
                        <input type="number" id="contact-info-icon" class="form-control" name="contact-icon"
                          placeholder="Mobile">
                        <div class="form-control-position">
                          <i class="bx bx-mobile"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="password-icon">Password</label>
                      <div class="position-relative has-icon-left">
                        <input type="password" id="password-icon" class="form-control" name="contact-icon"
                          placeholder="Password">
                        <div class="form-control-position">
                          <i class="bx bx-lock"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox4">
                        <label for="checkbox4">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- // Basic Vertical form layout section end -->

<!-- // Basic Floating Label Form section start -->
<!-- <section id="floating-label-layouts">
  <div class="row match-height">
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form With Label Placeholder</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="text" id="first-name-floating" class="form-control" placeholder="First Name"
                        name="fname-floating">
                      <label for="first-name-floating">First Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="email" id="email-id-floating" class="form-control" name="email-id-floating"
                        placeholder="Email">
                      <label for="email-id-floating">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="number" id="contact-info-floating" class="form-control" name="contact-floating"
                        placeholder="Mobile">
                      <label for="contact-info-floating">Mobile</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group">
                      <input type="password" id="password-floating" class="form-control" name="contact-floating"
                        placeholder="Password">
                      <label for="password-floating">Password</label>
                    </div>
                  </div>
                  <div class="form-group col-12">
                    <fieldset>
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox5">
                        <label for="checkbox5">Remember me</label>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form With Label Placeholder with Icons</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="form-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="text" id="first-name-floating-icon" class="form-control" name="fname-floating-icon"
                        placeholder="First Name">
                      <div class="form-control-position">
                        <i class="bx bx-user"></i>
                      </div>
                      <label for="first-name-floating-icon">First Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="email" id="email-id-floating-icon" class="form-control" name="email-id-floating-icon"
                        placeholder="Email">
                      <div class="form-control-position">
                        <i class="bx bx-mail-send"></i>
                      </div>
                      <label for="email-id-floating-icon">Email</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="number" id="contact-floating-icon" class="form-control" name="contact-floating-icon"
                        placeholder="Mobile">
                      <div class="form-control-position">
                        <i class="bx bx-mobile"></i>
                      </div>
                      <label for="contact-floating-icon">Mobile</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-label-group position-relative has-icon-left">
                      <input type="password" id="password-floating-icon" class="form-control"
                        name="password-floating-icon" placeholder="Password">
                      <div class="form-control-position">
                        <i class="bx bx-lock"></i>
                      </div>
                      <label for="password-floating-icon">Password</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox6">
                        <label for="checkbox6">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- // Basic Floating Label Form section end -->

<!-- // Basic multiple Column Form section start -->
<!-- <section id="multiple-column-form">
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Multiple Column</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <form class="form">
              <div class="form-body">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-label-group">
                      <input type="text" id="first-name-column" class="form-control" placeholder="First Name"
                        name="fname-column">
                      <label for="first-name-column">First Name</label>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-label-group">
                      <input type="text" id="last-name-column" class="form-control" placeholder="Last Name"
                        name="lname-column">
                      <label for="last-name-column">Last Name</label>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-label-group">
                      <input type="text" id="city-column" class="form-control" placeholder="City" name="city-column">
                      <label for="city-column">City</label>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-label-group">
                      <input type="text" id="country-floating" class="form-control" name="country-floating"
                        placeholder="Country">
                      <label for="country-floating">Country</label>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-label-group">
                      <input type="text" id="company-column" class="form-control" name="company-column"
                        placeholder="Company">
                      <label for="company-column">Company</label>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-label-group">
                      <input type="email" id="email-id-column" class="form-control" name="email-id-column"
                        placeholder="Email">
                      <label for="email-id-column">Email</label>
                    </div>
                  </div>
                  <div class="form-group col-12">
                    <div class="form-group">
                      <div class="checkbox">
                        <input type="checkbox" class="checkbox-input" id="checkbox7">
                        <label for="checkbox7">Remember me</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- // Basic multiple Column Form section end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a class="customizer-close" href="#"><i class="bx bx-x"></i></a><a class="customizer-toggle" href="#"><i class="bx bx-cog bx bx-spin white"></i></a><div class="customizer-content p-2">
  <h4 class="text-uppercase mb-0">Theme Customizer</h4>
  <small>Customize & Preview in Real Time</small>
  <hr>
  <!-- Theme options starts -->
  <h5 class="mt-1">Theme Layout</h5>
  <div class="theme-layouts">
    <div class="d-flex justify-content-start">
      <div class="mx-50">
        <fieldset>
          <div class="radio">
            <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name" data-layout=""
              checked>
            <label for="radio-light">Light</label>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="radio">
            <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"
              data-layout="dark-layout">
            <label for="radio-dark">Dark</label>
          </div>
        </fieldset>
      </div>
      <div class="mx-50">
        <fieldset>
          <div class="radio">
            <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark" class="layout-name"
              data-layout="semi-dark-layout">
            <label for="radio-semi-dark">Semi Dark</label>
          </div>
        </fieldset>
      </div>
    </div>
  </div>
  <!-- Theme options starts -->
  <hr>

  <!-- Menu Colors Starts -->
  <div id="customizer-theme-colors">
    <h5>Menu Colors</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-primary selected" data-color="theme-primary"></li>
      <li class="color-box bg-success" data-color="theme-success"></li>
      <li class="color-box bg-danger" data-color="theme-danger"></li>
      <li class="color-box bg-info" data-color="theme-info"></li>
      <li class="color-box bg-warning" data-color="theme-warning"></li>
      <li class="color-box bg-dark" data-color="theme-dark"></li>
    </ul>
    <hr>
  </div>
  <!-- Menu Colors Ends -->
  <!-- Menu Icon Animation Starts -->
  <div id="menu-icon-animation">
    <div class="d-flex justify-content-between align-items-center">
      <div class="icon-animation-title">
        <h5 class="pt-25">Icon Animation</h5>
      </div>
      <div class="icon-animation-switch">
        <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" checked id="icon-animation-switch">
          <label class="custom-control-label" for="icon-animation-switch"></label>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <!-- Menu Icon Animation Ends -->
  <!-- Collapse sidebar switch starts -->
  <div class="collapse-sidebar d-flex justify-content-between align-items-center">
    <div class="collapse-option-title">
      <h5 class="pt-25">Collapse Menu</h5>
    </div>
    <div class="collapse-option-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
        <label class="custom-control-label" for="collapse-sidebar-switch"></label>
      </div>
    </div>
  </div>
  <!-- Collapse sidebar switch Ends -->
  <hr>

  <!-- Navbar colors starts -->
  <div id="customizer-navbar-colors">
    <h5>Navbar Colors</h5>
    <ul class="list-inline unstyled-list">
      <li class="color-box bg-white border selected" data-navbar-default=""></li>
      <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
      <li class="color-box bg-success" data-navbar-color="bg-success"></li>
      <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
      <li class="color-box bg-info" data-navbar-color="bg-info"></li>
      <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
      <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
    </ul>
    <small><strong>Note :</strong> This option with work only on sticky navbar when you scroll page.</small>
    <hr>
  </div>
  <!-- Navbar colors starts -->
  <!-- Navbar Type Starts -->
  <h5>Navbar Type</h5>
  <div class="navbar-type d-flex justify-content-start">
    <div class="hidden-ele mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="navbarType" value="false" id="navbar-hidden">
          <label for="navbar-hidden">Hidden</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="navbarType" value="false" id="navbar-static">
          <label for="navbar-static">Static</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
          <label for="navbar-sticky">Fixed</label>
        </div>
      </fieldset>
    </div>
  </div>
  <hr>
  <!-- Navbar Type Starts -->

  <!-- Footer Type Starts -->
  <h5>Footer Type</h5>
  <div class="footer-type d-flex justify-content-start">
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="footerType" value="false" id="footer-hidden">
          <label for="footer-hidden">Hidden</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="footerType" value="false" id="footer-static" checked>
          <label for="footer-static">Static</label>
        </div>
      </fieldset>
    </div>
    <div class="mx-50">
      <fieldset>
        <div class="radio">
          <input type="radio" name="footerType" value="false" id="footer-sticky">
          <label for="footer-sticky" class="">Sticky</label>
        </div>
      </fieldset>
    </div>
  </div>
  <!-- Footer Type Ends -->
  <hr>

  <!-- Card Shadow Starts-->
  <div class="card-shadow d-flex justify-content-between align-items-center py-25">
    <div class="hide-scroll-title">
      <h5 class="pt-25">Card Shadow</h5>
    </div>
    <div class="card-shadow-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
        <label class="custom-control-label" for="card-shadow-switch"></label>
      </div>
    </div>
  </div>
  <!-- Card Shadow Ends-->
  <hr>

  <!-- Hide Scroll To Top Starts-->
  <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
    <div class="hide-scroll-title">
      <h5 class="pt-25">Hide Scroll To Top</h5>
    </div>
    <div class="hide-scroll-top-switch">
      <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
        <label class="custom-control-label" for="hide-scroll-top-switch"></label>
      </div>
    </div>
  </div>
  <!-- Hide Scroll To Top Ends-->
</div>
    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <!-- <div class="buy-now"><a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger">Buy Now</a> -->

    </div>
    <!-- demo chat-->
    <div class="widget-chat-demo"><!-- widget chat demo footer button start -->
<!-- <button class="btn btn-primary chat-demo-button glow px-1"><i class="livicon-evo"
    data-options="name: comments.svg; style: lines; size: 24px; strokeColor: #fff; autoPlay: true; repeat: loop;"></i></button> -->
<!-- widget chat demo footer button ends -->
<!-- widget chat demo start -->
<div class="widget-chat widget-chat-demo d-none">
  <div class="card mb-0">
    <div class="card-header border-bottom p-0">
      <div class="media m-75">
        <a href="JavaScript:void(0);">
          <div class="avatar mr-75">
            <img src="app-assets/images/portrait/small/avatar-s-2.jpg" alt="avtar images" width="32"
              height="32">
            <span class="avatar-status-online"></span>
          </div>
        </a>
        <div class="media-body">
          <h6 class="media-heading mb-0 pt-25"><a href="javaScript:void(0);">Kiara Cruiser</a></h6>
          <span class="text-muted font-small-3">Active</span>
        </div>
        <i class="bx bx-x widget-chat-close float-right my-auto cursor-pointer"></i>
      </div>
    </div>
    <div class="card-body widget-chat-container widget-chat-demo-scroll">
      <div class="chat-content">
        <div class="badge badge-pill badge-light-secondary my-1">today</div>
        <div class="chat">
          <div class="chat-body">
            <div class="chat-message">
              <p>How can we help? 😄</p>
              <span class="chat-time">7:45 AM</span>
            </div>
          </div>
        </div>
        <div class="chat chat-left">
          <div class="chat-body">
            <div class="chat-message">
              <p>Hey John, I am looking for the best admin template.</p>
              <p>Could you please help me to find it out? 🤔</p>
              <span class="chat-time">7:50 AM</span>
            </div>
          </div>
        </div>
        <div class="chat">
          <div class="chat-body">
            <div class="chat-message">
              <p>Stack admin is the responsive bootstrap 4 admin template.</p>
              <span class="chat-time">8:01 AM</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer border-top p-1">
      <form class="d-flex" onsubmit="widgetChatMessageDemo();" action="javascript:void(0);">
        <input type="text" class="form-control chat-message-demo mr-75" placeholder="Type here...">
        <button type="submit" class="btn btn-primary glow px-1"><i class="bx bx-paper-plane"></i></button>
      </form>
    </div>
  </div>
</div>
<!-- widget chat demo ends -->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
   <?php ft();?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
    <script src="app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.min.js"></script>
    <script src="app-assets/js/core/app.min.js"></script>
    <script src="app-assets/js/scripts/components.min.js"></script>
    <script src="app-assets/js/scripts/footer.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>


    <script>
    
    function readscreenshot() {
            var mp = document.getElementsById('inputGroupFile01');
            if (mp.files && mp.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#myp')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(150);
                };

                reader.readAsDataURL(mp.files[0]);
            }
    }
    </script>

    <!-- END: Theme JS-->

    <script src="ajax.js"></script>

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->
</html>