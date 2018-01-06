<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/31/2017
 * Time: 7:19 AM
 */
?>

<div class="row" style="padding-top: 40px;width: 929px;position: relative;left: 70px;">
    <div class="col-lg-12">
        <div class="breadcrumb"><a href="index.php">Home</a> > <a href="?view=loai_mon_an">Quản lý danh mục món ăn > </a><a href="#">Cập nhật danh mục</a> </div>
    </div>
</div>
<div class="panel panel-primary" >
    <div class="panel-heading"><h4>Cập nhật thông tin danh mục loại món ăn- Mã: <?php echo $type_food->Ma_loai?></h4></div>
    <div class="panel-body">
        <form method="post" action="" name="frmThemTT">

            <div class="form-group">
                <label for="recipient-name" class="control-label">Tên loại</label>
                <input type="text" class="form-control" id="txtNametypeFood" name="txtNametypeFood" required="required" value="<?php echo $type_food->Ten_loai?>"/>
            </div>

            <div class="ex_img">
                <p><b>Ảnh hiện tại</b></p>
                <img src="../img/<?php echo $type_food->Hinh_anh?>" style="width: 40%"/>
            </div>



            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh minh họa</label>
                <input type="file" name="txtImage" id="txtImage" /> <!-- them tep kieu file-->
            </div>


            <div class="form-group">
                <!--     <input name="button2" type="reset" class="btn-info" id="button2" value="Bỏ qua" />-->
                <button type="submit" name="btnUpdate" class="btn btn-warning" title="Cập nhật" id="btnUpdate">cập nhật</button>
                <a href="?view=loai_mon_an"> <button type="button" class="btn btn-success" name="btnHuy" id="btnHuy" title="Hủy">Hủy</button></a>
            </div>

        </form>
    </div>
</div>
