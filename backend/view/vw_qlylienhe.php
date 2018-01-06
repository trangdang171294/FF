<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 3:43 AM
 */
?>

<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <h1 class="page-header">
                Quản lý ý kiến phản hồi
            </h1>
            <ol class="breadcrumb" style="background:#00C6D7">
                <li>
                    <h4><i class="glyphicon glyphicon-th-list " style="background:#00C6D7"></i>  Danh sách ý kiến phản hồi </h4>
                </li>

            </ol>
        </div>
    </div>

    <div class="row ">
        <div class="col-lg-12">
            <span style="color:red;"></span>

            <div class="table-responsive">
                <form name="form1" method="post" action="">
                    <table width="800" border="1" align="center" class="table table-bordered table-hover">
                        <tbody><tr>
                            <td width="56" height="50" align="center" valign="middle" bgcolor="#00CCFF">STT</td>
                            <td width="200" height="50" align="center" bgcolor="#00CCFF">Họ Tên</td>
                            <td width="200" height="50" align="center" bgcolor="#00CCFF">Email</td>
                            <td width="150" height="50" align="center" bgcolor="#00CCFF">Điện thoại</td>
                            <td width="200" height="50" align="center" bgcolor="#00CCFF">Tiêu đề</td>
                            <td height="50" width="90" align="center" bgcolor="#00CCFF">Duyệt</td>
                            <td height="50" colspan="4" align="center" bgcolor="#00CCFF">Cập nhật</td>
                        </tr>
                        <?php $stt=1;
                        foreach ($contact_list as $contact)
                        {?>
                        <tr>
                            <td align="center" height="80" valign="middle"><?php echo $stt++?></td>
                            <td align="center" height="80" valign="middle"><?php echo $contact->Ho_ten?></td>
                            <td align="center"  height="80" valign="middle"><?php echo $contact->Email?></td>
                            <td align="center" height="80" valign="middle"><?php echo $contact->Dien_thoai?></td>
                            <td align="center" height="80"  valign="middle"><?php echo $contact->Tieu_de?></td>
                            <td align="center" height="80"  valign="middle">
                                <?php $st=$contact->Duyet;
                                switch ($st)
                                {
                                    case "0":
                                        echo "Chưa Duyệt";
                                        break;
                                    case "1":
                                        echo "Đã Duyệt";
                                        break;
                                    default:
                                        echo "Chưa Duyệt";
                                        break;
                                }?>
                            </td>
                            <td width="56" height="80" align="center">   <a href="?view=QLLH&action=xemct&MLH=<?php echo $contact->MLH?>"> <button type="button" class="btn btn-primary" name="btnXemChiTiet" ><i class="fa fa-eye" title="xem chi tiết"></i></button></a></td>
                            <td width="56"align="center">
                                <a href="?view=QLLH&action=update&MLH=<?php echo $contact->MLH?>"> <button type="button" class="btn btn-success" name="btnXemChiTiet" ><i class="fa fa-pencil" title="Cập nhật"></i></button></a>
                            </td>
                            <td width="56"  height="80"align="center"><a href="?module=QLkhachhang&view=Delete&Ma_khach_hang=14"  onClick="return confirm('Bạn có chắc chắn xóa khách hàng\'minhvu\' này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i></a></td>
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
