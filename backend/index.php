<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 1:11 AM
 */
session_start();
if(isset($_SESSION["curentsalestaff"]))
{
    unset($_SESSION["curentsalestaff"]);
}
if(!isset( $_SESSION["curentAdmin"]))
    {
        header("location:login2.php");
    }
if(isset($_REQUEST['action']) and $_REQUEST["action"]== 'logout' )
{
    unset($_SESSION["username"]);
    unset($_SESSION["curentAdmin"]);
    header("location:login2.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Fast Food Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom CSS -->

    <link href="css/style2.css" rel='stylesheet' type='text/css' />
    <!--chart-->
    <link type="text/css" href="css/morris.css"/>
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!---js chart-->
<!--
    <script type="text/javascript" src="js/raphael.js"></script>
    <script type="text/javascript" src="js/morris.js"></script>
    <script type="text/javascript" src="js/morris-data.js"></script>-->


    <!--//skycons-icons-->
</head>
<body>
<?php
include_once ("model/database.php");
include_once ("model/foodModel.php");
include_once ("controller/monanController.php");
$foodController = new monanController();
include_once ("model/typefoodModel.php");
include_once ("controller/typefoodController.php");
$typefoodcontroller= new typefoodController();
include_once ("model/m_dh.php");
include_once ("controller/c_dh.php");
$donhangController= new c_dh();
include_once ("model/m_km.php");
include_once ("controller/c_km.php");
$kmController= new c_km();
include_once ("model/m_contact.php");
include_once ("controller/c_contact.php");
$contact_Controller= new c_contact();
include_once ("model/chart_model.php");
include_once ("controller/chart_controller.php");
$chartController= new chart_controller();

?>

<div class="page-container">
    <div class="row ">
    <div class="col-sm-3">
        <?php include_once ("view/sidebar.php")?>
    </div>
    <div class="col-sm-9 left-content">
        <div class="container-fluid" id="form-container">
        <div>
            <?php// include_once ("view/top_header.php")?>
        </div>


        <div>
            <?php
            $view = isset($_REQUEST['view']) ? $_REQUEST['view'] : "";
            switch ($view)
            {
                case "Mon_an":
                    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
                    switch ($action){
                        case "Add":
                            $foodController->actionAddFood();
                            break;
                        case "deletefood":
                            $foodController->actionDeleteFood();
                            break;
                        case "UpdateFood":
                            $foodController->actionUpdateFood();
                            break;
                        default:
                            $foodController->getAllFood();
                            break;

                    }
                    break;
                case "ThongKe":
                    $chartController->thongke();
                    break;
                case "QLKM":
                    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
                    switch ($action)
                    {
                        case "themkm":
                            $kmController->Insert_km();
                            break;
                        case "ChiTiet":
                            $kmController->HienCTKm();
                            break;
                        case "Suakm":
                            $kmController->Update_km();
                            break;
                        case "xoakm":
                            $kmController->Xoa_km();
                            break;
                        default:
                            $kmController->Hiendskm();
                            break;
                    }
                    break;
                case "QLDH":
                    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
                    switch ($action)
                    {
                        case "xemct":
                            $donhangController->HienDHbyID();
                            break;
                        case "suadh":
                            $donhangController->CapnhatDH();
                            break;
                        case "xoadh":
                            $donhangController->XoaDH();
                            break;
                        default:
                            $donhangController->HienthiDH();
                            break;
                    }
                    break;
                case "loai_mon_an":
                    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
                    switch ($action)
                    {
                        case "Add":
                            $typefoodcontroller->Them_loai();
                            break;
                        case "delete":
                            $typefoodcontroller->xoaloaimonan();
                            break;
                        case "update":
                            $typefoodcontroller->Suwatypefood();
                            break;
                        default:
                            $typefoodcontroller->listtypefood();
                            break;
                    }
                    break;
                case "QLLH":
                    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
                    switch ($action)
                    {
                        case "xemct":
                          //  $contact_Controller->Xemct_contact();
                            break;
                        case "update":
                            include_once ("view/vw_updateConatct.php");
                            break;
                        default:
                            $contact_Controller->Hienthi_contact();
                            break;
                    }
                    break;
                default:
                    $chartController->thongke();
                    break;

            }

            ?>
        </div>

            <footer>
                <p>© 2017 Burger Shack</p>
            </footer>

        </div>
    </div>
    </div>

</div>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
