<?php include '../header.php'?>
<?php include '../../model/OfficerDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        OfficerDB::UpdateOfficer($_POST['ma_vien_chuc'], $_POST['ten_vien_chuc'], $_POST['gioi_tinh'] == 'Nam' ? '0' : '1', $_POST['cccd_ho_chieu'],
            $_POST['ngay_cap'], $_POST['ho_khau_thuong_tru'], $_POST['cho_o_hien_tai'], $_POST['chuc_vu_hien_tai'],
            $_POST['noi_cong_tac'], $_POST['email']);
        header('Location: ' . URL_ROOT . '/admin/officer/');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $officerData = OfficerDB::GetDataByID($_GET['id']);
    }
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/officer/">Viên chức</a></li>
                <li class="breadcrumb-item active">Cập nhật viên chức</li>
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
                                <label>Mã viên chức</label>
                                <input type="text" name="ma_vien_chuc" class="form-control" value="<?=$officerData['ma_vien_chuc']?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="text" name="ten_vien_chuc" class="form-control" value="<?=$officerData['ten_vien_chuc']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select class="form-control" name="gioi_tinh">
                                    <option value="Nam" <?=$officerData['gioi_tinh'] == '0' ? 'selected' : ''?>>Nam</option>
                                    <option value="Nữ" <?=$officerData['gioi_tinh'] == '1' ? 'selected' : ''?>>Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CCCD / Hộ chiếu</label>
                                <input type="text" name="cccd_ho_chieu" class="form-control" value="<?=$officerData['cccd_ho_chieu']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ngày cấp</label>
                                <input type="date" name="ngay_cap" class="form-control" value="<?=$officerData['ngay_cap']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hộ khẩu thường trú</label>
                                <input type="text" name="ho_khau_thuong_tru" class="form-control" value="<?=$officerData['ho_khau_thuong_tru']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chổ ở hiện tại</label>
                                <input type="text" name="cho_o_hien_tai" class="form-control" value="<?=$officerData['cho_o_hien_tai']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức vụ hiện tại</label>
                                <input type="text" name="chuc_vu_hien_tai" class="form-control" value="<?=$officerData['chuc_vu_hien_tai']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nơi công tác</label>
                                <input type="text" name="noi_cong_tac" class="form-control" value="<?=$officerData['noi_cong_tac']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?=$officerData['email']?>" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary"><i class="fas fa-save"></i> Lưu</button>
                            <a href="<?=URL_ROOT . '/admin/officer/'?>" class="btn btn-danger"><i class="fas fa-ban"></i> Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>