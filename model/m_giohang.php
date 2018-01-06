<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/8/2017
 * Time: 10:56 AM
 */
class m_giohang extends database
{
    public function getFoodbyID($ma_mon_an)
    {
        $sql= "select * from mon_an WHERE Ma_mon_an=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_mon_an));
    }
    public function Doc_mon_an_theo_ma_loai($ma_loai)
    {
        $sql= "select * from mon_an where Ma_loai = '$ma_loai' ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function Dat_hang($Ten_khach_hang, $Dia_chi, $Dien_thoai, $Tri_gia)
    {
        $sql = "
				INSERT INTO don_dat_hang(Ten_khach_hang, Dia_chi, Dien_thoai, Tri_gia, Tinh_trang,Nguoi_ban,Type_order) VALUES (?,?,?,?,0,NULL ,0)
			";
        $this->setQuery($sql);
        $this->execute(array( $Ten_khach_hang, $Dia_chi, $Dien_thoai, $Tri_gia));
    }
    public function getlasthd()
    {
        $sql = "
				SELECT MAX(MDH) as MDH FROM don_dat_hang
			";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function ChitietDH($MHD, $Ma_mon_an, $Don_gia, $So_luong, $Thanh_tien)
    {
        $sql = "
				INSERT INTO ct_don_hang(MHD, Ma_mon_an, Don_gia, So_luong, Thanh_tien) VALUES (?,?,?,?,?)
			";
        $this->setQuery($sql);
        $this->execute(array($MHD, $Ma_mon_an, $Don_gia, $So_luong, $Thanh_tien));
    }

    public function insert_hoadon($salestaff, $tri_gia)
    {
        $sql = "
				INSERT INTO don_dat_hang(Ten_khach_hang, Dia_chi, Dien_thoai, Tri_gia, Tinh_trang,Nguoi_ban,Type_order) VALUES (NULL ,NULL ,NULL ,?,1,? ,1)
			";
        $this->setQuery($sql);
        $this->execute(array($tri_gia, $salestaff ));
    }

    public function get_user($User_name)
    {
        $sql="SELECT * FROM user WHERE User_name=?";
        $this->setQuery($sql);
        return $this->loadRow(array($User_name));
    }

//    public function inser_ct_hoadon($Ma_HD, $Ma_mon_an, $Don_gia, $So_luong, $Thanh_tien)
//    {
//        $sql="INSERT INTO ct_hoa_don(Ma_HD, Ma_mon_an, Don_gia, So_luong, Thanh_tien) VALUES (?,?,?,?,?)";
//        $this->setQuery($sql);
//        return $this->execute(array($Ma_HD, $Ma_mon_an, $Don_gia, $So_luong, $Thanh_tien));
//    }

//    public function getlast_hoadon()
//    {
//        $sql = "
//				SELECT MAX(Ma_HD) as Ma_HD FROM hoa_don
//			";
//        $this->setQuery($sql);
//        return $this->loadRow();
//    }

    public function getHoaDon_byID($ma_hd)
    {
        $sql="SELECT user.User_name,don_dat_hang.MDH, don_dat_hang.Tri_gia FROM don_dat_hang INNER JOIN user ON don_dat_hang.Nguoi_ban=user.user_id WHERE  don_dat_hang.MDH=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_hd));
    }

    public function getctHoaDon_byID($ma_hd)
    {
        $sql="SELECT ct_don_hang.MHD, mon_an.Ten_mon_an, ct_don_hang.Don_gia, ct_don_hang.So_luong, ct_don_hang.Thanh_tien FROM ct_don_hang INNER JOIN mon_an ON ct_don_hang.Ma_mon_an=mon_an.Ma_mon_an WHERE ct_don_hang.MHD=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_hd));
    }

}