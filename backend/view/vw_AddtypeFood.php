<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/29/2017
 * Time: 4:20 PM
 */
?>
<div class="panel panel-primary" >
    <div class="panel-heading"><h4>Thêm mới loại món ăn</h4></div>
    <div class="panel-body">
        <form method="post" action="" name="frmThemTT">

            <div class="form-group">
                <label for="recipient-name" class="control-label">Tên loại</label>
                <input type="text" class="form-control" id="txtNametypeFood" name="txtNametypeFood" required="required"/>
            </div>



            <div class="form-group">
                <label for="recipient-name" class="control-label">Ảnh minh họa</label>
                <input type="file" name="txtImage" id="txtImage" required="required" /> <!-- them tep kieu file-->
            </div>





            <div class="form-group">
                <!--     <input name="button2" type="reset" class="btn-info" id="button2" value="Bỏ qua" />-->
                <button type="submit" name="btnThem" class="btn btn-warning" title="Thêm" id="btnThem">Thêm</button>
                <a href="?view=loai_mon_an"> <button type="button" class="btn btn-success" name="btnHuy" id="btnHuy" title="Hủy">Hủy</button></a>
            </div>

        </form>
    </div>
</div>
