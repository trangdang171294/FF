<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/16/2017
 * Time: 2:09 AM
 */
?>
<div class="row">
    <?php foreach ($type_foods as $typefood)
    {?>
    <a href="?view=food&ma_loai=<?php echo $typefood->Ma_loai ?>">
        <div class="type_food col-lg-4">
            <h3><?php echo $typefood->Ten_loai?></h3>
        </div>
    </a>
    <?php }?>

</div>
