
<!doctype html>
<html>
<head>
    <title>Pet Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css"> <!-- link ke CSS yang sudah disesuaikan -->
</head>
<body>
    <h1>Andin Pet Clinic</h1>
    <hr>
    <h3>Form Edit Pet</h3>
    <?php
        // Call connection PHP MySQL
        include "connection_230041.php";

        // Make query SELECT FROM WHERE
        $query="SELECT * FROM petclinic_230041 WHERE pet_id_230041='$_GET[id]'";

        // Run query
        $pet=mysqli_query($db_connection,$query);

        // Extract data from query result
        $data=mysqli_fetch_assoc($pet);
    ?>
    <form method="post" action="update_pet_230041.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="pet_name_230041" value="<?=$data['pet_name_230041']?>" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <select name="pet_type_230041" required>
                        <option value="">Choose</option>
                        <option value="Cat" <?=($data['pet_type_230041']=='Cat')?'selected':'';?>>Cat</option>
                        <option value="Dog" <?=($data['pet_type_230041']=='Dog')?'selected':'';?>>Dog</option>
                        <option value="Reptil" <?=($data['pet_type_230041']=='Reptil')?'selected':'';?>>Reptil</option>
                        <option value="Bird" <?=($data['pet_type_230041']=='Bird')?'selected':'';?>>Bird</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="pet_gender_230041" value="Male" <?=($data['pet_gender_230041']=='Male')?'checked':'';?> required> Male
                    <input type="radio" name="pet_gender_230041" value="Female" <?=($data['pet_gender_230041']=='Female')?'checked':'';?> required> Female
                </td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="number" name="pet_age_230041" value="<?=$data['pet_age_230041']?>" required></td>
            </tr>
            <tr>
                <td>Owner</td>
                <td><input type="text" name="pet_owner_230041" value="<?=$data['pet_owner_230041']?>" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="pet_address_230041" required><?=$data['pet_address_230041']?></textarea></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="pet_phone_230041" value="<?=$data['pet_phone_230041']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="pet_id_230041" value="<?=$data['pet_id_230041']?>">
                </td>
            </tr>
        </table>
    </form>     
    <p><a href="index.php">BACK </a></p>
    <p><a href="read_pet_230041.php">CANCEL </a></p>
</body>
</html>
