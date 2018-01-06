<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/21/2017
 * Time: 4:23 PM
 */
?>
<section class="event-area section-padding">
    <div class="event-area-bg"></div>
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h3>Khuyến mại</h3>
                </div>
            </div>
        </div>
        <div class="row " id="list-km">
            <div class="container">
                <div class="row">
                    <?php foreach ($dskm_lm as $km_lm){?>
                        <div class="col-sm-4">
                            <a href="?view=khuyenmai&action=xemct&ma=<?php echo $km_lm->Ma_km?>" class="thumnail1">
                                <img src="img/khuyenmai/<?php echo  $km_lm->image?>" >
                                <p><?php echo  $km_lm->Ten_km?></p>
                                <p class="date" style="padding-top: 0px;padding-bottom: 10px">
                                    <span><?php
                                        $d_st= date_create($km_lm->Date_start);
                                        $d_end= date_create($km_lm->Date_end);
                                        echo date_format($d_st,"d/m/Y")." - ".date_format($d_end,"d/m/Y");
                                        ?></span>
                                </p>
                            </a>
                        </div>
                    <?php }?>
                </div>

            </div>
        </div>


    </div>
</section>
