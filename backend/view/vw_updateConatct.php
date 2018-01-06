<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/8/2017
 * Time: 9:13 AM
 */
?>
<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <div class="breadcrumb"><a href="index.php">Home</a> > <a href="?view=QLDH">Quản lý liên hệ > </a><a>cập nhật liên hệ</a> </div>
            <h1 class="page-header" style="color: #194386;">
                Cập nhật liên hệ- Mã: <?php echo $contact->MLH?>
            </h1>
        </div>
    </div>
    <input type="hidden" id="<?php echo $contact->MLH?>">
    <form method="post" action="">
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
                    <button type="submit" name="btnCapnhat" class="btn btn-primary" title="Cập nhật" id="btnCapnhat">Cập nhật</button>
                </div>
            </div>
        </div>
    </form>

</div>

