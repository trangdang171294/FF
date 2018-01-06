<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:48 PM
 */
?>

<div class="event-details-img" align="center">
    <img src="img/khuyenmai/<?php echo $km_detail->Anh_to?>" alt="">
</div>

<div class="container" style="padding-bottom: 60px; border-bottom: 2px solid #d0963e;">
<div class="single-event">
    <div class="event-content">
        <div class="eventdetail">
            <h1><?php echo $km_detail->Ten_km?></h1>
            <p class="event-meta"><?php
                $d_st= date_create($km_detail->Date_start);
                $d_end= date_create($km_detail->Date_end);
                echo date_format($d_st,"d/m/Y")." - ".date_format($d_end,"d/m/Y");
                ?></p>
            <div class="ndungkm">
                <?php echo $km_detail->Noi_dung?>
            </div>
        </div>
    </div>

</div>
</div>
