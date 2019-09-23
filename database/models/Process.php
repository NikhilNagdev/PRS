<?php


class Process
{
    function __construct()
    {
        $this->process = CRUD::table("user");
    }

    public function processLogin()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rs = $this->process
            ->join("user_role", "user.user_id", "user_role.user_id")
            ->where("email", $email)
            ->select("user.user_id,user.email,user.name,user.password,user_role.role")
            ->get();
        $entry = $rs->rowCount();
        if ($entry == 1) {
            echo "1 user found";
            echo "<br>";
            $row = $rs->fetch(PDO::FETCH_ASSOC);
            $user_id = $row['user_id'];
            $dbpassword = $row['password'];
            $name = $row['name'];
            $role = $row['role'];
            if ($password == $dbpassword) {
                echo "1 user found";
                echo "<br>";
                if (!isset($_SESSION['user_id'])) {
                    session_start();
                }
                $_SESSION['user_id'] = $user_id;
                $_SESSION['role'] = $role;
                $_SESSION['name'] = $name;
                if ($role == 1) {
                    header("Location:admin/dashboard.php");
                } else {
                    header("Location:teacher/dashboard.php");
                }
            }
            else {
                echo "wrong password";
            }
        } else {
            //WRONG EMAILADDRESS
        }

    }
}