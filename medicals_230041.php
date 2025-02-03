<!doctype html>
<html>
    <head>
    <title>Pet Clinic Andin</title>
</head>
<body>
    <h1>Pet Clinic Andiin</h1>
    <hr>
    <h1>Medical Record</h1>
    <?php
       // call connection php mysql
       include "connection_230041.php";

       // make query SELECT FROM WHERE (corrected query)
       $querypet="SELECT * FROM petclinic_230041 WHERE pet_id_230041='$_GET[pet_id]'";
       $pet=mysqli_query($db_connection, $querypet);

    // extract data from query result
    $data1=mysqli_fetch_assoc($pet); 

       // query one table (corrected query)
       $querymed="SELECT * FROM medicals_230041 AS m, doctor_230041 AS d WHERE m.pet_id_230041='$_GET[pet_id]' AND m.doctor_id_230041 = d.doctor_id_230041";
       $medicals = mysqli_query($db_connection, $querymed);
    ?>
    <table>
        <tr>
            <td>Pet Id/Name</td>
            <td>: <?=$data1['pet_id_230041']?> / <?=$data1['pet_name_230041']?></td>
        </tr>
        <tr>
            <td>Pet Type/Gender/Age</td>
            <td>: <?=$data1['pet_type_230041']?> / <?=$data1['pet_gender_230041']?> / <?=$data1['pet_age_230041']?> month(s)</td>
        </tr>
        <tr>
            <td>Owner</td>
            <td>: <?=$data1['pet_owner_230041']?> / <?=$data1['pet_address_230041']?> / <?=$data1['pet_phone_230041']?></td>
        </tr>
    </table>
    <p><a href="add_medicals_230041.php?pet_id=<?=$data1['pet_id_230041']?>">Add New Records</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Symptom</th>
            <th>Diagnose</th>
            <th>Treatment</th>
            <th>Cost ($)</th>
        </tr>

    <!-- will loop if the data not empty -->
    <?php
       if(mysqli_num_rows($medicals) > 0) {
        $i=1;
          foreach($medicals as $data2) :
        ?>
    <tr>
        <td><?=$i++?></td>
        <td><?=date('l, d M Y H:i:s', strtotime($data2['mr_date_230041']))?></td>
        <td><?=$data2['doctor_name_230041']?></td>
        <td><?=$data2['symptom_230041']?></td>
        <td><?=$data2['diagnose_230041']?></td>
        <td><?=$data2['treatment_230041']?></td>
        <td><?=$data2['cost_230041']?></td>
    </tr>
    <?php
        endforeach;
    } else {
        ?>
    <!-- will show if the data empty -->
    <tr><td colspan="7" align='center'>No record !</td></tr>
    <?php } ?>
    </table>
    <p><a href="read_pet_230041.php">Back to Pets List</a></p>
</body>
</html>
