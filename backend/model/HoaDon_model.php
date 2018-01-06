<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/17/2017
 * Time: 5:28 AM
 */
class HoaDon_model extends database
{
    public function insert_hoadon($salestaff, $tri_gia)
    {
        $sql="INSERT INTO hoa_don(Nguoi_ban, Tri_gia) VALUES (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($salestaff, $tri_gia));
    }

    public function inser_ct_hoadon($Ma_HD, $Ma_mon_an, $Don_gia, $So_luong, $Thanh_tien)
    {
        $sql="INSERT INTO ct_hoa_don(Ma_HD, Ma_mon_an, Don_gia, So_luong, Thanh_tien) VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($Ma_HD, $Ma_mon_an, $Don_gia, $So_luong, $Thanh_tien));
    }

}