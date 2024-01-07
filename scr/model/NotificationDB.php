<?php
class NotificationDB
{
    public static function GetList()
    {
        $sql = 'SELECT * FROM thong_bao';
        return SQLQuery::GetData($sql);
    }

    public static function GetDataByID($maThongBao)
    {
        $sql = "SELECT * FROM thong_bao WHERE ma_thong_bao = '$maThongBao'";
        return SQLQuery::GetData($sql, ['row' => 0]);
    }

    public static function AddNofification($tenThongBao, $noiDung, $fileDinhKem)
    {
        $sql = "INSERT INTO thong_bao (ten_thong_bao, noi_dung, file_dinh_kem) VALUES ('$tenThongBao', '$noiDung', '$fileDinhKem')";
        return SQLQuery::NonQuery($sql);
    }

    public static function UpdateNofification($maThongBao, $tenThongBao, $noiDung, $fileDinhKem)
    {
        $sql = "UPDATE thong_bao SET ten_thong_bao = '$tenThongBao', noi_dung = '$noiDung', file_dinh_kem = '$fileDinhKem' WHERE ma_thong_bao = '$maThongBao'";
        return SQLQuery::NonQuery($sql);
    }

    public static function DeleteNofification($maThongBao)
    {
        $sql = "DELETE FROM thong_bao WHERE ma_thong_bao = '$maThongBao'";
        return SQLQuery::NonQuery($sql);
    }
}
