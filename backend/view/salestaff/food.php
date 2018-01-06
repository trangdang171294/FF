<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/16/2017
 * Time: 8:03 AM
 */
?>

<div class="row">
    <?php foreach ($bang_mon_an as $food)
    {?>
        <a href="?view=food&action=insertcart&Ma_mon_insert=<?=$food->Ma_mon_an;?>&ma_loai=<?php echo $food->Ma_loai?>">
            <div class="food col-lg-4">
                <h4><?php echo $food->Ten_mon_an?>-mã: <?php echo $food->Ma_mon_an?></h4>
            </div>
        </a>
    <?php }?>
</div>
<a href="?view=home" style="margin-left: 80px"> <button type="button" class="btn btn-primary" name="btnback"><i class="fa fa-undo" title="Quay lại"></i> Quay lại </button></a>


