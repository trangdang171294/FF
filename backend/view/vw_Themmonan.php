<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/5/2017
 * Time: 3:00 AM
 */
?>
<div class="panel panel-primary" >
    <div class="panel-heading"><h4>Thêm mới Món ăn</h4></div>
    <div class="panel-body">
        <form method="post" action="" name="frmThemTT">

            <div class="form-group">
                <label for="recipient-name" class="control-label">Tên món ăn</label>
                <input type="text" class="form-control" id="txtNameFood" name="txtNameFood" required="required"/>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label"  >Loại món ăn</label>
                <select name="txtTypeFood" id="txtTypeFood"  style="width:150px;" required="required">
                    <option value="">Chọn loại món ăn</option>
                    <?php foreach($type_food as $loai){?>
                        <option value="<?=$loai->Ma_loai;?>"><?=$loai->Ten_loai;?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Đơn giá</label>
                <input type="text" class="form-control" id="txtdongia" name="txtdongia" required pattern="[0-9]+(\\.[0-9][0-9]?)?" title="Kí tự nhập là số" />
                <p id="message1"></p>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh</label>
                <input type="file" name="txtImage" id="txtImage" required="required" /> <!-- them tep kieu file-->
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Mô tả</label>
                <textarea type="text" class="form-control" id="txtmota" name="txtmota"></textarea>
            </div>

            <script type="text/javascript" >
                config={};
                config.language = 'vi';
                config.entities_latin = false;
                config.filebrowserBrowseUrl ="ckfinder/ckfinder/ckfinder.html";
                config.filebrowserImageBrowseUrl ="ckfinder/ckfinder/ckfinder.html";
                CKEDITOR.replace('txtmota',config);
            </script>



            <div class="form-group">
           <!--     <input name="button2" type="reset" class="btn-info" id="button2" value="Bỏ qua" />-->
                <button type="submit" name="btnThem" class="btn btn-warning" title="Thêm" id="btnThem">Thêm</button>
                <a href="?view=Mon_an"> <button type="button" class="btn btn-success" name="btnHuy" id="btnHuy" title="Hủy">Hủy</button></a>
            </div>

        </form>
    </div>
</div>
