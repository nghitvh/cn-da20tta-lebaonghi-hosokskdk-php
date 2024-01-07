<?php
class OfficerDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM vien_chuc';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maVienChuc)
    {
        $sql = "SELECT * FROM vien_chuc WHERE ma_vien_chuc = '$maVienChuc'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddOfficer($hoTen, $gioiTinh, $cccd, $ngayCap, $hoKhauThuongTru, $choOHienTai, $chucVuHienTai, $noiCongTac, $email)
    {
        $sql = "INSERT INTO `vien_chuc`
                (`ten_vien_chuc`, `gioi_tinh`, `cccd_ho_chieu`, `ngay_cap`, `ho_khau_thuong_tru`, `cho_o_hien_tai`,
                `chuc_vu_hien_tai`, `noi_cong_tac`, `email`) VALUES
                ('$hoTen','$gioiTinh','$cccd','$ngayCap','$hoKhauThuongTru', '$choOHienTai',
                '$chucVuHienTai','$noiCongTac', '$email')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateOfficer($maVienChuc, $hoTen, $gioiTinh, $cccd, $ngayCap, $hoKhauThuongTru, $choOHienTai, $chucVuHienTai, $noiCongTac, $email)
    {
        $sql = "UPDATE vien_chuc SET
                        ten_vien_chuc = '$hoTen',
                        gioi_tinh = '$gioiTinh',
                        cccd_ho_chieu = '$cccd',
                        ngay_cap = '$ngayCap',
                        ho_khau_thuong_tru = '$hoKhauThuongTru',
                        cho_o_hien_tai = '$choOHienTai',
                        chuc_vu_hien_tai = '$chucVuHienTai',
                        noi_cong_tac = '$noiCongTac',
                        email = '$email'
                        WHERE ma_vien_chuc = '$maVienChuc'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteOfficer($maVienChuc)
    {
        $sql = "DELETE FROM vien_chuc WHERE ma_vien_chuc = '$maVienChuc'";
        return SQLQuery::NonQuery($sql);
    }
}
