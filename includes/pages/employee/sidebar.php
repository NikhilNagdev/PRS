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
									<span class="user-level">Employee</span>
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



                <li class="nav-item">
                    <a data-toggle="collapse" href="#tasks">
                        <i class="fas fa-tasks"></i>
                        <p>Tasks</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tasks">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">View Assigned Tasks</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Mark Done Tasks</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#teams">
                        <i class="fas fa-users"></i>
                        <p>Teams</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="teams">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">View All Teams</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#reports">
                        <i class="fas fa-comments"></i>
                        <p>View Feedback</p>
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
