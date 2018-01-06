<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 1:00 PM
 */
class monanController
{
    public $monanController;
    var $message=null;
    public function __construct()
    {
        $this->monanController= new foodModel();
    }
    public function getAllFood()
    {
        if($page= isset($_REQUEST['page']) ? $_REQUEST['page'] : '1') {
            $all_food = $this->monanController->Doc_mon_an();
            $thongbao = $this->message;
            $tongdong = count($all_food);
            $tongtrang = ceil($tongdong / 8);
            $page = max($page,1); //neu so trang nho hon 1 thi lay max bang 1
            $page = min($page,$tongtrang);
            $dongbatdau = ($page - 1) * 8;
            $mon_an = $this->monanController->hien_mon_an_phan_trang($dongbatdau, 8);
            include_once("view/vw_qlymonan.php");
        }
    }

    public function actionAddFood()
    {
        if(isset($_REQUEST["btnThem"]))
        {
            $txtNameFood=$_REQUEST["txtNameFood"];
            $txtTypeFood=$_REQUEST["txtTypeFood"];
            $txtImage=$_REQUEST["txtImage"];
            $txtdongia=$_REQUEST["txtdongia"];
            $txtmota=$_REQUEST["txtmota"];
            if($this->monanController->addFood($txtTypeFood,$txtNameFood,$txtdongia,$txtImage,$txtmota))
                $this->message="Thành công! Thông tin đã được lưu vào CSDL";
         //   echo '<div class="breadcrumb"><p style="color: red;font-size: 20px">Thành Công</p></div>'
            else
                $this->message="Xảy ra lỗi! Không thể thêm.";
            $this->getAllFood(); //goi ham
            return;
        }

        $type_food=$this->monanController->getAlltype();
        include_once("view/vw_Themmonan.php");
    }
    public function actionDeleteFood()
    {
        if ($ma_mon = isset($_REQUEST['ma_mon']) ? $_REQUEST['ma_mon'] : '0')
        {
            if($this->monanController->DeleteFood($ma_mon))
            {
                $this->message="Đã xóa!";
            }
            else
                $this->message="Không thể xóa!";
            $this->getAllFood(); //goi ham
            return;

        }
    }

    public function actionUpdateFood()
    {
        $Ma_mon_an = isset($_REQUEST['Ma_mon_an']) ? $_REQUEST['Ma_mon_an'] : '0';
        $food_des= $this->monanController->getFoodbyID($Ma_mon_an);
        if(isset($_POST["btnCapnhat"]))
            {
                $Ma_mon_an= $_REQUEST['Ma_mon_an'];
                $txtNameFood=$_REQUEST["txtNameFood"];
                $txtTypeFood=$_REQUEST["txtTypeFood"];
                $txtImage=$_REQUEST["txtImage"];
                $txtdongia=$_REQUEST["txtdongia"];
                $txtmota=$_REQUEST["txtmota"];
                $old_img= $food_des->Hinh_anh;
                if($txtImage=="")
                {
                    $txtImage= $old_img;
                }
                else
                {
                    $txtImage=$_REQUEST["txtImage"];
                }
                if($this->monanController->updateFood($txtTypeFood,$txtNameFood,$txtdongia,$txtImage,$txtmota,$Ma_mon_an))
                    $this->message="thông tin món ăn đã được lưu vào csdl";
                else
                    $this->message='Có lỗi.Không sửa được';
                $this->getAllFood(); //goi ham
                return;
            }
            $type_food= $this->monanController->getAlltype();
            include_once ("view/vw_Suamonan.php");



    }
    public function phantrang()
    {
        $kichthuoc =8;
        $monan= $this->monanController->Doc_mon_an();
        $tongdong= count($monan);
        $tongtrang=ceil($tongdong/$kichthuoc);
        include_once ("view/vw_qlymonan.php");
    }

}