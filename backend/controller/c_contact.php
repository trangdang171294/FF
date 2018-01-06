<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/1/2017
 * Time: 10:11 AM
 */
class c_contact
{
    public $ContactModel;
    var $message=null;

    public function __construct()
    {
        $this->ContactModel=new m_contact();
    }

    public function Send_contact()
    {
        if(isset($_POST['btnContact']))
        {
            $name=$_POST['form_name'];
            $email=$_POST['form_email'];
            $phone=$_POST['form_phone'];
            $title=$_POST['form_subject'];
            $content=$_POST['form_message'];
            if($this->ContactModel->insert_contact($name,$email,$phone,$title,$content)) {
                echo "<script> alert('Cảm ơn bạn đã gửi tin nhắn cho chúng tôi. Chúng tôi sẽ phản hồi trong thời gian sớm nhất!') </script>";
                echo "<script> window.location = 'index.php' </script>";
            }
        }
        include_once ("site/contact.php");
    }

    public function Hienthi_contact()
    {
        $contact_list= $this->ContactModel->getallContact();
        include_once ("view/vw_qlylienhe.php");
    }

    public function Xemct_contact()
    {
        if($MLH=isset($_REQUEST['MLH']) ? $_REQUEST['MLH'] : '0')
        {
            $contact= $this->ContactModel->getContactbyID($MLH);
            include_once ("view/vw_CTLH.php");
        }
    }

    public function Sua_contact()
    {
        $MLH=isset($_REQUEST['MLH']) ? $_REQUEST['MLH'] : '0';
        $contact= $this->ContactModel->getContactbyID($MLH);
        include_once ("view/vw_updateConatct.php");
    }
}