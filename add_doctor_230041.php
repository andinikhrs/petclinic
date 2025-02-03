
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Andin - Add Doctor</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body>

    <!-- Form Container -->
    <div class="container-doctor">
        <h1>Andin Pet Clinic</h1>
        <hr>
        <h3>Form Add Doctor</h3>
        <form method="post" action="create_doctor_230041.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="doctor_name_230041" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="doctor_gender_230041" value="Male" required> Male
                        <input type="radio" name="doctor_gender_230041" value="Female" required> Female
                    </td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="doctor_address_230041" required></textarea></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="doctor_phone_230041" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="save" value="SAVE">
                        <input type="reset" name="reset" value="RESET">
                        <a href="index.php" class="button">Back</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>
