
<?php
/**
 * Created by PhpStorm.
 * User: Aarti
 * Date: 9/4/2019
 * Time: 9:32 PM
 */

require_once "../../document_root.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/database/core/CRUD.class.php";
class Employee
{
    function __construct()
    {
        $this->employee = CRUD::table("employee");
    }


    //SELECT * FROM `employee` join user on user.user_id = employee.user_id join userteam on userteam.user_id = employee.user_id WHERE userteam.team_id = 1 AND user.deleted = 0
    public function getEmployeesByTeam($team_id){
        return $this->employee
            ->select("*")
            ->join("user", "user.user_id", "employee.user_id")
            ->join("userteam", "userteam.user_id", "employee.user_id")
            ->join("team", "userteam.team_id", "userteam.team_id")
            ->where("userteam.team_id", $team_id)
            ->groupBy("employee.emp_id")
            ->andWhere("user.deleted", 0)
            ->get()
            ->fetchAll();
    }

    private $employee;
}