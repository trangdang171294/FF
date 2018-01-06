<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/21/2017
 * Time: 2:29 AM
 */
?>
<div class="panel panel-primary" >
    <div class="panel-heading"><h4>Thêm mới thông tin khuyến mại</h4></div>
    <div class="panel-body">
        <input type="hidden" id="<?=$km_detail->Ma_km;?>">
        <form method="post" action="" name="frmThemTT">

            <div class="form-group">
                <label for="recipient-name" class="control-label">Tên khuyến mại</label>
                <input type="text" class="form-control" id="txtNamekm" name="txtNamekm" value="<?php echo $km_detail->Ten_km?>" required="required"/>
            </div>
            <div class="form-group">
                <label for="recipient-name" class="control-label">Thời gian bắt đầu</label>
                <input type="date" name="txtdatestart" id="txtdatestart" value="<?php echo $km_detail->Date_start?>" required="required" /> <!-- them tep kieu file-->
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Thời gian kết thúc</label>
                <input type="date" name="txtdate_end" id="txtdate_end" value="<?php echo $km_detail->Date_end?>" required="required" /> <!-- them tep kieu file-->
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh chính</label>
                <input type="file" name="txtImagemain" id="txtImagemain"  /> <!-- them tep kieu file-->
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh phụ</label>
                <input type="file" name="txtImagesm" id="txtImagesm"  /> <!-- them tep kieu file-->
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Nội dung chương trình</label>
                <textarea type="text" class="form-control" id="txtcontent" name="txtcontent" required="required"><?php echo $km_detail->Noi_dung?></textarea>
            </div>

            <script type="text/javascript" >
                config={};
                config.language = 'vi';
                config.entities_latin = false;
                config.filebrowserBrowseUrl ="ckfinder/ckfinder/ckfinder.html";
                config.filebrowserImageBrowseUrl ="ckfinder/ckfinder/ckfinder.html";
                CKEDITOR.replace('txtcontent',config);
            </script>



            <div class="form-group">
                <!--     <input name="button2" type="reset" class="btn-info" id="button2" value="Bỏ qua" />-->
                <button type="submit" name="btncapnhat" class="btn btn-warning" title="cập nhật" id="btncapnhat">Cập nhật</button>
                <a href="?view=QLKM"> <button type="button" class="btn btn-success" name="btnHuy" id="btnHuy" title="Hủy">Hủy</button></a>
            </div>

        </form>
    </div>
</div>
