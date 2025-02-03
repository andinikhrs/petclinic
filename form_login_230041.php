<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login - Pet Clinic Andin</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <h1>Pet Clinic Andin</h1>
    <hr>
    <div class="card">
        <h2>Form Login</h2>
        <form method="post" action="login_230041.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username_230041" id="username" required />
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password_230041" id="pass" required />
            </div>
            <div class="form-group checkbox">
                <input type="checkbox" onclick="show()"> Show Password
            </div>
            <div class="form-actions">
                <button type="submit" name="login">Login</button>
                <button type="reset" name="reset">Reset</button>
            </div>
        </form>
    </div>
    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = 'text';
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>
