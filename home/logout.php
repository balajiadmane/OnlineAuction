<?php
if(!empty($_COOKIE['user_info'])){
    setcookie("user_info","",0);
    //redirect back to login page

    header("location:../login.php");
}

?>