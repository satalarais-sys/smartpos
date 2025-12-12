<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $title ?? 'SmartPOS' ?></title>

  <!-- AdminLTE -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css') ?>">

  <!-- jQuery -->
  <script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js') ?>"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
  </ul>

  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a href="<?= base_url('auth/logout') ?>" class="nav-link">
              <i class="fas fa-sign-out-alt"></i> Logout
          </a>
      </li>
  </ul>
</nav>
