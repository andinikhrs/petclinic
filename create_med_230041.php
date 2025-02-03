<?php
if(isset($_POST['save'])){ // cek variable POST from FORM
    include "connection_230041.php"; //call connection php mysql

    // sql query INSERT INTO VALUES
    $query = "INSERT INTO medicines_230041 (med_name_230041, med_type_230041, med_unit_230041, med_price_230041, med_description_230041)
     VALUES
     ('$_POST[med_name_230041]', '$_POST[med_type_230041]', '$_POST[med_unit_230041]', '$_POST[med_price_230041]', '$_POST[med_description_230041]')";

    // run query
    $create = mysqli_query($db_connection, $query);

    if($create) {
        // echo "<p> Medicine added successfully! </p>";
        echo "<script>alert('medicine added Successfully!')</script>";
    } else {
        // echo "<p> Medicine added Failed! </p>";
        echo "<script>alert('medicine add Failed!')</script>";
    }
}
?>
<!-- <p><a href="../index.php">Kembali</a></p> -->
<script>window.location.replace("read_med_230041.php");</script>