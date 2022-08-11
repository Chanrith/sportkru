<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Admin Portal</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta content="" name="description">
        <meta content="" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?=base_url()?>/assets/images/favicon.png?rnd=1">
        <!-- jvectormap -->
        <link href="<?=base_url()?>/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
        <!-- App css -->
        <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="<?=base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/jquery-confirm.min.css" rel="stylesheet" type="text/css">
        
        <link href="<?=base_url()?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/app.min.css" rel="stylesheet" type="text/css">
        <link href="<?=base_url()?>/assets/css/custom.css?rnd=1" rel="stylesheet" type="text/css">
        <!-- JQUERY --->
        <script src="<?=base_url()?>/assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?=base_url()?>/assets/js/formValidation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap_validation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/toastr.min.js"></script>
        <script src="<?=base_url()?>/assets/js/jquery-confirm.min.js"></script>
        <script src="<?=base_url()?>/assets/plugins/select2/select2.min.js"></script>
        <style>.help-block{color:red;}</style>
    </head>
    <style>.nav-user img {width: 120px;}</style>
    <body class="dark-sidenav">
        <div class="loading" style="display:none"><div class="lds-ripple"><div></div><div></div></div></div>
        <!-- Left Sidenav -->
        <div class="left-sidenav">
            <!-- LOGO -->
            <div class="brand">
                <a href="<?=base_url()?>/" class="logo" style="font-size:25px;color:#fff;font-weight:500"><i class="fas fa-store" style="background-color: #005ae0;padding: 10px 7px;border-radius: 50%;"></i> <span style="color:#005ae0">ADMIN</span> PORTAL</a></div>
            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <ul class="metismenu left-sidenav-menu pt-0">
                    <li class="menu-label mt-0">Main Menu</li>
                    <li><a href="<?=base_url()?>/dashboard"><i data-feather="home" class="align-self-center menu-icon"></i><span>Dashboard</span></a></li>
                    <li><a href="<?=base_url()?>/coach"><i data-feather="user" class="align-self-center menu-icon"></i><span>Coach</span></a></li>
                    <li><a href="<?=base_url()?>/sports-type"><i data-feather="layout" class="align-self-center menu-icon"></i><span>Sports Type</span></a></li>
                    <li><a href="<?=base_url()?>/sports-timings"><i data-feather="sun" class="align-self-center menu-icon"></i><span>Sports Timings</span></a></li>
                </ul>
            </div>
        </div>
        <!-- end left-sidenav-->
        <div class="page-wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom container-fluid">
                <ul class="list-unstyled topbar-nav float-right mb-0">
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><span class="ml-1 nav-user-name hidden-sm"></span>
                            <img src="<?=base_url()?>/assets/images/default-user.jpeg" style="height: 41px;width: 44px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?=base_url()?>/profile"><i data-feather="user" class="align-self-center icon-xs icon-dual mr-1"></i> Profile</a> 
                            <!--a class="dropdown-item" href="#"><i data-feather="settings" class="align-self-center icon-xs icon-dual mr-1"></i> Settings</a-->
                            <div class="dropdown-divider mb-0"></div>
                            <a class="dropdown-item" href="<?=base_url()?>/dashboard/logout"><i data-feather="power" class="align-self-center icon-xs icon-dual mr-1"></i> Logout</a>
                        </div>
                    </li>
                </ul>
                <!--end topbar-nav-->
                <ul class="list-unstyled topbar-nav mb-0">
                    <li><button class="nav-link button-menu-mobile"><i data-feather="menu" class="align-self-center topbar-icon"></i></button></li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->