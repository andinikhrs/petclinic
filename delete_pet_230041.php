<?php
if(isset($_GET['id'])) { // check variabel POST from URL
    include "connection_230041.php"; //call connection php mysql

      // sql query DELETE SET WHERE
      $query ="DELETE FROM petclinic_230041 WHERE pet_id_230041 = '$_GET[id]' "; 
   
      // run query
    $delete = mysqli_query($db_connection, $query);

    if ($delete) { // check if query TRUE/success
       // echo "<p>pet delete successfully !</p>"; // sucess msg (html version)
        echo "<script> alert ('pet deleted successfully !'); </script>";  // sucess msg (javascript version)
    } else {
      //  echo "<p>pet delete failed !</p>"; // fail msg (html version)
      echo "<script> alert ('pet delete failed !'); </script>"; // fail msg (javascript version)
    }
}    
?>
<!-- <p><a href="read_pet_230041.php">BACK TO pet LIST</a></p> -->
<script>window.location.replace("read_pet_230041.php");</script>