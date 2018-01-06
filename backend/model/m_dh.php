<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/17/2017
 * Time: 9:02 AM
 */
class m_dh extends database
{
    public function getalldh()
    {
        $sql= "select * from don_dat_hang WHERE don_dat_hang.Type_order=0 ORDER BY MDH DESC ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getdhbyID($MDH)
    {
        $sql="select * from don_dat_hang WHERE MDH=? AND don_dat_hang.Type_order=0";
        $this->setQuery($sql);
        return $this->loadRow(array($MDH));
    }
    public function getctdhbyID($MDH)
    {
        $sql= "SELECT ct_don_hang.MHD, mon_an.Ten_mon_an, ct_don_hang.Don_gia, ct_don_hang.So_luong, ct_don_hang.Thanh_tien FROM ct_don_hang INNER JOIN mon_an ON ct_don_hang.Ma_mon_an=mon_an.Ma_mon_an WHERE ct_don_hang.MHD=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($MDH));
    }
    public function updatedh($status,$MDH)
    {
        $sql="UPDATE don_dat_hang SET Tinh_trang =? WHERE don_dat_hang.MDH=?";
        $this->setQuery($sql);
        return $this->execute(array($status,$MDH));
    }
    public function deleteDH($MDH)
    {
        $sql="DELETE FROM don_dat_hang WHERE don_dat_hang.MDH=?";
        $this->setQuery($sql);
        return $this->execute(array($MDH));
    }
    public function deleteCT_DH($MDH)
    {
        $sql="DELETE FROM ct_don_hang WHERE ct_don_hang.MHD=?";
        $this->setQuery($sql);
        return $this->execute(array($MDH));
    }

}