<?php session_start();?>
<?php include './config.php'?>
<?php include './model/SQLQuery.php'?>
<?php include './model/AuthDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['account_type'] == 'bac_si') {
            $user = AuthDB::DoctorLogin($_POST['email'], $_POST['password']);
            if (count($user) > 0) {
                $_SESSION['loai_tai_khoan'] = 'bac_si';
                $_SESSION['ma_bac_si'] = $user[0]['ma_bac_si'];
                $_SESSION['ten_bac_si'] = $user[0]['ten_bac_si'];
                $_SESSION['email'] = $user[0]['email'];
                header('Location: ' . URL_ROOT . '/admin/dashboard/');
            }
        } else if ($_POST['account_type'] == 'vien_chuc') {
            $user = AuthDB::OfficerLogin($_POST['email'], $_POST['password']);
            if (count($user) > 0) {
                $_SESSION['loai_tai_khoan'] = 'vien_chuc';
                $_SESSION['ma_vien_chuc'] = $user[0]['ma_vien_chuc'];
                $_SESSION['ten_vien_chuc'] = $user[0]['ten_vien_chuc'];
                $_SESSION['email'] = $user[0]['email'];
                header('Location: ' . URL_ROOT . '/admin/health-exam/');
            }
        } else if ($_POST['account_type'] == 'admin') {
            $user = AuthDB::AdminLogin($_POST['email'], $_POST['password']);
            if (count($user) > 0) {
                $_SESSION['loai_tai_khoan'] = 'admin';
                $_SESSION['admin_id'] = $user[0]['admin_id'];
                $_SESSION['admin_name'] = $user[0]['admin_name'];
                $_SESSION['email'] = $user[0]['email'];
                header('Location: ' . URL_ROOT . '/admin/dashboard/');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./template/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="./template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./template/admin/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1"><b>Đăng nhập</b></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Đăng nhập để bắt đầu phiên kàn việc</p>
                <form method="POST">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="yourmail@gmail.com">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <select name="account_type" class="form-control">
                            <option value="vien_chuc">Viên chức</option>
                            <option value="bac_si">Bác sĩ</option>
                            <option value="admin">Quản trị viên</option>
                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user-shield"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success btn-block">Đăng nhập</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="./template/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="./template/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="./template/admin/dist/js/adminlte.min.js"></script>
</body>

</html>