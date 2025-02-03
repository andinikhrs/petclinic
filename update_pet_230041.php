<?php
if(isset($_POST['save'])) {
    include "connection_230041.php";

    $query = "UPDATE petclinic_230041 SET
    pet_name_230041 = '$_POST[pet_name_230041]',
    pet_type_230041 = '$_POST[pet_type_230041]',
    pet_gender_230041 = '$_POST[pet_gender_230041]',
    pet_age_230041 = '$_POST[pet_age_230041]',
    pet_owner_230041 = '$_POST[pet_owner_230041]',
    pet_address_230041 = '$_POST[pet_address_230041]',
    pet_phone_230041 = '$_POST[pet_phone_230041]'
    WHERE pet_id_230041 = '$_POST[pet_id_230041]'
";

    $update = mysqli_query($db_connection, $query);

    if($update) {
        echo "<script> alert('Pet updated successfully !'); </script>";
    } else {
        echo "<script> alert('Pet update failed !'); </script>";
    }
}
?>
<script>window.location.replace("read_pet_230041.php");</script>