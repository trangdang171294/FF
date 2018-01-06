<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/17/2017
 * Time: 10:26 AM
 */
?>

<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <div class="breadcrumb"><a href="index.php">Home</a> > <a href="?view=QLDH">Quản lý dơn hàng > </a>Chi tiết đơn hàng </div>
            <h1 class="page-header">
                Chi tiết đơn hàng- Mã: <?php echo $dh_detail->MDH?>
            </h1>
        </div>
    </div>

    <div class="xemcthd" style="margin-top: 15px">
        <div class="row TThd">
            <div class="col-lg-12">
                <div class="table-responsive" id="ctdh" >
                    <table class="table table-bordered"   align="center"   >
                        <tr>
                            <td width="25%">Mã đơn hàng</td>
                            <td width="75%"><?php echo $dh_detail->MDH?></td>
                        </tr>
                        <tr>
                            <td>Tên khách hàng</td>
                            <td><?php echo $dh_detail->Ten_khach_hang?></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><?php echo $dh_detail->Dia_chi?></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><?php echo $dh_detail->Dien_thoai?></td>
                        </tr>
                        <tr>
                            <td>Trị giá hóa đơn</td>
                            <td><?php echo number_format($dh_detail->Tri_gia)?> VND</td>
                        </tr>
                        <tr>
                            <td>Ngày lập</td>
                            <td><?php $ngaylap= date_create($dh_detail->Ngay_lap);
                                echo date_format($ngaylap,"d/m/Y H:i:s");?></td>
                        </tr>
                        <tr>
                            <td>Tình trạng</td>
                            <td> <?php $status= $dh_detail->Tinh_trang;
                                switch ($status)
                                {
                                    case "1": echo "Hoàn thành";
                                        break;
                                    case "2": echo "Đang xử lý";
                                        break;
                                    default:
                                        echo "Chưa xử lý";
                                }
                                ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row TTcthd" style="margin-top: 50px">
            <div class="col-lg-12">

                <div class="table-responsive">
                    <table width="700" align="center"  class="table table-hover">
                        <tbody>
                        <tr class="active">
                            <td width="50" height="50" align="center" valign="middle" >STT</td>
                            <td width="200" height="50" align="center" >Tên món ăn</td>
                            <td width="100" height="50" align="center" >Đơn giá</td>
                            <td width="50" height="50" align="center" >Số lượng</td>
                            <td width="100" height="50" align="center" >Thành tiền</td>
                        </tr>
                        <?php
                        $stt=1;
                        foreach ($dh_ct as $dhct)
                        {?>
                        <tr>
                            <td align="center"><?php echo $stt++?></td>
                            <td align="center"><?php echo $dhct->Ten_mon_an ?></td>
                            <td align="center"><?php echo $dhct->Don_gia ?></td>
                            <td align="center"><?php echo $dhct->So_luong ?></td>
                            <td align="center"><?php echo number_format($dhct->Thanh_tien) ?></td>
                        </tr>
                        <?php }?>

                        </tbody></table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="view/inhoadon.php?mahd=<?=$dh_detail->MDH?>"><button type="button" name="btninhd" id="btninhd" class="btn btn-primary" style="float: right" onclick="printContent('page')">In hóa đơn</button></a>
                <a href="?view=QLDH&action=suadh&mahd=<?=$dh_detail->MDH?>"> <button type="button" class="btn btn-success" name="btnSua" ><i class="fa fa-pencil" title="cập nhật status"></i>Sửa hóa đơn</button></a>
                <a href="?view=QLDH&action=xoadh&mahd=<?=$dh_detail->MDH?>"  onClick="return confirm('Bạn có chắc chắn xóa đơn hàng này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i> Xóa</a>
            </div>
        </div>
    </div>

</div>

