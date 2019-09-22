<?php
require_once ($_SERVER['DOCUMENT_ROOT']."document_root.php");
?>
<!-- End Sidebar -->
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Hizrian
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item active">
                    <a href="index.html">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
                    <h4 class="text-section">Components</h4>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a data-toggle="collapse" href="#base">-->
<!--                        <i class="fas fa-user-tie"></i>-->
<!--                        <p>Manager</p>-->
<!--                        <span class="caret"></span>-->
<!--                    </a>-->
<!--                    <div class="collapse" id="base">-->
<!--                        <ul class="nav nav-collapse">-->
<!--                            <li>-->
<!--                                <a href="">-->
<!--                                    <span class="sub-item">Add Manager</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="components/buttons.html">-->
<!--                                    <span class="sub-item">View All Managers</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->
<!---->
<!--                <li class="nav-item">-->
<!--                    <a data-toggle="collapse" href="#forms">-->
<!--                        <i class="fas fa-user-cog"></i>-->
<!--                        <p>Team Head</p>-->
<!--                        <span class="caret"></span>-->
<!--                    </a>-->
<!--                    <div class="collapse" id="forms">-->
<!--                        <ul class="nav nav-collapse">-->
<!--                            <li>-->
<!--                                <a href="forms/forms.html">-->
<!--                                    <span class="sub-item">Add Team Head</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!--                            <li>-->
<!--                                <a href="forms/forms.html">-->
<!--                                    <span class="sub-item">View All Team Head</span>-->
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </li>-->



                <li class="nav-item">
                    <a data-toggle="collapse" href="#employees">
                        <i class="fas fa-users"></i>
                        <p>Employee</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="employees">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">View All Employee</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#tables">
                        <i class="fas fa-chart-line"></i>
                        <p>Ratings</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Add Ratings</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">View All Ratings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#reports">
                        <i class="fas fa-table"></i>
                        <p>View Reports</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="reports">
                        <ul class="nav nav-collapse">

                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">View All Reports</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
