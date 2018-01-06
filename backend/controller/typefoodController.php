<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/6/2017
 * Time: 8:52 AM
 */
class typefoodController
{
    public $typeFoodController;
    var $message= null;

    public function __construct()
    {
        $this->typeFoodController = new typeFoodModel();
    }

    public function listtypefood()
    {
        $dstypefood= $this->gettypefood();
        $thongbao=$this->message;
        include_once ("view/vw_qlyloaimonan.php");
    }

    public function Hientypefood()
    {
        $type_foods= $this->gettypefood();
        include_once ("view/salestaff/typefood.php");
    }

    public function gettypefood()
    {
        return $this->typeFoodController->getAlltype();
    }


    public function Them_loai()
    {
        if(isset($_REQUEST["btnThem"]))
        {
            $name= $_REQUEST["txtNametypeFood"];
            $img= $_REQUEST["txtImage"];
            if($this->typeFoodController->inserttypefood($name,$img))
                $this->message="Thành công! Thông tin đã được lưu vào CSDL";
            else
                $this->message="Thất bại!";
            $this->listtypefood();
           return;
        }
        include_once ("view/vw_AddtypeFood.php");
    }

    public function xoaloaimonan()
    {
        if ($ma_loai = isset($_REQUEST['ma_loai']) ? $_REQUEST['ma_loai'] : '0')
        {
            if($this->typeFoodController->deletetypefood($ma_loai))
            {
                $this->message="Đã xóa!";
            }
            else
                $this->message="Không thể xóa!";
            $this->listtypefood();
            return;

        }
    }

    public function Suwatypefood()
    {
        $ma_loai = isset($_REQUEST['ma_loai']) ? $_REQUEST['ma_loai'] : '0';
        $type_food= $this->typeFoodController->gettypebyID($ma_loai);
        if(isset($_REQUEST["btnUpdate"]))
        {
            $name= $_REQUEST["txtNametypeFood"];
            $old_img= $type_food->Hinh_anh;
            $img= $_REQUEST["txtImage"] ? $_REQUEST["txtImage"] : $old_img;
            if($this->typeFoodController->updatetypefood($name,$img,$ma_loai))
                $this->message="Thành công! dữ liệu đã được lưu vào CSDL.";
            else
                $this->message="Lỗi! Không thể sửa!";
            $this->listtypefood();
            return;
        }
        include_once ("view/vw_updatetypefood.php");
    }
}