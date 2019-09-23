<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "database/core/CRUD.class.php");

class Teamhead
{
    public function __construct()
    {
        $this->teamhead = CRUD::table("teamhead");
    }
    public function viewAllManagers(){
        $rs = $this->teamhead->join("user","user.user_id","teamhead .user_id")
            ->select("*")
            ->get();
        return $rs;
    }
    public function viewParticularTeamhead($user_id){
        $rs = $this->teamhead->join("user","user.user_id","teamhead.user_id")
            ->where("user_id",$user_id)
            ->select("*")
            ->get();
        return $rs;
    }
}