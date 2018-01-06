<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:31 PM
 */
include_once ('model/m_giohang.php');
include_once ('controller/c_giohang.php');
$giohangcontroller= new c_giohang();
?>


<a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a><!--button back home-->
<!--<div class="menucart_content" style="display: inline-block"><p style="text-align:center">Giỏ hàng trống</p></div>-->
<!--START TOP AREA-->
<header class="top-area" id="home">
    <div class="header-top-area">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-6 col-sm-8">
                        <div class="call-to-action">
                            <p><i class="fa fa-envelope-o"></i>Email: <span>Fastfood@gmail.com</a></span></p>
                            <p><i class="fa fa-phone"></i>Telephone: <span>1800-1006</span></p>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 col-sm-4">

                        <div class="book-table-popup">
                          <!--  <a href="#">Đặt hàng</a>-->
                            <div class="giohang">
                                <a href="?view=product_burger&action=hienthigiohang"> <span class="fa fa-shopping-cart"></span><span style="font-size: 15px;margin-left: 10px;">(
                                        <?php
                                        $giohangcontroller->insertcart();
                                        $giohangcontroller->deleteCart();
                                        $giohangcontroller->update_item_cart();
                                        $tongsl=0;

                                        if(isset($_SESSION["giohang"]))
                                        {
                                            /*
                                            for($i=0;$i<count($_SESSION["giohang"]);$i++)
                                            {
                                                $tongsl +=$_SESSION["giohang"][$i]["soluong"];
                                                $_SESSION["tongsoluong"]=$tongsl;
                                            }
                                            */
                                            foreach($_SESSION['giohang'] as $k=>$v){

                                                $tongsl=$tongsl+$v;
                                            }
                                            $_SESSION["tongsoluong"]=$tongsl;
                                            echo $_SESSION["tongsoluong"];
                                        }
                                        else echo 0?>)
                                    </span></p></a>
                            </div>
                        </div>




                        <div class="top-social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area" >
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container" style="height:81px" >
                    <div class="navbar-header" >
                        <button class="collapsed navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-scrollspy">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="?view=home" class="navbar-brand white"  id="logo"><img src="img/img1.png" alt="logo"></a>
                        <a href="?view=home" class="navbar-brand"  id="logo"><img src="img/img1.png" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">



                        <!--search form-->
                        <div class="search-form-area">
                            <div class="search-form-overlay"></div>
                            <a class="search-form-trigger" href="#search-form">Search<span></span></a>
                            <div id="search-form" class="search-form">
                                <form action="?view=Search" method="post">
                                    <input type="search" name="name" placeholder="Tìm sản phẩm">
                                </form>
                            </div>

                        </div>



                        <ul id="nav" class="nav navbar-nav cl-effect-11">
                            <li class="active"><a class="at-drop-down" href="?view=home">Trang chủ <i class="hidden-md hidden-lg fa fa-angle-down"></i></a></li>
                            <li><a class="at-drop-down" href="?view=new_food">Thực đơn<i class="hidden-md hidden-lg fa fa-angle-down"></i></a>
                                <ul class="sub-menu">
                                    <?php foreach ($type_food as $type)
                                    {?>
                                    <li><a href="?view=product_burger&ma_loai=<?php echo $type->Ma_loai ?>"><?php echo $type->Ten_loai ?></a></li>
                                    <?php }?>
                                </ul>
                            </li>
                            <li><a href="?view=khuyenmai">Khuyến mại</a></li>
                            <li><a href="?view=tintuc">Tin tức</a></li>
                            <li><a href="?view=contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--END MAINMENU AREA END-->
    </div>

    <!--HHOME SLIDER AREA-->
    <!--HOME SLIDER AREA END-->

</header>
<!--END TOP AREA-->

<div>

</div>