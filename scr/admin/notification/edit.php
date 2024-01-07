<?php include '../header.php'?>
<?php include '../../model/NotificationDB.php'?>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Add images
        $imageLists = [];
        if (isset($_FILES['file_dinh_kem'])) {
            $count = count($_FILES['file_dinh_kem']['name']);
            for ($i = 0; $i < $count; $i++) {
                $image_path = '/uploads/' . $_FILES['file_dinh_kem']['name'][$i];
                move_uploaded_file($_FILES['file_dinh_kem']['tmp_name'][$i], '../../' . $image_path);
                $imageLists[] = '/uploads/' . $_FILES['file_dinh_kem']['name'][$i];
            }
        }

        NotificationDB::UpdateNofification($_POST['ma_thong_bao'], $_POST['ten_thong_bao'], $_POST['noi_dung'], serialize($imageLists));
        header('Location: ' . URL_ROOT . '/admin/notification/');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $noficationData = NotificationDB::GetDataByID($_GET['id']);
    }
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/notification/">Thông báo</a></li>
                <li class="breadcrumb-item active">Cập nhật bác sĩ</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <form class="row" method="POST" enctype="multipart/form-data">
                        <div class="col-md-6">
                            <input type="hidden" name="ma_thong_bao" class="form-control" value="<?=$noficationData['ma_thong_bao']?>" required>
                            <div class="form-group">
                                <label>Tên thông báo</label>
                                <input type="text" name="ten_thong_bao" class="form-control" value="<?=$noficationData['ten_thong_bao']?>" required>
                            </div>
                            <div class="form-group">
                                <label>File đính kèm</label>
                                <input type="file" name="file_dinh_kem[]" class="form-control" multiple="multiple" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="noi_dung" style="height: 125px" class="form-control" required><?=$noficationData['noi_dung']?></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary"><i class="fas fa-save"></i> Lưu</button>
                            <a href="<?=URL_ROOT . '/admin/notification/'?>" class="btn btn-danger"><i class="fas fa-ban"></i> Huỷ bỏ</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>