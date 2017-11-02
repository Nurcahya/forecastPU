<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Aplikasi Forecast</title>
        <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
        <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/backend/images/logo.png">
        <meta name="apple-mobile-web-app-title" content="Flatkit">
        <meta name="mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/backend/images/logo.png">

        <!-- style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/animate.css/animate.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/glyphicons/glyphicons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/font-awesome/css/font-awesome.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/material-design-icons/material-design-icons.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
        <!-- build:css ../assets/styles/app.min.css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/backend/styles/app.css" type="text/css" />
    <?php if ($link == 'video') { ?>
    <script src="<?php echo base_url(); ?>assets/backend/angular/angular/angular.js"></script>
    <?php } ?>
        
    </head>
    <body>
        <div class="app" id="app">

            <!-- ############ LAYOUT START-->

            <!-- aside -->
            <div id="aside" class="app-aside modal fade folded md show-text nav-dropdown">
                <div class="left navside black dk" layout="column">
                    <div class="navbar no-radius">
                        <!-- brand -->
                        <a class="navbar-brand">
                            <img src="<?php echo base_url(); ?>assets/backend/gambar/PU.jpg">
                            <span class="hidden-folded inline">BBWS<br>Pompengan<br>Jeneberang</span>
                        </a>
                        <!-- / brand -->
                    </div>
                    <div flex class="hide-scroll">
                        <nav class="scroll nav-active-primary">

                            <ul class="nav" ui-nav>
                                <li class="nav-header hidden-folded">
                                    <small class="text-muted">Navigasi</small>
                                </li>

                                <li>
                                    <a href="<?php echo site_url('backend/dashboard') ?>" >
                                        <span class="nav-icon">
                                            <i class="material-icons">&#xe3fc;</i>
                                        </span>
                                        <span class="nav-text">Dashboard</span>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo site_url('backend/pos') ?>'>
                                        <span class="nav-icon">
                                            <i class="material-icons">&#xe5c3;</i>
                                        </span>
                                        <span class="nav-text">Lokasi Pos</span>
                                    </a>
                                </li>

                                
                                <li>
                                    <a href='<?php echo site_url('backend/ch?id=1') ?>'>
                                        <span class="nav-icon">
                                            <i class="material-icons">&#xe1b8;</i>
                                        </span>
                                        <span class="nav-text">Riwayat Curah Hujan</span>
                                    </a>
                                </li>


                                
                                <li>
                                    <a href='<?php echo site_url('backend/tma?id=6') ?>'>
                                        <span class="nav-icon">
                                            <i class="material-icons">&#xe1b8;</i>
                                        </span>
                                        <span class="nav-text">Riwayat Tinggi Air</span>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href='<?php echo site_url('backend/user') ?>'>
                                        <span class="nav-icon">
                                            <i class="material-icons">&#xe39e;</i>
                                        </span>
                                        <span class="nav-text">User</span>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo site_url('backend/video/cctv') ?>' >
                                        <span class="nav-icon">
                                            <i class="material-icons">&#xe3e8;</i>
                                        </span>
                                        <span class="nav-text">Video</span>
                                    </a>
                                </li>

                                <li>
                                    <a href='<?php echo site_url('backend/about') ?>'>
                                        <span class="nav-icon">
                                            <i class="material-icons">&#xe8fd;</i>
                                        </span>
                                        <span class="nav-text">Bantuan</span>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- / aside -->
            <!-- content -->
            <div id="content" class="app-content box-shadow-z3" role="main">
                <div class="app-header white box-shadow">
                    <div class="navbar navbar-toggleable-sm flex-row align-items-center">
                        <!-- Open side - Naviation on mobile -->
                        <a data-toggle="modal" data-target="#aside" class="hidden-lg-up mr-3">
                            <i class="material-icons">&#xe5d2;</i>
                        </a>
                        <!-- / -->

                        <!-- Page title - Bind to $state's title -->
                        <div class="mb-0 h5 no-wrap" ng-bind="$state.current.data.title" id="pageTitle"></div>

                        <!-- navbar collapse -->
                        <div class="collapse navbar-collapse" id="collapse">
                            <!-- link and dropdown -->
                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href data-toggle="dropdown">
                                        <h3><strong>Halaman Administrator - Aplikasi Monitoring Sungai Sadang</strong></h3>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href='<?php echo site_url('backend/login/logout') ?>'>
                                        <div class='logout'></div>
                                    </a>
                                </li>
                            </ul>
                            <!-- / -->
                        </div>
                        <!-- / navbar collapse -->

                    </div>
                </div>
                <div class="app-footer">
                    <div class="p-2 text-xs">
                        <div class="pull-right text-muted py-1">
                            &copy; Copyright <strong><a href='http://sartika-ms.com'>Sartika Mitrasejati</a></strong> <span class="hidden-xs-down"> - 2017</span>
                        </div>
                        <div class="nav">
                            <a class="nav-link" href="http://about.me/nurcahyapradana">Developed by : Nurcahya P.T.P</a>
                        </div>
                    </div>
                </div>
                <div ui-view class="app-body" id="view">