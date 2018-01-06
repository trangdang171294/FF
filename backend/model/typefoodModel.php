<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/6/2017
 * Time: 8:50 AM
 */
class typefoodModel extends database
{
    public function getAlltype()
    {
        $sql= "select * from loai_mon_an";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function gettypebyID($ma_loai)
    {
        $sql= "select * from loai_mon_an WHERE Ma_loai=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai));
    }

    public function inserttypefood($name, $img)
    {
        $sql="INSERT INTO loai_mon_an(Ten_loai, Hinh_anh) VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($name,$img));
    }

    public function deletetypefood($ma_loai)
    {
        $sql="DELETE FROM `loai_mon_an` WHERE Ma_loai=?";
        $this->setQuery($sql);
        return $this->execute(array($ma_loai));
    }
    public function updatetypefood($name,$img,$id)
    {
        $sql="UPDATE loai_mon_an SET Ten_loai=?,Hinh_anh=? WHERE Ma_loai=?";
        $this->setQuery($sql);
        return $this->execute(array($name,$img,$id));
    }
}