<?php include '../header.php'?>
<?php include '../../model/HealthExamDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        HealthExamDB::DeleteHealthExam($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/health-exam/');
    }
    $healthExamData = [];
    if ($_SESSION['loai_tai_khoan'] == 'vien_chuc') {
        $healthExamData = HealthExamDB::GetList('', $_SESSION['ma_vien_chuc']);
    } else if ($_SESSION['loai_tai_khoan'] == 'bac_si') {
        $healthExamData = HealthExamDB::GetList($_SESSION['ma_bac_si'], '');
    } else if ($_SESSION['loai_tai_khoan'] == 'admin') {
        $healthExamData = HealthExamDB::GetList();
    }
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/health-exam/">Hồ sơ khám sức khoẻ</a></li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <?php if ($_SESSION['loai_tai_khoan'] == 'bac_si') {?>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="<?=URL_ROOT . '/admin/health-exam/add.php'?>" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
                        <div></div>
                    </div>
                    <?php }?>

                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-orange">
                                <th class="text-white">Mã khám sức khoẻ</th>
                                <th class="text-white">Tên viên chức</th>
                                <th class="text-white">Tên bác sĩ</th>
                                <th class="text-white">Ngày khám</th>
                                <th class="text-white" width="157">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($healthExamData as $d) {?>
                            <tr>
                                <td><?=$d['ma_kham_suc_khoe']?></td>
                                <td><?=$d['ma_vien_chuc'] . ' - ' . $d['ten_vien_chuc']?></td>
                                <td><?=$d['ma_bac_si'] . ' - ' . $d['ten_bac_si']?></td>
                                <td><?=Helper::DateTime($d['ngay_kham'], 'date')?></td>
                                <td>
                                    <a href="<?=URL_ROOT . '/admin/health-exam/view.php?view-id=' . $d['ma_kham_suc_khoe']?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <?php if ($_SESSION['loai_tai_khoan'] == 'bac_si') {?>
                                    <a href="<?=URL_ROOT . '/admin/health-exam/edit.php?id=' . $d['ma_kham_suc_khoe']?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="?del-id=<?=$d['ma_kham_suc_khoe']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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