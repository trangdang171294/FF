<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/16/2017
 * Time: 2:08 AM
 */
?>
<?php
$total=0;
if(isset($_SESSION["giohang"]))
{
    ?>
<h3>Đơn hàng</h3>
<table width="400px" class="table" style="    margin-left: 60px;
    width: 450px;">
    <tr>
        <td>Product name</td>
        <td>Price</td>
        <td>Qty</td>
        <td>Amount</td>
    </tr>
    <?php
    foreach($_SESSION['giohang'] as $k=>$v) {
    $donhang = $this->giohangController->getFoodbyID($k);
    $total+=$v*$donhang->Don_gia;


    ?>
    <tr>
        <td>
            <a href="?view=food&action=xoagiohang&Ma_mon_an=<?php echo $donhang->Ma_mon_an?>&ma_loai=<?php echo $donhang->Ma_loai?>"><span class="fa fa-times" style="float: left;"></span></a>
            <?php echo $donhang->Ten_mon_an?></td>
        <td><?php echo  number_format($donhang->Don_gia)?></td>
        <form name="form1" method="post" action="?view=food&action=updatecart&ma_loai=<?php echo $donhang->Ma_loai?>">
        <td>
            <input type="hidden" id="<?php echo $donhang->Ma_loai?>">
            <input type="number" name="soluong[<?php echo $donhang->Ma_mon_an?>]" id="txtsl"  value="<?php echo $v?>"
                   style="width: 50px" min="0">
            <a href="#"> <button type="submit" name="btncapnhatgiohang" class="btn btn-primary" title="cập nhật" id="btncapnhatgiohang"><span class="fa fa-refresh"></span></button></a></td>
        <td><?php echo number_format($v*$donhang->Don_gia)?></td>
        </form>
    </tr>
    <?php } $_SESSION["tongtien"]=$total;?>


</table>
<h4>Tổng tiền: <strong><?php echo number_format($_SESSION["tongtien"])?> đ</strong></h4>

    <form method="post" action="?view=food&action=thanhtoan">
Apply Amount: <input type="text" id="txtapplyamount" name="txtapplyamount" required="required" pattern="[0-9]+(\\.[0-9][0-9]?)?" title="Kí tự nhập là số"/>
   <!-- <p>Changing: <input type="text" id="txtapplyamount" name="txtapplyamount"></p>-->
    <div style="margin-top: 30px"><button type="submit" class="btn btn-danger" name="btnthanhtoan" id="btnthanhtoan">Thanh toán</button></div>
    </form>
    <?php }?>

