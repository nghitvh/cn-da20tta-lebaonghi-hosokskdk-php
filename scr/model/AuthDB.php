<?php
class AuthDB
{
    public static function AdminLogin($email, $matKhau)
    {
        $sql = "SELECT * FROM admin WHERE email = '$email' AND mat_khau = md5('$matKhau')";
        return SQLQuery::GetData($sql);
    }

    public static function DoctorLogin($email, $matKhau)
    {
        $sql = "SELECT * FROM bac_si WHERE email = '$email' AND mat_khau = md5('$matKhau')";
        return SQLQuery::GetData($sql);
    }

    public static function OfficerLogin($email, $matKhau)
    {
        $sql = "SELECT * FROM vien_chuc WHERE email = '$email' AND mat_khau = md5('$matKhau')";
        return SQLQuery::GetData($sql);
    }

    public static function GetList()
    {
        $sql = 'SELECT * FROM tai_khoan';
        return SQLQuery::GetData($sql);
    }
}