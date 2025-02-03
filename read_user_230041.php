

<!doctype html>
<html>
<head>
    <title>Pet Clinic</title>
    <link rel="stylesheet" href="css/read.css">
</head>
<body>
    <?php include 'sidebar.php';  ?>
    <h1>Pet Clinic Andin</h1>
    <hr>
    <h3>User List</h3>
    <p><a href="add_user_230041.php">Add New user</a></p>
    <table border="1">
    <tr>
            <th>No</th>
            <th>Username</th>
            <th>User Type</th>
            <th>Full Name</th>
            <th>Photo</th>
            <th colspan="4">Action</th>
        </tr>
        <?php
        include "connection_230041.php";
        $query = "SELECT * FROM users_230041";
        $users = mysqli_query($db_connection, $query);
        
        $i=1;
        foreach ($users as $data) : 
        ?>
        <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['username_230041']; ?></td>
    <td><?= $data['usertype_230041']; ?></td>
    <td><?= $data['fullname_230041']; ?></td>
    <td align="center">
    <td>
    <img src="uploads/users/<?php echo $data['user_photo_230041']; ?>" width="50" height="50"><br>
    <button class="change-photo" onclick="window.location.href='user_photo_230041.php?id=<?=$data['userid_230041']?>'">Change Photo</button>
</td>
<td>
    <button class="edit" onclick="window.location.href='edit_user_230041.php?id=<?=$data['userid_230041']?>'">Edit User</button>
</td>
<td>
    <button class="delete" onclick="return confirm('Are you sure delete this user?') && window.location.href='delete_user_230041.php?id=<?=$data['userid_230041']?>'">Delete User</button>
</td>
<td>
    <button class="reset-password" onclick="return confirm('Are you sure reset the password?') && window.location.href='reset_password_230041.php?id=<?=$data['userid_230041'];?>&type=<?=$data['usertype_230041'];?>'">Reset Password</button>
</td>

</tr>
        </tr>
        <?php endforeach; ?>
        </table>
        <p><a href= "index.php">Back To Home</a></p>
</body>
</html>