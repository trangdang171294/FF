<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 3/4/2017
 * Time: 1:14 AM
 */
?>

<div class="sidebar-menu">
    <header class="logo">
        <a href="?view=ThongKe"> <span id="logo"> <h1>Burger Shack</h1></span></a>
    </header>
    <!--/down-->
    <div class="down">
        <a href="#"><img src="images/Administrator-icon.png"></a>
        <a href="#"><span class=" name-caret"><?php echo $_SESSION["username"]?> </span></a>
        <p>Quản trị viên </p>
        <ul>
            <li><a class="tooltips" href="#"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
            <li><a class="tooltips" href="?action=logout" ><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
        </ul>
    </div>
    <!--//down-->
    <div class="menu">
        <ul id="menu" >
            <li><a href="?view=ThongKe"><i class="fa fa-line-chart"></i> <span>Biểu đồ thống kê</span></a></li>
            <li ><a href="#"><i class="fa fa-table"></i> <span> Quản Lý Thực Đơn</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul  >
                    <li ><a href="?view=Mon_an"> Món Ăn  </a></li>
                    <li  ><a href="?view=loai_mon_an">Danh Mục Món Ăn</a></li>
                </ul>
            </li>
            <li><a href="?view=QLDH"><i class="lnr lnr-pencil"></i> <span>Quản Lý Đơn Hàng</span></a></li>
            <li><a href="?view=QLuser"><i class="lnr lnr-pencil"></i> <span>Quản Lý Người dùng</span></a></li>
            <li><a href="?view=QLKM"><i class="lnr lnr-pencil"></i> <span>Quản lý Chương Trình Khuyến Mại</span></a></li>
            <li><a href="?view=QLTT"><i class="lnr lnr-pencil"></i> <span>Quản lý Bài Viết Tin Tức</span></a></li>
            <li><a href="?view=QLLH"><i class="lnr lnr-pencil"></i> <span>Quản Lý Liên Hệ</span></a></li>
            <li ><a href="#"><i class="lnr lnr-pencil"></i> <span>Khác</span> <span class="fa fa-angle-right" style="float: right"></span></a>
                <ul  >
                    <li ><a href="#"> Giới thiệu nhà hàng </a></li>

                </ul>
            </li>
        </ul>
    </div>
</div>
