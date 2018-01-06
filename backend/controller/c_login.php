<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/7/2017
 * Time: 1:10 PM
 * cookies luu TT ve phia client
 * session luu o phia server
 */
class c_login
{
    public $loginController;
    public function __construct()
    {
        $this->loginController=new m_login();
    }

    public function Login()
    {
       if(isset($_REQUEST["btnLogin"]))
       {
           $username= $_POST['txtusername'];
           $password= $_POST['txtpassword'];
           if($users=$this->loginController->getUser($username,$password))
           {
               //luu thong tin mat khau vao session
               session_start();
               $_SESSION["username"]=$username;
               $_SESSION["password"]=$password;
               $role= $users->role;
               if($role==1)
               {
                   $_SESSION["curentAdmin"]= $role;
                   header("location:index.php");
               }
               if($role==2) {
                   $_SESSION["curentsalestaff"]=$role;
                   header("location:salespage.php");
               }
               //luu mk vao cookie
               if(isset($_POST["check_save"]))
               {
                   setcookie("user",$username, time()+60*60);
                   setcookie("pass",$password, time()+60*60);
               }
           }
           else {
               echo '<script type="text/javascript">alert("Username or Password sai");</script>';
           }

       }
       /*
        $username= null;
        $password= null;
       if(isset($_COOKIE["user"]))
       {
           $username=$_COOKIE["user"];
           $password=$_COOKIE["pass"];
       }
       */
    }
}
