<!DOCTYPE html>
<html>
<?php
include_once ("../document_root.php");
$page_title = "DASHBOARD";
include_once ($_SERVER['DOCUMENT_ROOT']."/includes/header.php");
?>
<body>
<div class="wrapper">
    <div class="main-header" data-background-color="light-blue">
        <!-- Logo Header -->
        <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/header-logo.php");
        ?>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <?php
        include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/navigation.php");
        ?>
        <!-- End Navbar -->

    </div>

    <!-- Sidebar -->
    <?php
    include_once($_SERVER['DOCUMENT_ROOT'] . "/includes/sidebar.php");
    include_once($_SERVER['DOCUMENT_ROOT'] . $include_page);
    ?>
</div>
<?php
include_once ($_SERVER['DOCUMENT_ROOT']."/includes/core-scripts.php")
?>
</body>
</html>