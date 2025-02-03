<?php
if(isset($_GET['id'])) {
    include "connection_230041.php";
    $password = password_hash($_GET['type'], PASSWORD_DEFAULT);
    $query="UPDATE users_230041 SET password_230041='$password' WHERE userid_230041='$_GET[id]'";
    $update=mysqli_query($db_connection,$query);
    if($update) {
        echo "<script>alert('Reset password successed !')</script>";
    } else {
        echo "<script>alert('Reset password failed !')</script>";
    }
}
    ?>
    <script>winndow.location.replace("read_user_230041.php");</script>