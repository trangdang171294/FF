<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 3:33 AM
 */
?>
<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý tin tức
            </h1>
            <ol class="breadcrumb" style="background:#00C6D7">
                <li>
                    <h4><i class="glyphicon glyphicon-th-list " style="background:#00C6D7"></i>  Danh sách bài viết tin tức </h4>
                </li>

            </ol>
        </div>
    </div>

    <p><a href="?module=QLXuatXu&amp;action=ThemXX" data-toggle="tooltip" data-placement="bottom" title="Thêm mới" class="btn bt-button btn-danger" value="Thêm mới"><i class="glyphicon glyphicon-plus"></i>Thêm mới
        </a></p>

    <div class="row ">
        <div class="col-lg-12">
            <span style="color:red;"></span>

            <div class="table-responsive">
                <form name="form1" method="post" action="">
                    <table width="800" border="1" align="center" class="table table-bordered table-hover">
                        <tbody><tr>
                            <td width="56" height="50" align="center" valign="middle" bgcolor="#00CCFF">STT</td>
                            <td width="101" height="50" align="center" bgcolor="#00CCFF">Tiêu đề</td>
                            <td width="101" height="50" align="center" bgcolor="#00CCFF">Tóm tắt</td>
                            <td width="139" height="50" align="center" bgcolor="#00CCFF">Nội dung</td>
                            <td width="129" height="50" align="center" bgcolor="#00CCFF">Ngày đăng</td>
                            <td width="110" height="50" align="center" bgcolor="#00CCFF">Ảnh đại diện</td>
                            <td height="50" colspan="4" align="center" bgcolor="#00CCFF">Cập nhật</td>
                        </tr>
                        <tr>
                            <td align="center" height="80" valign="middle"></td>
                            <td align="center" height="80" valign="middle"></td>
                            <td align="center"  height="80" valign="middle"></td>
                            <td align="center" height="80" valign="middle"></td>
                            <td align="center" height="80"  valign="middle"></td>
                            <td align="center" valign="middle"></td>
                            <td width="56" height="80" align="center">   <a href="?module=QLkhachhang&view=ChiTiet&Ma_khach_hang=14"> <button type="button" class="btn btn-primary" name="btnXemChiTiet" ><i class="fa fa-eye" title="xem chi tiết"></i></button></a></td>
                            <td width="56"align="center">
                                <a href="?module=QLkhachhang&view=ChiTiet&Ma_khach_hang=14"> <button type="button" class="btn btn-success" name="btnXemChiTiet" ><i class="fa fa-pencil" title="xem chi tiết"></i></button></a>
                            </td>
                            <td width="56"  height="80"align="center"><a href="?module=QLkhachhang&view=Delete&Ma_khach_hang=14"  onClick="return confirm('Bạn có chắc chắn xóa khách hàng\'minhvu\' này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i></a></td>
                        </tr>


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

