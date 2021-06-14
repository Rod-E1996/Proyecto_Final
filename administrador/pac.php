<?php
    include ("./ajustes.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | Administrador</title>
    <!-- /////////////////////////////////////////////////// -->
    <!-- jQuery -->
    <script src="../dashboard/plugins/jquery/jquery.js"></script>
    <!-- SweetAlert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="../dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../dashboard/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../dashboard/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../dashboard/plugins/moment/moment.min.js"></script>
    <script src="../dashboard/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../dashboard/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dashboard/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dashboard/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dashboard/dist/js/pages/dashboard.js"></script>
    <!-- /////////////////////////////////////////////////// -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../dashboard/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Imagen que se carga al iniciar sesion -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dashboard/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../dashboard/indexAdmin.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../logout.php" class="nav-link">Cerrar Sesión</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dashboard/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dashboard/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../dashboard/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../dashboard/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dashboard/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $varsesion;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Administrador
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active" onclick="ejemplo()">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actualizar/Eliminar Foto</p>
                </a>
                <!-- <button class="show-example-btn" aria-label="Try me! Example: input type file" onclick="executeExample('fileInput')">
                  Try me!
                </button> -->
              </li>
              <!-- <li class="nav-item">
                <a href="../dashboard/index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item">
            <a href="../administrador/pacientes.php" class="nav-link active">
              <i class="nav-icon fas fa-user-injured"></i>
              <p>
                Pacientes
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../administrador/estadisticas.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Estadísticas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../dashboard/pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../dashboard/pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../dashboard/pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../dashboard/pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../dashboard/pages/examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../dashboard/pages/search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../dashboard/pages/search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Pacientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- //////////////////////////////////////////////////////////////////////////////// -->
            <?php
                //$id=$_GET['id']; Asignacion del valor de la variable $_GET a $id (desencriptando la id)
                $id=convert_uudecode($_GET['id']);//Asignacion del valor de la variable $_GET a $id (desencriptando la id)
                if($id!=NULL){
                    $query = "SELECT * FROM pacientes WHERE id_paciente= ".$id;
                    $result = mysqli_query($conexion, $query);
                    $row = mysqli_fetch_array($result);
                }
                if ($row['id_paciente']==""){ //Comprobar si existe ese paciente con ese id
            ?>
                    <div class="text-center col-12">
                        <h1 class="text-center display-2 text-danger">Oops! Algo salió mal :(</h1>
                        <img src="../assets/alumno.png" class="img-fluid" width="210px" alt="Image">
                        <h1 class="text-center display-4">Paciente no encontrado</h1>
                        <br><br>
                        <a class="btn btn-primary btn-lg" href="pacientes.php">Volver</a>
                    </div>
            <?php
                }
                else{ //Si existe el paciente se muestran los datos
            ?>
            <div class="container-fluid">
                <div class="text-center mt-1">
                    <img src="../assets/image.jpg" class="border rounded-circle shadow" alt="Not found" width="120px" height="120px">
                    <h4 class="text-bold display-4" style="font-size: 40px !important;"><?php echo $row['paciente_nombres']; echo " ".$row['paciente_paterno']; echo " ".$row['paciente_materno']; ?></h4>
                    <hr class="btn-outline-primary" style="width: 50%;">
                    <?php //Dar formato para la fecha de nacimiento
                        $fecha_nacimiento=new DateTime($row['paciente_nacimiento']);
                    ?>
                    <p class="mb-n1"><b>Fecha de nacimiento:</b> &nbsp;<?php echo $fecha_nacimiento->format('d/m/Y'); ?></p>
                    <p class="mb-n1"><b>Acompañante:</b> &nbsp;<?php echo $row['acompaniante_nombres']; echo " ".$row['acompaniante_paterno']; echo " ".$row['acompaniante_materno']; ?></p>
                    <p class="mb-n1"><b>Teléfono:</b> &nbsp;<?php echo $row['acompaniante_celular']; ?></p>
                    <p class="mb-n1"><b>Ocupación:</b> &nbsp;<?php echo $row['acompaniante_ocupacion']; ?></p>
                    <p class="mb-n1"><b>Correo:</b> &nbsp;<?php echo $row['acompaniante_correo']; ?></p>
                </div>
                <hr style="width: 95%;">
                <div class="row mt-4">
                    <div class="col-sm-12 col-md-3 mb-2">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active text-truncate text-center" id="list-informacion" data-toggle="list" href="#informacion" role="tab" aria-controls="home">Inf. Relevante / Historia clínica</a>
                            <a class="list-group-item list-group-item-action text-truncate text-center" id="list-consultas" data-toggle="list" href="#consultas" role="tab" aria-controls="profile">Consultas</a>
                            <a class="list-group-item list-group-item-action text-truncate text-center" id="list-vacunacion" data-toggle="list" href="#vacunacion" role="tab" aria-controls="settings">Vacunación</a>
                            <a class="list-group-item list-group-item-action text-truncate text-center" id="list-informe" data-toggle="list" href="#informe" role="tab" aria-controls="settings">Informe médico</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <div class="tab-content" id="nav-tabContent">
                            <!-- Inf. Relevante / Historia clínica -->
                            <div class="tab-pane fade show active table-responsive shadow mb-4" style="max-height: 555px;" id="informacion" role="tabpanel" aria-labelledby="list-informacion">
                                <h4 class="display-4 text-center mb-4 mt-2" style="font-size: 25px !important;">Información Relevante / Historia Clínica</h4>
                                <div class="row col-12 mb-4">
                                    <div class="col-sm-12 col-md-6">
                                        <form method="post">
                                            <div class="form-group">
                                                <label for="antecedentes_importantes" class="text-bold"><img src="../assets/antecedentes.png" class="rounded-circle" alt="image" width="30px"> Antecedentes importantes</label>
                                                <textarea name="antecedentes_importantes" id="antecedentes_importantes" class="form-control" rows="2" maxlength="4096" style="resize: none;"><?php echo $row['antecedentes_importantes']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="alergias"><img src="../assets/alergias.png" class="rounded-circle" alt="image" width="30px"> Alergias</label>
                                                <textarea name="alergias" id="alergias" class="form-control" rows="2" maxlength="4096" style="resize: none;"><?php echo $row['alergias']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="quien_refiere_al_paciente"><img src="../assets/refiere.png" class="rounded-circle" alt="image" width="30px"> ¿Quién refiere al paciente?</label>
                                                <input type="text" class="form-control" name="quien_refiere_al_paciente" id="quien_refiere_al_paciente" value="<?php echo $row['quien_refiere_al_paciente']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="motivo_consulta"><img src="../assets/motivo.png" class="rounded-circle" alt="image" width="30px"> Motivo de la consulta (Según el paciente)</label>
                                                <textarea name="motivo_consulta" id="motivo_consulta" class="form-control" rows="2" maxlength="4096" style="resize: none;"><?php echo $row['motivo_consulta']; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="observaciones"><img src="../assets/observaciones.png" class="rounded-circle" alt="image" width="30px"> Observaciones sobre el paciente</label>
                                                <textarea name="observaciones" id="observaciones" class="form-control" rows="2" maxlength="4096" style="resize: none;"><?php echo $row['observaciones']; ?></textarea>
                                            </div>
                                            <hr>
                                            <div class="form-group text-center">
                                                <button type="submit" name="informacion_relevante" class="btn btn-primary">Actualizar</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-12 col-md-6 text-center">
                                        <div class="form-group mt-2"><!-- Información pediátrica -->
                                            <button type="button" class="btn btn-outline-primary btn-block text-left" data-toggle="modal" data-target="#informacion_pediatrica" style="transition: 0.6s;"><img src="../assets/pediatrica.png" alt="image">&nbsp&nbsp&nbsp Información pediátrica</button>
                                            <form method="post">
                                            <!-- Modal para la información pediátrica -->
                                                <div class="modal fade" id="informacion_pediatrica" tabindex="-1" role="dialog" aria-labelledby="modal_informacion" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal_informacion">Información pediátrica</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                                <div class="modal-body mx-3 text-left">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="nacimiento_por">Nacimiento por</label>
                                                                            <select name="nacimiento_por" class="form-control" id="nacimiento_por">
                                                                                <option value="" selected disabled>Seleccione una opción...</option>
                                                                                <option value="Cesárea">Cesárea</option>
                                                                                <option value="Natural">Natural</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="numero_embarazo">Número de embarazo del paciente</label>
                                                                            <input type="number" name="numero_embarazo" class="form-control" id="numero_embarazo" min="0" max="9" step="1" value="<?php echo $row['numero_embarazo']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="peso_nacer">Peso al nacer (g)</label>
                                                                            <input type="number" class="form-control" name="peso_nacer" id="peso_nacer" min="0.01" step="0.01" value="<?php echo $row['peso_nacer']; ?>">
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="semanas_gestacion">Semanas de gestación del paciente</label>
                                                                            <input type="number" class="form-control" name="semanas_gestacion" id="semanas_gestacion" min="1" step="1" value="<?php echo $row['semanas_gestacion']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="#">APGAR (Calificación al nacer)</label>
                                                                            <div class="row">
                                                                                <div class="col-1">
                                                                                    1:
                                                                                </div>
                                                                                <div class="col-5">
                                                                                    <input type="number" class="form-control alert-danger" name="apgar1" id="apgar1" min="0" step="0.01">
                                                                                </div>
                                                                                <div class="col-1">
                                                                                    5:
                                                                                </div>
                                                                                <div class="col-5">
                                                                                    <input type="number" class="form-control alert-danger" name="apgar2" id="apgar2" min="0" step="0.01">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="lactancia">Lactancia seno materno</label>
                                                                            <select name="lactancia" class="form-control" id="lactancia">
                                                                                <option value="" selected disabled>Seleccione una opción...</option>
                                                                                <option value="Fórmula">Fórmula</option>
                                                                                <option value="Seno">Seno</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="talla_nacer">Talla al nacer (cm)</label>
                                                                            <input type="number" class="form-control" name="talla_nacer" id="talla_nacer" min="0.01" step="0.01" max="999" value="<?php echo $row['talla_nacer']; ?>">
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <label for="perimetro_cefalico">Perímetro cefálico al nacer (cm)</label>
                                                                            <input type="number" class="form-control" name="perimetro_cefalico" id="perimetro_cefalico" min="0.01" step="0.01" value="<?php echo $row['perimetro_cefalico']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="alimentos_solidos" name="alimentos_solidos" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['alimentos_solidos']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="alimentos_solidos" style="cursor:pointer">Come alimentos sólidos</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="tamiz_metabolico" name="tamiz_metabolico" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['tamiz_metabolico']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="tamiz_metabolico" style="cursor:pointer">Tamiz metabólico</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="tamiz_cardiologico" name="tamiz_cardiologico" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['tamiz_cardiologico']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="tamiz_cardiologico" style="cursor:pointer">Tamiz cardiológico</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="hospitalizado_nacer" name="hospitalizado_nacer" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['hospitalizado_nacer']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="hospitalizado_nacer" style="cursor:pointer">Permaneció hospitalizado al nacer</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="tamiz_auditivo" name="tamiz_auditivo" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['tamiz_auditivo']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="tamiz_auditivo" style="cursor:pointer">Tamiz auditivo</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-center">
                                                                    <button type="submit" name="informacion_pediatrica" class="btn btn-primary">Actualizar</button>
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-group"><!-- Antecedentes familiares -->
                                            <button type="button" class="btn btn-outline-primary btn-block text-left" data-toggle="modal" data-target="#antecedentes_familiares" style="transition: 0.6s;"><img src="../assets/familiares.png" alt="image">&nbsp&nbsp&nbsp Antecedentes familiares</button>
                                            <form method="post">
                                            <!-- Modal para los antecedentes familiares -->
                                                <div class="modal fade" id="antecedentes_familiares" tabindex="-1" role="dialog" aria-labelledby="modal_antecedentes_familiares" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal_antecedentes_familiares">Antecedentes familiares</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body mx-3 text-left">
                                                                <form method="post">
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="hijos_fallecidos" name="hijos_fallecidos" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['hijos_fallecidos']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="hijos_fallecidos" style="cursor:pointer">Hijos fallecidos</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="gestaciones" name="gestaciones" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['gestaciones']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="gestaciones" style="cursor:pointer">Gestaciones</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="diabetes" name="diabetes" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['diabetes']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="diabetes" style="cursor:pointer">Diabetes mellitus</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="cancer" name="cancer" value="1" class="custom-control-input" style="cursor:pointer"  <?php echo (($row['cancer']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="cancer" style="cursor:pointer">Cáncer</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="tuberculosis" name="tuberculosis" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['tuberculosis']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="tuberculosis" style="cursor:pointer">Tuberculosis</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="hipertension" name="hipertension" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['hipertension']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="hipertension" style="cursor:pointer">Hipertensión arterial</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="convulsiones" name="convulsiones" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['convulsiones']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="convulsiones" style="cursor:pointer">Convulsiones</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group col-sm-12 col-md-6">
                                                                            <div class="custom-control custom-checkbox custom-control-inline">
                                                                                <input type="checkbox" id="enfermedad_sangre" name="enfermedad_sangre" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['enfermedad_sangre']=="1")) ? "checked":""; ?>>
                                                                                <label class="custom-control-label" for="enfermedad_sangre" style="cursor:pointer">Enfermedad en la sangre</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="submit" name="antecedentes_familiares" class="btn btn-primary">Actualizar</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-group"><!-- A. personales patológicos -->
                                            <button type="button" class="btn btn-outline-primary btn-block text-left" data-toggle="modal" data-target="#personales_patologicos" style="transition: 0.6s;"><img src="../assets/patologicos.png" alt="image">&nbsp&nbsp&nbsp A. Personales Patológicos</button>
                                            <form method="post">
                                            <!-- Modal para los A. personales patológicos -->
                                                <div class="modal fade" id="personales_patologicos" tabindex="-1" role="dialog" aria-labelledby="modal_personales_patologicos" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal_personales_patologicos">A. Personales Patológicos</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body mx-3 text-left">
                                                                <form method="post">
                                                                    <div class="form-group col-12">
                                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                                            <input type="checkbox" id="ingesta_medicamentos" name="ingesta_medicamentos" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['ingesta_medicamentos']=="1")) ? "checked":""; ?>>
                                                                            <label class="custom-control-label" for="ingesta_medicamentos" style="cursor:pointer">Ingesta actual de medicamentos</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-12">
                                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                                            <input type="checkbox" id="cirugias" name="cirugias" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['cirugias']=="1")) ? "checked":""; ?>>
                                                                            <label class="custom-control-label" for="cirugias" style="cursor:pointer">Cirugías</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-12">
                                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                                            <input type="checkbox" id="transfusiones" name="transfusiones" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['transfusiones']=="1")) ? "checked":""; ?>>
                                                                            <label class="custom-control-label" for="transfusiones" style="cursor:pointer">Transfusiones</label>
                                                                        </div>
                                                                    </div>
                                                                    <label for="enfermedades_importantes">Otras enfermedades importantes</label>
                                                                    <textarea name="enfermedades_importantes" id="enfermedades_importantes" class="form-control" rows="3" maxlength="4096" style="resize: none;"><?php echo $row['enfermedades_importantes']; ?></textarea>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="submit" name="personales_patologicos" class="btn btn-primary">Actualizar</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-group"><!-- A. personales no patológicos -->
                                            <button type="button" class="btn btn-outline-primary btn-block text-left" data-toggle="modal" data-target="#personales_no_patologicos" style="transition: 0.6s;"><img src="../assets/no_patologicos.png" alt="image">&nbsp&nbsp&nbsp A. Personales NO Patológicos</button>
                                            <form method="post">
                                            <!-- Modal para los A. personales no patológicos -->
                                                <div class="modal fade" id="personales_no_patologicos" tabindex="-1" role="dialog" aria-labelledby="modal_personales_no_patologicos" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="modal_personales_no_patologicos">A. Personales NO Patológicos</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body mx-3 text-left">
                                                                <form method="post">
                                                                    <div class="form-group col-12">
                                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                                            <input type="checkbox" id="denticion" name="denticion" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['denticion']=="1")) ? "checked":""; ?>>
                                                                            <label class="custom-control-label" for="denticion" style="cursor:pointer">Dentición</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-12">
                                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                                            <input type="checkbox" id="realiza_ejercicio" name="realiza_ejercicio" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['realiza_ejercicio']=="1")) ? "checked":""; ?>>
                                                                            <label class="custom-control-label" for="realiza_ejercicio" style="cursor:pointer">Realiza ejercicio</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-12">
                                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                                            <input type="checkbox" id="desarrollo_psicomotriz" name="desarrollo_psicomotriz" value="1" class="custom-control-input" style="cursor:pointer" <?php echo (($row['desarrollo_psicomotriz']=="1")) ? "checked":""; ?>>
                                                                            <label class="custom-control-label" for="desarrollo_psicomotriz" style="cursor:pointer">Desarrollo psicomotriz</label>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="submit" name="personales_no_patologicos" class="btn btn-primary">Actualizar</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="form-group"><!-- Interrogatorio por aparatos y sistemas -->
                                            <button type="button" class="btn btn-outline-primary btn-block text-left" data-toggle="modal" data-target="#interrogatorio" style="transition: 0.6s;"><img src="../assets/interrogatorio.png" alt="image">&nbsp&nbsp&nbsp Interrogatorio por aparatos y sistemas</button>
                                            <form method="post">
                                            <!-- Modal para interrogatorio por aparatos y sistemas -->
                                                <div class="modal fade" id="interrogatorio" tabindex="-1" role="dialog" aria-labelledby="interrogatorio" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="interrogatorio">Interrogatorio por aparatos y sistemas</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body mx-3 text-left">
                                                                <form method="post">
                                                                    <textarea name="interrogatorio" id="interrogatorio" class="form-control" rows="10" maxlength="4096" style="resize: none;"><?php echo $row['interrogatorio']; ?></textarea>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="submit" name="interrogatorio_boton" class="btn btn-primary">Actualizar</button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Inf. Relevante / Historia clínica -->
                            <!-- Consultas -->
                            <div class="tab-pane fade" id="consultas" role="tabpanel" aria-labelledby="list-consultas">
                                <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#totalConsultas">Nueva consulta</button>
                                <!-- Modal para una nueva consulta -->
                                <form method="post">
                                    <div class="modal fade" id="totalConsultas" tabindex="-1" role="dialog" aria-labelledby="totalConsultas" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="totalConsultas">Nueva consulta</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body mx-3">
                                                    <div class="form-group">
                                                        <label for="padecimiento_actual">Padecimiento actual</label>
                                                        <textarea name="padecimiento_actual" id="padecimiento_actual" class="form-control" rows="4" maxlength="4096" style="resize: none;" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="fecha_inicio">Fecha de inicio del padecimiento</label>
                                                        <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" required>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-sm-12 col-md-4">
                                                            <label for="altura">Altura</label>
                                                            <input type="number" class="form-control" name="altura" id="altura" min="0.01" step="0.01" required>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-4">
                                                            <label for="peso">Peso</label>
                                                            <input type="number" class="form-control" name="peso" id="peso" min="0.01" step="0.01" required>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-4">
                                                            <label for="fc">F.C</label>
                                                            <input type="number" class="form-control" name="fc" id="fc" min="0.01" step="0.01" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-sm-12 col-md-4">
                                                            <label for="fr">F.R</label>
                                                            <input type="number" class="form-control" name="fr" id="fr" min="0.01" step="0.01" required>
                                                        </div>
                                                        <div class="form-group col-sm-12 col-md-4">
                                                            <label for="imc">I.M.C</label>
                                                            <input type="number" class="form-control" name="imc" id="imc" min="0.01" step="0.01" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="diagnosticos">Diagnósticos</label>
                                                        <textarea name="diagnosticos" id="diagnosticos" class="form-control" rows="4" maxlength="4096" style="resize: none;" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="medicamentos">Medicamentos</label>
                                                        <textarea name="medicamentos" id="medicamentos" class="form-control" rows="4" maxlength="4096" style="resize: none;" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="indicaciones">Indicaciones</label>
                                                        <textarea name="indicaciones" id="indicaciones" class="form-control" rows="4" maxlength="4096" style="resize: none;" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-primary" name="consultas" id="consultas">Aceptar</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>                        
                                <!-- Fin modal para una nueva consulta -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered" id="tabla">
                                        <thead class="thead-dark">
                                            <tr class="text-center align-middle">
                                                <th class="align-middle">Fecha de consulta</th>
                                                <th class="align-middle">Padecimiento</th>
                                                <th class="align-middle">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $consulta="SELECT * FROM consultas WHERE id_paciente=$id ORDER BY fecha_consulta DESC";
                                                $result=$conexion->query($consulta);
                                                $contador=0;
                                                while ($row=$result->fetch_assoc()) {
                                                    $fecha=new DateTime($row['fecha_consulta']); //Convertir fecha a formato día/mes/año
                                                    $fecha=$fecha->format('d/m/Y');
                                            ?>
                                                <tr>
                                                    <td class="text-center align-middle"><?php echo $fecha; ?></td>
                                                    <td class="text-center align-middle text-truncate text-wrap"><?php echo $row['padecimiento_actual']; ?></td>
                                                    <td class="text-center align-middle">
                                                        <button class="btn btn-primary" data-toggle="modal" data-target="#consulta<?php echo $row['id_consulta']; ?>">Detalles</button>
                                                        <button class="btn btn-success">Imprimir resumen</button>
                                                    </td>
                                                </tr>
                                                <!-- Modal para consultas específicas -->
                                                <div class="modal fade" id="consulta<?php echo $row['id_consulta']; ?>" tabindex="-1" role="dialog" aria-labelledby="consulta<?php echo $row['id_consulta']; ?>" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="consulta">Consulta</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body mx-3 text-left">
                                                                <div class="form-group">
                                                                    <label for="padecimiento_actual">Padecimiento</label>
                                                                    <textarea name="padecimiento_actual" id="padecimiento_actual" class="form-control" rows="4" maxlength="4096" style="resize: none;" disabled><?php echo $row['padecimiento_actual']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="fecha_inicio">Fecha de inicio del padecimiento</label>
                                                                    <input type="date" name="fecha_inicio" class="form-control" id="fecha_inicio" disabled value="<?php echo $row['fecha_inicio']; ?>">
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-sm-12 col-md-4">
                                                                        <label for="altura">Altura</label>
                                                                        <input type="number" class="form-control" name="altura" id="altura" min="0.01" step="0.01" disabled value="<?php echo $row['altura']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-sm-12 col-md-4">
                                                                        <label for="peso">Peso</label>
                                                                        <input type="number" class="form-control" name="peso" id="peso" min="0.01" step="0.01" disabled value="<?php echo $row['peso']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-sm-12 col-md-4">
                                                                        <label for="fc">F.C</label>
                                                                        <input type="number" class="form-control" name="fc" id="fc" min="0.01" step="0.01" disabled value="<?php echo $row['fc']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-sm-12 col-md-4">
                                                                        <label for="fr">F.R</label>
                                                                        <input type="number" class="form-control" name="fr" id="fr" min="0.01" step="0.01" disabled value="<?php echo $row['fr']; ?>">
                                                                    </div>
                                                                    <div class="form-group col-sm-12 col-md-4">
                                                                        <label for="imc">I.M.C</label>
                                                                        <input type="number" class="form-control" name="imc" id="imc" min="0.01" step="0.01" disabled value="<?php echo $row['imc']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="diagnosticos">Diagnósticos</label>
                                                                    <textarea name="diagnosticos" id="diagnosticos" class="form-control" rows="4" maxlength="4096" style="resize: none;" disabled><?php echo $row['diagnosticos']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="medicamentos">Medicamentos</label>
                                                                    <textarea name="medicamentos" id="medicamentos" class="form-control" rows="4" maxlength="4096" style="resize: none;" disabled><?php echo $row['medicamentos']; ?></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="indicaciones">Indicaciones</label>
                                                                    <textarea name="indicaciones" id="indicaciones" class="form-control" rows="4" maxlength="4096" style="resize: none;" disabled><?php echo $row['indicaciones']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Fin modal para consultas específicas -->
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Consultas -->
                            <!-- Vacunación -->
                            <div class="tab-pane fade table-responsive shadow p-3 mb-4" style="max-height: 555px;" id="vacunacion" role="tabpanel" aria-labelledby="list-vacunacion">
                                <?php
                                    $query = "SELECT * FROM pacientes WHERE id_paciente= ".$id;
                                    $result = mysqli_query($conexion, $query);
                                    $row = mysqli_fetch_array($result);
                                ?>
                                <form method="post">
                                    <!-- BCG -->
                                    <p class="bcg alert">BCG</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <input type="date" name="bcg" class="form-control" id="bcg" value='<?php echo $row['bcg']; ?>'>
                                    </div>
                                    <!-- HEPATITIS A -->
                                    <p class="hepatitis_a alert mt-n3">HEPATITIS A</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="hepatitis_a1" class="form-control col-sm-12 col-md-6" id="hepatitis_a1" value='<?php echo $row['hepatitis_a1']; ?>'>
                                            <input type="date" name="hepatitis_a2" class="form-control col-sm-12 col-md-6" id="hepatitis_a2" value='<?php echo $row['hepatitis_a2']; ?>'>
                                        </div>
                                    </div>
                                    <!-- HEPATITIS B -->
                                    <p class="hepatitis_b alert mt-n3">HEPATITIS B</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="hepatitis_b1" class="form-control col-sm-12 col-md-4" id="hepatitis_b1" value="<?php echo $row['hepatitis_b1']; ?>">
                                            <input type="date" name="hepatitis_b2" class="form-control col-sm-12 col-md-4" id="hepatitis_b2" value="<?php echo $row['hepatitis_b2']; ?>">
                                            <input type="date" name="hepatitis_b3" class="form-control col-sm-12 col-md-4" id="hepatitis_b3" value="<?php echo $row['hepatitis_b3']; ?>">
                                        </div>
                                    </div>
                                    <!-- PENTAVALENTE ACELULAR -->
                                    <p class="pentavalente alert mt-n3">PENTAVALENTE ACELULAR</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="pentavalente_1" class="form-control col-sm-12 col-md-4" id="pentavalente_1" value='<?php echo $row['pentavalente_1']; ?>'>
                                            <input type="date" name="pentavalente_2" class="form-control col-sm-12 col-md-4" id="pentavalente_2" value='<?php echo $row['pentavalente_2']; ?>'>
                                            <input type="date" name="pentavalente_3" class="form-control col-sm-12 col-md-4" id="pentavalente_3" value='<?php echo $row['pentavalente_3']; ?>'>
                                        </div>
                                    </div>
                                    <!-- DPT -->
                                    <p class="dpt alert mt-n3">DPT</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="dpt" class="form-control" id="dpt" value='<?php echo $row['dpt']; ?>'>
                                        </div>
                                    </div>
                                    <!-- ROTAVIRUS -->
                                    <p class="rotavirus alert mt-n3">ROTAVIRUS</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="rotavirus_1" class="form-control col-sm-12 col-md-4" id="rotavirus_1" value='<?php echo $row['rotavirus_1']; ?>'>
                                            <input type="date" name="rotavirus_2" class="form-control col-sm-12 col-md-4" id="rotavirus_2" value='<?php echo $row['rotavirus_2']; ?>'>
                                            <input type="date" name="rotavirus_3" class="form-control col-sm-12 col-md-4" id="rotavirus_3" value='<?php echo $row['rotavirus_3']; ?>'>
                                        </div>
                                    </div>
                                    <!-- NEUMOCOCICA CONJUGADA -->
                                    <p class="neumococica alert mt-n3">NEUMOCOCICA CONJUGADA</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="neumococica_1" class="form-control col-sm-12 col-md-3" id="neumococica_1" value='<?php echo $row['neumococica_1']; ?>'>
                                            <input type="date" name="neumococica_2" class="form-control col-sm-12 col-md-3" id="neumococica_2" value='<?php echo $row['neumococica_2']; ?>'>
                                            <input type="date" name="neumococica_3" class="form-control col-sm-12 col-md-3" id="neumococica_3" value='<?php echo $row['neumococica_3']; ?>'>
                                            <input type="date" name="neumococica_4" class="form-control col-sm-12 col-md-3" id="neumococica_4" value='<?php echo $row['neumococica_4']; ?>'>
                                        </div>
                                    </div>
                                    <!-- MENINGOCOCO -->
                                    <p class="meningococo alert mt-n3">MENINGOCOCO</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="meningococo_1" class="form-control col-sm-12 col-md-6" id="meningococo_1" value='<?php echo $row['meningococo_1']; ?>'>
                                            <input type="date" name="meningococo_2" class="form-control col-sm-12 col-md-6" id="meningococo_2" value='<?php echo $row['meningococo_2']; ?>'>
                                        </div>
                                    </div>
                                    <!-- VARICELA -->
                                    <p class="varicela alert mt-n3">VARICELA</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="varicela_1" class="form-control col-sm-12 col-md-6" id="varicela_1" value='<?php echo $row['varicela_1']; ?>'>
                                            <input type="date" name="varicela_2" class="form-control col-sm-12 col-md-6" id="varicela_2" value='<?php echo $row['varicela_2']; ?>'>
                                        </div>
                                    </div>
                                    <!-- INFLUENZA -->
                                    <p class="influenza alert mt-n3">INFLUENZA</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="influenza_1" class="form-control col-sm-12 col-md-6" id="influenza_1" value='<?php echo $row['influenza_1']; ?>'>
                                            <input type="date" name="influenza_2" class="form-control col-sm-12 col-md-6" id="influenza_2" value='<?php echo $row['influenza_2']; ?>'>
                                        </div>
                                    </div>
                                    <!-- REFUERZO INFLUENZA -->
                                    <p class="refuerzo_influenza alert mt-n3">REFUERZO INFLUENZA</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="refuerzo_influenza" class="form-control" id="refuerzo_influenza" value='<?php echo $row['refuerzo_influenza']; ?>'>
                                        </div>
                                    </div>
                                    <!-- SRP -->
                                    <p class="srp alert mt-n3">SRP</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="srp_1" class="form-control col-sm-12 col-md-6" id="srp_1" value='<?php echo $row['srp_1']; ?>'>
                                            <input type="date" name="srp_2" class="form-control col-sm-12 col-md-6" id="srp_2" value='<?php echo $row['srp_2']; ?>'>
                                        </div>
                                    </div>
                                    <!-- SABIN (REFUERZO) -->
                                    <p class="sabin alert mt-n3">SABIN (REFUERZO)</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="sabin" class="form-control" id="sabin" value='<?php echo $row['sabin']; ?>'>
                                        </div>
                                    </div>
                                    <!-- TDAP -->
                                    <p class="tdap alert mt-n3">TDAP</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="tdap" class="form-control" id="tdap" value='<?php echo $row['tdap']; ?>'>
                                        </div>
                                    </div>
                                    <!-- SARAMPIÓN Y RUBEÓLA -->
                                    <p class="sarampion alert mt-n3">SARAMPIÓN Y RUBEÓLA</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="sarampion" class="form-control" id="sarampion" value='<?php echo $row['sarampion']; ?>'>
                                        </div>
                                    </div>
                                    <!-- VPH -->
                                    <p class="vph alert mt-n3">VPH</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                            <input type="date" name="vph" class="form-control" id="vph" value='<?php echo $row['vph']; ?>'>
                                        </div>
                                    </div>
                                    <!-- OTRAS -->
                                    <p class="bg-dark alert mt-n3">Otras vacunas</p>
                                    <div class="form-group" style="margin-bottom: 33px !important;">
                                        <div class="form-row p-1">
                                        <textarea name="otras" id="otras" class="form-control" rows="4" maxlength="4096" style="resize: none;"><?php echo $row['otras']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" name="vacunacion" id="vacunacion" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- Vacunación -->
                            <!-- Informe médico -->
                            <div class="tab-pane fade" id="informe" role="tabpanel" aria-labelledby="list-informe">
                                <table class="table table-striped table-hover table-bordered">
                                    <thead class="thead-dark">
                                        <tr class="text-center align-middle">
                                            <th>Día</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <tr>
                                                <td class="text-center align-middle"></td>
                                                <td class="text-center align-middle">
                                                    <button class="btn btn-outline-primary" data-toggle="modal" data-target="">Informe médico</button>
                                                    <!-- Encriptaremos el id del usuario a la hora de generar los pdf -->
                                                    <a type="button" name="generaPDF" href="generarpdf.php?id=<?=base64_encode($id);?>" target="_blank" class="btn btn-secondary">Generar PDF</a>
                                                </td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Informe médico -->
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // Utilizaremos la url encriptada para poder recargar pagina //
                $ubicacion="pac.php?id=".$_GET['id'];
            ////////////////////////////////////////////////
                }
                if (isset($_POST['informacion_relevante'])){ //Información relevante
                    $antecedentes_importantes=$_POST['antecedentes_importantes'];
                    $alergias=$_POST['alergias'];
                    $quien_refiere_al_paciente=$_POST['quien_refiere_al_paciente'];
                    $motivo_consulta=$_POST['motivo_consulta'];
                    $observaciones=$_POST['observaciones'];
                    $consulta = "UPDATE pacientes SET antecedentes_importantes='$antecedentes_importantes', alergias='$alergias', quien_refiere_al_paciente='$quien_refiere_al_paciente', motivo_consulta='$motivo_consulta', observaciones='$observaciones' WHERE id_paciente=$id";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Hecho",
                                text: "Información relevante actualizada con éxito!",
                                type: "success"
                            }).then(()=>{
                                location.assign("<?=$ubicacion;?>");
                            });
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['informacion_pediatrica'])){ //Información pediátrica
                    $nacimiento_por=$_POST['nacimiento_por'];
                    $numero_embarazo=$_POST['numero_embarazo'];
                    $peso_nacer=$_POST['peso_nacer'];
                    $semanas_gestacion=$_POST['semanas_gestacion'];
                    $lactancia=$_POST['lactancia'];
                    $talla_nacer=$_POST['talla_nacer'];
                    $perimetro_cefalico=$_POST['perimetro_cefalico'];
                    $alimentos_solidos=$_POST['alimentos_solidos'];
                    if ($alimentos_solidos==""){
                        $alimentos_solidos=0;
                    }
                    $tamiz_metabolico=$_POST['tamiz_metabolico'];
                    if ($tamiz_metabolico==""){
                        $tamiz_metabolico=0;
                    }
                    $tamiz_cardiologico=$_POST['tamiz_cardiologico'];
                    if ($tamiz_cardiologico==""){
                        $tamiz_cardiologico=0;
                    }
                    $hospitalizado_nacer=$_POST['hospitalizado_nacer'];
                    if ($hospitalizado_nacer==""){
                        $hospitalizado_nacer=0;
                    }
                    $tamiz_auditivo=$_POST['tamiz_auditivo'];
                    if ($tamiz_auditivo==""){
                        $tamiz_auditivo=0;
                    }
                    $consulta = "UPDATE pacientes SET nacimiento_por='$nacimiento_por', numero_embarazo='$numero_embarazo', peso_nacer='$peso_nacer', semanas_gestacion='$semanas_gestacion', lactancia='$lactancia', talla_nacer='$talla_nacer', perimetro_cefalico='$perimetro_cefalico', alimentos_solidos='$alimentos_solidos', tamiz_metabolico='$tamiz_metabolico', tamiz_cardiologico='$tamiz_cardiologico', hospitalizado_nacer='$hospitalizado_nacer', tamiz_auditivo='$tamiz_auditivo' WHERE id_paciente=$id";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Hecho",
                                text: "Información pediátrica actualizada con éxito!",
                                type: "success"
                            }).then(()=>{
                                location.assign("<?=$ubicacion;?>");
                            });
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['antecedentes_familiares'])){ //Antecedentes familiares
                    $hijos_fallecidos=$_POST['hijos_fallecidos'];
                    if ($hijos_fallecidos==""){
                        $hijos_fallecidos=0;
                    }
                    $gestaciones=$_POST['gestaciones'];
                    if ($gestaciones==""){
                        $gestaciones=0;
                    }
                    $diabetes=$_POST['diabetes'];
                    if ($diabetes==""){
                        $diabetes=0;
                    }
                    $cancer=$_POST['cancer'];
                    if ($cancer==""){
                        $cancer=0;
                    }
                    $tuberculosis=$_POST['tuberculosis'];
                    if ($tuberculosis==""){
                        $tuberculosis=0;
                    }
                    $hipertension=$_POST['hipertension'];
                    if ($hipertension==""){
                        $hipertension=0;
                    }
                    $convulsiones=$_POST['convulsiones'];
                    if ($convulsiones==""){
                        $convulsiones=0;
                    }
                    $enfermedad_sangre=$_POST['enfermedad_sangre'];
                    if ($enfermedad_sangre==""){
                        $enfermedad_sangre=0;
                    }
                    $consulta = "UPDATE pacientes SET hijos_fallecidos='$hijos_fallecidos', gestaciones='$gestaciones', diabetes='$diabetes', cancer='$cancer', tuberculosis='$tuberculosis', hipertension='$hipertension', convulsiones='$convulsiones', enfermedad_sangre='$enfermedad_sangre' WHERE id_paciente=$id";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Hecho",
                                text: "Antecedentes familiares actualizados con éxito!",
                                type: "success"
                            }).then(()=>{
                                location.assign("<?=$ubicacion;?>");
                            });
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['personales_patologicos'])){ //A. personales patológicos
                    $ingesta_medicamentos=$_POST['ingesta_medicamentos'];
                    if ($ingesta_medicamentos==""){
                        $ingesta_medicamentos=0;
                    }
                    $cirugias=$_POST['cirugias'];
                    if ($cirugias==""){
                        $cirugias=0;
                    }
                    $transfusiones=$_POST['transfusiones'];
                    if ($transfusiones==""){
                        $transfusiones=0;
                    }
                    $enfermedades_importantes=$_POST['enfermedades_importantes'];
                    $consulta = "UPDATE pacientes SET ingesta_medicamentos='$ingesta_medicamentos', cirugias='$cirugias', transfusiones='$transfusiones', enfermedades_importantes='$enfermedades_importantes' WHERE id_paciente=$id";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Hecho",
                                text: "Antecedentes patológicos actualizados con éxito!",
                                type: "success"
                            }).then(()=>{
                                location.assign("<?=$ubicacion;?>");
                            });
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['personales_no_patologicos'])){ //A. personales no patológicos
                    $denticion=$_POST['denticion'];
                    if ($denticion==""){
                        $denticion=0;
                    }
                    $realiza_ejercicio=$_POST['realiza_ejercicio'];
                    if ($realiza_ejercicio==""){
                        $realiza_ejercicio=0;
                    }
                    $desarrollo_psicomotriz=$_POST['desarrollo_psicomotriz'];
                    if ($desarrollo_psicomotriz==""){
                        $desarrollo_psicomotriz=0;
                    }
                    $consulta = "UPDATE pacientes SET denticion='$denticion', realiza_ejercicio='$realiza_ejercicio', desarrollo_psicomotriz='$desarrollo_psicomotriz' WHERE id_paciente=$id";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Hecho",
                                text: "Antecedentes no patológicos actualizados con éxito!",
                                type: "success"
                            }).then(()=>{
                                location.assign("<?=$ubicacion;?>");
                            });
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['interrogatorio_boton'])){ //Interrogatorio
                    $interrogatorio=$_POST['interrogatorio'];
                    $consulta = "UPDATE pacientes SET interrogatorio='$interrogatorio' WHERE id_paciente=$id";
                    if ($conexion->query($consulta)==true) {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Hecho",
                                text: "Interrogatorio actualizado con éxito!",
                                type: "success"
                            }).then(()=>{
                                location.assign("<?=$ubicacion;?>");
                            });
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['consultas'])){ //Consultas
                    $padecimiento_actual=$_POST['padecimiento_actual'];
                    $fecha_inicio=$_POST['fecha_inicio'];
                    $altura=$_POST['altura'];
                    $peso=$_POST['peso'];
                    $fc=$_POST['fc'];
                    $fr=$_POST['fr'];
                    $imc=$_POST['imc'];
                    $diagnosticos=$_POST['diagnosticos'];
                    $medicamentos=$_POST['medicamentos'];
                    $indicaciones=$_POST['indicaciones'];
                    $id_paciente=$id;
                    date_default_timezone_set('UTC'); //Mostrar fecha actual
                    $fecha_consulta=date("Y-m-d");
                    $consulta = "INSERT INTO consultas (padecimiento_actual, fecha_inicio, altura, peso, fc, fr, imc, diagnosticos, medicamentos, indicaciones, fecha_consulta, id_paciente) VALUES ('".$padecimiento_actual."', '".$fecha_inicio."', '".$altura."', '".$peso."', '".$fc."', '".$fr."', '".$imc."', '".$diagnosticos."', '".$medicamentos."', '".$indicaciones."', '".$fecha_consulta."', '".$id_paciente."')";
                    if ($conexion->query($consulta)==true) {
                        $ubicacion="paciente.php?id=".$id;
                    ?>
                        <script type="text/javascript">
                            window.location.href="<?php echo $ubicacion; ?>";
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
                else if (isset($_POST['vacunacion'])){ //Vacunación
                    $bcg=$_POST['bcg'];
                    if ($bcg==""){
                        $bcg=" ";
                    }
                    $hepatitis_a1=$_POST['hepatitis_a1'];
                    if ($hepatitis_a1==""){
                        $hepatitis_a1=" ";
                    }
                    $hepatitis_a2=$_POST['hepatitis_a2'];
                    if ($hepatitis_a2==""){
                        $hepatitis_a2=" ";
                    }
                    $hepatitis_b1=$_POST['hepatitis_b1'];
                    if ($hepatitis_b1==""){
                        $hepatitis_b1=" ";
                    }
                    $hepatitis_b2=$_POST['hepatitis_b2'];
                    if ($hepatitis_b2==""){
                        $hepatitis_b2=" ";
                    }
                    $hepatitis_b3=$_POST['hepatitis_b3'];
                    if ($hepatitis_b3==""){
                        $hepatitis_b3=" ";
                    }
                    $pentavalente_1=$_POST['pentavalente_1'];
                    if ($pentavalente_1==""){
                        $pentavalente_1=" ";
                    }
                    $pentavalente_2=$_POST['pentavalente_2'];
                    if ($pentavalente_2==""){
                        $pentavalente_2=" ";
                    }
                    $pentavalente_3=$_POST['pentavalente_3'];
                    if ($pentavalente_3==""){
                        $pentavalente_3=" ";
                    }
                    $dpt=$_POST['dpt'];
                    if ($dpt==""){
                        $dpt=" ";
                    }
                    $rotavirus_1=$_POST['rotavirus_1'];
                    if ($rotavirus_1==""){
                        $rotavirus_1=" ";
                    }
                    $rotavirus_2=$_POST['rotavirus_2'];
                    if ($rotavirus_2==""){
                        $rotavirus_2=" ";
                    }
                    $rotavirus_3=$_POST['rotavirus_3'];
                    if ($rotavirus_3==""){
                        $rotavirus_3=" ";
                    }
                    $neumococica_1=$_POST['neumococica_1'];
                    if ($neumococica_1==""){
                        $neumococica_1=" ";
                    }
                    $neumococica_2=$_POST['neumococica_2'];
                    if ($neumococica_2==""){
                        $neumococica_2=" ";
                    }
                    $neumococica_3=$_POST['neumococica_3'];
                    if ($neumococica_3==""){
                        $neumococica_3=" ";
                    }
                    $neumococica_4=$_POST['neumococica_4'];
                    if ($neumococica_4==""){
                        $neumococica_4=" ";
                    }
                    $meningococo_1=$_POST['meningococo_1'];
                    if ($meningococo_1==""){
                        $meningococo_1=" ";
                    }
                    $meningococo_2=$_POST['meningococo_2'];
                    if ($meningococo_2==""){
                        $meningococo_2=" ";
                    }
                    $varicela_1=$_POST['varicela_1'];
                    if ($varicela_1==""){
                        $varicela_1=" ";
                    }
                    $varicela_2=$_POST['varicela_2'];
                    if ($varicela_2==""){
                        $varicela_2=" ";
                    }
                    $influenza_1=$_POST['influenza_1'];
                    if ($influenza_1==""){
                        $influenza_1=" ";
                    }
                    $influenza_2=$_POST['influenza_2'];
                    if ($influenza_2==""){
                        $influenza_2=" ";
                    }
                    $refuerzo_influenza=$_POST['refuerzo_influenza'];
                    if ($refuerzo_influenza==""){
                        $refuerzo_influenza=" ";
                    }
                    $srp_1=$_POST['srp_1'];
                    if ($srp_1==""){
                        $srp_1=" ";
                    }
                    $srp_2=$_POST['srp_2'];
                    if ($srp_2==""){
                        $srp_2=" ";
                    }
                    $sabin=$_POST['sabin'];
                    if ($sabin==""){
                        $sabin=" ";
                    }
                    $tdap=$_POST['tdap'];
                    if ($tdap==""){
                        $tdap=" ";
                    }
                    $sarampion=$_POST['sarampion'];
                    if ($sarampion==""){
                        $sarampion=" ";
                    }
                    $vph=$_POST['vph'];
                    if ($vph==""){
                        $vph=" ";
                    }
                    $otras=$_POST['otras'];
                    if ($otras==""){
                        $otras=" ";
                    }
                    $consulta = "UPDATE pacientes SET bcg='$bcg', hepatitis_a1='$hepatitis_a1', hepatitis_a2='$hepatitis_a2', hepatitis_b1='$hepatitis_b1', hepatitis_b2='$hepatitis_b2', hepatitis_b3='$hepatitis_b3', pentavalente_1='$pentavalente_1', pentavalente_2='$pentavalente_2', pentavalente_3='$pentavalente_3', dpt='$dpt', rotavirus_1='$rotavirus_1', rotavirus_2='$rotavirus_2', rotavirus_3='$rotavirus_3', neumococica_1='$neumococica_1', neumococica_2='$neumococica_2', neumococica_3='$neumococica_3', neumococica_4='$neumococica_4', meningococo_1='$meningococo_1', meningococo_2='$meningococo_2', varicela_1='$varicela_1', varicela_2='$varicela_2', influenza_1='$influenza_1', influenza_2='$influenza_2', refuerzo_influenza='$refuerzo_influenza', srp_1='$srp_1', srp_2='$srp_2', sabin='$sabin', tdap='$tdap', sarampion='$sarampion', vph='$vph', otras='$otras' WHERE id_paciente=$id";
                    echo $consulta;
                    if ($conexion->query($consulta)==true) {
                        // $ubicacion="paciente.php?id=".$id;
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                title: "Hecho",
                                text: "Información de vacunación actualizada con éxito!",
                                type: "success"
                            }).then(()=>{
                                location.assign("<?=$ubicacion;?>");
                            });
                        </script>
                    <?php
                        }
                    else {
                    ?>
                        <script type="text/javascript">
                            Swal.fire({
                                type: 'error',
                                title: 'Error al actualizar',
                                html: '<img class="img-fluid shadow p-3 mb-2 bg-white rounded" width="250px" src="../assets/gato.jpg">',
                                showConfirmButton: false,
                                timer: 3000
                            });
                        </script>
                    <?php
                    }
                }
            ?>
            <!-- //////////////////////////////////////////////////////////////////////////////// -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>