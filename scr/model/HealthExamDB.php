<?php
class HealthExamDB
{
    public static function GetList($maBacSi = '', $maVienChuc = '')
    {
        $sql = 'SELECT * FROM kham_suc_khoe, vien_chuc, bac_si
                WHERE kham_suc_khoe.ma_vien_chuc = vien_chuc.ma_vien_chuc
                AND kham_suc_khoe.ma_bac_si = bac_si.ma_bac_si';

        if ($maVienChuc != '') {
            $sql = "SELECT * FROM kham_suc_khoe, vien_chuc, bac_si
                WHERE kham_suc_khoe.ma_vien_chuc = vien_chuc.ma_vien_chuc
                AND kham_suc_khoe.ma_bac_si = bac_si.ma_bac_si
                AND vien_chuc.ma_vien_chuc = '$maVienChuc'";
        }

        if ($maBacSi != '') {
            $sql = "SELECT * FROM kham_suc_khoe, vien_chuc, bac_si
                WHERE kham_suc_khoe.ma_vien_chuc = vien_chuc.ma_vien_chuc
                AND kham_suc_khoe.ma_bac_si = bac_si.ma_bac_si
                AND bac_si.ma_bac_si = '$maBacSi'";
        }

        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maKhamSucKhoe)
    {
        $sql = "SELECT * FROM kham_suc_khoe, vien_chuc, bac_si
                WHERE kham_suc_khoe.ma_vien_chuc = vien_chuc.ma_vien_chuc
                AND kham_suc_khoe.ma_bac_si = bac_si.ma_bac_si
                AND kham_suc_khoe.ma_kham_suc_khoe = '$maKhamSucKhoe'";

        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddHealthExam($tienSuBenh, $chieuCao, $canNang, $bmi, $tuanHoan, $hoHap, $tieuHoa,
        $than, $noiTiet, $xuong, $thanKinh, $ngoaiKhoa, $sanKhoa, $matTrai, $matPhai, $matTraiCoKinh, $matPhaiCoKinh,
        $benhMat, $taiMuiHong, $taiTrai, $taiPhai, $benhVeTai, $rangHamMat, $hamTren, $hamDuoi, $benhVeRang,
        $daLieu, $ngayKham, $maBacSi, $maVienChuc) {

        $sql = "INSERT INTO `kham_suc_khoe`(`tien_su_benh`, `chieu_cao`, `can_nang`,
        `bmi`, `tuan_hoan`, `ho_hap`, `tieu_hoa`, `than`, `noi_tiet`, `xuong`,
        `than_kinh`, `ngoai_khoa`, `san_khoa`, `mat_trai`, `mat_phai`, `mat_trai_co_kinh`,
        `mat_phai_co_kinh`, `benh_mat`, `tai_mui_hong`, `tai_phai`, `tai_trai`, `benh_ve_tai`,
        `rang_ham_mat`, `ham_tren`, `ham_duoi`, `benh_ve_rang`, `da_lieu`, `ngay_kham`, `ma_bac_si`, `ma_vien_chuc`) VALUES
        ('$tienSuBenh','$chieuCao','$canNang',
        '$bmi','$tuanHoan','$hoHap','$tieuHoa','$than','$noiTiet','$xuong',
        '$thanKinh','$ngoaiKhoa','$sanKhoa','$matTrai','$matPhai','$matTraiCoKinh',
        '$matPhaiCoKinh','$benhMat','$taiMuiHong','$taiPhai','$taiTrai','$benhVeTai',
        '$rangHamMat','$hamTren','$hamDuoi','$benhVeRang','$daLieu', '$ngayKham', '$maBacSi','$maVienChuc')";

        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateHealthExam($maKhamSucKhoe, $tienSuBenh, $chieuCao, $canNang, $bmi, $tuanHoan, $hoHap, $tieuHoa,
        $than, $noiTiet, $xuong, $thanKinh, $ngoaiKhoa, $sanKhoa, $matTrai, $matPhai, $matTraiCoKinh, $matPhaiCoKinh,
        $benhMat, $taiMuiHong, $taiTrai, $taiPhai, $benhVeTai, $rangHamMat, $hamTren, $hamDuoi, $benhVeRang,
        $daLieu, $ngayKham, $maBacSi, $maVienChuc) {

        $sql = "UPDATE kham_suc_khoe SET
            tien_su_benh = '$tienSuBenh',
            chieu_cao = '$chieuCao',
            can_nang = '$canNang',
            bmi = '$bmi',
            tuan_hoan = '$tuanHoan',
            ho_hap = '$hoHap',
            tieu_hoa = '$tieuHoa',
            than = '$than',
            noi_tiet = '$noiTiet',
            xuong = '$xuong',
            than_kinh = '$thanKinh',
            ngoai_khoa = '$ngoaiKhoa',
            san_khoa = '$sanKhoa',
            mat_trai = '$matTrai',
            mat_phai = '$matPhai',
            mat_trai_co_kinh = '$matTraiCoKinh',
            mat_phai_co_kinh = '$matPhaiCoKinh',
            benh_mat = '$benhMat',
            tai_mui_hong = '$taiMuiHong',
            tai_phai = '$taiPhai',
            tai_trai = '$taiTrai',
            benh_ve_tai = '$benhVeTai',
            rang_ham_mat = '$rangHamMat',
            ham_tren = '$hamTren',
            ham_duoi = '$hamDuoi',
            benh_ve_rang = '$benhVeRang',
            da_lieu = '$daLieu',
            ngay_kham = '$ngayKham',
            ma_bac_si = '$maBacSi',
            ma_vien_chuc = '$maVienChuc'
            WHERE ma_kham_suc_khoe = '$maKhamSucKhoe'";

        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteHealthExam($maKhamSucKhoe)
    {
        $sql = "DELETE FROM kham_suc_khoe WHERE ma_kham_suc_khoe = '$maKhamSucKhoe'";
        return SQLQuery::NonQuery($sql);
    }
}