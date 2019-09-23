<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "database/core/CRUD.class.php");

class Manager
{
    public function __construct()
    {
        $this->manager = CRUD::table("manager");
    }
    public function viewAllManagers(){
        $rs = $this->manager->join("user","user.user_id","manager.user_id")
            ->select("*")
            ->get();
        return $rs;
    }
    public function viewParticularManager($user_id){
        $rs = $this->manager->join("user","user.user_id","manager.user_id")
            ->where("user_id",$user_id)
            ->select("*")
            ->get();
        return $rs;
    }
}