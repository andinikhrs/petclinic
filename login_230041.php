<?php
session_start();
if(isset($_POST['login'])) {
    include "connection_230041.php";

    $query="SELECT * FROM users_230041 WHERE username_230041='$_POST[username_230041]'";

    $login=mysqli_query($db_connection,$query);

    if(mysqli_num_rows($login) > 0) {
        $user=mysqli_fetch_assoc($login);
        if(password_verify($_POST['password_230041'], $user['password_230041'])) {
            $_SESSION['login']=TRUE;
            $_SESSION['userid']=$user['userid_230041'];
            $_SESSION['username']=$user['username_230041'];
            $_SESSION['password']=$user['password_230041'];
            $_SESSION['usertype']=$user['usertype_230041'];
            $_SESSION['fullname']=$user['fullname_230041'];

            echo "<script>alert('Login success !');window.location.replace('index.php');</script>";
        } else {
            echo "<script>alert('Login failed, wrong password !');window.location.replace('form_login_230041.php');</script>";
        }
        } else {
            echo "<script>alert('Login failed, user not found !');window.location.replace('form_login_230041.php');</script>";
        }
}
?>