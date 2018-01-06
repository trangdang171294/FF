
<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/23/2017
 * Time: 10:09 AM
 */

//require_once ("database.php");

class M_mon_an extends database
{
    public function Doc_mon_an()
    {
        $sql = "select * from mon_an";
        $this -> setQuery($sql);
        return $this->loadAllRows();
    }
    public function Doc_mon_an_theo_ma($Ma_mon_an)
    {
        $sql = "SELECT mon_an.Ma_mon_an,mon_an.Ma_loai,loai_mon_an.Ten_loai,mon_an.Ten_mon_an,mon_an.Don_gia,mon_an.Hinh_anh,mon_an.Mo_ta FROM mon_an INNER JOIN loai_mon_an on mon_an.Ma_loai=loai_mon_an.Ma_loai where Ma_mon_an= '$Ma_mon_an' ";
        $this->setQuery($sql);
        return $this->loadRow();
    }
    public function Doc_mon_an_theo_ma_loai($ma_loai)
    {
        $sql= "select * from mon_an where Ma_loai = '$ma_loai' ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getFoodbyname($name)
    {
        $sql ="SELECT mon_an.Ma_mon_an,mon_an.Ma_loai,loai_mon_an.Ten_loai,mon_an.Ten_mon_an,mon_an.Don_gia,mon_an.Hinh_anh,mon_an.Mo_ta FROM mon_an INNER JOIN loai_mon_an on mon_an.Ma_loai=loai_mon_an.Ma_loai WHERE mon_an.Ten_mon_an LIKE '%$name%' OR mon_an.Mo_ta LIKE '%$name%' OR loai_mon_an.Ten_loai LIKE '%$name%' OR mon_an.Ma_mon_an LIKE '%$name%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function searchfood_salepage($name)
    {
        $sql ="SELECT mon_an.Ma_mon_an,mon_an.Ma_loai,loai_mon_an.Ten_loai,mon_an.Ten_mon_an,mon_an.Don_gia,mon_an.Hinh_anh,mon_an.Mo_ta FROM mon_an INNER JOIN loai_mon_an on mon_an.Ma_loai=loai_mon_an.Ma_loai WHERE mon_an.Ten_mon_an LIKE '%$name%' OR loai_mon_an.Ten_loai LIKE '%$name%' OR mon_an.Ma_mon_an ='$name'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function getnewfood()
    {
        $sql="SELECT * from mon_an ORDER BY mon_an.Ma_mon_an DESC LIMIT 10";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function Other_food($ma_loai, $ma_mon_an)
    {
        $sql= "select * from mon_an where Ma_loai = ? AND
Ma_mon_an NOT IN (SELECT Ma_mon_an FROM mon_an WHERE Ma_mon_an= ?)
ORDER BY Ma_mon_an DESC limit 3";
        $this->setQuery($sql);
        return $this->loadAllRows(array($ma_loai, $ma_mon_an));
    }
}
/*
$mon_an= new M_mon_an();
echo count($mon_an->Doc_mon_an()); */
