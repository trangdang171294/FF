<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/16/2017
 * Time: 3:56 AM
 */
class m_km extends database
{
    public function Add_km($image,$d_star,$d_end,$img_main,$content,$namekm)
    {
        $sql="INSERT INTO khuyen_mai(image, Date_start, Date_end, Anh_to, Noi_dung, Ten_km) VALUES (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($image,$d_star,$d_end,$img_main,$content,$namekm));
    }
    public function getAllkm()
    {
        $sql="SELECT * FROM khuyen_mai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_kmbyID($Makm)
    {
        $sql="SELECT * FROM khuyen_mai WHERE Ma_km=?";
        $this->setQuery($sql);
        return $this->loadRow(array($Makm));
    }
    public function get_kmlimit()
    {
        $sql="SELECT * FROM khuyen_mai LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function update_km($image,$Date_start,$Date_end,$Anh_to,$Noi_dung,$Ten_km,$Ma_km)
    {
        $sql="UPDATE khuyen_mai SET image=?,Date_start=?,Date_end=?,Anh_to=?,Noi_dung=?,Ten_km=? WHERE Ma_km=?";
        $this->setQuery($sql);
        return $this->execute(array($image,$Date_start,$Date_end,$Anh_to,$Noi_dung,$Ten_km,$Ma_km));
    }
    public function Delete_km($Ma_km)
    {
        $sql="DELETE FROM khuyen_mai WHERE Ma_km=?";
        $this->setQuery($sql);
        return $this->execute(array($Ma_km));
    }
}