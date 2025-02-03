<?php
if(isset($_POST['save'])) {
    include "connection_230041.php";

    $query = "INSERT INTO medicals_230041 SET
    pet_id_230041 ='$_POST[pet_id_230041]',
    doctor_id_230041 ='$_POST[doctor_id_230041]',
    symptom_230041 ='$_POST[symptom_230041]',
    diagnose_230041 ='$_POST[diagnose_230041]',
    treatment_230041 ='$_POST[treatment_230041]',
    cost_230041 ='$_POST[cost_230041]'";


    $create = mysqli_query($db_connection, $query);

    if($create) {
        echo "<script> alert('Medical added successfully !'); </script>";
    } else {
        echo "<script> alert('Medical add failed !'); </script>";
    }
}
?>
<p><a href="read_pet_230041.php">BACK TO PET LIST</a></p>
<script>window.location.replace("medicals_230041.php?pet_id=<?= $_POST['pet_id_230041'];?>");</script>