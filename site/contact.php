<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:51 PM
 */

?>

<div class="page-barner-area"  style="background-image: url(img/about_page_barner.jpg)">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>Contact <span>Us</span></h1>
                    <ul class="page-location">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-area section-padding">
    <div class="container wow fadeIn">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-contact-widget address-widget text-center">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <address>Tầng 3, coop mart, km10 Nguyễn Trãi, Thanh Xuân, Hà Nội</address>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-contact-widget address-widget text-center">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <a href="#">1800105681</a>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <div class="single-contact-widget address-widget text-center">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <a href="#">Fastfood@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="area-title text-center">
                    <h2>Contacts</h2>
                    <h3>Gửi tin nhắn cho chúng tôi</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="contact-form">



                    <form action="" id="contact-form" method="post">
                        <div class="form-group" id="name-field">
                            <div class="form-input col-md-6">
                                <input type="text" class="form-control" id="form_name" name="form_name" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group" id="email-field">
                            <div class="form-input col-md-6">
                                <input type="email" class="form-control" id="form_email" name="form_email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group" id="phone-field">
                            <div class="form-input col-md-6">
                                <input type="text" class="form-control" id="form_phone" name="form_phone" placeholder="Your Phone No">
                            </div>
                        </div>
                        <div class="form-group" id="subject-field">
                            <div class="form-input col-md-6">
                                <input type="text" class="form-control" id="form_subject" name="form_subject" placeholder="Your Subject">
                            </div>
                        </div>
                        <div class="form-group" id="message-field">
                            <div class="form-input col-md-12">
                                <textarea class="form-control" rows="6" id="form_message" name="form_message" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btnContact" id="btnContact">Send Message</button>
                        </div>
                    </form>


                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="google-map" id="map" style="height:400px; width:100%;"></div>
            </div>
        </div>
    </div>
</section>

