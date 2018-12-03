<?php
//
if(isset($_POST['email'])){
    //get input values

    $name=$_POST['name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $pass=$_POST['pass'];
    $conf_pass=$_POST['conf_pass'];

    if(empty($name)){
            echo "<script>
                window.location='../registration.php?msg=Please enter name';
        </script>";
    }else if(empty($email)){
        echo "<script>
                window.location='../registration.php?msg=Please enter email';
        </script>";
    }else if(empty($gender)){
        echo "<script>
                window.location='../registration.php?msg=Please select gender';
        </script>";
    }else if(empty($pass)){
        echo "<script>
                window.location='../registration.php?msg=Please enter password';
        </script>";
    }else if($pass!=$conf_pass){
        echo "<script>
                window.location='../registration.php?msg=Please confirm password';
        </script>";
    }else{

                // validate all inputs
                //connect to database
                include "./database.php";
                //create sql statement

                $sql="INSERT INTO `user_info`(`name`, `email`, `gender`, `password`)
         VALUES ('$name','$email','$gender','$pass')";

                //execute the sql statement
                $result=mysqli_query($conx,$sql);
                //check result
                if($result==TRUE){
                    echo "Registration is success";
                }else{
                    echo "Registration is failed";
                }

    }

}

?>