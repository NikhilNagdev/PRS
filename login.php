<!DOCTYPE html>
<html>
<?php
include_once("document_root.php");
if(isset($_POST['Login'])){

    echo "inside if";
    include_once ($_SERVER['DOCUMENT_ROOT']."/database/models/Process.class.php");
    $process = new Process();
    $process->processLogin();
}
include_once($_SERVER['DOCUMENT_ROOT'] . "/database/models/Process.class.php");
include_once("document_root.php");
$page_title = "Login";
include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php");
?>
<body class="login">
<div class="wrapper wrapper-login">
    <div class="container container-login animated fadeIn">
        <h3 class="text-center">Sign In</h3>
        <div class="login-form">
            <form method="post">
                <div class="form-group">
                    <label for="email" class="placeholder"><b>Email</b></label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password" class="placeholder"><b>Password</b></label>
                    <a href="#" class="link float-right">Forget Password ?</a>
                    <div class="position-relative">
                        <input id="password" name="password" type="password" class="form-control" required>
                        <div class="show-password">
                            <i class="flaticon-interface"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group form-action-d-flex mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label m-0" for="rememberme">Remember Me</label>
                    </div>
                    <button class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" name="Login" type="submit" id="Login">Sign In</button>
                </div>
                <!-- 				<div class="form-action">
                    <a href="#" class="btn btn-primary btn-rounded btn-login">Sign In</a>
                </div> -->
                <div class="login-account">
                    <span class="msg">Don't have an account yet ?</span>
                    <a href="#" id="show-signup" class="link">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/core-scripts.php");
?>
</body>
</html>