<div class="page-inner" style="margin-top: -80px;">
    <div class="page-header">
        <h4 class="page-title text-white"></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Employees</h4>
                </div>
                <div class="card-body">
                    <form action="index.php?src=add-emp-ratings" class="gray-form" method="post">
                        <div class="table-responsive">
                            <table id="view-all-drafted-quizzes" class="display table table-striped table-hover"
                                   style="width: 100%">
                                <thead>
                                <tr>
                                    <th>Sr no</th>
                                    <th>Emp ID</th>
                                    <th>Emp Name</th>
                                    <th>Team Name</th>
                                    <th>Description</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>
                                <tbody class="student-data">
                                <?php
                                if(isset($_POST['team_id'])) {
                                    $teamId = $_POST['team_id'];
                                    $employees = $empObj->getEmployeesByTeam($teamId);
                                    $index = 0;
                                    foreach ($employees as $employee) {
                                        $index++;
                                        echo <<<TEAM
                                                    <tr>
                                                    <td>{$index}</td>
                                                    <td>{$employee->emp_id}</td>
                                                    <td>{$employee->name}</td>
                                                    <td>{$employee->team_name}</td>
                                                    <td>Good in communication</td>
                                                    <td><input name = "emp_id" id="select-emp-id" type="checkbox" value="{$employee->emp_id}"></td>
                                                </tr>
TEAM;

                                    }
                                }
                                ?>
                                </tbody>

                            </table>
                            <br>
                            <div class="">
                                <button id="select-emp-id" class="proceed btn btn-primary" type="submit" name="submit">Proceed</button>
                            </div>
                        </div>
                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>