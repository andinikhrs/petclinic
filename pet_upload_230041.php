<?php
if(isset($_POST['upload'])) {
    include "connection_230041.php";

    $folder = 'uploads/pets/';
    if(move_uploaded_file($_FILES['new_photo_230041']['tmp_name'], $folder . $_FILES['new_photo_230041']['name'])) {
        
        $photo = $_FILES['new_photo_230041']['name'];
        
        $query = "UPDATE petclinic_230041 SET pet_photo_230041='$photo' WHERE pet_id_230041='$_POST[pet_id_230041]'";
        
        $upload=mysqli_query($db_connection, $query);

        if($upload) {
            if($_POST['pet_photo_230041'] !== 'default.png') unlink($folder . $_POST['pet_photo_230041']);
            echo "<script>alert('Change Photo Successed !');window.location.replace('read_pet_230041.php');</script>";
        } else {
            echo "<script>alert('Change photo failed  !');window.location.replace('pet_photo_230041.php?id=$_POST[pet_id_230041]');</script>";
        }
    } else {
          echo "<script>alert('Upload photo failed  !');window.location.replace('pet_photo_230041.php?id=$_POST[pet_id_230041]');</script>";
    }
}
?>