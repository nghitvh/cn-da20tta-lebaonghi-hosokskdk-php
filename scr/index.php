<?php session_start();?>
<?php ob_start();?>
<?php include './config.php'?>
<?php include './Helper.php'?>
<?php include './model/SQLQuery.php';?>
<?php include './model/NotificationDB.php';?>
<?php $notifications = NotificationDB::GetList();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hồ sơ khám sức khỏe định kỳ cho viên chức trường ĐHTV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="jumbotron text-white text-center" style="margin-bottom: 0; background: center / cover no-repeat url('<?=URL_ROOT . '/assets/img/benh-vien-tvu.jpg'?>')">
        <h1>Đề tài</h1>
        <p><b>Xây dựng ứng dụng quản lý Hồ sơ khám sức khỏe định kỳ cho viên chức trường ĐHTV</b></p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="<?=URL_ROOT?>">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="timhieuthem.php">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lienhe.php">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Đăng nhập</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-5">
                <img style="width: 100%;" src="<?=URL_ROOT . '/assets/img/benh-vien-tvu-2.jpg'?>" alt="">
            </div>
            <div class="col-sm-7">
                <h2>Thông báo</h2>
                <?php foreach ($notifications as $d) {?>
                <div class="card mb-3">
                    <div class="card-header bg-info text-white"><?=$d['ten_thong_bao']?></div>
                    <div class="card-body">
                        <div>
                            <?=$d['noi_dung']?>
                        </div>
                        <div>
                            <span><b>File đính kèm: </b></span>
                            <?php
                                $imageLists = [];
                                    if (unserialize($d['file_dinh_kem'])) {
                                        $imageLists = unserialize($d['file_dinh_kem']);
                                    } else {
                                        $imageLists = [];
                                    }
                                ?>
<?php for ($i = 0; $i < count($imageLists); $i++) {?>
                            <div>
                                <a href="<?=URL_ROOT . $imageLists[$i]?>" target="_blank">
                                    <?=basename($imageLists[$i])?>
                                </a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>© Tất cả quyền được bảo lưu.</p>
    </div>

</body>

</html>
<?php ob_end_flush();?>