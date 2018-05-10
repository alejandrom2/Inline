<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title> Now UI Dashboard PRO by Creative Tim</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href={{asset("/css/bootstrap.min.css")}} rel="stylesheet" />
  <link href={{asset("/css/now-ui-dashboard.css")}} rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href={{asset("/demo/demo.css")}} rel="stylesheet" />
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Projects Inline
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src={{asset("/img/james.jpg")}} />
          </div>
          <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
                James Amos
                <b class="caret"></b>
              </span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">MP</span>
                    <span class="sidebar-normal">My Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">EP</span>
                    <span class="sidebar-normal">Edit Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">S</span>
                    <span class="sidebar-normal">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="../examples/dashboard.html">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a data-toggle="collapse" href="#pagesExamples">
              <i class="now-ui-icons design_image"></i>
              <p>
                Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav">
                <li>
                  <a href="../examples/pages/pricing.html">
                    <span class="sidebar-mini-icon">P</span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/timeline.html">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/login.html">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Login </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/register.html">
                    <span class="sidebar-mini-icon">R</span>
                    <span class="sidebar-normal"> Register </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/lock.html">
                    <span class="sidebar-mini-icon">LS</span>
                    <span class="sidebar-normal"> Lock Screen </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/pages/user.html">
                    <span class="sidebar-mini-icon">UP</span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#componentsExamples">
              <i class="now-ui-icons education_atom"></i>
              <p>
                Components
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="componentsExamples">
              <ul class="nav">
                <li>
                  <a href="../examples/components/buttons.html">
                    <span class="sidebar-mini-icon">B</span>
                    <span class="sidebar-normal"> Buttons </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/components/grid.html">
                    <span class="sidebar-mini-icon">G</span>
                    <span class="sidebar-normal"> Grid System </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/components/panels.html">
                    <span class="sidebar-mini-icon">P</span>
                    <span class="sidebar-normal"> Panels </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/components/sweet-alert.html">
                    <span class="sidebar-mini-icon">SA</span>
                    <span class="sidebar-normal"> Sweet Alert </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/components/notifications.html">
                    <span class="sidebar-mini-icon">N</span>
                    <span class="sidebar-normal"> Notifications </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/components/icons.html">
                    <span class="sidebar-mini-icon">I</span>
                    <span class="sidebar-normal"> Icons </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/components/typography.html">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> Typography </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#formsExamples">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>
                Forms
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="formsExamples">
              <ul class="nav">
                <li>
                  <a href="../examples/forms/regular.html">
                    <span class="sidebar-mini-icon">RF</span>
                    <span class="sidebar-normal"> Regular Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/forms/extended.html">
                    <span class="sidebar-mini-icon">EF</span>
                    <span class="sidebar-normal"> Extended Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/forms/validation.html">
                    <span class="sidebar-mini-icon">V</span>
                    <span class="sidebar-normal"> Validation Forms </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/forms/wizard.html">
                    <span class="sidebar-mini-icon">W</span>
                    <span class="sidebar-normal"> Wizard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#tablesExamples">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>
                Tables
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="tablesExamples">
              <ul class="nav">
                <li>
                  <a href="../examples/tables/regular.html">
                    <span class="sidebar-mini-icon">RT</span>
                    <span class="sidebar-normal"> Regular Tables </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/tables/extended.html">
                    <span class="sidebar-mini-icon">ET</span>
                    <span class="sidebar-normal"> Extended Tables </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/tables/datatables.net.html">
                    <span class="sidebar-mini-icon">DT</span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a data-toggle="collapse" href="#mapsExamples">
              <i class="now-ui-icons location_pin"></i>
              <p>
                Maps
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="mapsExamples">
              <ul class="nav">
                <li>
                  <a href="../examples/maps/google.html">
                    <span class="sidebar-mini-icon">GM</span>
                    <span class="sidebar-normal"> Google Maps </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/maps/fullscreen.html">
                    <span class="sidebar-mini-icon">FM</span>
                    <span class="sidebar-normal"> Full Screen Map </span>
                  </a>
                </li>
                <li>
                  <a href="../examples/maps/vector.html">
                    <span class="sidebar-mini-icon">VM</span>
                    <span class="sidebar-normal"> Vector Map </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <a href="../examples/widgets.html">
              <i class="now-ui-icons objects_diamond"></i>
              <p>Widgets</p>
            </a>
          </li>
          <li>
            <a href="../examples/charts.html">
              <i class="now-ui-icons business_chart-pie-36"></i>
              <p>Charts</p>
            </a>
          </li>
          <li>
            <a href="../examples/calendar.html">
              <i class="now-ui-icons media-1_album"></i>
              <p>Calendar</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
     <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Regular Forms</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                  <i class="now-ui-icons ui-1_zoom-bold"></i>
                </span>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
<!--   Core JS Files   -->
<script src={{asset("/js/core/jquery.min.js")}}></script>
<script src={{asset("/js/core/popper.min.js")}}></script>
<script src={{asset("/js/core/bootstrap.min.js")}}></script>
<script src={{asset("/js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
<script src={{asset("/js/plugins/moment.min.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-switch.js")}}></script>
<script src={{asset("/js/plugins/sweetalert2.min.js")}}></script>
<script src={{asset("/js/plugins/jquery.validate.min.js")}}></script>
<script src={{asset("/js/plugins/jquery.bootstrap-wizard.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-selectpicker.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-datetimepicker.js")}}></script>
<script src={{asset("/js/plugins/jquery.dataTables.min.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-tagsinput.js")}}></script>
<script src={{asset("/js/plugins/jasny-bootstrap.min.js")}}></script>
<script src={{asset("/js/plugins/fullcalendar.min.js")}}></script>
<script src={{asset("/js/plugins/jquery-jvectormap.js")}}></script>
<script src={{asset("/js/plugins/nouislider.min.js")}}></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src={{asset("/js/plugins/chartjs.min.js")}}></script>
<script src={{asset("/js/plugins/bootstrap-notify.js")}}></script>
<script src={{asset("/js/now-ui-dashboard.js")}}></script>
<script src={{asset("/demo/demo.js")}}></script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    demo.initDashboardPageCharts();

    demo.initVectorMap();

  });
</script>
</html>