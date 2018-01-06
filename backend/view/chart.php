<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 4/11/2017
 * Time: 10:14 AM
 */


?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class=" row" style="width: 1000px; position: relative; left: 50px">
    <div class="col-lg-12">
        <h1 class="page-header">Thống kê</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<div class="row" style="width: 950px;position: relative;
    left: 70px;">
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $count_neworder?></div>
                        <div>Đơn hàng mới!</div>
                    </div>
                </div>
            </div>
            <a href="?view=QLDH">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $shxl?></div>
                        <div>Đơn hàng đang xử lý!</div>
                    </div>
                </div>
            </div>
            <a href="?view=QLDH">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comment fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $new_mess?></div>
                        <div>Ý kiến phản hồi chưa duyệt!</div>
                    </div>
                </div>
            </div>
            <a href="?view=QLLH">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<div id="chart_div"></div>
<div id="linechart_material"></div>
<p style="position: relative;
    left: 700px;
font-size: 30px">
    <span style="font-size: 20px">So với tháng trước:</span>
    <?php if($grove<0){?>
    <span class="fa fa-arrow-down" style="color: red"></span><?php }?>
    <?php if($grove>0){?>
    <span class="fa fa-arrow-up" style="color: green"></span><?php }?>
    <?php if($grove==0){?>
        <span class="fa fa-square" style="color: yellow"></span><?php }?>
    <?php echo $grove?>%</p>


<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sản phẩm');
        data.addColumn('number', 'Số lượng bán');

        data.addRows([
            <?php foreach ($pros as $product)
            {?>
            ['<?php echo $product->Ten_mon_an?>-mã: <?php echo $product->Ma_mon_an?>',<?php echo $product->TongSL?>],
            <?php }?>
        ]);
        var options = {
            title: 'Sản phẩm bán chạy trong tháng',
            hAxis: {
                title: 'sản phẩm',
                viewWindow: {
                    min: [7, 30, 0],
                    max: [17, 30, 0]
                }
            },
            vAxis: {
                title: 'Số lượng bán'
            }
        };

        var chart = new google.visualization.ColumnChart(
            document.getElementById('chart_div'));

        chart.draw(data, options);
    }

    google.charts.load('current', {packages: ['corechart', 'line']});
    google.charts.setOnLoadCallback(drawBackgroundColor);

    function drawBackgroundColor() {

        var data = new google.visualization.DataTable();
        data.addColumn('number', 'X');
        data.addColumn('number', 'Doanh thu');

        data.addRows([
            <?php foreach ($sales as $k=>$v){?>
            [<?php echo $k?>, <?php echo $v?>],
            <?php }?>
        ]);

        var options = {
            title: 'Doanh thu theo tháng',
            hAxis: {
                title: 'Tháng'
            },
            vAxis: {
                title: 'Doanh Thu'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('linechart_material'));
        chart.draw(data, options);
    }

</script>


