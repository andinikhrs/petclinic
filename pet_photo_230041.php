<!doctype html>
<html>
    <head>
    <title>Pet Clinic Andin</title>
</head>
<body>
    <h1>Pet Clinic Andin<h1>
        <h3>Change Pet Photo</h3>
        <?php
        include "connection_230041.php";
        $query="SELECT * FROM petclinic_230041 WHERE pet_id_230041='$_GET[id]'";
        $pet=mysqli_query($db_connection,$query);
        $data=mysqli_fetch_assoc($pet);
        ?>
        <form method="post" action="pet_upload_230041.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td></td>
                    <td><img src="uploads/pets/<?=$data['pet_photo_230041']?>" width="100" height="100"></td>
                <tr>
                    <td>New Photo</td>
                    <td>: <input type="file" name="new_photo_230041" required /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;
                        <input type="submit" name="upload" value="UPLOAD" />
                        <input type="hidden" name="pet_photo_230041" value="<?=$data['pet_photo_230041']?>" />
                        <input type="hidden" name="pet_id_230041" value="<?=$data['pet_id_230041']?>" />
                    </td>
                </tr>
                </tr>
            </table>
        </form>
        <p><a href="read_pet_230041.php">CANCEL</a></p>
</body>
</html>