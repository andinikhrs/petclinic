
<!doctype html>
<html>
<head>
    <title>Pet Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
    <h1>Pet Clinic Andin</h1><hr>
    <h3>Form Edit Medicine</h3>
    <?php
    // Call connection PHP MySQL
    include "connection_230041.php";
    
    // Make query SELECT FROM WHERE
    $query="SELECT * FROM medicines_230041 WHERE idmed_230041='$_GET[id]'";

    // Run query
    $doctor=mysqli_query($db_connection,$query);

    // Extract data from query result
    $data=mysqli_fetch_assoc($doctor);
    ?>
    <form method="post" action="update_med_230041.php">
        <table>
            <tr>
                <td>Medicine Name</td>
                <td><input type="text" name="med_name_230041" value="<?=$data['med_name_230041']?>" required></td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                    <input type="radio" name="med_type_230041" value="generic" <?=($data['med_type_230041']=='generic')?'checked':'';?> required> Generic
                    <input type="radio" name="med_type_230041" value="patent" <?=($data['med_type_230041']=='patent')?'checked':'';?> required> Patent
                </td>
            </tr>
            <tr>
                <td>Unit</td>
                <td>
                    <select name="med_unit_230041" required>
                        <option value="">Choose</option>
                        <option value="strip" <?=($data['med_unit_230041']=='strip')?'selected':'';?>>Strip</option>
                        <option value="bottle" <?=($data['med_unit_230041']=='bottle')?'selected':'';?>>Bottle</option>
                        <option value="sachet" <?=($data['med_unit_230041']=='sachet')?'selected':'';?>>Sachet</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td><input type="text" name="med_price_230041" value="<?=$data['med_price_230041']?>" required></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea name="med_description_230041" required><?=$data['med_description_230041']?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="idmed_230041" value="<?=$data['idmed_230041']?>">
                    <button type="button"><a href="read_med_230041.php">BACK</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
