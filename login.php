<html>

<head>
<title>Login</title>
    <?php
    include './boostrap.php'
    ?>
</head>

<body>
    <div class="container">
            <?php
            include './header.php'
            ?>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form style="margin-top:10%;" action="./home/checkUser.php" method="POST">
                    <div class="form-group">
                        <label>Enter email:</label>
                        <input type="email" name="email" autocomplete="off" class="form-control" placeholder="Enter email" />
                    </div>
                    <div class="form-group">
                        <label>Enter password:</label>
                        <input type="password" name="pass" autocomplete="off" class="form-control" placeholder="Enter password" />
                    </div>
                    <br />
                    <input type="submit" class="btn btn-primary btn-block" value="Login" />
                    <br />
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
    include './footer.php'
    ?>
</body>

</html>