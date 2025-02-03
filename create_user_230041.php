<?php
if(isset($_POST['save'])) { // cek variable POST from FORM
    include "connection_230041.php"; //call connection php mysql

    $password = password_hash($_POST['usertype_230041'], PASSWORD_DEFAULT);

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO users_230041 (username_230041, password_230041, usertype_230041, fullname_230041)
     VALUES
     ('$_POST[username_230041]', '$password', '$_POST[usertype_230041]', '$_POST[fullname_230041]')";

    // run query
    $create = mysqli_query($db_connection, $query);

    if($create) {
        // echo "<p> Pet added successfully! </p>";
        echo "<script> alert('User added Successfully!'); </script>";
    } else {
        // echo "<p> Pet added Failed! </p>";
        echo "<script> alert('User add Failed!'); </script>";
    }
}
?>
<!-- <p><a href="../index.php">Kembali</a></p> -->
<script>window.location.replace("read_user_230041.php");</script>