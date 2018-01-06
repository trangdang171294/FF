<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/28/2017
 * Time: 5:34 PM
 */
class typeFoodController
{
    public $typeFoodController;

    public function __construct()
    {
        $this->typeFoodController = new typeFoodModel();
    }
    public function Hien_thi_loai_mon_an()
    {
        $type_food = $this->typeFoodController->getAlltype();
        include_once ("site/home.php");// view ma include trong controller r thi ko include trong index nua, dm kho >.<

    }
    public function Loai_mon_an_header()
    {
        $type_food = $this->typeFoodController->getAlltype();
        include_once ("site/header.php");
    }
}