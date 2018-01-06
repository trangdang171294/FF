<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:47 PM
 */
?>
<!--

<div class="page-barner-area">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>Khuyến mại</h1>
                    <ul class="page-location">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="#">Khuyến mại</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
-->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 663px;" role="listbox">
        <?php foreach ($km_list as $km=>$vl)
        {?>
        <div class="item <?php if($km==0) echo "active"; else echo "";?>">
            <img src="img/khuyenmai/<?php echo $vl->Anh_to?>" alt="<?php echo $vl->Anh_to?>">
        </div>
      <?php }?>

        <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>


<!--
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
        <div class="row event-list">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="single-event">
                    <div class="event-img">
                        <img src="img/km1.png" alt="">
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <h3><a href="?view=khuyenmai&action=xemct">Ăn thật no giá khỏi lo</a></h3>
                            <p class="event-meta">01-28/02/2017</p>
                            <p>Áp dụng cho tất cả các phần ăn combo</p>
                        </div>
                    </div>
                </div>
                <div class="single-event">
                    <div class="event-img">
                        <img src="img/km2.png" alt="">
                    </div>
                    <div class="event-content">
                        <div class="event-details">
                            <h3><a href="#">Bữa trưa vui vẻ</a></h3>
                            <p class="event-meta">Áp dụng từ thứ 2- thứ 6, từ 11h đến 14h</p>
                            <p>Giá chỉ từ 32000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
-->
<section class="event-area section-padding">
    <div class="event-area-bg"></div>
    <div class="container wow fadeIn">
        <div class="row " id="list-km">
            <div class="container">
                <div class="row">
                    <?php foreach ($km_list as $km)
                    {?>
                    <div class="col-sm-4">
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
