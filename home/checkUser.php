<?php

if(isset($_POST['email'])){

    //---getting the post input values
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    if(empty($email)){
        echo "<script>
                window.location='../login.php?msg=Please enter email';
        </script>";
    }else if(empty($pass)){
        echo "<script>
                window.location='../login.php?msg=Please enter password';
        </script>";
    }else{

        //-----connect to database
        include "./database.php";

        $sql="SELECT * FROM `user_info` WHERE `email`='$email' AND `password`='$pass'";

        // execute sql statement

        $result=mysqli_query($conx,$sql);
        //check result
        if(mysqli_num_rows($result) > 0){

            //---------setting the cookies

            setCookie("user_info",$email,time()*3600);

            header("location:./index.php");
        }else{
            echo "Login failed";
        }
    }

}

?>