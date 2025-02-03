<!doctype html>
<html>
    <head>
        <title>Pet Clinic Andin</title>
        <link rel="stylesheet" type="text/css" href="css/userphoto.css">
    </head>
    <body>
        <h1>Pet Clinic Andin</h1><hr>
        <h3>Change User Photo</h3>
        <?php
        include "connection_230041.php";
        $query="SELECT * FROM users_230041 WHERE userid_230041 = '$_GET[id]'";
        $user=mysqli_query($db_connection,$query);
        $data=mysqli_fetch_assoc($user);
        ?>
        <form method="post" action="user_upload_230041.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td></td>
                    <td><img src="uploads/users/<?=$data['user_photo_230041']?>" width="100" height="100"></td>
                </tr>
                <tr>
                    <td>New Photo</td>
                    <td>: <input type="file" name="new_photo_230041" required /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;
                        <input type="submit" name="upload" value="UPLOAD" />
                        <input type="hidden" name="user_photo_230041" value="<?=$data['user_photo_230041']?>" />
                        <input type="hidden" name="userid_230041" value="<?=$data['userid_230041']?>" />
                    </td>
                </tr>
            </table>
        </form>
        <p><a href="read_user_230041.php">CANCEL</a></p>
    </body>
</html>
