<?php
include_once ("model/database.php");
include_once ("model/m_login.php");
include_once ("controller/c_login.php");
$loginController= new c_login();
$loginController->Login();

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="css/Login.css" rel='stylesheet' type='text/css' />
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!--clock init-->
</head>
<body>
<!--/login-->

<div class="error_page">
    <!--/login-top-->

    <div class="error-top">
        <div class="title1">

        <h2 class="inner-tittle page"><img src="../img/img1.png" width="17%" alt="logo">Burger Shack</h2>
        </div>
        <div class="login">
            <h3 class="inner-tittle t-inner">Đăng Nhập</h3>
            <form method="post">
                <input type="text" class="text" placeholder="User Name" name="txtusername" id="txtusername" value="<?php if(isset($_COOKIE["user"])) echo $_COOKIE["user"]?>">
                <input type="password"  placeholder="Pass Word" name="txtpassword" id="txtpassword" value="<?php if(isset($_COOKIE["pass"])) echo $_COOKIE["pass"]?>">
                <div class="submit"><input type="submit" name="btnLogin" id="btnLogin" value="Login" ></div>
                <div class="clearfix"></div>

                <div class="new">
                    <p><label class="checkbox11"><input type="checkbox" name="check_save"><i> </i>Save Password ?</label></p>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>


    </div>


    <!--//login-top-->
</div>

<!--//login-->
<!--footer section start-->
<div class="footer">

</div>
<!--footer section end-->
<!--/404-->
<!--js -->

<script src="js/bootstrap.min.js"></script>
</body>
</html>
