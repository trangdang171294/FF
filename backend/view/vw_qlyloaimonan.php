<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 2:11 AM
 */
?>

<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý danh mục loại món ăn
            </h1>
            <ol class="breadcrumb" style="background:#00C6D7">
                <li>
                    <h4><i class="glyphicon glyphicon-th-list " style="background:#00C6D7"></i>  Danh sách danh mục món ăn </h4>
                </li>

            </ol>
        </div>
    </div>
    <p><a href="?view=loai_mon_an&action=Add" data-toggle="tooltip" data-placement="bottom" title="Thêm mới" class="btn bt-button btn-danger" value="Thêm mới"><i class="glyphicon glyphicon-plus"></i>Thêm mới
        </a></p>

    <div class="row ">
        <div class="col-lg-12">
            <span style="color:red;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>

            <div class="table-responsive">
                <form name="form1" method="post" action="">
                    <table  border="1" align="center" class="table table-bordered table-hover">
                        <tbody><tr>
                            <td width="56" height="50" align="center" valign="middle" bgcolor="#00c6d7">STT</td>
                            <td width="100" height="50" align="center" bgcolor="#00c6d7">Tên Loại</td>
                            <td width="50" height="50" align="center" bgcolor="#00c6d7">Hình ảnh</td>
                            <td height="50" colspan="4" align="center" bgcolor="#00c6d7">Cập nhật</td>
                        </tr>
                        <?php
                        $stt=1;
                        foreach ($dstypefood as $typefood)
                        {
                        ?>
                        <tr>
                            <td align="center" height="80" valign="middle"><?php echo $stt++?></td>
                            <td align="center" height="80" valign="middle"><?php echo $typefood->Ten_loai?></td>
                            <td align="center" height="80" valign="middle"><img src="../img/<?php echo $typefood->Hinh_anh?>" style="width: 50%"></td>
                            <td width="56"align="center">
                                <a href="?view=loai_mon_an&action=update&ma_loai=<?php echo $typefood->Ma_loai?>"> <button type="button" class="btn btn-success" name="btnXemChiTiet" ><i class="fa fa-pencil" title="cập nhật"></i></button></a>
                            </td>
                            <td width="56"  height="80"align="center"><a href="?view=loai_mon_an&action=delete&ma_loai=<?php echo $typefood->Ma_loai?>"  onClick="return confirm('Bạn có chắc chắn xóa không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i></a></td>
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

