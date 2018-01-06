
<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2/23/2017
 * Time: 10:50 AM
 */

//include_once("../model/m_mon_an.php");
class C_mon_an
{
    public $MonanController;
    public function __construct()
    {
        $this->MonanController = new m_mon_an();
    }

    /*
    public function Hien_thi_mon_an()
    {
        $mon_an = $this->MonanController->Doc_mon_an();
        include_once ("site/product_burger.php");// view ma include trong controller r thi ko include trong index nua, dm kho >.<

    }
    */
    public function Hien_thi_mon_an_theo_loai()
    {
        if ($ma_loai = isset($_REQUEST['ma_loai']) ? $_REQUEST['ma_loai'] : '0') {
            if ($ma_loai != 0)
                $bang_mon_an = $this->MonanController->Doc_mon_an_theo_ma_loai($ma_loai);
            include_once('site/product_burger.php');
        }
    }
    public function Hien_thi_mon_an_theo_loai_salepage()
    {
        if ($ma_loai = isset($_REQUEST['ma_loai']) ? $_REQUEST['ma_loai'] : '0') {
            if ($ma_loai != 0)
                $bang_mon_an = $this->MonanController->Doc_mon_an_theo_ma_loai($ma_loai);
            include_once('../backend/view/salestaff/food.php');
        }
    }

    public function search_salepage()
    {
        if ($name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "") {
            if ($name != "") {
                $mon_an_tk = $this->MonanController->searchfood_salepage($name);
                if (count($mon_an_tk) != 0)
                    include_once('../backend/view/salestaff/search_result.php');
                else
                    echo "<h1> Dữ liệu không tìm thấy</h1>";
            }
        }
    }

   public function Hien_thi_mon_an_theo_loai_home()
    {
        if ($ma_loai = isset($_REQUEST['ma_loai']) ? $_REQUEST['ma_loai'] : '0') {
            if ($ma_loai != 0)
                $mon_an = $this->MonanController->Doc_mon_an_theo_ma_loai($ma_loai);
            include_once('site/product_burger.php');
        }
    }
   public function Hien_thi_mon_an_theo_ma()
    {
        if ($ma_mon = isset($_REQUEST['Ma_mon']) ? $_REQUEST['Ma_mon'] : '0') {
            if ($ma_mon != 0)
                $mon_an_detail = $this->MonanController->Doc_mon_an_theo_ma($ma_mon);
            include_once('site/detail_product.php');
        }
    }
    public function Timkiem()
    {
        if ($name = isset($_REQUEST['name']) ? $_REQUEST['name'] : "") {
            if ($name != "") {
                $mon_an_tk = $this->MonanController->getFoodbyname($name);
                if(count($mon_an_tk)!=0)
                include_once('site/result.php');
                else
                    include_once ("site/search_error.php");
            }
}
   else
   {
       include_once ('controller/typeFoodController.php');
       $typeFoodController= new typeFoodController();
       $typeFoodController->Hien_thi_loai_mon_an();
   }
    }

    public function get_new_food()
    {
        $new_food= $this->MonanController->getnewfood();
        include_once ("site/new_pro.php");
    }

    public function get_other_food()
    {
        if ($ma_loai = isset($_REQUEST['ma_loai']) ? $_REQUEST['ma_loai'] : '0' and $ma_mon = isset($_REQUEST['Ma_mon']) ? $_REQUEST['Ma_mon'] : '0')
        {
            $other_food= $this->MonanController->Other_food($ma_loai,$ma_mon);
        }
        return $other_food;
    }

}
?>
