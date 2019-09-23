
<?php
/**
 * Created by PhpStorm.
 * User: Aarti
 * Date: 9/4/2019
 * Time: 9:32 PM
 */


require_once $_SERVER['DOCUMENT_ROOT'] . "/database/core/CRUD.class.php";
class Team
{
    function __construct()
    {
        $this->team = CRUD::table("team");
    }

    public function getTeams(){
        return $this->team
            ->select("*")
            ->get()
            ->fetchAll();
    }

    private $team;
}
$team = new Team();