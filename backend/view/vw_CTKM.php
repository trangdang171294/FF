<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/21/2017
 * Time: 12:32 AM
 */
?>
<div class="container-fluid" id="ndung">

    <div class="row" style="padding-top: 40px">
        <div class="col-lg-12">
            <div class="breadcrumb"><a href="index.php">Home</a> > <a href="?view=QLKM">Quản lý khuyến mại > </a>Chi tiết khuyến mại </div>
            <h1 class="page-header">
                Chi tiết chương trình khuyến mại- Mã:<?php echo $km_detail->Ma_km?>
            </h1>
        </div>
    </div>

    <div class="xemcthd" style="margin-top: 15px">
        <div class="row TThd">
            <div class="col-lg-12">
                <div class="table-responsive" id="ctdh" >
                    <table class="table table-bordered"   align="center"   >
                        <tr>
                            <td width="200">Tên chương trình khuyến mại</td>
                            <td><?php echo $km_detail->Ten_km?></td>
                        </tr>
                        <tr>
                            <td>Ảnh chính</td>
                            <td><img width="50%" src="../img/khuyenmai/<?php echo $km_detail->Anh_to?>"></td>
                        </tr>
                        <tr>
                            <td>Ảnh phụ</td>
                            <td><img src="../img/khuyenmai/<?php echo $km_detail->image?>"></td>
                        </tr>
                        <tr>
                            <td>Thời gian áp dụng</td>
                            <td><?php
                                $d_st= date_create($km_detail->Date_start);
                                $d_end= date_create($km_detail->Date_end);
                                echo date_format($d_st,"d/m/Y")." - ".date_format($d_end,"d/m/Y");
                                ?></td>
                        </tr>
                        <tr>
                            <td>Nội dung chi tiết</td>
                            <td><?php echo $km_detail->Noi_dung?></td>
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
