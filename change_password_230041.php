<!doctype html>
<html>
    <head>
        <title>Pet Clinic Andin</title>
        <link rel="stylesheet" type="text/css" href="css/changepw.css">
    </head>
    <body>
        <h1>Pet Clinic Andin</h1><hr>
        <h3>Change Password</h3>
        <form method="post" action="update_password_230041.php">
            <table>
                <tr>
                    <td>New Password :</td>
                    <td><input type="password" name="new_password_230041" id="new" required /></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;<input type="submit" name="change" value="CHANGE" />
                    <input type="reset" name="reset" value="RESET" />
                    </td>
                </tr>
            </table>
        </form>
        <p><a href="index.php">CANCEL</a></p>
        <script>
            function show() {
                var x = document.getElementById("new");
                if(x.type === "password") {
                    x.type = "password";
                } else {
                    x.type = "password";
                }
            }
        </script>
    </body>
</html>
