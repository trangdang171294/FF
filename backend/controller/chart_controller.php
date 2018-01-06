<?php

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/12/2017
 * Time: 11:29 AM
 */
class chart_controller
{
    public $chartModel;

    public function __construct()
    {
        $this->chartModel= new chart_model();
    }
    public function thongke()
    {
        $pros = $this->toppro_saleinmonth();
        $sales = $this->thongkedoanhthutheonam();
        $grove= $this->tangtruong();
        $count_neworder= $this->So_donhangmoi();
        $shxl=$this->So_donhang_dangxl();
        $new_mess= $this->So_newmess();
        include_once ("view/chart.php");
    }

    public function toppro_saleinmonth()
    {
        return $this->chartModel->getTopProdInMonth();
    }

    public function thongkedoanhthutheonam()
    {
        $revenue = array();
        $result=$this->chartModel->getRevenueInMonth();
        foreach ($result as $row)
        {
            $month= $row->month;

        }


        for($i=1;$i<=$month;$i++){
            $revenue[$i] = 0;
        }
        foreach ($result as $row)
        {
            $revenue[$row->month]= $row->doanhthu;

        }
        return $revenue;
    }
    public function tangtruong()
    {
        $result=$this->chartModel->getRevenueInMonth();
        foreach ($result as $row)
        {
            $current_doanhthu= $row->doanhthu;
            @$last_month=  $result[$row-1];
            $doanhthu_lastmonth= $last_month->doanhthu;
        }
        $ty_le =($current_doanhthu-$doanhthu_lastmonth)/$doanhthu_lastmonth*100;
        $ty_le=(int)$ty_le;
        return $ty_le;
    }
    public function So_donhangmoi()
    {
        return count($this->chartModel->getall_neworder());
    }
    public function So_donhang_dangxl()
    {
        return count($this->chartModel->get_order_dangxl());
    }
    public function So_newmess()
    {
        return count($this->chartModel->get_newmess());
    }

}