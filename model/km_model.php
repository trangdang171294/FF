<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/21/2017
 * Time: 4:04 PM
 */
class km_model extends database
{
    public function getAllkm()
    {
        $sql="SELECT * FROM khuyen_mai";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function get_kmbyID($Makm)
    {
        $sql="SELECT * FROM khuyen_mai WHERE Ma_km=?";
        $this->setQuery($sql);
        return $this->loadRow(array($Makm));
    }
    public function get_kmlimit()
    {
        $sql="SELECT * FROM khuyen_mai LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getkm_except($Makm)
    {
        $sql="SELECt *  FROM khuyen_mai
WHERE khuyen_mai.Ma_km NOT IN (SELECT khuyen_mai.Ma_km FROM khuyen_mai WHERE khuyen_mai.Ma_km=?)";
        $this->setQuery($sql);
        return $this->loadAllRows(array($Makm));

    }
}