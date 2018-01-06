<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/8/2017
 * Time: 11:21 AM
 */
class c_giohang
{
    public $giohangController;
    public function __construct()
    {
        $this->giohangController= new m_giohang();
    }

    public function getmonanbyloai()
    {
        if ($ma_loai = isset($_REQUEST['ma_loai']) ? $_REQUEST['ma_loai'] : '0') {
            if ($ma_loai != 0)
                $bang_mon_an = $this->giohangController->Doc_mon_an_theo_ma_loai($ma_loai);
            include_once('site/product_burger.php');
        }

    }
    public function insertcart()
    {
        if ($Ma_mon_an = isset($_REQUEST['Ma_mon_insert']) ? $_REQUEST['Ma_mon_insert'] : "")
        {
                //neu đã tồn tạ giỏ hàng
            $sl=0;
            if(isset( $_SESSION["giohang"][$Ma_mon_an]) ) //neu tồn tại session co mã này thì
            {
                $sl=$_SESSION["giohang"][$Ma_mon_an]+1;// thi tăng số lượng lên 1
            }
            else
                $sl=1;
            $_SESSION["giohang"][$Ma_mon_an]=$sl;


        }
    }



    public function insertcart_salefood()
    {
        $this->insertcart();
        $food= new c_mon_an;
        $food->Hien_thi_mon_an_theo_loai_salepage();
        $giohang=$_SESSION["giohang"];
        //print_r($giohang);

    }
public function hienthigiohang()
{

    include_once ("site/giohang.php");

}
public function hiendonhang()
{
    include_once ("../backend/view/salestaff/order.php");
}

public  function update_item_cart()
{
    if(isset($_POST["btncapnhatgiohang"]))
    {
        foreach($_POST["soluong"] as $k=>$v)
        {
            if($v<=0)
            {
                unset($_SESSION["giohang"][$k]);
            }
            else
                $_SESSION["giohang"][$k] = $v;
        }
        if(count($_SESSION["giohang"])==0)
        {
            unset($_SESSION["giohang"]);
        }
    }
}
    public function updatecart()
    {
        $this->update_item_cart();
        $this->hienthigiohang();
    }
    public function updateitem_dh()
    {
        $this->update_item_cart();
        $food= new c_mon_an;
        $food->Hien_thi_mon_an_theo_loai_salepage();
       // print_r($_SESSION["giohang"]);
    }
public function deleteCart()
{
    if(isset( $_SESSION["giohang"])) {
        if ($ma_mon = isset($_REQUEST['Ma_mon_an']) ? $_REQUEST['Ma_mon_an'] : '0') {
            foreach ($_SESSION['giohang'] as $k => $v) {
                if ($k == $ma_mon) {
                    unset($_SESSION["giohang"][$k]);
                    // $_SESSION["tongsoluong"]-=$v;
                    // $this->hienthigiohang();
                }
            }
        }
        if (count($_SESSION["giohang"]) == 0) {
            unset($_SESSION["giohang"]);
        }
    }
}
public function xoagiohang()
{
   $this->deleteCart();
    $this->hienthigiohang();


}
public function deleteitem_cart()
{
    $this->deleteCart();
    $typefood= new typefoodController();
    $typefood->Hientypefood();
    //print_r($_SESSION["giohang"]);
}

public function themdh()
{
    if(isset($_SESSION["giohang"]))
    {
        if(isset($_POST["btnthanhtoan"]))
        {
            //them thông tin vao đơn hàng
            $name= $_POST["txtname"];
            $address= $_POST["txtaddress"];
            $phone = $_POST["txtphone"];
            $tongtien= $_SESSION["tongtien"];
            $this->giohangController->Dat_hang($name,$address,$phone,$tongtien);

            //lay ma hoa don vua moi duoc chen vao hoa don
            $MHD= $this->giohangController->getlasthd();

            //them thông tin vao chi tiet don hang
            foreach($_SESSION['giohang'] as $k=>$v)
            {
                $Ma_mon_an= $k;
                $soluong= $v;
                $donhang = $this->giohangController->getFoodbyID($k);
                $dongia= $donhang->Don_gia;
                $thanhtien= $soluong*$dongia;
                $this->giohangController->ChitietDH($MHD->MDH,$Ma_mon_an,$dongia,$soluong,$thanhtien);
            }
            echo "<script> alert('Bạn đã gửi đơn hàng thành công. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất! ') </script>";
            echo "<script> window.location = 'index.php' </script>";
            unset($_SESSION["giohang"]);

        }
        include_once ("site/thanhtoan.php");
    }
    else {
        echo "<script> alert('Giỏ hàng trống! Mời bạn chọn thực đơn');</script>";
        $this->hienthigiohang();
    }
}

public function Them_Hoadon()
{
    if(isset($_SESSION["giohang"]))
    {

            $staff_name = $_SESSION["username"];
            $staff= $this->giohangController->get_user($staff_name);
          //  print_r($staff);
            $salestaff=$staff->user_id;
            $tri_gia = $_SESSION["tongtien"];
            /////////////////
        $applyAmount= $_POST['txtapplyamount'];
        $total_Amount= $_SESSION["tongtien"];
        if($applyAmount< $total_Amount) {
            echo "<script>alert('Tiền khách trả không thể nhỏ hơn tổng tiền')</script>";
            $typefood= new typefoodController();
            $typefood->Hientypefood();
            return;
        }
        ///////////////////////
            $this->giohangController->insert_hoadon($salestaff,$tri_gia);
            $Ma_HD = $this->giohangController->getlasthd();
            $ma_hd = $Ma_HD->MDH;
            foreach ($_SESSION['giohang'] as $k => $v) {
                $Ma_mon_an = $k;
                $soluong = $v;
                $donhang = $this->giohangController->getFoodbyID($k);
                $dongia = $donhang->Don_gia;
                $thanhtien = $soluong * $dongia;
                $this->giohangController->ChitietDH($ma_hd, $Ma_mon_an, $dongia, $soluong, $thanhtien);
            }
            //////////////////////////

         //   echo "<script> alert('Bạn đã gửi đơn hàng thành công. Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất! ') </script>";
           //  echo "<script> window.location = 'salespage.php' </script>";
           $hoa_don = $this->giohangController->getHoaDon_byID($ma_hd);
           $ct_hoadon = $this->giohangController->getctHoaDon_byID($ma_hd);
           $changing=$applyAmount-$total_Amount;
            /////////////////////////////////////
            include_once("../backend/view/salestaff/print_HoaDon.php");
            echo "<script>window.print()</script>";
           //echo "<script> history.back(-1)</script>";
            unset($_SESSION["giohang"]);
    }
}






}