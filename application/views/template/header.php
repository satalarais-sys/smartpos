<!DOCTYPE html>
<html>
<head>
    <title><?= isset($title) ? $title : 'SmartPOS' ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@2.4.18/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@2.4.18/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<header class="main-header">
    <a href="#" class="logo">SmartPOS</a>
</header>

<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        </ul>
    </section>
</aside>

<div class="content-wrapper">
