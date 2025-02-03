<doctype html>
<html>
<head>
    <title>Pet Clinic Andin</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
</head>

<body>
    <div class="container">
        <h1>Andin Pet Clinic</h1>
        <hr>
        <h3>Form Add User</h3>
        <form method="post" action="create_user_230041.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username_230041" required></td>
                </tr>
                <tr>
                    <td>User Type</td>
                    <td>
                        <input type="radio" name="usertype_230041" value="Staff" required> Staff
                        <input type="radio" name="usertype_230041" value="Manager" required> Manager
                    </td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="fullname_230041" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="save" value="SAVE">
                        <input type="reset" name="cancel" value="RESET">
                        <a href="index.php">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
