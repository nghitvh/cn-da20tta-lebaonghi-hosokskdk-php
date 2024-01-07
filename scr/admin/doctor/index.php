<?php include '../header.php'?>
<?php include '../../model/DoctorDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        DoctorDB::DeleteDoctor($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/doctor/');
    }
    $doctors = DoctorDB::GetList();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/doctor/">Bác sĩ</a></li>
                <li class="breadcrumb-item active">Danh sách bác sĩ</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="<?=URL_ROOT . '/admin/doctor/add.php'?>" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
                        <div></div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-orange">
                                <th class="text-white">Mã bác sĩ</th>
                                <th class="text-white">Tên bác sĩ</th>
                                <th class="text-white">Email</th>
                                <th class="text-white" width="111">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($doctors as $d) {?>
                            <tr>
                                <td><?=$d['ma_bac_si']?></td>
                                <td><?=$d['ten_bac_si']?></td>
                                <td><?=$d['email']?></td>
                                <td>
                                    <a href="<?=URL_ROOT . '/admin/doctor/edit.php?id=' . $d['ma_bac_si']?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="?del-id=<?=$d['ma_bac_si']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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