<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/7/2017
 * Time: 1:03 PM
 */
class m_login extends database
{
    public function getUser($username, $pass)
    {
        $sql="select * from user WHERE User_name=? and password=?";
        $this->setQuery($sql);
        return $this->loadRow(array($username, $pass));
    }
}