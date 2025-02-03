<?php

if(isset($_POST['save'])) { // check variabel POST from FORM
    include "connection_230041.php"; //call connection php mysql

      // sql query UPDATE SET WHERE
      $query ="UPDATE users_230041 SET 
                username_230041 = '$_POST[username_230041]', 
                password_230041 = '$_POST[password_230041]',
                usertype_230041 = '$_POST[usertype_230041]',
                fullname_230041 = '$_POST[fullname_230041]'
                WHERE userid_230041 = '$_POST[userid_230041]'
                "; 
   
      // run query
    $update = mysqli_query($db_connection, $query);

    if ($update) { // check if query TRUE/success
       // echo "<p>user update successfully !</p>"; // sucess msg (html version)
        echo "<script> alert ('User update successfully !'); </script>";  // sucess msg (javascript version)
    } else {
      //  echo "<p>user update failed !</p>"; // fail msg (html version)
      echo "<script> alert ('User update failed !'); </script>"; // fail msg (javascript version)
    }
}    
?>
<!-- <p><a href="read_user_230041.php">BACK TO USERS LIST</a></p> -->
<script>window.location.replace("read_user_230041.php");</script>