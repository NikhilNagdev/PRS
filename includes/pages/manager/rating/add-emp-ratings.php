<div class="page-inner" style="margin-top: -80px;">
    <div class="page-header">
        <h4 class="page-title text-white"></h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <?php
                    if(isset($_POST['emp_id'])){
                        $emp_id = $_POST['emp_id'];
                        $emp = $empObj->getEmployeeById($emp_id);
                        echo "<h4 class=card-title>$emp->name</h4>";
                    }

                    ?>
                </div>
                <div class="card-body">
                    <form action="index.php?src=add-emp-ratings" class="gray-form" method="post">

                        <br>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>