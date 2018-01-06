<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/20/2017
 * Time: 1:21 PM
 */
class c_km
{
    public $kmModal;
    var $message=null;
    public function __construct()
    {
        $this->kmModal= new m_km();
    }
    public function Hiendskm()
    {
        $km_list=$this->kmModal->getAllkm();
        $thongbao=$this->message;
        include_once ("view/vw_qlykm.php");
    }
    public function HienCTKm()
    {
        if($Ma_km=isset($_REQUEST['m_km']) ? $_REQUEST['m_km'] : '0') {
            if($Ma_km!=0) {
                $km_detail = $this->kmModal->get_kmbyID($Ma_km);
                include_once("view/vw_CTKM.php");
            }
            else
                $this->Hiendskm();
        }
    }

    public function Insert_km()
    {
        if(isset($_REQUEST["btnThem"]))
        {
            $img_phu = $_REQUEST['txtImagesm'];
            $d_start= $_REQUEST['txtdatestart'];
            $d_end= $_REQUEST['txtdate_end'];
            $img_chinh= $_REQUEST['txtImagemain'];
            $content= $_REQUEST['txtcontent'];
            $name=$_REQUEST['txtNamekm'];
            if($content=="") {
                echo "<script> alert('Nội dung khuyến mại không thể bỏ trống!')</script>";
                include_once ("view/vw_Addkm.php");
                return;
            }
            if($d_end<=$d_start) {
                echo "<script> alert('ngày kết thúc không thể nhỏ hơn!')</script>";
                include_once ("view/vw_Addkm.php");
                return;
            }

            if($this->kmModal->Add_km($img_phu,$d_start,$d_end,$img_chinh,$content,$name))
                $this->message="Thành công!Đã lưu thông tin vào CSDL";
            else
                $this->message="Lỗi không thể thêm";
            $this->Hiendskm();
            return;

        }
        include_once ("view/vw_Addkm.php");
    }
    public function Xoa_km()
    {
        if($Ma_km=isset($_REQUEST['m_km']) ? $_REQUEST['m_km'] : '0')
        {
            if($this->kmModal->Delete_km($Ma_km))
                $this->message="Đã xóa thông tin khỏi CSDL";
            else
                $this->message="Có lỗi! không thể xóa!";
            $this->Hiendskm();
            return;
        }
    }
    public function Update_km()
    {
        $Ma_km=isset($_REQUEST['m_km']) ? $_REQUEST['m_km'] : '0';
            $km_detail = $this->kmModal->get_kmbyID($Ma_km);
            if(isset($_POST["btncapnhat"]))
            {
                $Ten_km=$_REQUEST["txtNamekm"];
                $d_st=$_REQUEST["txtdatestart"];
                $d_end=$_REQUEST["txtdate_end"];
                $main_img=$_REQUEST["txtImagemain"];
                $sm_img=$_REQUEST["txtImagesm"];
                $content=$_REQUEST["txtcontent"];
                $old_img= $km_detail->Anh_to;
                $old_sm_img=$km_detail->image;
                if($main_img=="")
                {
                    $main_img= $old_img;
                }
                else
                {
                    $main_img=$_REQUEST["txtImagemain"];
                }
                if($sm_img=="")
                    $sm_img=$old_sm_img;
                else
                    $sm_img=$_REQUEST["txtImagesm"];

                if($this->kmModal->update_km($sm_img,$d_st,$d_end,$main_img,$content,$Ten_km,$Ma_km))
                    $this->message="thông tin đã được lưu vào csdl";
                else
                    $this->message='Có lỗi.Không sửa được';
                $this->Hiendskm(); //goi ham
                return;
            }
            include_once ("view/vw_update_km.php");

    }
}