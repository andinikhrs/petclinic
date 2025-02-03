<?php
// echo $_POST['pet_name_230041'] . "<br>";
// echo $_POST['pet_type_230041'] . "<br>";
// echo $_POST['pet_gender_230041'] . "<br>";
// echo $_POST['pet_owner_230041'] . "<br>";
// echo $_POST['pet_address_230041'] . "<br>";
// echo $_POST['pet_phone_230041'] . "<br>";

if(isset($_POST['save'])){ // cek variable POST from FORM
    include "connection_230041.php"; //call connection php mysql

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO petclinic_230041 (pet_name_230041, pet_type_230041, pet_gender_230041, pet_age_230041,
     pet_owner_230041, pet_address_230041, pet_phone_230041) VALUES
     ('$_POST[pet_name_230041]', '$_POST[pet_type_230041]', '$_POST[pet_gender_230041]', '$_POST[pet_age_230041]',
      '$_POST[pet_owner_230041]', '$_POST[pet_address_230041]', '$_POST[pet_phone_230041]')";

    // run query
    $create = mysqli_query($db_connection, $query);

    if($create) {
        // echo "<p> Pet added successfully! </p>";
        echo "<script>alert('Pet added Successfully!')</script>";
    } else {
        // echo "<p> Pet added Failed! </p>";
        echo "<script>alert('Pet add Failed!')</script>";
    }
}
?>
<!-- <p><a href="../index.php">Kembali</a></p> -->
<script>window.location.replace("read_pet_230041.php");</script>