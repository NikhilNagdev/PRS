<?php
require_once "../../document_root.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
$page_title = "TeamHead";
include_once ($_SERVER['DOCUMENT_ROOT']."/includes/header.php");
?>
<body>
<div class="wrapper">
    <!--
        Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
    -->
    <div class="main-header" data-background-color="purple">
        <!-- Logo Header -->
        <?php
        include_once ($_SERVER['DOCUMENT_ROOT']."/includes/header-logo.php")
        ?>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <?php
            require_once $_SERVER['DOCUMENT_ROOT']."includes/navigation.php";
        ?>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <?php
    include_once $_SERVER['DOCUMENT_ROOT']."/includes/pages/team-head/sidebar.php";
    ?>
    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="content">

            <div class="panel-header bg-dark-gradient" style="background: linear-gradient(-45deg,#0a0b11,#1f283e)">
                <div class="page-inner py-5">
                    <div class="d-flex flex-column flex-md-row">
                        <div>
                        </div>
                        <div class="text-white total-marks">
                            <h2 class="pull-right">Dashboard<span class="marks-text"></span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="page-inner" style="margin-top: -80px;">
                <div class="page-header">
                    <h4 class="page-title text-white"></h4>
                </div>
                <div class="row row-card-no-pd">
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-chart-pie text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Managers</p>
                                            <h4 class="card-title">150</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body ">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="flaticon-coins text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Team Heads</p>
                                            <h4 class="card-title">3</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="card card-stats card-round">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="icon-big text-center">
                                            <i class="fas fa-users text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col col-stats">
                                        <div class="numbers">
                                            <p class="card-category">Employees</p>
                                            <h4 class="card-title">23</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">Employee Statistics</div>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
                                            Export
                                        </a>
                                        <a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
                                            Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-container" style="min-height: 375px">
                                    <canvas id="lineChart"></canvas>
                                </div>
                                <div id="myChartLegend"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>

    <!-- Custom template | don't include it in your project! -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Topbar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeMainHeaderColor" data-color="blue"></button>
                        <button type="button" class="selected changeMainHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeMainHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeMainHeaderColor" data-color="green"></button>
                        <button type="button" class="changeMainHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeMainHeaderColor" data-color="red"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
    <!-- End Custom template -->
</div>
</div>
<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../../assets/js/core/popper.min.js"></script>
<script src="../../assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="../../assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="../../assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="../../assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="../../assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="../../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="../../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="../../assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="../../assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="../../assets/js/setting-demo.js"></script>
<script src="../../assets/js/demo.js"></script>
<script>
    var pie=document.getElementById('lineChart').getContext('2d');
    var myPieChart = new Chart(pie, {
        type: 'pie',
        data: {
            datasets: [{
                data: [50, 35, 15],
                backgroundColor :["#1d7af3","#fdaf4b","#f3545d"],
                borderWidth: 0
            }],
            labels: ['Completed', 'Partially completed', 'Pending']
        },
        options : {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position : 'bottom',
                labels : {
                    fontColor: 'rgb(154, 154, 154)',
                    fontSize: 11,
                    usePointStyle : true,
                    padding: 20


                }
            },
            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                fontSize: 14,
            },
            tooltips: false,
            layout: {
                padding: {
                    left: 20,
                    right: 20,
                    top: 20,
                    bottom: 20
                }
            }
        }
    })
</script>
</body>
</html>