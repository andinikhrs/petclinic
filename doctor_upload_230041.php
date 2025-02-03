<?php
if(isset($_POST['upload'])) {
    include "connection_230041.php";

    $folder = 'uploads/doctors/';
    if(move_uploaded_file($_FILES['new_photo_230041']['tmp_name'], $folder . $_FILES['new_photo_230041']['name'])) {
        
        $photo = $_FILES['new_photo_230041']['name'];
        
        $query = "UPDATE doctor_230041 SET doctor_photo_230041='$photo' WHERE doctor_id_230041='$_POST[doctor_id_230041]'";
        
        $upload=mysqli_query($db_connection, $query);

        if($upload) {
            if($_POST['doctor_photo_230041'] !== 'default.png') unlink($folder . $_POST['doctor_photo_230041']);
            echo "<script>alert('Change Photo Successed !');window.location.replace('read_doctor_230041.php');</script>";
        } else {
            echo "<script>alert('Change photo failed  !');window.location.replace('doctor_photo_230041.php?id=$_POST[doctor_id_230041]');</script>";
        }
    } else {
          echo "<script>alert('Upload photo failed  !');window.location.replace('doctor_photo_230041.php?id=$_POST[doctor_id_230041]');</script>";
    }
}
?>