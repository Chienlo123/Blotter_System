<!--
 =========================================================
* Black Dashboard PRO - v1.1.1
=========================================================

* Product Page: https://themes.getbootstrap.com/product/black-dashboard-pro-premium-bootstrap-4-admin/
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/img/apple-icon.png">
    <link rel="icon" type="image/png" href="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/img/favicon.png">
    <meta name="google-site-verification" content="kCT200-J0rfczENRkJQdYCqsDKkUo3Hvr3KZic_otwU" />

    <title>
        Flask Black Dashboard PRO -  Calendar  | AppSeed
    </title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- Nucleo Icons -->
    <link href="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/css/nucleo-icons.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/css/black-dashboard.css?v=1.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/demo/demo.css" rel="stylesheet" />

    <!-- Specific Page CSS goes HERE  -->
    

</head>

<body class="sidebar-mini ">

    <div class="wrapper">

        <div class="navbar-minimize-fixed">
        <button class="minimize-sidebar btn btn-link btn-just-icon">
            <i class="tim-icons icon-align-center visible-on-sidebar-regular text-muted"></i>
            <i class="tim-icons icon-bullet-list-67 visible-on-sidebar-mini text-muted"></i>
        </button>
        </div>

        
    

        <div class="main-panel">

            
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
          <div class="container-fluid">
          
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav ml-auto">
                <li class="search-bar input-group">
                  <button class="btn btn-link" id="search-button" data-toggle="modal" data-target="#searchModal"><i class="tim-icons icon-zoom-split"></i>
                    <span class="d-lg-none d-md-block">Search</span>
                  </button>
                </li>
                <li class="dropdown nav-item">
                  <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <div class="notification d-none d-lg-block d-xl-block"></div>
                    <i class="tim-icons icon-sound-wave"></i>
                    <p class="d-lg-none">
                      Notifications
                    </p>
                  </a>
                  
                </li>
                <li class="dropdown nav-item">
                  <a href="/logout" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <div class="photo">
                      <img src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/img/mike.jpg" alt="Profile Photo">
                    </div>
                    <b class="caret d-none d-lg-block d-xl-block"></b>
                    <p class="d-lg-none">
                      Log out
                    </p>
                  </a>
                  <ul class="dropdown-menu dropdown-navbar">
                    <li class="nav-link">
                      <a href="/page-user.html" class="nav-item dropdown-item">Profile</a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="nav-link">
                      <a href="/logout" class="nav-item dropdown-item">Log out</a>
                    </li>
                  </ul>
                </li>
                <li class="separator d-lg-none"></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <i class="tim-icons icon-simple-remove"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- End Navbar -->


            <div class="content">

                

    <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
            <div class="card card-calendar">
            <div class="card-body">
                <div id="fullCalendar"></div>
            </div>
            </div>
        </div>
    </div>



            </div>

            
     
        

        </div>

    </div>

    
  <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
          <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
          </a>
          <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Background</li>
            <li class="adjustments-line">
              <a href="javascript:void(0)" class="switch-trigger background-color">
                <div class="badge-colors text-center">
                  <span class="badge filter badge-primary active" data-color="primary"></span>
                  <span class="badge filter badge-info" data-color="blue"></span>
                  <span class="badge filter badge-success" data-color="green"></span>
                  <span class="badge filter badge-warning" data-color="orange"></span>
                  <span class="badge filter badge-danger" data-color="red"></span>
                </div>
                <div class="clearfix"></div>
              </a>
            </li>
            <li class="header-title">
              Sidebar Mini
            </li>
            <li class="adjustments-line">
              <div class="togglebutton switch-sidebar-mini">
                <span class="label-switch">OFF</span>
                <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label="" data-off-label="" />
                <span class="label-switch label-right">ON</span>
              </div>
              <div class="togglebutton switch-change-color mt-3">
                <span class="label-switch">LIGHT MODE</span>
                <input type="checkbox" name="checkbox" checked class="bootstrap-switch" data-on-label="" data-off-label="" />
                <span class="label-switch label-right">DARK MODE</span>
              </div>
            </li>
            <li class="button-container mt-4">
              <a  target="_blank" rel="noopener noreferrer"
                  href="https://appseed.us/admin-dashboards/flask-dashboard-black-pro" class="btn btn-default btn-block btn-round">
                Product
              </a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
              <button id="twitter" class="btn btn-round btn-info"><i class="fab fa-twitter"></i> &middot; 45</button>
              <button id="facebook" class="btn btn-round btn-info"><i class="fab fa-facebook-f"></i> &middot; 50</button>
              <br>
              <br>
              <a class="github-button" href="https://github.com/app-generator/flask-dashboard-black-pro" 
                 data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
          </ul>
        </div>
      </div>
      

      <!--   Core JS Files   -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/core/jquery.min.js"></script>
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/core/popper.min.js"></script>
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/core/bootstrap.min.js"></script>
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/moment.min.js"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/sweetalert2.min.js"></script>
  <!--  Plugin for Sorting Tables -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/jquery.tablesorter.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/jquery.validate.min.js"></script>
  <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/bootstrap-datetimepicker.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/fullcalendar/fullcalendar.min.js"></script>
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/fullcalendar/daygrid.min.js"></script>
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/fullcalendar/timegrid.min.js"></script>
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/fullcalendar/interaction.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/nouislider.min.js"></script>
  <!-- Chart JS -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/js/black-dashboard.js?v=1.1.1"></script>
  <!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="https://appsrv1-147a1.kxcdn.com/black-dashboard-pro/demo/demo.js"></script>
  

    

  <script>
        $(document).ready(function() {
          $().ready(function() {
            $sidebar = $('.sidebar');
            $navbar = $('.navbar');
            $main_panel = $('.main-panel');
    
            $full_page = $('.full-page');
    
            $sidebar_responsive = $('body > .navbar-collapse');
            sidebar_mini_active = true;
            white_color = false;
    
            window_width = $(window).width();
    
            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
    
    
    
            $('.fixed-plugin a').click(function(event) {
              if ($(this).hasClass('switch-trigger')) {
                if (event.stopPropagation) {
                  event.stopPropagation();
                } else if (window.event) {
                  window.event.cancelBubble = true;
                }
              }
            });
    
            $('.fixed-plugin .background-color span').click(function() {
              $(this).siblings().removeClass('active');
              $(this).addClass('active');
    
              var new_color = $(this).data('color');
    
              if ($sidebar.length != 0) {
                $sidebar.attr('data', new_color);
              }
    
              if ($main_panel.length != 0) {
                $main_panel.attr('data', new_color);
              }
    
              if ($full_page.length != 0) {
                $full_page.attr('filter-color', new_color);
              }
    
              if ($sidebar_responsive.length != 0) {
                $sidebar_responsive.attr('data', new_color);
              }
            });
    
            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);
    
              if (sidebar_mini_active == true) {
                $('body').removeClass('sidebar-mini');
                sidebar_mini_active = false;
                blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
              } else {
                $('body').addClass('sidebar-mini');
                sidebar_mini_active = true;
                blackDashboard.showSidebarMessage('Sidebar mini activated...');
              }
    
              // we simulate the window Resize so the charts will get updated in realtime.
              var simulateWindowResize = setInterval(function() {
                window.dispatchEvent(new Event('resize'));
              }, 180);
    
              // we stop the simulation of Window Resize after the animations are completed
              setTimeout(function() {
                clearInterval(simulateWindowResize);
              }, 1000);
            });
    
            $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
              var $btn = $(this);
    
              if (white_color == true) {
    
                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').removeClass('white-content');
                }, 900);
                white_color = false;
              } else {
    
                $('body').addClass('change-background');
                setTimeout(function() {
                  $('body').removeClass('change-background');
                  $('body').addClass('white-content');
                }, 900);
    
                white_color = true;
              }
    
    
            });
    
            $('.light-badge').click(function() {
              $('body').addClass('white-content');
            });
    
            $('.dark-badge').click(function() {
              $('body').removeClass('white-content');
            });
          });
        });
      </script>
    

      

    <!-- Specific Page JS goes HERE  -->
    

    <script>
        demo.initFullCalendar();
    </script>



</body>
</html>