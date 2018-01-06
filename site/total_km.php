<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/22/2017
 * Time: 12:42 AM
 */
?>

<section class="event-area section-padding">
    <div class="container wow fadeIn" style="margin-top: -67px">
        <h2 style="color: #333">Khuyến mại khác</h2>
        <div class="row " id="list-km">
            <div class="container">
                <div class="row" style="margin-top: 26px;">
                    <?php foreach ($km_list as $km)
                    {?>
                        <div class="col-lg-4">
                            <a href="?view=khuyenmai&action=xemct&ma=<?php echo $km->Ma_km?>" class="thumnail1">
                                <img src="img/khuyenmai/<?php echo $km->image?>" >
                                <p><?php echo $km->Ten_km?></p>

                                <p class="date" style="padding-top: 0px;padding-bottom: 10px">
                           <span><?php
                               $d_st= date_create($km->Date_start);
                               $d_end= date_create($km->Date_end);
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
