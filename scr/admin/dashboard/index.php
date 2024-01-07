<?php include '../header.php'?>
<?php include '../../model/DoctorDB.php'?>
<?php include '../../model/OfficerDB.php'?>
<?php include '../../model/HealthExamDB.php'?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=URL_ROOT?>/admin/dashboard/"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active">Tổng quan</li>
            </ol>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?=count(DoctorDB::GetList())?></h3>
                            <p>Bác sĩ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <a href="<?=URL_ROOT . '/admin/doctor/'?>" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?=count(OfficerDB::GetList())?></h3>
                            <p>Viên chức</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="<?=URL_ROOT . '/admin/officer/'?>" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?=count(HealthExamDB::GetList())?></h3>
                            <p>Kết quả khám sức khoẻ</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-id-badge"></i>
                        </div>
                        <a href="<?=URL_ROOT . '/admin/health-exam/'?>" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../footer.php'?>