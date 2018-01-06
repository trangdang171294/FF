<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/13/2017
 * Time: 8:48 AM
 */
session_start();
if(isset($_SESSION["curentAdmin"]))
{
    unset($_SESSION["curentAdmin"]);
}
if(!isset( $_SESSION["curentsalestaff"]))
{
    header("location:login2.php");
}
else
    if(!isset( $_SESSION["curentsalestaff"]))
    {
        header("location:login2.php");
    }
if(isset($_REQUEST['action']) and $_REQUEST["action"]== 'logout' )
{
    unset($_SESSION["username"]);
    unset($_SESSION["curentsalestaff"]);
    header("location:login2.php");
}
?>

<?php
include_once ("model/database.php");
include_once ("model/typefoodModel.php");
include_once ("controller/typefoodController.php");
$typefoodController= new typeFoodController();
include_once ("../model/m_mon_an.php");
include_once ("../controller/c_mon_an.php");
$foodController= new c_mon_an();
include_once ("../model/m_giohang.php");
include_once ('../controller/c_giohang.php');
$giohangcontroller = new c_giohang();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Trang bán hàng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link href="css/salespage_css.css" rel="stylesheet">
    <link href="css/hoadon.css" rel="stylesheet">
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!---js chart-->
    <!--
        <script type="text/javascript" src="js/raphael.js"></script>
        <script type="text/javascript" src="js/morris.js"></script>
        <script type="text/javascript" src="js/morris-data.js"></script>-->


    <!--//skycons-icons-->
</head>
<body style="background-color: azure;">

<div class="menu">
    <nav class="navbar navbar-inverse" id="menu">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="?view=home">
                    <h1>Burger Shack</h1>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                </ul>

                <form class="navbar-form navbar-left" method="post" action="?view=Search">
                    <div class="form-group">
                        <input type="search" name="name" class="form-control" placeholder="Search food">
                    </div>
                  <!--  <button type="submit" class="btn btn-default">Submit</button>-->
                </form>

                <ul class="nav navbar-nav navbar-right">

                    <li><a href="#">Sales staff: <?php echo $_SESSION["username"]?></a></li>
                    <li><a href="?action=logout"><span class="fa fa-power-off"></span> Log out</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
</div>
<div class="content">
    <div class="row">
        <div class="right-content col-lg-7" >
            <?php
            $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : "";
            switch ($view)
            {
                case "food":
                    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
                    switch ($action)
                    {
                        case "insertcart":
                            $giohangcontroller->insertcart_salefood();
                            break;
                        case "xoagiohang":
                            $giohangcontroller->deleteitem_cart();
                            break;
                        case "updatecart":
                            $giohangcontroller->updateitem_dh();
                            break;
                        case "thanhtoan":
                            $giohangcontroller->Them_Hoadon();
                            break;
                        default:
                            $foodController->Hien_thi_mon_an_theo_loai_salepage();
                            break;
                    }
                    break;
                case "home":
                    $typefoodController->Hientypefood();
                    break;
                case "Search":
                    $foodController->search_salepage();
                    break;
                default:
                    $typefoodController->Hientypefood();
                    break;
            }
            ?>
        </div>
        <div class="left-content col-lg-5">
            <?php
            $giohangcontroller->hiendonhang();
            ?>
        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!--Thank you for your invitation. I will come for the interview
i have a question want to ask, the interview will be in English or Vietnamese. Thank you!-->