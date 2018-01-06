<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/17/2017
 * Time: 1:49 PM
 */
?>


<div id="print_page" class="page" style="width: 500px;position: relative;left: 38px;">
    <div class="header">
        <div class="logo"><img src="../img/img1.png"/></div>
        <div class="company"><h4>Burger Shack</h4></div>
    </div>
    <br/>
    <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
    </div>
    <div class="infor-order">
        <p>MHD: <?php echo $hoa_don->MDH?>
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
            <?php  foreach ($ct_hoadon as $dhct) {?>
                <tr>
                    <td><?php echo $dhct->Ten_mon_an ?></td>
                    <td><?php echo number_format($dhct->Don_gia) ?></td>
                    <td align="center"><?php echo $dhct->So_luong ?></td>
                    <td ><?php echo number_format($dhct->Thanh_tien)?></td>
                </tr>
            <?php }?>
            <tr>
                <td colspan="3"><b>Tổng tiền (đã bao gồm thuế): </b></td>
                <td><?php echo number_format($hoa_don->Tri_gia)?></td>
            </tr>
            <tr>
                <td colspan="3">Apply Amount:</td>
                <td><?php echo number_format($applyAmount)?></td>
            </tr>
            <tr>
                <td colspan="3">Changing</td>
                <td><?php echo number_format($changing)?></td>
            </tr>
        </table>
        <p>Staff: <?php echo $hoa_don->User_name?></p>

    </div>
    <div class="infor">
        <p></p>
        <p>Burger Shack</p>
        <p>Tầng 3, coop mart, km10 Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
        <p>TEL: 1800105681</p>
    </div>

</div>
