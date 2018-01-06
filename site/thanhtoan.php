<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/9/2017
 * Time: 1:19 AM
 */
?>
<div class="page-barner-area" style="background-image: url(img/reservation_bg.jpg)">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>Đặt hàng</h1>
                    <ul class="page-location">
                        <li><a href="#">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="#">Thực đơn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="reservation-area section-padding">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="area-title text-center">
                    <h2>Order</h2>
                    <h3>Đặt hàng trực tuyến</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <form class="main-reservaton-form" action="#" method="post">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <label for="reservation_name"><i class="fa fa-user-o"></i></label>
                            <input type="text" name="txtname" id="txtname" placeholder="Họ và Tên" required="required">
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <label for="reservation_phone"><i class="fa fa-phone"></i></label>
                            <input type="text" name="txtphone" id="txtphone" placeholder="Số điện thoại" required="required" pattern="^[0-9]*$" title="không nhập đúng sdt">
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <label for="reservation_phone"><i class="fa fa-map-marker"></i></label>
                            <input type="text" name="txtaddress" id="txtaddress" placeholder="Địa chỉ của bạn" required="required">
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <button type="submit" name="btnthanhtoan" id="btnthanhtoan" style="float: right">Gửi</button>
                            <a href="?view=Mon_an" style="float: left"> <button type="button" name="btnHuy" id="btnHuy" title="Hủy">Hủy</button></a>
                        </div>
                        <div class="col-lg-12 text-center">
                            <p>Hãy gửi đơn hàng của bạn. Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận đơn hàng của bạn.</p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center">
                <div class="reservation-call-to-action">
                    <h4>Đặt hàng qua điện thoại</h4>
                    <p>Chúng tôi nhận đặt hàng thông qua điện thoại. Hãy gọi <strong>1800105681</strong> từ 8am-5pm, thứ 2 đến thứ 6. Cảm ơn!</p>
                </div>
            </div>

        </div>
    </div>
</section>
<div id="float-nav" class="pro">
    <a href="?view=product_burger&action=hienthigiohang" class="cart cartNumber"><span class="fa fa-shopping-cart" style="display: inherit;font-size: 23px;"></span>
        <?php


        if(isset($_SESSION["giohang"])) {

            echo $_SESSION["tongsoluong"];
        }
        else echo 0?>
    </a>
</div>
