<?php include '../header.php'?>
<?php include '../../model/OfficerDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        OfficerDB::DeleteOfficer($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/officer/');
    }
    $officers = OfficerDB::GetList();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/officer/">Viên chức</a></li>
                <li class="breadcrumb-item active">Danh sách viên chức</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="<?=URL_ROOT . '/admin/officer/add.php'?>" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
                        <div></div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-orange">
                                <th class="text-white">Mã viên chức</th>
                                <th class="text-white">Họ tên</th>
                                <th class="text-white">Giới tính</th>
                                <th class="text-white">CCCD</th>
                                <th class="text-white">Chức vụ hiện tại</th>
                                <th class="text-white">Nơi công tác</th>
                                <th class="text-white" width="157">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($officers as $d) {?>
                            <tr>
                                <td><?=$d['ma_vien_chuc']?></td>
                                <td><?=$d['ten_vien_chuc']?></td>
                                <td>
                                    <?php if ($d['gioi_tinh'] == '0') {?>
                                    <span class="badge badge-primary">Nam</span>
                                    <?php } else {?>
                                    <span class="badge badge-danger">Nữ</span>
                                    <?php }?>
                                </td>
                                <td><?=$d['cccd_ho_chieu']?></td>
                                <td><?=$d['chuc_vu_hien_tai']?></td>
                                <td><?=$d['noi_cong_tac']?></td>
                                <td>
                                    <a href="<?=URL_ROOT . '/admin/officer/view.php?view-id=' . $d['ma_vien_chuc']?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <?php if ($_SESSION['loai_tai_khoan'] == 'bac_si') {?>
                                    <a href="<?=URL_ROOT . '/admin/officer/edit.php?id=' . $d['ma_vien_chuc']?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="?del-id=<?=$d['ma_vien_chuc']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                    <?php }?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>