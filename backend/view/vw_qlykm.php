<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 2:30 AM
 */
?>
<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý thông tin khuyến mại
            </h1>
            <ol class="breadcrumb" style="background:#00C6D7">
                <li>
                    <h4><i class="glyphicon glyphicon-th-list " style="background:#00C6D7"></i>  Danh sách khuyến mại </h4>
                </li>

            </ol>
        </div>
    </div>

    <p><a href="?view=QLKM&action=themkm" data-toggle="tooltip" data-placement="bottom" title="Thêm mới" class="btn bt-button btn-danger" value="Thêm mới"><i class="glyphicon glyphicon-plus"></i>Thêm mới
        </a></p>

    <div class="row ">
        <div class="col-lg-12">
            <span style="color:red;"></span>
            <span style="color:red;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>
            <div class="table-responsive">
                <form name="form1" method="post" action="">
                    <table width="800" border="1" align="center" class="table table-bordered table-hover">
                        <tbody><tr>
                            <td width="56" height="50" align="center" valign="middle" bgcolor="#00CCFF">STT</td>
                            <td width="200" height="50" align="center" bgcolor="#00CCFF">Hình ảnh</td>
                            <td width="250" height="50" align="center" bgcolor="#00CCFF">Tên khuyến mại</td>
                            <td width="139" height="50" align="center" bgcolor="#00CCFF">Ngày bắt đầu</td>
                            <td width="129" height="50" align="center" bgcolor="#00CCFF">Ngày kết thúc</td>
                            <td height="50" colspan="4" align="center" bgcolor="#00CCFF">Cập nhật</td>
                        </tr>
                        <?php
                        $stt=1;
                        foreach ($km_list as $km)
                        {?>
                        <tr>
                            <td align="center" height="80" valign="middle"><?php echo $stt++?></td>
                            <td align="center" height="80" valign="middle"><img width="100%" src="../img/khuyenmai/<?php echo $km->image ?>"></td>
                            <td align="center"  height="80" valign="middle"><?php echo $km->Ten_km?></td>
                            <td align="center" height="80" valign="middle"><?php $dst=date_create($km->Date_start); echo date_format($dst,"d/m/Y") ?></td>
                            <td align="center" height="80"  valign="middle"><?php $d_end=date_create($km->Date_end); echo date_format($d_end,"d/m/Y") ?></td>
                            <td width="56">
                                <a href="?view=QLKM&action=ChiTiet&m_km=<?php echo $km->Ma_km?>"> <button type="button" class="btn btn-primary" name="btnXemChiTiet" ><i class="fa fa-eye" title="xem chi tiết"></i></button></a></td>
                            <td width="56"align="center">
                                <a href="?view=QLKM&action=Suakm&m_km=<?php echo $km->Ma_km?>"> <button type="button" class="btn btn-success" name="btnSua" ><i class="fa fa-pencil" title="Sửa"></i></button></a>
                            </td>
                            <td width="56"  height="80"align="center"><a href="?view=QLKM&action=xoakm&m_km=<?php echo $km->Ma_km?>"  onClick="return confirm('Bạn có chắc chắn xóa thông tin này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i></a></td>
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
