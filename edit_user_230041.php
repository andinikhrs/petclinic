<!doctype html>
<html>
<head>
    <title>Pet Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
    <h1>Pet Clinic Andin</h1>
    <hr>
    <h3>Form Edit User</h3>
    <?php
    //call connection php mysql
    include "connection_230041.php";
    
    //make query SELECT FROM WHERE
    $query="SELECT * FROM users_230041 WHERE userid_230041='$_GET[id]'";

    //run query
    $user=mysqli_query($db_connection,$query);

    //extract data from query result
    $data=mysqli_fetch_assoc($user);
    ?>
    <form method="post" action="update_user_230041.php">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_230041" value="<?=$data['username_230041']?>" required></td>
            </tr>
            <tr>
                <td>Usertype</td>
                <td>
                    <input type="radio" name="usertype_230041" value="Staff" <?=($data['usertype_230041']=='Staff')?'checked':'';?> required> Staff
                    <input type="radio" name="usertype_230041" value="Manager" <?=($data['usertype_230041']=='Manager')?'checked':'';?> required> Manager
                </td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="fullname_230041" value="<?=$data['fullname_230041']?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="userid_230041" value="<?=$data['userid_230041']?>">
                    <button type="button"><a href="read_user_230041.php">BACK</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
