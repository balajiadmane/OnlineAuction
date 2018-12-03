<?php
//checking the cookies
if(empty($_COOKIE['user_info'])){
    // redirect to login page
    echo "<script>
window.location='../login.php';
</script>";
}

?>