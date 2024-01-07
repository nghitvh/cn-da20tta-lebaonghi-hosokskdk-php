<?php include '../header.php'?>
<?php include '../../model/NotificationDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['del-id'])) {
        NotificationDB::DeleteNofification($_GET['del-id']);
        header('Location: ' . URL_ROOT . '/admin/notification/');
    }
    $notifications = NotificationDB::GetList();
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/notification/">Thông báo</a></li>
                <li class="breadcrumb-item active">Danh sách thông báo</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="<?=URL_ROOT . '/admin/notification/add.php'?>" class="btn btn-success"><i class="fas fa-plus"></i> Thêm mới</a>
                        <div></div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr class="bg-orange">
                                <th class="text-white">Mã thông báo</th>
                                <th class="text-white">Tên thông báo</th>
                                <th class="text-white">File đính kèm</th>
                                <th class="text-white" width="111">Công cụ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($notifications as $d) {?>
                            <tr>
                                <td><?=$d['ma_thong_bao']?></td>
                                <td><?=$d['ten_thong_bao']?></td>
                                <td>
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
                                </td>
                                <td>
                                    <a href="<?=URL_ROOT . '/admin/notification/edit.php?id=' . $d['ma_thong_bao']?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="?del-id=<?=$d['ma_thong_bao']?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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