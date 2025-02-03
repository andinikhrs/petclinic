<?php
if(isset($_POST['upload'])) {
    include "connection_230041.php";

    $folder = 'uploads/users/';
    if(move_uploaded_file($_FILES['new_photo_230041']['tmp_name'], $folder . $_FILES['new_photo_230041']['name'])) {
        
        $photo = $_FILES['new_photo_230041']['name'];
        
        $query = "UPDATE users_230041 SET user_photo_230041='$photo' WHERE userid_230041='$_SESSION[userid]'";
        
        $upload=mysqli_query($db_connection, $query);

        if($upload) {
            if($_POST['user_photo_230041'] !== 'default.png') unlink($folder . $_POST['user_photo_230041']);
            echo "<script>alert('Change Photo Successed !');window.location.replace('read_user_230041.php');</script>";
        } else {
            echo "<script>alert('Change photo failed  !');window.location.replace('user_photo_230041.php?id=$_POST[userid_230041]');</script>";
        }
    } else {
          echo "<script>alert('Upload photo failed  !');window.location.replace('user_photo_230041.php?id=$_POST[userid_230041]');</script>";
    }
}
?>