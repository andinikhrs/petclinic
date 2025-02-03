<?php
if(isset($_POST['save'])) {
    include "connection_230041.php";

    $query = "UPDATE doctor_230041 SET
    doctor_name_230041 = '$_POST[doctor_name_230041]',
    doctor_gender_230041 = '$_POST[doctor_gender_230041]',
    doctor_address_230041 = '$_POST[doctor_address_230041]',
    doctor_phone_230041 = '$_POST[doctor_phone_230041]'
    WHERE doctor_id_230041 = '$_POST[doctor_id_230041]'
";

    $update = mysqli_query($db_connection, $query);

    if($update) {
        echo "<script> alert('doctor updated successfully !'); </script>";
    } else {
        echo "<script> alert('doctor update failed !'); </script>";
    }
}
?>
<script>window.location.replace("read_doctor_230041.php");</script>