<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "database/core/CRUD.class.php");

class Employee
{
    public function __construct()
    {
        $this->employee = CRUD::table("employee");
    }
    public function viewAllEmployees(){
        $rs = $this->employee->join("user","user.user_id","employee.user_id")
            ->select("*")
            ->get();
        return $rs;
    }
    public function viewParticularEmployee($user_id){
        $rs = $this->employee->join("user","user.user_id","employee.user_id")
            ->where("user_id",$user_id)
            ->select("*")
            ->get();
        return $rs;
    }

}