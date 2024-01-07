<?php session_start();?>
<?php ob_start();?>
<?php include '../../config.php'?>
<?php include '../../Helper.php'?>
<?php include '../../model/SQLQuery.php';?>
<?php
    if (!isset($_SESSION['loai_tai_khoan'])) {
        header('Location: ' . URL_ROOT . '/login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản trị viên</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../template/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../template/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?=URL_ROOT?>/login.php" class="brand-link text-center">
                <span class="brand-text font-weight-light">Khám sức khoẻ</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?=URL_ROOT?>/assets/img/user.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <?php if ($_SESSION['loai_tai_khoan'] == 'admin') {?>
                        <a href="#" class="d-block"><?=$_SESSION['admin_name']?></a>
                        <?php } else if ($_SESSION['loai_tai_khoan'] == 'bac_si') {?>
                        <a href="#" class="d-block"><?=$_SESSION['ten_bac_si']?></a>
                        <?php } else if ($_SESSION['loai_tai_khoan'] == 'vien_chuc') {?>
                        <a href="#" class="d-block"><?=$_SESSION['ten_vien_chuc']?></a>
                        <?php }?>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Tìm kiếm" aria-label="Tìm kiếm">
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
                        <?php if ($_SESSION['loai_tai_khoan'] != 'vien_chuc') {?>
                        <li class="nav-item">
                            <a href="<?=URL_ROOT . '/admin/dashboard/'?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Tổng quan</p>
                            </a>
                        </li>
                        <?php }?>
<?php if ($_SESSION['loai_tai_khoan'] == 'admin') {?>
                        <li class="nav-item">
                            <a href="<?=URL_ROOT . '/admin/doctor/'?>" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>Bác sĩ</p>
                            </a>
                        </li>
                        <?php }?>
<?php if ($_SESSION['loai_tai_khoan'] != 'vien_chuc') {?>
                        <li class="nav-item">
                            <a href="<?=URL_ROOT . '/admin/officer/'?>" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Viên chức</p>
                            </a>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <a href="<?=URL_ROOT . '/admin/health-exam/'?>" class="nav-link">
                                <i class="nav-icon fas fa-id-badge"></i>
                                <p>Hồ sơ sức khoẻ</p>
                            </a>
                        </li>
                        <?php if ($_SESSION['loai_tai_khoan'] == 'admin') {?>
                        <li class="nav-item">
                            <a href="<?=URL_ROOT . '/admin/notification/'?>" class="nav-link">
                                <i class="nav-icon fas fa-comment"></i>
                                <p>Thông báo</p>
                            </a>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <a href="<?=URL_ROOT . '/login.php'?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Đăng xuất</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>