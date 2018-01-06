<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/28/2017
 * Time: 5:30 PM
 */
class typeFoodModel extends database
{
    public function getAlltype()
{
    $sql= "select * from loai_mon_an";
    $this->setQuery($sql);
    return $this->loadAllRows();
}
}