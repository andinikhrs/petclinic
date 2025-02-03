<?php 

include "connection_230041.php";

$querypet = "SELECT * FROM petclinic_230041 WHERE pet_id_230041='$_GET[petid]'";
$pet = mysqli_query($db_connection, $querypet);
$data1 = mysqli_fetch_assoc($pet);

$querydoc = "SELECT * FROM doctor_230041";
$doctors = mysqli_query($db_connection, $querydoc);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Andin - Add Medical</title>
    <link rel="stylesheet" href="add_user.css">
</head>
<body>

    <!-- Form Container -->
    <div class="container-medical">
        <h2>Form Add Medical</h2>
        
        <div class="pet-info">
            <p><strong>Pet ID/Name:</strong> <?=$data1['pet_id_230041']?> / <?=$data1['pet_name_230041']?></p>
            <p><strong>Pet Type/Gender/Age:</strong> <?=$data1['pet_type_230041']?> / <?=$data1['pet_gender_230041']?> / <?=$data1['pet_age_230041']?> month(s)</p>
            <p><strong>Owner:</strong> <?=$data1['pet_owner_230041']?></p>
        </div>

        <form method="post" action="create_medical_230041.php">
            <label for="doctor">Doctor</label>
            <select name="doctor_id_230041" id="doctor" required>
                <option value="">Choose</option>
                <?php foreach($doctors as $data2) : ?>
                <option value="<?=$data2['doctor_id_230041']?>"><?=$data2['doctor_name_230041']?></option>
                <?php endforeach; ?>
            </select>

            <label for="symptom">Symptom</label>
            <textarea name="symptom_230041" id="symptom" required></textarea>

            <label for="diagnose">Diagnose</label>
            <textarea name="diagnose_230041" id="diagnose" required></textarea>

            <label for="treatment">Treatment</label>
            <textarea name="treatment_230041" id="treatment" required></textarea>

            <label for="cost">Cost ($)</label>
            <input type="number" name="cost_230041" id="cost" required>

            <input type="hidden" name="pet_id_230041" value="<?=$data1['pet_id_230041']?>">

            <div class="button-group">
                <button type="submit" name="save">SAVE</button>
                <button type="reset" name="reset">RESET</button>
                <a href="medicals_230041.php?petid=<?=$data1['pet_id_230041']?>" class="back-button">Cancel</a>
            </div>
        </form>
    </div>

</body>
</html>
