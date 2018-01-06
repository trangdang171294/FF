<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/17/2017
 * Time: 9:48 AM
 */
class c_dh
{
    public $dhcontroller;
    var $message=null;
    public function __construct()
    {
        $this->dhcontroller= new m_dh();
    }
    public function HienthiDH()
    {
        $donhang= $this->dhcontroller->getalldh();
        $thongbao = $this->message;
        include_once ("view/vw_qlyhoadon.php");
    }

    public function HienDHbyID()
    {
        if($MDH=isset($_REQUEST['mahd'])? $_REQUEST['mahd'] : '0')
        {
            $dh_detail= $this->dhcontroller->getdhbyID($MDH);
            $dh_ct= $this->dhcontroller->getctdhbyID($MDH);
            include_once ("view/vw_xemctdonhang.php");
        }

    }
    public function InHD()
    {
        if($MDH=isset($_REQUEST['mahd'])? $_REQUEST['mahd'] : '0')
        {
            $dh_detail= $this->dhcontroller->getdhbyID($MDH);
            $dh_ct= $this->dhcontroller->getctdhbyID($MDH);
        }
    }

    public function CapnhatDH()
    {
        $MDH=isset($_REQUEST['mahd'])? $_REQUEST['mahd'] : '0';
            if (isset($_POST['btnCapnhat']))
            {
                $status = $_POST['status'];
                if ($this->dhcontroller->updatedh($status, $MDH))
                    $this->message = "Cập nhật thành công!";
                else
                    $this->message = "Lỗi! Không thể cập nhật!";
                $this->HienthiDH();
                return;
            }
            $dh_detail = $this->dhcontroller->getdhbyID($MDH);
            $dh_ct = $this->dhcontroller->getctdhbyID($MDH);
            include_once("view/vw_suadh.php");

    }
    public function XoaDH()
    {
        if($MDH=isset($_REQUEST['mahd'])? $_REQUEST['mahd'] : '0')
        {
            if($this->dhcontroller->deleteCT_DH($MDH))
            {
                if ($this->dhcontroller->deleteDH($MDH))
                    $this->message = "Xóa Thành Công!";
                else
                    $this->message = "Có lỗi! Không thể xóa!";
                $this->HienthiDH();
                return;
            }
        }
    }


}