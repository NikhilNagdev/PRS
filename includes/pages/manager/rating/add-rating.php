<div class="page-inner" style="margin-top: -80px;">
    <div class="page-header">
        <h4 class="page-title text-white"></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add manager</h4>
                </div>
                <div class="card-body">
                    <form action="#" class="gray-form" method="post">
                        <div class="table-responsive">
                            <table id="view-all-drafted-quizzes" class="display table table-striped table-hover"
                                   style="width: 100%">
                                <thead>
                                <tr>
                                    <th>Sr no</th>
                                    <th>Team no</th>
                                    <th>Team Name</th>
                                    <th>Description</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                                </thead>
                                <tbody class="student-data">
                                <?php
                                $teams = $teamObj->getTeams();
                                $index = 0;
                                foreach ($teams as $team){
                                    $index++;
                                    echo<<<TEAM
                                                <tr>
                                                <td>{$index}</td>
                                                <td>{$team->team_id}</td>
                                                <td>{$team->team_name}</td>
                                                <td>{$team->team_description}</td>
                                                <td><input name = "team_id" id="select-team-id" type="checkbox" value="{$team->team_id}"></td>
                                            </tr>
TEAM;

                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>