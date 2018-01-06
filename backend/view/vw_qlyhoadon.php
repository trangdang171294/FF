<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 2:19 AM
 */
?>

<div class="container-fluid" id="ndung">

    <div class="row" >
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý đơn hàng
            </h1>
            <ol class="breadcrumb" style="background:#00C6D7">
                <li>
                    <h4><i class="glyphicon glyphicon-th-list " style="background:#00C6D7"></i>  Danh sách đơn hàng </h4>
                </li>

            </ol>
        </div>
    </div>

    </a></p>

    <div class="row ">
        <div class="col-lg-12">
            <span style="color:red;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>

            <div class="table-responsive">
                <form name="form1" method="post" action="">
                    <table width="800" border="1" align="center" class="table table-bordered table-hover">
                        <tbody><tr>
                            <td width="50" height="50" align="center" valign="middle" bgcolor="#00CCFF">STT</td>
                            <td width="50" height="50" align="center" bgcolor="#00CCFF">MHD</td>
                            <td width="150" height="50" align="center" bgcolor="#00CCFF">Tên khách hàng</td>
                            <td width="245" height="50" align="center" bgcolor="#00CCFF">Địa Chỉ</td>
                            <td width="100" height="50" align="center" bgcolor="#00CCFF">Điện Thoại</td>
                            <td width="100" align="center" bgcolor="#00CCFF">Trị giá</td>
                            <td width="100" align="center" bgcolor="#00CCFF">Tình trạng</td>
                            <td height="50" colspan="4" align="center" bgcolor="#00CCFF">Cập nhật</td>
                        </tr>
                        <?php
                        $stt=1;
                        foreach ($donhang as $dh)
                        {?>
                            <tr>
                                <td align="center" height="80" valign="middle"><?php echo $stt++?></td>
                                <td align="center" height="80" valign="middle"><?php echo $dh->MDH?></td>
                                <td align="center"  height="80" valign="middle"><?php echo $dh->Ten_khach_hang?></td>
                                <td align="center" height="80" valign="middle"><?php echo $dh->Dia_chi?></td>
                                <td align="center" height="80"  valign="middle"><?php echo $dh->Dien_thoai?></td>
                                <td align="center" valign="middle"><?php echo $dh->Tri_gia?></td>
                                <td align="center" valign="middle">
                                    <?php $status= $dh->Tinh_trang;
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
                                <td>   <a href="?view=QLDH&action=xemct&mahd=<?=$dh->MDH?>"> <button type="button" class="btn btn-primary" name="btnXemChiTiet" ><i class="fa fa-eye" title="xem chi tiết"></i></button></a></td>
                                <td width="56"align="center">
                                    <a href="?view=QLDH&action=suadh&mahd=<?=$dh->MDH?>"> <button type="button" class="btn btn-success" name="btnSua" ><i class="fa fa-pencil" title="cập nhật status"></i></button></a>
                                </td>
                                <td width="56"  height="80"align="center"><a href="?view=QLDH&action=xoadh&mahd=<?=$dh->MDH?>"  onClick="return confirm('Bạn có chắc chắn xóa đơn hàng này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i></a></td>
                            </tr>
                        <?php }?>


                        </tbody></table>

                    <!--
                    <div class="phantrang" style="float:right;">

                        <nav>
                            <ul class="pagination">

                                <li class="">
                                </li>
                                <li class=""><a href="?page=1&amp;module=QLkhachhang"><span class="sr-only active"></span>1</a></li>
                                <li class=""><a href="?page=2&amp;module=QLkhachhang"><span class="sr-only active"></span>2</a></li>
                                <li class=""><a href="?page=3&amp;module=QLkhachhang"><span class="sr-only active"></span>3</a></li>
                                <li>
                                    <a href="?page=2&amp;module=QLkhachhang" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </li>


                            </ul>
                        </nav>              </div>
                        -->
                </form>
            </div>
        </div>
    </div>


</div>
