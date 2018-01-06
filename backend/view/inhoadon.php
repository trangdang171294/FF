<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/18/2017
 * Time: 6:11 PM
 */
include_once ("../model/database.php");//include cũng phải theo thứ tự đkm
include_once ("../model/m_dh.php");
$dhcontroller= new m_dh();
if($MDH=isset($_REQUEST['mahd'])? $_REQUEST['mahd'] : '0')
{
    $dh_detail=$dhcontroller->getdhbyID($MDH);
    $dh_ct= $dhcontroller->getctdhbyID($MDH);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>In hóa đơn</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/hoadon.css">

</head>
<body onload="window.print();" style="width: 500px">
<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="../../img/img1.png"/></div>
        <div class="company"><h4>Burger Shack</h4></div>
    </div>
    <br/>
    <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
    </div>

    <div class="infor-order">
        <p>Họ Tên: <?php echo $dh_detail->Ten_khach_hang?></p>
        <p>SĐT: <?php echo $dh_detail->Dien_thoai?></p>
        <p>Địa chỉ: <?php echo $dh_detail->Dia_chi?></p>
        <p>MHD: <?php echo $dh_detail->MDH?>
            <span style="float: right">Ngày lập:<?php
                /*
                $now=getdate(); //getdate() trả về giá trị là một mảng
                $currentDate = $now["mday"] . "/" . $now["mon"] . "/" . $now["year"];
                $currentTime = $now["hours"] . ":" . $now["minutes"];
                echo $currentDate."&nbsp&nbsp&nbsp&nbsp&nbsp".$currentTime;
                */
            ?>
                <script>
                var mydate=new Date();
                var year=mydate.getYear();
                var m=mydate.getMinutes();
                var h=mydate.getHours();
                if (year < 1000) year+=1900;
                var day=mydate.getDay();
                var month=mydate.getMonth(); var daym=mydate.getDate();
                if (daym<10) daym="0"+daym;
                var dayarray=new Array("Chủ nhật","Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy");
                var montharray=new Array("/1","/2","/3","/4","/5","/6","/7","/8","/9","/10","/11","/12");
                document.write(daym+""+montharray[month]+"/"+year+"&nbsp&nbsp&nbsp&nbsp&nbsp"+h+":"+m);
</script>
            </span></p>
    </div>
    <div class="table-responsive" style="border-bottom: 1px dashed;">
        <table align="center"  class="table">
            <tr class="active">
                <td><b>Sản phẩm</b></td>
                <td><b>Price</b></td>
                <td><b>Số lượng</b></td>
                <td><b>Thành tiền</b></td>
            </tr>
            <?php  foreach ($dh_ct as $dhct) {?>
            <tr>
                <td><?php echo $dhct->Ten_mon_an ?></td>
                <td><?php echo number_format($dhct->Don_gia) ?></td>
                <td align="center"><?php echo $dhct->So_luong ?></td>
                <td ><?php echo number_format($dhct->Thanh_tien)?></td>
            </tr>
            <?php }?>
            <tr>
                <td colspan="3"><b>Tổng tiền (đã bao gồm thuế): </b></td>
                <td><?php echo number_format($dh_detail->Tri_gia)?></td>
            </tr>
        </table>


    </div>
    <div class="infor">
        <p>Burger Shack</p>
        <p>Tầng 3, coop mart, km10 Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
        <p>TEL: 1800105681</p>
    </div>

</div>
</body>
</html>