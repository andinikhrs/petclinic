<?php
// echo $_POST['doctor_name_230041'] . "<br>";
// echo $_POST['doctor_gender_230041'] . "<br>";
// echo $_POST['doctor_address_230041'] . "<br>";
// echo $_POST['doctor_phone_230041'] . "<br>";

if(isset($_POST['save'])){ // cek variable POST from FORM
    include "connection_230041.php"; //call connection php mysql

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO doctor_230041 (doctor_name_230041, doctor_gender_230041, doctor_address_230041, doctor_phone_230041) VALUES
     ('$_POST[doctor_name_230041]', '$_POST[doctor_gender_230041]', '$_POST[doctor_address_230041]', '$_POST[doctor_phone_230041]')";

    // run query
    $create = mysqli_query($db_connection, $query);

    if($create) {
        // echo "<p> doctor added successfully! </p>";
        echo "<script>alert('doctor added Successfully!')</script>";
    } else {
        // echo "<p> doctor added Failed! </p>";
        echo "<script>alert('doctor add Failed!')</script>";
    }
}
?>
<!-- <p><a href="../index.php">Kembali</a></p> -->
<script>window.location.replace("read_doctor_230041.php");</script>
?>