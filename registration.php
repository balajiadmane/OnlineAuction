<html>
<head>
    <title>Registration user</title>
    <?php
    include "./boostrap.php"
    ?>
</head>
<body>

<div class="container">
    <?php
    include "./header.php";
    ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form action="./home/registerUser.php" method="POST">
                    <div class="form-group">
                     <label>Enter name:</label>
                        <input type="text" name="name" placeholder="Enter name" class="form-control">
                    </div>
                <div class="form-group">
                    <label>Enter email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Select Gender:</label>
                    <select class="form-control" name="gender">
                            <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Enter password:</label>
                    <input type="password" name="pass" class="form-control" placeholder="Enter password" />
                </div>
                <div class="form-group">
                    <label>Confirm password:</label>
                    <input type="password" name="conf_pass" class="form-control" placeholder="Confirm password">
                </div>
               <br />
                <input type="submit" class="btn btn-primary btn-block" value="Register">
                <?php

                if(isset($_GET['msg'])){
                        echo "<div class='alert alert-warning'>".$_GET['msg']."</div>";
                }
                ?>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<?php
include "./footer.php";
?>
</body>

</html>