<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:34 PM
 */
?>


<div class="slider-area">
    <div class="pogoSlider">
        <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background:url(img/slider/Untitled.png) no-repeat scroll 0 0 / cover;">
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500"><span>Món ngon mỗi ngày</span> </h1>
            <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="?view=new_food">đặt hàng ngay</a></h3>
        </div>
        <div class="pogoSlider-slide" data-transition="fade" style="background:url(img/slider/slideritem9.jpg) no-repeat scroll 0 0 / cover;">
            <h1 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="1500">khuyến mại hấp dẫn</h1>
            <h3 class="pogoSlider-slide-element" data-in="expand" data-out="expand" data-duration="2300"><a href="?view=khuyenmai">xem thêm</a></h3>
        </div>
        <div class="pogoSlider-slide" data-transition="fade" style="background:url(img/slider/Untitled4.png) no-repeat scroll 0 0 / cover;">
        </div>
    </div>
</div>
<!--ABOUT AREA-->
<section class="about-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                <div class="area-title">
                    <h2>về chúng tôi</h2>
                </div>
                <div class="about-content">
                    <p>Burger shack bắt đầu bằng một cửa hàng nhỏ. Tất cả những gì mà chúng tôi phải làm là mang đến những hương vị tuyệt vời trong từng món ăn, mang lại niềm vui ẩm thực cho tất cả mọi người.</p>
                    <a href="#" class="read-more">Xem thêm</a>
                </div>
            </div>
            <!--anh minh hoa-->
            <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="about-img">
                            <img src="img/about/about_one.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                        <div class="about-img">
                            <img src="img/about/about_two.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT AREA END-->
<section class="regular slider">
    <div class="container-fluid">
        <div class="row">

            <div class="menu-slide col-sm-8" style="background-color: #ffbe44;height: 354.15px; padding-top: 80px" id="center">
                <?php foreach ($type_food as $type)
                {?>
                <div><a href="?view=product_burger&ma_loai=<?php echo $type->Ma_loai ?>"><img src="img/<?php echo $type->Hinh_anh?>"><h4 align="center"><?php echo $type->Ten_loai ?></h4></a></div>

                <?php }?>
            </div>

            <div class="menu-text col-sm-4" style="background-color: #e31c3d; height: 354.15px">
                <div class="content">
                    <h1>Thực đơn</h1>
                    <p>Thực đơn  đa dạng và phong phú, có rất nhiều sự lựa chọn cho bạn, gia đình và bạn bè.</p>
                    <div  id="popup-bottom">
                        <a href="?view=new_food">ĐẶT HÀNG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--KM AREA-->

<!--EVENT AREA END-->


