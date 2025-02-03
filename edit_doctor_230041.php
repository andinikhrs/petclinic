<!doctype html>
<html>
<head>
    <title>Pet Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css"> <!-- link ke CSS yang sama -->
</head>
<body>
    <h1>Pet Clinic Andin</h1><hr>
    <h3>Form Edit Doctor</h3>
    <?php
    // Call connection PHP MySQL
    include "connection_230041.php";
    
    // Make query SELECT FROM WHERE
    $query="SELECT * FROM doctor_230041 WHERE doctor_id_230041='$_GET[id]'";

    // Run query
    $doctor=mysqli_query($db_connection,$query);

    // Extract data from query result
    $data=mysqli_fetch_assoc($doctor);
    ?>
    <form method="post" action="update_doctor_230041.php">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="doctor_name_230041" value="<?=$data['doctor_name_230041']?>" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" name="doctor_gender_230041" value="Male" <?=($data['doctor_gender_230041']=='Male')?'checked':'';?> required> Male
                    <input type="radio" name="doctor_gender_230041" value="Female" <?=($data['doctor_gender_230041']=='Female')?'checked':'';?> required> Female
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="doctor_address_230041" value="<?=$data['doctor_address_230041']?>" required></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="doctor_phone_230041" value="<?=$data['doctor_phone_230041']?>" required></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" name="new_photo_230041"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="doctor_id_230041" value="<?=$data['doctor_id_230041']?>">
                    <button type="button"><a href="read_doctor_230041.php">BACK</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
