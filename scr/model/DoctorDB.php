<?php
class DoctorDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM bac_si';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maBacSi)
    {
        $sql = "SELECT * FROM bac_si WHERE ma_bac_si = '$maBacSi'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddDoctor($tenBacSi, $matKhau, $email)
    {
        $sql = "INSERT INTO bac_si (ten_bac_si, mat_khau, email) VALUES ('$tenBacSi', '$matKhau', '$email')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateDoctor($maBacSi, $tenBacSi, $matKhau, $email)
    {
        $sql = "UPDATE bac_si SET ten_bac_si = '$tenBacSi', mat_khau = '$matKhau', email = '$email' WHERE ma_bac_si = '$maBacSi'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteDoctor($maBacSi)
    {
        $sql = "DELETE FROM bac_si WHERE ma_bac_si = '$maBacSi'";
        return SQLQuery::NonQuery($sql);
    }
}
