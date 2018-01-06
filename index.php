<?php
session_start();
include_once('model/database.php');
include_once('model/m_mon_an.php');
include_once('controller/c_mon_an.php');
include_once ('model/typeFoodModel.php');
include_once ('controller/typeFoodController.php');
$MonanController= new C_mon_an();
$typeFoodController= new typeFoodController();
include_once ('model/m_giohang.php');
include_once ('controller/c_giohang.php');
$giohangcontroller= new c_giohang();
include_once ("model/km_model.php");
include_once ("controller/km_Controller.php");
$km_controller= new km_Controller();
include_once ("backend/model/m_contact.php");
include_once ("backend/controller/c_contact.php");
$contactController= new c_contact();
?>

<!doctype html>




<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== TITLE TAG ======-->
    <title>Fast food</title>
    <!--====== STYLESHEETS =======-->
    <!--<link rel="stylesheet" href="css/normalize.css">-->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/pogo-slider.css"><!-- slider-->

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css"> <!--reponsive popup-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!--====== MAIN STYLESHEETS ======-->
    <link href="css/responsive.css" rel="stylesheet"> <!-- reponsive-->

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/search_error.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/detail_productcss.css">
    <link rel="stylesheet" href="css/hoadon.css">

    <script src="js/vendor/modernizr-2.8.3.min.js"></script> <!--search-->

</head>
<body>

<div class="header">

    <?php
    $typeFoodController->Loai_mon_an_header();

    ?>
</div>



<div class="noidung">


    <?php
    $view = isset($_REQUEST["view"]) ? $_REQUEST["view"] : "";
    switch ($view)
    {
        case "product_burger":
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
            switch ($action) {
                case "des_monan":
                    $MonanController->Hien_thi_mon_an_theo_ma();
                    break;
                case "insertcart":
                    $giohangcontroller->getmonanbyloai();
                    break;
                case 'insertcart_newpro':
                    $MonanController->get_new_food();
                    break;
                case "hienthigiohang":
                    $giohangcontroller->hienthigiohang();
                    break;
                case "updatecart":
                    $giohangcontroller->updatecart();
                    break;
                case "xoagiohang":
                    $giohangcontroller->xoagiohang();
                    break;
                case "thanhtoan":
                    $giohangcontroller->themdh();
                    break;
                default:
                    $MonanController->Hien_thi_mon_an_theo_loai();
                    break;
            }
            break;
        case "new_food":
            $MonanController->get_new_food();
            break;
            /*
        case "giohang":
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
            switch ($action) {
                default:
                    $MonanController->Hien_thi_mon_an_theo_loai();
                    break;
            }
            break;*/
        case "Search":
            $MonanController->Timkiem();
            break;
        case "khuyenmai":

    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
    switch ($action)
    {
        case "xemct":
            $km_controller->Hienkm_ID();
            $km_controller->Hiendskm_CTKM();
            break;
        default:
            $km_controller->Hiendskm();
            break;
    }
            break;
        case "tintuc":
            $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
            switch ($action)
            {
                case "xemtt":
                    include_once ("site/single_tintuc.php");
                    break;
                default:
                    include_once ("site/tintuc.php");
                    break;
            }
            break;
        case "contact":
            $contactController->Send_contact();
            break;
        case "hd" :
            include_once ("site/giohang.php");
            break;

        default:
            $typeFoodController->Hien_thi_loai_mon_an();
            $MonanController->Hien_thi_mon_an_theo_loai_home();
            $km_controller->Hienkm_home();
            break;
    }

    ?>

</div>

<div>
    <?php include_once('site/footer.php') ?>
</div>


<!--====== SCRIPTS JS ======-->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>

<!--====== PLUGINS JS ======-->
<script src="js/vendor/jquery.easing.1.3.js"></script> <!--button back to top-->

<script src="js/jquery.pogo-slider.js"></script>

<!--button back to stop-->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/datepicker.min.js"></script>
<script src="js/timepicker.min.js"></script>

<script src="js/slick.js"></script>
<script src="js/jquery.sticky.js"></script> <!--menu wrapper-->
<!--===== ACTIVE JS=====-->
<script src="js/main.js"></script>
<script type="text/javascript" src="js/function.js"></script>
<!--slick slider-->
<script type="text/javascript">
    $(document).on('ready', function () {
        $("#center").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3
        });

    });
</script>


</body>

</html>
