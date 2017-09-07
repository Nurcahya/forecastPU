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
              <!--<script src="<?php echo base_url(); ?>assets/backend/js/media-player.js"></script>-->
            <script src="<?php echo base_url(); ?>assets/backend/angular/angular/angular.js"></script>
        <?php } ?>
    </head>
    <body>
         <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside modal nav-dropdown">
  	<!-- fluid app aside -->
    <div class="left navside dark dk" data-layout="column">
  	  <div class="navbar no-radius">
        <!-- brand -->
        <a class="navbar-brand">
        	<div ui-include="'../assets/images/logo.svg'"></div>
        	<img src="../assets/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">Flatkit</span>
        </a>
        <!-- / brand -->
      </div>
      <div class="hide-scroll" data-flex>
          <nav class="scroll nav-light">
            
              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Main</small>
                </li>
                
                <li>
                  <a href="dashboard.html" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3fc;
                        <span ui-include="'../assets/images/i_0.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Dashboard</span>
                  </a>
                </li>
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label rounded label-sm primary">5</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe5c3;
                        <span ui-include="'../assets/images/i_1.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Apps</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="inbox.html" >
                        <span class="nav-text">Inbox</span>
                      </a>
                    </li>
                    <li>
                      <a href="contact.html" >
                        <span class="nav-text">Contacts</span>
                      </a>
                    </li>
                    <li>
                      <a href="calendar.html" >
                        <span class="nav-text">Calendar</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8f0;
                        <span ui-include="'../assets/images/i_2.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Layouts</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="headers.html" >
                        <span class="nav-text">Header</span>
                      </a>
                    </li>
                    <li>
                      <a href="asides.html" >
                        <span class="nav-text">Aside</span>
                      </a>
                    </li>
                    <li>
                      <a href="footers.html" >
                        <span class="nav-text">Footer</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                <li>
                  <a href="widget.html" >
                    <span class="nav-icon">
                      <i class="material-icons">&#xe8d2;
                        <span ui-include="'../assets/images/i_3.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Widgets</span>
                  </a>
                </li>
            
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Components</small>
                </li>
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label">
                      <b class="label label-sm accent">8</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe429;
                        <span ui-include="'../assets/images/i_4.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">UI kit</span>
                  </a>
                  <ul class="nav-sub nav-mega nav-mega-3">
                    <li>
                      <a href="arrow.html" >
                        <span class="nav-text">Arrow</span>
                      </a>
                    </li>
                    <li>
                      <a href="box.html" >
                        <span class="nav-text">Box</span>
                      </a>
                    </li>
                    <li>
                      <a href="button.html" >
                        <span class="nav-text">Button</span>
                      </a>
                    </li>
                    <li>
                      <a href="color.html" >
                        <span class="nav-text">Color</span>
                      </a>
                    </li>
                    <li>
                      <a href="dropdown.html" >
                        <span class="nav-text">Dropdown</span>
                      </a>
                    </li>
                    <li>
                      <a href="grid.html" >
                        <span class="nav-text">Grid</span>
                      </a>
                    </li>
                    <li>
                      <a href="icon.html" >
                        <span class="nav-text">Icon</span>
                      </a>
                    </li>
                    <li>
                      <a href="label.html" >
                        <span class="nav-text">Label</span>
                      </a>
                    </li>
                    <li>
                      <a href="list.html" >
                        <span class="nav-text">List Group</span>
                      </a>
                    </li>
                    <li>
                      <a href="modal.html" >
                        <span class="nav-text">Modal</span>
                      </a>
                    </li>
                    <li>
                      <a href="nav.html" >
                        <span class="nav-text">Nav</span>
                      </a>
                    </li>
                    <li>
                      <a href="progress.html" >
                        <span class="nav-text">Progress</span>
                      </a>
                    </li>
                    <li>
                      <a href="social.html" >
                        <span class="nav-text">Social</span>
                      </a>
                    </li>
                    <li>
                      <a href="sortable.html" >
                        <span class="nav-text">Sortable</span>
                      </a>
                    </li>
                    <li>
                      <a href="streamline.html" >
                        <span class="nav-text">Streamline</span>
                      </a>
                    </li>
                    <li>
                      <a href="timeline.html" >
                        <span class="nav-text">Timeline</span>
                      </a>
                    </li>
                    <li>
                      <a href="map.vector.html" >
                        <span class="nav-text">Vector Map</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label"><b class="label no-bg">9</b></span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe3e8;
                        <span ui-include="'../assets/images/i_5.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Pages</span>
                  </a>
                  <ul class="nav-sub nav-mega">
                    <li>
                      <a href="profile.html" >
                        <span class="nav-text">Profile</span>
                      </a>
                    </li>
                    <li>
                      <a href="setting.html" >
                        <span class="nav-text">Setting</span>
                      </a>
                    </li>
                    <li>
                      <a href="search.html" >
                        <span class="nav-text">Search</span>
                      </a>
                    </li>
                    <li>
                      <a href="faq.html" >
                        <span class="nav-text">FAQ</span>
                      </a>
                    </li>
                    <li>
                      <a href="gallery.html" >
                        <span class="nav-text">Gallery</span>
                      </a>
                    </li>
                    <li>
                      <a href="invoice.html" >
                        <span class="nav-text">Invoice</span>
                      </a>
                    </li>
                    <li>
                      <a href="price.html" >
                        <span class="nav-text">Price</span>
                      </a>
                    </li>
                    <li>
                      <a href="blank.html" >
                        <span class="nav-text">Blank</span>
                      </a>
                    </li>
                    <li>
                      <a href="signin.html" >
                        <span class="nav-text">Sign In</span>
                      </a>
                    </li>
                    <li>
                      <a href="signup.html" >
                        <span class="nav-text">Sign Up</span>
                      </a>
                    </li>
                    <li>
                      <a href="forgot-password.html" >
                        <span class="nav-text">Forgot Password</span>
                      </a>
                    </li>
                    <li>
                      <a href="lockme.html" >
                        <span class="nav-text">Lockme Screen</span>
                      </a>
                    </li>
                    <li>
                      <a href="404.html" >
                        <span class="nav-text">Error 404</span>
                      </a>
                    </li>
                    <li>
                      <a href="505.html" >
                        <span class="nav-text">Error 505</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe39e;
                        <span ui-include="'../assets/images/i_6.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Form</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="form.layout.html" >
                        <span class="nav-text">Form Layout</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.element.html" >
                        <span class="nav-text">Form Element</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.validation.html" >
                        <span class="nav-text">Form Validation</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.select.html" >
                        <span class="nav-text">Select</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.editor.html" >
                        <span class="nav-text">Editor</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.picker.html">
                        <span class="nav-text">Picker</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.wizard.html">
                        <span class="nav-text">Wizard</span>
                      </a>
                    </li>
                    <li>
                      <a href="form.dropzone.html" class="no-ajax" >
                        <span class="nav-text">File Upload</span>
                      </a>
                    </li>
                  </ul>
                </li>
            
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe896;
                        <span ui-include="'../assets/images/i_7.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Tables</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="static.html" >
                        <span class="nav-text">Static table</span>
                      </a>
                    </li>
                    <li>
                      <a href="datatable.html" >
                        <span class="nav-text">Datatable</span>
                      </a>
                    </li>
                    <li>
                      <a href="footable.html" >
                        <span class="nav-text">Footable</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a>
                    <span class="nav-caret">
                      <i class="fa fa-caret-down"></i>
                    </span>
                    <span class="nav-label hidden-folded">
                      <b class="label label-sm info">N</b>
                    </span>
                    <span class="nav-icon">
                      <i class="material-icons">&#xe1b8;
                        <span ui-include="'../assets/images/i_8.svg'"></span>
                      </i>
                    </span>
                    <span class="nav-text">Charts</span>
                  </a>
                  <ul class="nav-sub">
                    <li>
                      <a href="chart.html" >
                        <span class="nav-text">Chart</span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="nav-caret">
                          <i class="fa fa-caret-down"></i>
                        </span>
                        <span class="nav-text">Echarts</span>
                      </a>
                      <ul class="nav-sub">
                        <li>
                          <a href="echarts-line.html" >
                            <span class="nav-text">line</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-bar.html" >
                            <span class="nav-text">Bar</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-pie.html" >
                            <span class="nav-text">Pie</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-scatter.html" >
                            <span class="nav-text">Scatter</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-radar-chord.html" >
                            <span class="nav-text">Radar &amp; Chord</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-gauge-funnel.html" >
                            <span class="nav-text">Gauges &amp; Funnel</span>
                          </a>
                        </li>
                        <li>
                          <a href="echarts-map.html" >
                            <span class="nav-text">Map</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
            
                <li class="nav-header hidden-folded">
                  <small class="text-muted">Help</small>
                </li>
                
                <li class="hidden-folded" >
                  <a href="docs.html" >
                    <span class="nav-text">Documents</span>
                  </a>
                </li>
            
              </ul>
          </nav>
      </div>
      <div class="b-t">
        <div class="nav-fold">
        	<a href="profile.html">
        	    <span class="pull-left">
        	      <img src="../assets/images/a0.jpg" alt="..." class="w-40 img-circle">
        	    </span>
        	    <span class="clear hidden-folded p-x">
        	      <span class="block _500">Jean Reyes</span>
        	      <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>online</small>
        	    </span>
        	</a>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z0" role="main">
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
                    <i class="fa fa-fw fa-plus text-muted"></i>
                    <span>New</span>
                  </a>
                  <div ui-include="'../views/blocks/dropdown.new.html'"></div>
                </li>
              </ul>
        
              <div ui-include="'../views/blocks/navbar.form.html'"></div>
              <!-- / -->
            </div>
            <!-- / navbar collapse -->
        
            <!-- navbar right -->
            <ul class="nav navbar-nav ml-auto flex-row">
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link mr-2" href data-toggle="dropdown">
                  <i class="material-icons">&#xe7f5;</i>
                  <span class="label label-sm up warn">3</span>
                </a>
                <div ui-include="'../views/blocks/dropdown.notification.html'"></div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link p-0 clear" href="#" data-toggle="dropdown">
                  <span class="avatar w-32">
                    <img src="../assets/images/a0.jpg" alt="...">
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'../views/blocks/dropdown.user.html'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link pl-2" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->
        </div>
    </div>
    <div class="app-footer">
      <div class="p-2 text-xs">
        <div class="pull-right text-muted py-1">
          &copy; Copyright <strong>Flatkit</strong> <span class="hidden-xs-down">- Built with Love v1.1.3</span>
          <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
        </div>
        <div class="nav">
          <a class="nav-link" href="../">About</a>
          <a class="nav-link" href="http://themeforest.net/user/flatfull/portfolio?ref=flatfull">Get it</a>
        </div>
      </div>
    </div>
    <div ui-view class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>DataTables</h2>
    </div>
    <div class="table-responsive">
      <table ui-jp="dataTable" ui-options="{
          aoColumns: [
            { mData: 'engine' },
            { mData: 'browser' },
            { mData: 'platform' },
            { mData: 'version' },
            { mData: 'grade' }
          ]
        }" class="table table-striped b-t b-b">
        <thead>
          <tr>
            <th  style="width:20%">Rendering engine</th>
            <th  style="width:25%">Browser</th>
            <th  style="width:25%">Platform(s)</th>
            <th  style="width:15%">Engine version</th>
            <th  style="width:15%">CSS grade</th>
          </tr>
        </thead>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
		<tr>
            <td  style="width:20%">Rendering engine</td>
            <td  style="width:25%">Browser</td>
            <td  style="width:25%">Platform(s)</td>
            <td  style="width:15%">Engine version</td>
            <td  style="width:15%">CSS grade</td>
          </tr>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->

  <!-- theme switcher -->
  <div id="switcher">
    <div class="switcher box-color dark-white text-color" id="sw-theme">
      <a href ui-toggle-class="active" target="#sw-theme" class="box-color dark-white text-color sw-btn">
        <i class="fa fa-gear"></i>
      </a>
      <div class="box-header">
        <a href="https://themeforest.net/item/flatkit-app-ui-kit/13231484?ref=flatfull" class="btn btn-xs rounded danger pull-right">BUY</a>
        <h2>Theme Switcher</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <p class="hidden-md-down">
          <label class="md-check m-y-xs"  data-target="folded">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Folded Aside</span>
          </label>
          <label class="md-check m-y-xs" data-target="boxed">
            <input type="checkbox">
            <i class="green"></i>
            <span class="hidden-folded">Boxed Layout</span>
          </label>
          <label class="m-y-xs pointer" ui-fullscreen>
            <span class="fa fa-expand fa-fw m-r-xs"></span>
            <span>Fullscreen Mode</span>
          </label>
        </p>
        <p>Colors:</p>
        <p data-target="themeID">
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'primary', accent:'accent', warn:'warn'}">
            <input type="radio" name="color" value="1">
            <i class="primary"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'accent', accent:'cyan', warn:'warn'}">
            <input type="radio" name="color" value="2">
            <i class="accent"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warn', accent:'light-blue', warn:'warning'}">
            <input type="radio" name="color" value="3">
            <i class="warn"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'success', accent:'teal', warn:'lime'}">
            <input type="radio" name="color" value="4">
            <i class="success"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'info', accent:'light-blue', warn:'success'}">
            <input type="radio" name="color" value="5">
            <i class="info"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'blue', accent:'indigo', warn:'primary'}">
            <input type="radio" name="color" value="6">
            <i class="blue"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'warning', accent:'grey-100', warn:'success'}">
            <input type="radio" name="color" value="7">
            <i class="warning"></i>
          </label>
          <label class="radio radio-inline m-0 ui-check ui-check-color ui-check-md" data-value="{primary:'danger', accent:'grey-100', warn:'grey-300'}">
            <input type="radio" name="color" value="8">
            <i class="danger"></i>
          </label>
        </p>
        <p>Themes:</p>
        <div data-target="bg" class="row no-gutter text-u-c text-center _600 clearfix">
          <label class="p-a col-sm-6 light pointer m-0">
            <input type="radio" name="theme" value="" hidden>
            Light
          </label>
          <label class="p-a col-sm-6 grey pointer m-0">
            <input type="radio" name="theme" value="grey" hidden>
            Grey
          </label>
          <label class="p-a col-sm-6 dark pointer m-0">
            <input type="radio" name="theme" value="dark" hidden>
            Dark
          </label>
          <label class="p-a col-sm-6 black pointer m-0">
            <input type="radio" name="theme" value="black" hidden>
            Black
          </label>
        </div>
      </div>
    </div>
    
    <div class="switcher box-color black lt" id="sw-demo">
      <a href ui-toggle-class="active" target="#sw-demo" class="box-color black lt text-color sw-btn">
        <i class="fa fa-list text-white"></i>
      </a>
      <div class="box-header">
        <h2>Demos</h2>
      </div>
      <div class="box-divider"></div>
      <div class="box-body">
        <div class="row no-gutter text-u-c text-center _600 clearfix">
          <a href="dashboard.html"
            class="p-a col-sm-6 primary">
            <span class="text-white">Default</span>
          </a>
          <a href="dashboard.0.html"
            class="p-a col-sm-6 success">
            <span class="text-white">Zero</span>
          </a>
          <a href="dashboard.1.html"
            class="p-a col-sm-6 blue">
            <span class="text-white">One</span>
          </a>
          <a href="dashboard.2.html"
            class="p-a col-sm-6 warn">
            <span class="text-white">Two</span>
          </a>
          <a href="dashboard.3.html"
            class="p-a col-sm-6 danger">
            <span class="text-white">Three</span>
          </a>
          <a href="dashboard.4.html"
            class="p-a col-sm-6 green">
            <span class="text-white">Four</span>
          </a>
          <a href="dashboard.5.html"
            class="p-a col-sm-6 info">
            <span class="text-white">Five</span>
          </a>
          <div 
            class="p-a col-sm-6 lter">
            <span class="text">...</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / -->

  <!-- / -->
<!-- ############ LAYOUT END-->
  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/jquery/dist/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/plugins/integration/bootstrap/3/dataTables.bootstrap.js"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/tether/dist/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/underscore/underscore-min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/jquery/PACE/pace.min.js"></script>
<!-- ajax -->
<script src="<?php echo base_url(); ?>assets/backend/jquery/jquery-pjax/jquery.pjax.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/config.lazyload.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/palette.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-load.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-jp.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-include.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-device.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-form.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-nav.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-screenfull.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-scroll-to.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ui-toggle-class.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/app.js"></script>
<script src="<?php echo base_url(); ?>assets/backend/scripts/ajax.js"></script>


<!-- endbuild -->
</body>
</html>