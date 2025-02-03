<?php
if(isset($_POST['save'])) {
    include "connection_230041.php";

    $query = "UPDATE medicines_230041 SET
    med_name_230041 = '$_POST[med_name_230041]',
    med_type_230041 = '$_POST[med_type_230041]',
    med_unit_230041 = '$_POST[med_unit_230041]',
    med_price_230041 = '$_POST[med_price_230041]',
    med_description_230041 = '$_POST[med_description_230041]'
    WHERE idmed_230041 = '$_POST[idmed_230041]'";

    $update = mysqli_query($db_connection, $query);

    if($update) {
        echo "<script> alert('Medicine updated successfully !'); </script>";
    } else {
        echo "<script> alert('Medicine update failed !'); </script>";
    }
}
?>
<script>window.location.replace("read_med_230041.php");</script>