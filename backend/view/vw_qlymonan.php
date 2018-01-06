<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 1:17 AM
 */
?>

<div class="container-fluid" id="ndung">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý món ăn
            </h1>
            <ol class="breadcrumb" style="background:#00C6D7">
                <li>
                    <h4><i class="glyphicon glyphicon-th-list " style="background:#00C6D7"></i>  Danh sách món ăn </h4>
                </li>

            </ol>
        </div>
    </div>

    <p><a href="?view=Mon_an&action=Add" data-toggle="tooltip" data-placement="bottom" title="Thêm sản phẩm" class="btn bt-button btn-danger" value="Thêm mới"><i class="glyphicon glyphicon-plus"></i>Thêm mới
        </a></p>

    <div class="row ">
        <div class="col-lg-12">
            <span style="color:red;"><?php echo isset($thongbao) ? $thongbao : ""; ?></span>

            <div class="table-responsive">
                <form name="form1" method="post" action="">
                    <table width="800" border="1" align="center" class="table table-bordered table-striped table-hover">
                        <tbody><tr>
                            <td width="56" height="50" align="center" valign="middle" bgcolor="#00CCFF"><b>STT</b></td>
                            <td width="200" height="50" align="center" bgcolor="#00CCFF"><b>Tên món ăn</b></td>
                            <td width="139" height="50" align="center" bgcolor="#00CCFF"><b>Loại</b></td>
                            <td width="129" height="50" align="center" bgcolor="#00CCFF"><b>Đơn giá</b></td>
                            <td width="150" height="50" align="center" bgcolor="#00CCFF" style=""><b>Hình ảnh</b></td>
                            <td width="165" align="center" bgcolor="#00CCFF"><b>Mô tả</b></td>
                            <td height="50" colspan="4" align="center" bgcolor="#00CCFF"><b>Cập nhật</b></td>
                        </tr>
                        <?php
                        $stt=($page-1)*8+1;
                        foreach ($mon_an as $mon)
                        {?>
                        <tr>
                            <td align="center" height="80" valign="middle"><?php echo $stt++ ?></td>
                            <td align="center" height="80" valign="middle"><?php echo $mon->Ten_mon_an ?></td>
                            <td align="center"  height="80" valign="middle"><?php echo $mon->Ten_loai ?></td>
                            <td align="center" height="80" valign="middle"><?php echo $mon->Don_gia ?></td>
                            <td align="center" height="80"  valign="middle"><img src="../img/monan/<?php echo $mon->Hinh_anh ?>" style="width: 100%;"> </td>
                            <td align="center" valign="middle"><?php echo $mon->Mo_ta ?></td>
                            <td width="56"align="center">
                                <a href="?view=Mon_an&action=UpdateFood&Ma_mon_an=<?=$mon->Ma_mon_an?>"> <button type="button" class="btn btn-success" name="btnSưa" ><i class="fa fa-pencil" title="sửa"></i></button></a>
                            </td>
                            <td width="56"  height="80"align="center"><a href="?view=Mon_an&action=deletefood&ma_mon=<?=$mon->Ma_mon_an?>"  onClick="return confirm('Bạn có chắc chắn xóa sản phẩm này không này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i></a></td>
                        </tr>

                        <?php }?>


                        </tbody></table>

<!--
                    <div class="phantrang" style="float:right;">

                        <nav>
                            <ul class="pagination">

                                <li class="">
                                </li>
                                <li class=""><a href="#"><span class="sr-only active"></span>1</a></li>
                                <li class=""><a href="#"><span class="sr-only active"></span>2</a></li>
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
    <div class="row">
        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
            <ul class=" page-pagination margin-top " style="float: right"> <!--boostrap-->
                <li><a <?php if($page>=2 and $page<=$tongtrang)
                    {?>
                        href="?view=Mon_an&page=<?php echo $page-1?>"
                    <?php }
                    else {?>
                        href="#"
                    <?php }?>><i class="fa fa-angle-left"></i></a></li>
                <?php for($i=1;$i<=$tongtrang;$i++){?>

                <li class="<?= $i==$page?"active":"" ?>"><!--****-->

                <a href="?view=Mon_an&page=<?php echo $i?>">
                  <?php echo $i?></a></li>
                <?php }?>
                <li><a

                            href="?view=Mon_an&page=<?php echo $page+1?>"

                         ><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
    </div>

</div>
