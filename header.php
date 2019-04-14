<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <!-- Metadata -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Aplikasi ini dibuat oleh Muhammad Hamdi dan Afif Maulana Isman">
  <meta name="keywords" content="Aplikasi, PBD, Muhammad Hamdi, Afif Maulana Isman, Afif, Hamdi, LPG, Gas, Prof Surya, Web Apps">
  <meta name="author" content="Muhammad Hamdi & Afif Maulana Isman">
  <!-- END Metadata -->
  <!-- Title -->
  <title>Aplikasi LPG - Perancangan Basis Data</title>
  <!-- END Title -->
  <!-- Icon -->
  <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
  <!-- END Icon -->
  <!-- Fonts -->
  <link href="app-assets/fonts/Montserrat.css" rel="stylesheet">
  <!-- END Fonts -->
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
  <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" onload="startTime()">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="index.php">
              <img class="brand-logo" alt="stack admin logo" src="app-assets/images/logo/stack-logo-light.png">
              <h2 class="brand-text">LPG</h2>
            </a>
          </li>
          <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="dropdown dropdown-user nav-item">
              <a class="navbar-brand nav-link dropdown-user-link" href="#" >
                <span class="avatar avatar-online hidden">
                  <img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                <span class="user-name" id="jam"></span>
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="navbar-brand nav-link dropdown-user-link" disabled href="#">
                <span class="avatar avatar-online hidden">
                  <img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span>
                <span class="user-name"><?php echo date('D, d M Y', time()); ?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
<div class="main-menu-content">
  <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class=" navigation-header">
      <span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
      data-original-title="General"></i>
    </li>
    <li class=" nav-item"><a href="index.php"><i class="fa fa-home"></i><span class="menu-item" data-i18n="">Dashboard</span></a>
    </li>
    <li class=" nav-item"><a href=""><i class="fa fa-exchange"></i><span class="menu-title" data-i18n="">Transaksi</span></a>
      <ul class="menu-content">
        <li><a id="tt" class="menu-item"><i class="fa fa-plus"></i>Tambah Tabung</a></li>
        <li><a id="rs" class="menu-item"><i class="fa fa-download"></i>Restock LPG</a></li>
        <li><a id="r"  class="menu-item"><i class="fa fa-level-down"></i>Retur LPG</a></li>
        <li><a id="jt" class="menu-item"><i class="fa fa-minus"></i>Jual Tabung</a></li>
        <li><a id="jl" class="menu-item"><i class="fa fa-upload"></i>Jual LPG</a></li>
      </ul>
    </li>
    <li class=" nav-item"><a href="pembeli.php" id="pembeli"><i class="fa fa-users"></i><span class="menu-item" data-i18n="">Pembeli</span></a>
      
    </li>
    <li class=" nav-item"><a id="rpt"><i class="fa fa-file-text"></i><span class="menu-item" data-i18n="">Report</span></a>
      
    </li>
  </ul>
</div>
</div>
<div id="mein">
<a id="tt2" data-toggle="modal" href="#tambahTabung" hidden>Open Modal</a>
<a id="rs2" data-toggle="modal" href="#restockGas" hidden>Open Modal</a>
<a id="r2" data-toggle="modal" href="#returLPG" hidden>Open Modal</a>
<a id="jt2" data-toggle="modal" href="#jualTabung" hidden>Open Modal</a>
<a id="jl2" data-toggle="modal" href="#jualGas" hidden>Open Modal</a>
<a id="rpt2" data-toggle="modal" href="#inputReport" hidden>Open Modal</a>
<button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success" hidden>Success</button>
<button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success-2" hidden>Success</button>
<button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success-3" hidden>Success</button>
<button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success-4" hidden>Success</button>
<button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-success-5" hidden>Success</button>
<button type="button" class="btn btn-lg btn-block btn-outline-success mb-2" id="type-failed-1" hidden>Success</button>
