<?php
require_once "../../document_root.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Azzara Bootstrap 4 Admin Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['../../assets/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/azzara.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body>
<div class="wrapper">
    <!--
        Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
    -->
    <div class="main-header" data-background-color="purple">
        <!-- Logo Header -->
        <div class="logo-header">

            <a href="index.html" class="logo">
                <img src="../../assets/img/logoazzara.svg" alt="navbar brand" class="navbar-brand">
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
            <div class="navbar-minimize">
                <button class="btn btn-minimize btn-rounded">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div>
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

                    <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">User Statistics</div>
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
                                    <canvas id="statisticsChart"></canvas>
                                </div>
                                <div id="myChartLegend"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-secondary">
                            <div class="card-header">
                                <div class="card-title">Daily Sales</div>
                                <div class="card-category">March 25 - April 02</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="mb-4 mt-2">
                                    <h1>$4,578.58</h1>
                                </div>
                                <div class="pull-in">
                                    <canvas id="dailySalesChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card card-info bg-info-gradient">
                            <div class="card-body">
                                <h4 class="mb-1 fw-bold">Tasks Progress</h4>
                                <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-card-no-pd">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <h4 class="card-title">Users Geolocation</h4>
                                    <div class="card-tools">
                                        <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-angle-down"></span></button>
                                        <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"><span class="fa fa-sync-alt"></span></button>
                                        <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button>
                                    </div>
                                </div>
                                <p class="card-category">
                                    Map of the distribution of users around the world</p>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="table-responsive table-hover table-sales">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../../assets/img/flags/id.png" alt="indonesia">
                                                        </div>
                                                    </td>
                                                    <td>Indonesia</td>
                                                    <td class="text-right">
                                                        2.320
                                                    </td>
                                                    <td class="text-right">
                                                        42.18%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../../assets/img/flags/us.png" alt="united states">
                                                        </div>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class="text-right">
                                                        240
                                                    </td>
                                                    <td class="text-right">
                                                        4.36%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../../assets/img/flags/au.png" alt="australia">
                                                        </div>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class="text-right">
                                                        119
                                                    </td>
                                                    <td class="text-right">
                                                        2.16%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../../assets/img/flags/ru.png" alt="russia">
                                                        </div>
                                                    </td>
                                                    <td>Russia</td>
                                                    <td class="text-right">
                                                        1.081
                                                    </td>
                                                    <td class="text-right">
                                                        19.65%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../../assets/img/flags/cn.png" alt="china">
                                                        </div>
                                                    </td>
                                                    <td>China</td>
                                                    <td class="text-right">
                                                        1.100
                                                    </td>
                                                    <td class="text-right">
                                                        20%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="../../assets/img/flags/br.png" alt="brazil">
                                                        </div>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class="text-right">
                                                        640
                                                    </td>
                                                    <td class="text-right">
                                                        11.63%
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mapcontainer">
                                            <div id="map-example" class="vmap"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Top Products</div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="d-flex">
                                    <div class="avatar">
                                        <img src="../../assets/img/logoproduct.svg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <div class="flex-1 pt-1 ml-2">
                                        <h5 class="fw-bold mb-1">CSS</h5>
                                        <small class="text-muted">Cascading Style Sheets</small>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <h3 class="text-info fw-bold">+$17</h3>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar">
                                        <img src="../../assets/img/logoproduct2.svg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <div class="flex-1 pt-1 ml-2">
                                        <h5 class="fw-bold mb-1">J.CO Donuts</h5>
                                        <small class="text-muted">The Best Donuts</small>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <h3 class="text-info fw-bold">+$300</h3>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar">
                                        <img src="../../assets/img/logoproduct3.svg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                    <div class="flex-1 pt-1 ml-2">
                                        <h5 class="fw-bold mb-1">Ready Pro</h5>
                                        <small class="text-muted">Bootstrap 4 Admin Dashboard</small>
                                    </div>
                                    <div class="d-flex ml-auto align-items-center">
                                        <h3 class="text-info fw-bold">+$350</h3>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="pull-in">
                                    <canvas id="topProductsChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title fw-mediumbold">Suggested People</div>
                                <div class="card-list">
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="../../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Jimmy Denis</div>
                                            <div class="status">Graphic Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-sm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="../../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Chad</div>
                                            <div class="status">CEO Zeleaf</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-sm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="../../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Talha</div>
                                            <div class="status">Front End Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-sm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="../../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">John Doe</div>
                                            <div class="status">Back End Developer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-sm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="../../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Talha</div>
                                            <div class="status">Front End Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-sm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="item-list">
                                        <div class="avatar">
                                            <img src="../../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
                                        </div>
                                        <div class="info-user ml-3">
                                            <div class="username">Jimmy Denis</div>
                                            <div class="status">Graphic Designer</div>
                                        </div>
                                        <button class="btn btn-icon btn-primary btn-round btn-sm">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-primary bg-primary-gradient bubble-shadow">
                            <div class="card-body">
                                <h4 class="mt-3 b-b1 pb-2 mb-4 fw-bold">Active user right now</h4>
                                <h1 class="mb-4 fw-bold">17</h1>
                                <h4 class="mt-3 b-b1 pb-2 mb-5 fw-bold">Page view per minutes</h4>
                                <div id="activeUsersChart"></div>
                                <h4 class="mt-5 pb-3 mb-0 fw-bold">Top active pages</h4>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between pb-1 pt-1"><small>/product/readypro/index.html</small> <span>7</span></li>
                                    <li class="d-flex justify-content-between pb-1 pt-1"><small>/product/azzara/demo.html</small> <span>10</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Feed Activity</div>
                            </div>
                            <div class="card-body">
                                <ol class="activity-feed">
                                    <li class="feed-item feed-item-secondary">
                                        <time class="date" datetime="9-25">Sep 25</time>
                                        <span class="text">Responded to need <a href="#">"Volunteer opportunity"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-success">
                                        <time class="date" datetime="9-24">Sep 24</time>
                                        <span class="text">Added an interest <a href="#">"Volunteer Activities"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-info">
                                        <time class="date" datetime="9-23">Sep 23</time>
                                        <span class="text">Joined the group <a href="single-group.php">"Boardsmanship Forum"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-warning">
                                        <time class="date" datetime="9-21">Sep 21</time>
                                        <span class="text">Responded to need <a href="#">"In-Kind Opportunity"</a></span>
                                    </li>
                                    <li class="feed-item feed-item-danger">
                                        <time class="date" datetime="9-18">Sep 18</time>
                                        <span class="text">Created need <a href="#">"Volunteer Opportunity"</a></span>
                                    </li>
                                    <li class="feed-item">
                                        <time class="date" datetime="9-17">Sep 17</time>
                                        <span class="text">Attending the event <a href="single-event.php">"Some New Event"</a></span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">Support Tickets</div>
                                    <div class="card-tools">
                                        <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Today</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Week</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Month</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="avatar avatar-online">
                                        <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h5 class="text-uppercase fw-bold mb-1">Joko Subianto <span class="text-warning pl-3">pending</span></h5>
                                        <span class="text-muted">I am facing some trouble with my viewport. When i start my</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">8:40 PM</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-offline">
                                        <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h5 class="text-uppercase fw-bold mb-1">Prabowo Widodo <span class="text-success pl-3">open</span></h5>
                                        <span class="text-muted">I have some query regarding the license issue.</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">1 Day Ago</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-away">
                                        <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h5 class="text-uppercase fw-bold mb-1">Lee Chong Wei <span class="text-muted pl-3">closed</span></h5>
                                        <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">2 Days Ago</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-offline">
                                        <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h5 class="text-uppercase fw-bold mb-1">Peter Parker <span class="text-success pl-3">open</span></h5>
                                        <span class="text-muted">I have some query regarding the license issue.</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">2 Day Ago</small>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                                <div class="d-flex">
                                    <div class="avatar avatar-away">
                                        <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                    </div>
                                    <div class="flex-1 ml-3 pt-1">
                                        <h5 class="text-uppercase fw-bold mb-1">Logan Paul <span class="text-muted pl-3">closed</span></h5>
                                        <span class="text-muted">Is there any update plan for RTL version near future?</span>
                                    </div>
                                    <div class="float-right pt-1">
                                        <small class="text-muted">2 Days Ago</small>
                                    </div>
                                </div>
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
</body>
</html>