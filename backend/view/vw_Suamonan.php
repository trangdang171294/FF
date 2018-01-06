<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/6/2017
 * Time: 10:48 AM
 */
?>

<div class="panel panel-primary" >
    <div class="panel-heading"><h4>Sửa thông tin Món ăn</h4></div>
    <div class="panel-body">
        <input type="hidden" id="<?=$food_des->Ma_mon_an;?>">
        <form method="post" action="" name="frmThemTT">

            <div class="form-group">
                <label for="recipient-name" class="control-label">Tên món ăn</label>
                <input type="text" class="form-control" id="txtNameFood" name="txtNameFood" required="required" value="<?php echo $food_des->Ten_mon_an?>"/>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label"  >Loại món ăn</label>
                <select name="txtTypeFood" id="txtTypeFood"  style="width:150px;" required="required">
                    <option value="0">Loại món ăn</option>
                    <?php foreach($type_food as $loai)
                    {
                        $loai_mon=$food_des->Ma_loai;
                        ?>
                        <option
                                value="<?php echo $loai->Ma_loai;?>"
                        <?php
                        if($loai->Ma_loai==$loai_mon){ ?>
                                selected>
                            <?php } else {?>><?php }?>
                            <?php echo $loai->Ten_loai;?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Đơn giá</label>
                <input type="text" class="form-control" id="txtdongia" name="txtdongia" value="<?php echo $food_des->Don_gia?>"  required pattern="[0-9]+(\\.[0-9][0-9]?)?" title="Kí tự nhập là số" />
                <p id="message1"></p>
            </div>
            <div class="ex_img">
                <p><b>Ảnh</b></p>
                <img src="../img/monan/<?php echo $food_des->Hinh_anh?>" style="width: 40%"/>
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh</label>
                <input type="file" name="txtImage" id="txtImage"   /> <!-- them tep kieu file-->
            </div>

            <div class="form-group">
                <label for="recipient-name" class="control-label">Mô tả</label>
                <textarea type="text" class="form-control" id="txtmota" name="txtmota"><?php echo $food_des->Mo_ta?></textarea>
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
                <button type="submit" name="btnCapnhat" class="btn btn-warning" title="Cập nhật" id="btnCapnhat">Cập nhật</button>
                <a href="?view=Mon_an"> <button type="button" class="btn btn-success" name="btnHuy" id="btnHuy" title="Hủy">Hủy</button></a>
            </div>

        </form>
    </div>
</div>
