<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/1/2017
 * Time: 10:02 AM
 */
class m_contact extends database
{
    public function insert_contact($ho_ten,$email,$phone,$title,$content)
    {
        $sql="INSERT INTO lien_he(Ho_ten, Email, Dien_thoai, Tieu_de, Noi_dung, Duyet) VALUES (?,?,?,?,?,0)";
        $this->setQuery($sql);
        return $this->execute(array($ho_ten,$email,$phone,$title,$content));
    }

    public function getallContact()
    {
        $sql="SELECT * FROM lien_he ORDER BY MLH DESC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function getContactbyID($MLH)
    {
        $sql="SELECT * FROM lien_he WHERE MLH=?";
        $this->setQuery($sql);
        return $this->loadRow(array($MLH));
    }

    public function EditContac($name,$email,$phone,$title,$content,$status,$MLH)
    {
        $sql="UPDATE lien_he SET Ho_ten=?,Email=?,Dien_thoai=?,Tieu_de=?,Noi_dung=?,Duyet=? WHERE MLH=?";
        $this->setQuery($sql);
        return $this->execute(array($name,$email,$phone,$title,$content,$status,$MLH));
    }
}