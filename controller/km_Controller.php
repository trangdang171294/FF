<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/21/2017
 * Time: 3:02 AM
 */
class km_Controller
{
    public $kmModal;
    public function __construct()
    {
        $this->kmModal= new km_model();
    }
    public function Hienkm_home()
    {
        $dskm_lm= $this->kmModal->get_kmlimit();
        //print_r($dskm_lm);
        include_once ("site/load_km_home.php");
    }
    public function Hiendskm()
    {
        $km_list=$this->kmModal->getAllkm();
        include_once ("site/khuyenmai.php");
    }
    public function Hienkm_ID()
    {
        if($Ma_km=isset($_REQUEST['ma']) ? $_REQUEST['ma'] : '0') {
            if($Ma_km!=0) {
                $km_detail = $this->kmModal->get_kmbyID($Ma_km);
                include_once("site/single_km.php");
            }
            else
                $this->Hiendskm();
        }
    }
    public function Hiendskm_CTKM()
    {
        if($Ma_km=isset($_REQUEST['ma']) ? $_REQUEST['ma'] : '0')
        {
            $km_list = $this->kmModal->getkm_except($Ma_km);
            include_once("site/total_km.php");
        }
    }

}