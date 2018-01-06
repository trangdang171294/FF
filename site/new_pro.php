<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/10/2017
 * Time: 2:08 PM
 */
?>

<div class="page-barner-area" style="background-image: url(img/contact_page_barner.jpg)">
    <div class="container wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="barner-text">
                    <h1>New menu</h1>
                    <ul class="page-location">
                        <li><a href="#">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li class="active"><a href="?view=new_food">Thực đơn</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" id="bg-product">

    <div class="wrapper wrap-content" >

        <div class="wrap-pro">
            <ul class="list-pro">


                <?php
                //            var_dump($bang_mon_an);
                ?>
                <?php foreach ($new_food as $mon)
                {
                    ?>
                    <!--                <input type="hidden" id="Ma_loai" name="Ma_loai" values="--><!--"/>-->
                    <li>
                        <img src="img/new-512.png" style=" width: 70px;
    position: absolute;
   ">
                        <a href="?view=product_burger&action=des_monan&Ma_mon=<?=$mon->Ma_mon_an;?>&ma_loai=<?php echo $mon->Ma_loai?>"><img
                                src="img/monan/<?=$mon->Hinh_anh ?>"
                                alt=""></a>
                        <h2><a href="#"><?php echo $mon->Ten_mon_an ?> -Mã: <?php echo $mon->Ma_mon_an ?></a>
                        </h2>
                        <p class="price"><span><?php echo number_format( $mon->Don_gia) ?> đ</span></p>
                        <a href="?view=product_burger&action=insertcart_newpro&Ma_mon_insert=<?=$mon->Ma_mon_an;?>&ma_loai=<?php echo $mon->Ma_loai?>" name="btnAddCart" class="order OrderCart">Chọn</a>
                    </li>
                    <?php
                }?>

            </ul>
        </div>

        <div style="margin-top:10px;">
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

