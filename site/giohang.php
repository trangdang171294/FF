
<div class="page-barner-area" style="background-image: url(img/reservation_bg.jpg)">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>Đặt hàng</h1>
                    <ul class="page-location">
                        <li><a href="#">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="#">Thực đơn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--
<div class="wrapper page cart-page" style="min-height: 186px;">

    <div class="desk-cart">
        <h1>Phần ăn đã chọn</h1>
        <table cellpadding="0" cellspacing="0" width="100%" class="tbl-cart">
            <tbody><tr>
                <th width="33%" class="nopadd"><span>Sản phẩm</span></th>
                <th width="33%"><span>Mô tả</span></th>
                <th width="17%"><span>Số lượng</span></th>
                <th width="17%"><span>Giá tiền</span></th>
            </tr>
            <tr>

            </tr>



            </tbody></table>
    </div>



</div>
-->

<?php
$total=0;
if(isset($_SESSION["giohang"]))
{
?>

<div id="ct-cart" class="container">
    <h1>Phần ăn đã chọn</h1>

<div class="table-responsive" id="ct-giohang">
    <form name="form1" method="post" action="?view=product_burger&action=updatecart">
        <table width="800"  align="center" class="table table-bordered table-hover">
            <tbody>
            <tr>
                <td width="150" height="50" align="center"  style="">Hình ảnh</td>
                <td width="200" height="50" align="center">Tên món ăn</td>
                <td width="129" height="50" align="center" >Số lượng</td>
                <td width="150" height="50" align="center"  style="">Thành tiền</td>
            </tr>

<?php
    foreach($_SESSION['giohang'] as $k=>$v) {
        $donhang = $this->giohangController->getFoodbyID($k);
        $total+=$v*$donhang->Don_gia;


?>
                <tr>
                    <td align="center" height="80" valign="middle">
                        <a href="?view=product_burger&action=xoagiohang&Ma_mon_an=<?php echo $donhang->Ma_mon_an?>"><span class="fa fa-times" style="float: left;"></span></a>
                        <img src="img/monan/<?php echo $donhang->Hinh_anh?>"  />
                    </td>
                    <td align="center" height="80" valign="middle" style="text-transform: uppercase"><?php echo $donhang->Ten_mon_an?>- mã: <?php echo $donhang->Ma_mon_an?></td>
                    <td align="center" height="80" valign="middle">
                        <input type="number" name="soluong[<?php echo $donhang->Ma_mon_an?>]" id="txtsl"  value="<?php echo $v?>"
                               style="width: 100px" min="0">
                        <a href="#"> <button type="submit" name="btncapnhatgiohang" class="btn btn-primary" title="cập nhật" id="btncapnhatgiohang"><span class="fa fa-refresh"></span></button></a>
                    </td>
                    <td align="center" height="80" valign="middle"><?php echo number_format($v*$donhang->Don_gia)?> đ</td>


                </tr>

<?php }
$_SESSION["tongtien"]=$total;
?>


            </tbody></table>

        <div class="total" style="margin-top: 20px;">
            <h3>Tổng Tiền:   <span><?php echo number_format($_SESSION["tongtien"])?> đ</span></h3>
        </div>


<!--
            <button type="button" class="btn btn-success"style="padding: 10px;font-size: 19px;width: 192px;float: left">Tiếp tục mua hàng</button>
            <button type="button" class="btn btn-danger" style="padding: 10px;font-size: 19px;width: 192px;float: right">Thanh Toán</button>
            -->

        <!-- Indicates a dangerous or potentially negative action -->
     <!--  <button type="submit" name="btncapnhatgiohang" class="btn btn-primary" title="cập nhật" id="btncapnhatgiohang">Cập nhật</button>-->

    </form>
    <div style=" text-align: center;margin-top: 109px;">

        <a href="?view=product_burger&action=thanhtoan" id="thanhtoan">Thanh toán</a>

        <a href="?view=new_food" id="back">Tiếp tục mua hàng</a>


    </div>

</div>
</div>

<?php }
else
{
?>
    <div class="wrapper wrap-content">

        <div class="wrap-pro">
            <div class="not-found not-found-pro">
                <div class="imgcartemty"><img src="img/cart-empty.png"></div>
                <div class="info">your shopping cart is emty</div>
                <div class="info2">xin vui lòng quay lại chọn thực đơn</div>
            </div>
        </div>

    </div>
    <?php }?>


