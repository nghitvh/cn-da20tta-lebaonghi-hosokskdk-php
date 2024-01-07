<?php include '../header.php'?>
<?php include '../../model/DoctorDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        DoctorDB::AddDoctor($_POST['ten_bac_si'], '', $_POST['email']);
        header('Location: ' . URL_ROOT . '/admin/doctor/');
    }
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/doctor/">Bác sĩ</a></li>
                <li class="breadcrumb-item active">Thêm bác sĩ</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form class="row" method="POST">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên bác sĩ</label>
                                <input type="text" name="ten_bac_si" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary"><i class="fas fa-save"></i> Lưu</button>
                            <a href="<?=URL_ROOT . '/admin/doctor/'?>" class="btn btn-danger"><i class="fas fa-ban"></i> Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>