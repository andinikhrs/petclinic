<?php
if(isset($_GET['id'])) { // check variabel POST from URL
    include "connection_230041.php"; //call connection php mysql

      // sql query DELETE SET WHERE
      $query ="DELETE FROM medicines_230041 WHERE idmed_230041 = '$_GET[id]' "; 
   
      // run query
    $delete = mysqli_query($db_connection, $query);

    if ($delete) { // check if query TRUE/success
       // echo "<p>user delete successfully !</p>"; // sucess msg (html version)
        echo "<script> alert ('Medicine delete successfully !'); </script>";  // sucess msg (javascript version)
    } else {
      //  echo "<p>med delete failed !</p>"; // fail msg (html version)
      echo "<script> alert ('Medicine delete failed !'); </script>"; // fail msg (javascript version)
    }
}    
?>
<!-- <p><a href="read_med_230041.php">BACK TO med LIST</a></p> -->
<script>window.location.replace("read_med_230041.php");</script>