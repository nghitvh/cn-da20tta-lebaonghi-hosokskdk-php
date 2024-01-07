<?php include '../header.php'?>
<?php include '../../model/HealthExamDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['view-id'])) {
        $healthData = HealthExamDB::GetDataByID($_GET['view-id']);
    }
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/health-exam/">Hồ sơ khám sức khoẻ</a></li>
                <li class="breadcrumb-item active">Thông tin chi tiết: <?=$healthData['ten_vien_chuc']?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-orange">
                            <h6 class="text-white text-center">Viên chức</h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="150"><b>Mã viên chức</b></td>
                                        <td><?=$healthData['ma_vien_chuc']?></td>
                                    </tr>
                                    <tr>
                                        <td width="150"><b>Họ tên viên chức</b></td>
                                        <td><?=$healthData['ten_vien_chuc']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h6 class="text-white text-center">Bác sĩ</h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="150"><b>Mã bác sĩ</b></td>
                                        <td><?=$healthData['ma_bac_si']?></td>
                                    </tr>
                                    <tr>
                                        <td width="150"><b>Họ tên bác sĩ</b></td>
                                        <td><?=$healthData['ten_bac_si']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h6 class="text-white text-center">Kết quả khám sức khoẻ</h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="200"><b>Mã khám sức khoẻ</b></td>
                                        <td><?=$healthData['ma_kham_suc_khoe']?></td>
                                        <td width="200"><b>Chiều cao</b></td>
                                        <td><?=$healthData['chieu_cao']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Cân nặng</b></td>
                                        <td><?=$healthData['can_nang']?></td>
                                        <td width="200"><b>BMI</b></td>
                                        <td><?=$healthData['bmi']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Tuần hoàn</b></td>
                                        <td><?=$healthData['tuan_hoan']?></td>
                                        <td width="200"><b>Hô hấp</b></td>
                                        <td><?=$healthData['ho_hap']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Tiêu hoá</b></td>
                                        <td><?=$healthData['tieu_hoa']?></td>
                                        <td width="200"><b>Thận</b></td>
                                        <td><?=$healthData['than']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Nội tiết</b></td>
                                        <td><?=$healthData['noi_tiet']?></td>
                                        <td width="200"><b>Xương</b></td>
                                        <td><?=$healthData['xuong']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Thần kinh</b></td>
                                        <td><?=$healthData['than_kinh']?></td>
                                        <td width="200"><b>Ngoại khoa</b></td>
                                        <td><?=$healthData['ngoai_khoa']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Sản khoa</b></td>
                                        <td><?=$healthData['san_khoa']?></td>
                                        <td width="200"><b>Mắt (không kính)</b></td>
                                        <td>Mắt trái: <?=$healthData['mat_trai']?> Mắt phải: <?=$healthData['mat_phai']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Mắt (có kính)</b></td>
                                        <td>Mắt trái: <?=$healthData['mat_trai_co_kinh']?> Mắt phải: <?=$healthData['mat_phai_co_kinh']?></td>
                                        <td width="200"><b>Bệnh mắt</b></td>
                                        <td><?=$healthData['benh_mat']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Tai, mũi, họng</b></td>
                                        <td><?=$healthData['tai_mui_hong']?></td>
                                        <td width="200"><b>Tai trái</b></td>
                                        <td><?=$healthData['tai_trai']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Tai phải</b></td>
                                        <td><?=$healthData['tai_phai']?></td>
                                        <td width="200"><b>Bệnh về tai</b></td>
                                        <td><?=$healthData['benh_ve_tai']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Răng, hàm, mặt</b></td>
                                        <td><?=$healthData['rang_ham_mat']?></td>
                                        <td width="200"><b>Hàm trên</b></td>
                                        <td><?=$healthData['ham_tren']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Hàm dưới</b></td>
                                        <td><?=$healthData['ham_duoi']?></td>
                                        <td width="200"><b>Bệnh về răng</b></td>
                                        <td><?=$healthData['benh_ve_rang']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Da liễu</b></td>
                                        <td><?=$healthData['da_lieu']?></td>
                                        <td width="200"><b>Bác sĩ</b></td>
                                        <td><?=$healthData['ten_bac_si']?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Ngày khám</b></td>
                                        <td colspan="3"><?=Helper::DateTime($healthData['ngay_kham'], 'date')?></td>
                                    </tr>
                                    <tr>
                                        <td width="200"><b>Tiền sử bệnh</b></td>
                                        <td colspan="3"><?=$healthData['tien_su_benh']?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>