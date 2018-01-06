<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/17/2017
 * Time: 9:44 PM
 */
include_once('model/m_mon_an.php');
include_once('controller/c_mon_an.php');
$MonanController= new C_mon_an();
$other_food= $MonanController->get_other_food();
?>

<div class="page-barner-area" style="background-image: url(img/contact_page_barner.jpg)">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>Thực đơn</h1>
                    <ul class="page-location">
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="#">Thực đơn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--detail product-->
<div class="wrapper" style="max-width: 1250px" >
<!--    <input type="hidden" id="Ma_mon_an" name="Ma_mon_an" values="--><!--"/>-->
    <div class="pro-detail clearfix" style="border-bottom: 1px solid rgba(128, 128, 128, 0.26);;">
        <div class="thumb" style="height: 436px;">
            <img src="img/monan/<?php echo $mon_an_detail->Hinh_anh?>" class="layer-flax layer-plax" alt="bigthumb" style="top: 0px; left: -6.9533px;">
        </div>
        <div class="meta clearfix">
            <div class="box">
                <div class="breadcrumb" >
                    <a href="#" style="text-transform: capitalize;font-size: 16px;"><?php echo $mon_an_detail->Ten_loai?></a>
                </div>
                <h1 class="title"><?php echo $mon_an_detail->Ten_mon_an?></h1>
                <p class="cal"></p>
                <p class="price" >Giá: <?php echo number_format( $mon_an_detail->Don_gia) ?> đ</p>
                <a href="?view=product_burger&action=des_monan&Ma_mon_insert=<?=$mon_an_detail->Ma_mon_an;?>&Ma_mon=<?=$mon_an_detail->Ma_mon_an;?>&ma_loai=<?php echo $mon_an_detail->Ma_loai?>" class="addcart OrderCart">Chọn</a>
            </div>
            <div class="box">

                <p class="intro-title">Giới thiệu</p>
                <div class="wp-editor">
                    <p><strong><?php echo $mon_an_detail->Mo_ta?></strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="other_food"style="padding-bottom: 50px" >
        <h3 style="    position: relative;
    top: 20px;
    left: 57px;">Món ăn cùng loại</h3>
        <div class="wrapper wrap-content" >
            <div class="wrap-pro">
                <ul class="list-pro">

                    <?php
                    //            var_dump($bang_mon_an);
                    ?>
                    <?php foreach ($other_food as $mon)
                    {
                        ?>
                        <!--                <input type="hidden" id="Ma_loai" name="Ma_loai" values="--><!--"/>-->
                        <li>
                            <a href="?view=product_burger&action=des_monan&Ma_mon=<?=$mon->Ma_mon_an;?>&ma_loai=<?= $mon->Ma_loai?>"><img
                                        src="img/monan/<?=$mon->Hinh_anh ?>"
                                        alt=""></a>
                            <h2><a href="#"><?php echo $mon->Ten_mon_an ?> -Mã: <?php echo $mon->Ma_mon_an ?></a>
                            </h2>
                            <p class="price"><span><?php echo number_format( $mon->Don_gia) ?> đ</span></p>
                            <a href="?view=product_burger&action=des_monan&Ma_mon_insert=<?=$mon->Ma_mon_an;?>&Ma_mon=<?=$mon_an_detail->Ma_mon_an?>&ma_loai=<?php echo $mon->Ma_loai?>" name="btnAddCart" class="order OrderCart">Chọn</a>
                        </li>
                        <?php
                    }?>

                </ul>
            </div>

            <div style="margin-top:10px;">
            </div>
        </div>
    </div>
</div>

<div id="float-nav" class="pro">
    <a href="?view=product_burger&action=hienthigiohang" class="cart cartNumber"><span class="fa fa-shopping-cart" style="display: inherit;font-size: 23px;"></span>
        <?php
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
        else echo 0?>
    </a>
</div>

