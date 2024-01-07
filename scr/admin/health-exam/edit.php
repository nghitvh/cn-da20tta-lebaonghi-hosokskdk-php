<?php include '../header.php'?>
<?php include '../../model/OfficerDB.php'?>
<?php include '../../model/HealthExamDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        HealthExamDB::UpdateHealthExam($_POST['ma_kham_suc_khoe'], $_POST['tien_su_benh'], $_POST['chieu_cao'], $_POST['can_nang'], $_POST['bmi'], $_POST['tuan_hoan'], $_POST['ho_hap'], $_POST['tieu_hoa'],
            $_POST['than'], $_POST['noi_tiet'], $_POST['xuong'], $_POST['than_kinh'], $_POST['ngoai_khoa'], $_POST['san_khoa'], $_POST['mat_trai'], $_POST['mat_phai'], $_POST['mat_trai_co_kinh'], $_POST['mat_phai_co_kinh'],
            $_POST['benh_mat'], $_POST['tai_mui_hong'], $_POST['tai_trai'], $_POST['tai_phai'], $_POST['benh_ve_tai'], $_POST['rang_ham_mat'], $_POST['ham_tren'], $_POST['ham_duoi'], $_POST['benh_ve_rang'],
            $_POST['da_lieu'], $_POST['ngay_kham'], $_SESSION['ma_bac_si'], $_POST['ma_vien_chuc']);

        header('Location: ' . URL_ROOT . '/admin/health-exam/');
    }
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $healthData = HealthExamDB::GetDataByID($_GET['id']);
        $officerData = OfficerDB::GetList();
    }
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/health-exam/">Hồ sơ khám sức khoẻ</a></li>
                <li class="breadcrumb-item active">Cập nhật kết quả khám sức khoẻ</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form class="row" method="POST">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mã khám sức khoẻ</label>
                                <input type="text" name="ma_kham_suc_khoe" class="form-control" value="<?=$healthData['ma_kham_suc_khoe']?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Chiều cao</label>
                                <input type="text" name="chieu_cao" class="form-control" value="<?=$healthData['chieu_cao']?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Cân nặng</label>
                                <input type="text" name="can_nang" class="form-control" value="<?=$healthData['can_nang']?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>BMI</label>
                                <input type="text" name="bmi" class="form-control" value="<?=$healthData['bmi']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tuần hoàn</label>
                                <input type="text" name="tuan_hoan" class="form-control" value="<?=$healthData['tuan_hoan']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hô hấp</label>
                                <input type="text" name="ho_hap" class="form-control" value="<?=$healthData['ho_hap']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tiêu hoá</label>
                                <input type="text" name="tieu_hoa" class="form-control" value="<?=$healthData['tieu_hoa']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thận</label>
                                <input type="text" name="than" class="form-control" value="<?=$healthData['than']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nội tiết</label>
                                <input type="text" name="noi_tiet" class="form-control" value="<?=$healthData['noi_tiet']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Xương</label>
                                <input type="text" name="xuong" class="form-control" value="<?=$healthData['xuong']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thần kinh</label>
                                <input type="text" name="than_kinh" class="form-control" value="<?=$healthData['than_kinh']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ngoại khoa</label>
                                <input type="text" name="ngoai_khoa" class="form-control" value="<?=$healthData['ngoai_khoa']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sản khoa</label>
                                <input type="text" name="san_khoa" class="form-control" value="<?=$healthData['san_khoa']?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mắt trái</label>
                                <input type="text" name="mat_trai" class="form-control" value="<?=$healthData['mat_trai']?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mắt phải</label>
                                <input type="text" name="mat_phai" class="form-control" value="<?=$healthData['mat_phai']?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mắt trái có kính</label>
                                <input type="text" name="mat_trai_co_kinh" class="form-control" value="<?=$healthData['mat_trai_co_kinh']?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Mắt phải có kính</label>
                                <input type="text" name="mat_phai_co_kinh" class="form-control" value="<?=$healthData['mat_phai_co_kinh']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bệnh về mắt</label>
                                <input type="text" name="benh_mat" class="form-control" value="<?=$healthData['benh_mat']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tai mũi họng</label>
                                <input type="text" name="tai_mui_hong" class="form-control" value="<?=$healthData['tai_mui_hong']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tai trái</label>
                                <input type="text" name="tai_trai" class="form-control" value="<?=$healthData['tai_trai']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tai phải</label>
                                <input type="text" name="tai_phai" class="form-control" value="<?=$healthData['tai_phai']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bệnh về tai</label>
                                <input type="text" name="benh_ve_tai" class="form-control" value="<?=$healthData['benh_ve_tai']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Răng, hàm, mặt</label>
                                <input type="text" name="rang_ham_mat" class="form-control" value="<?=$healthData['rang_ham_mat']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hàm trên</label>
                                <input type="text" name="ham_tren" class="form-control" value="<?=$healthData['ham_tren']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hàm dưới</label>
                                <input type="text" name="ham_duoi" class="form-control" value="<?=$healthData['ham_duoi']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bệnh về răng</label>
                                <input type="text" name="benh_ve_rang" class="form-control" value="<?=$healthData['benh_ve_rang']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Da liễu</label>
                                <input type="text" name="da_lieu" class="form-control" value="<?=$healthData['da_lieu']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ngày khám</label>
                                <input type="date" name="ngay_kham" class="form-control" value="<?=$healthData['ngay_kham']?>" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Viên chức</label>
                                <select name="ma_vien_chuc" class="form-control">
                                    <?php foreach ($officerData as $d) {?>
                                    <option <?=$d['ma_vien_chuc'] == $healthData['ma_vien_chuc'] ? 'selected' : ''?> value="<?=$d['ma_vien_chuc']?>"><?=$d['ma_vien_chuc']?> - <?=$d['ten_vien_chuc']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tiền sử bệnh</label>
                                <textarea name="tien_su_benh" class="form-control" required><?=$healthData['tien_su_benh']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary"><i class="fas fa-save"></i> Lưu</button>
                            <a href="<?=URL_ROOT . '/admin/health-exam/'?>" class="btn btn-danger"><i class="fas fa-ban"></i> Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>