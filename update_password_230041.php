<?php
session_start();
if(isset($_POST['change'])) {
    include "connection_230041.php";

    $password = password_hash($_POST['new_password_230041'], PASSWORD_DEFAULT);

    $query="UPDATE users_230041 SET password_230041='$password' WHERE userid_230041='$_SESSION[userid]'";

    $update=mysqli_query($db_connection,$query);

    if($update) {
        $_SESSION['password']=$password;

        echo "<script>alert('Change passwod successed !');window.location.replace('index.php');</script>";
    } else {
        echo "<script>alert('Change passwod failed !');window.location.replace('change_password_230041.php');</script>";
    }
}
?>