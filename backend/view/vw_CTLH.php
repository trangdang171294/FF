<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/6/2017
 * Time: 6:37 AM
 */
?>
<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <div class="breadcrumb"><a href="index.php">Home</a> > <a href="?view=QLLH">Quản lý liên hệ > </a><a href="#">Chi tiết liên hệ</a> </div>
            <h1 class="page-header">
                Chi tiết nội dung phản hồi- Mã:<?php echo $contact->MLH?>
            </h1>
        </div>
    </div>

    <div class="xemcthd" style="margin-top: 15px">
        <div class="row TThd">
            <div class="col-lg-12">
                <div class="table-responsive" id="ctdh" >
                    <table class="table table-bordered"   align="center"   >
                        <tr>
                            <td width="200">Tên người gửi</td>
                            <td><?php echo $contact->Ho_ten?></td>
                        </tr>
                        <tr>
                            <td width="200">Email</td>
                            <td><a href="mailto:<?php echo $contact->Email?>"><?php echo $contact->Email?></a></td>
                        </tr>
                        <tr>
                            <td width="200">Điện thoại</td>
                            <td><?php echo $contact->Dien_thoai?></td>
                        </tr>
                        <tr>
                            <td width="200">Tiêu đề</td>
                            <td><?php echo $contact->Tieu_de?></td>
                        </tr>
                        <tr>
                            <td width="200">Nội dung</td>
                            <td><?php echo $contact->Noi_dung?></td>
                        </tr>
                        <tr>
                            <td width="200">Duyệt</td>
                            <td><?php $status=$contact->Duyet;
                            $duyet= ($status==1) ? "Đã Duyệt" : "Chưa Duyệt";
                            echo $duyet;
                                ?></td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">

                <a href="?view=QLKM&action=Suakm&m_km=<?php echo $km_detail->Ma_km?>"> <button type="button" class="btn btn-success" name="btnSua" ><i class="fa fa-pencil" title="cập nhật status"></i> Sửa </button></a>
                <a href="?view=QLKM&action=xoakm&m_km=<?php echo $km_detail->Ma_km?>"  onClick="return confirm('Bạn có chắc chắn xóa đơn hàng này không ?')"class="btn btn-danger" title="Loại bỏ"><i class="fa fa-trash " ></i> Xóa</a>
                <a href="?view=QLKM"> <button type="button" class="btn btn-primary" name="btnback" ><i class="fa fa-undo" title="Quay lại"></i> Quay lại </button></a>
            </div>
        </div>
    </div>

</div>
