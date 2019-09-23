<div class="page-inner" style="margin-top: -80px;">
    <div class="page-header">
        <h4 class="page-title text-white"></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?php
                    if(isset($_POST['emp_id'])){
                        $emp_id = $_POST['emp_id'];
                        $emp = $empObj->getEmployeeById($emp_id);
                        echo "<h4 class=card-title>$emp->name</h4>";
                    }

                    ?>
                </div>
                <div class="card-body">
                    <form action="index.php?src=add-emp-ratings" class="gray-form" method="post">

                        <div class="container" id="container1">
                            <div class="col-md-4"></div>

                            <div class="col-md-8 offset-md-2">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">Give Ratings<span class="glyphicon glyphicon-saved pull-right"></span></h4>
                                    </div>
                                    <div class="panel-body text-center">
                                        <p class="lead">
                                            <strong>Points to rate</strong>
                                        </p>
                                    </div>

                                    <ul class="row list-group list-group-flush text-center">
                                        <li class="col-md-12 list-group-item">
                                            <div class="skillLineDefault">
                                                <div class="col-md-12 skill pull-left text-center">Team work</div>
                                                <div class="rating" id="rate1"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item text-center">
                                            <div class="skillLineDefault">
                                                <div class="skill pull-left text-center">Communication</div>
                                                <div class="rating" id="rate2"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item text-center">
                                            <div class="skillLineDefault">
                                                <div class="skill pull-left text-center">Working as individual</div>
                                                <div class="rating" id="rate3"></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item text-center">
                                            <div class="skillLineDefault">
                                                <div class="skill pull-left text-center">Work done</div>
                                                <div class="rating" id="rate4"></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="panel-footer text-center">
                                        <button type="button" class="btn btn-primary btn-lg btn-block">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>