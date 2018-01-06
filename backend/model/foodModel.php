<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 12:55 PM
 */
class foodModel extends database
{

    public function Doc_mon_an()
    {
        $sql = "SELECT mon_an.Ma_mon_an,mon_an.Ma_loai,loai_mon_an.Ten_loai,mon_an.Ten_mon_an,mon_an.Don_gia,mon_an.Hinh_anh,mon_an.Mo_ta FROM mon_an INNER JOIN loai_mon_an on mon_an.Ma_loai=loai_mon_an.Ma_loai ORDER BY Ma_mon_an DESC";
        $this -> setQuery($sql);
        return $this->loadAllRows();
    }
    public function hien_mon_an_phan_trang($dongbatdau,$kichthuoc)
    {
        $sql = "SELECT mon_an.Ma_mon_an,mon_an.Ma_loai,loai_mon_an.Ten_loai,mon_an.Ten_mon_an,mon_an.Don_gia,mon_an.Hinh_anh,mon_an.Mo_ta FROM mon_an INNER JOIN loai_mon_an on mon_an.Ma_loai=loai_mon_an.Ma_loai ORDER BY Ma_mon_an DESC LIMIT $dongbatdau,8";
        $this -> setQuery($sql);
        return $this->loadAllRows();
    }
    public function getAlltype()
    {
        $sql= "select * from loai_mon_an";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getFoodbyID($ma_mon_an)
    {
        $sql= "select * from mon_an WHERE Ma_mon_an=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_mon_an));
    }

    public function addFood($Ma_loai, $Ten_mon_an, $Don_gia, $Hinh_anh, $Mo_ta)
    {
        $sql="INSERT INTO mon_an(Ma_loai, Ten_mon_an, Don_gia, Hinh_anh, Mo_ta) VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($Ma_loai, $Ten_mon_an, $Don_gia, $Hinh_anh, $Mo_ta));

    }
    public function DeleteFood($ma_mon_an)
    {
        $sql="DELETE FROM mon_an WHERE Ma_mon_an=?";
        $this->setQuery($sql);
        return $this->execute(array($ma_mon_an));
    }
    public function updateFood($Ma_loai, $Ten_mon_an, $Don_gia,$Hinh_anh, $Mo_ta,$Ma_mon_an)
    {
        $sql="UPDATE mon_an SET Ma_loai=?,Ten_mon_an=?,Don_gia=?,Hinh_anh=?,Mo_ta=? WHERE Ma_mon_an=?";
        $this->setQuery($sql);
        return $this->execute(array($Ma_loai, $Ten_mon_an, $Don_gia,$Hinh_anh, $Mo_ta,$Ma_mon_an));
    }
}