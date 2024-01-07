<?php include '../header.php'?>
<?php include '../../model/OfficerDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['view-id'])) {
        $officerData = OfficerDB::GetDataByID($_GET['view-id']);
    }
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/officer/">Viên chức</a></li>
                <li class="breadcrumb-item active">Thông tin chi tiết: <?=$officerData['ten_vien_chuc']?></li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td width="300"><b>Mã viên chức</b></td>
                                <td><?=$officerData['ma_vien_chuc']?></td>
                            </tr>
                            <tr>
                                <td width="300"><b>Họ tên</b></td>
                                <td><?=$officerData['ten_vien_chuc']?></td>
                            </tr>
                            <tr>
                                <td width="300"><b>Giới tính</b></td>
                                <td>
                                    <?php if ($officerData['gioi_tinh'] == '0') {?>
                                    <span class="badge badge-primary">Nam</span>
                                    <?php } else {?>
                                    <span class="badge badge-danger">Nữ</span>
                                    <?php }?>
                                </td>
                            </tr>
                            <tr>
                                <td width="300"><b>Căn cước công dân / Hộ chiếu</b></td>
                                <td><?=$officerData['cccd_ho_chieu']?></td>
                            </tr>
                            <tr>
                                <td width="300"><b>Ngày cấp</b></td>
                                <td><?=Helper::DateTime($officerData['ngay_cap'], 'date')?></td>
                            </tr>
                            <tr>
                                <td width="300"><b>Hộ khẩu thường trú</b></td>
                                <td><?=$officerData['ho_khau_thuong_tru']?></td>
                            </tr>
                            <tr>
                                <td width="300"><b>Chổ ở hiện tại</b></td>
                                <td><?=$officerData['cho_o_hien_tai']?></td>
                            </tr>
                            <tr>
                                <td width="300"><b>Chức vụ hiện tại</b></td>
                                <td><?=$officerData['chuc_vu_hien_tai']?></td>
                            </tr>
                            <tr>
                                <td width="300"><b>Nơi công tác</b></td>
                                <td><?=$officerData['noi_cong_tac']?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>