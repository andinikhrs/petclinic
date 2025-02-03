<!doctype html>
<html>
<head>
    <title>Pet Clinic Andin</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
</head>

<body>
    <div class="container-pet">
        <h1>Andin Pet Clinic</h1>
        <hr>
        <h3>Form Add Pet</h3>
        <form method="post" action="create_pet_230041.php">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="pet_name_230041" required></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td>
                        <select name="pet_type_230041" required>
                            <option value="">Choose</option>
                            <option value="Cat">Cat</option>
                            <option value="Dog">Dog</option>
                            <option value="Reptil">Reptil</option>
                            <option value="Bird">Bird</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type="radio" name="pet_gender_230041" value="Male" required> Male
                        <input type="radio" name="pet_gender_230041" value="Female" required> Female
                    </td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number" name="pet_age_230041" required></td>
                </tr>
                <tr>
                    <td>Owner</td>
                    <td><input type="text" name="pet_owner_230041" required></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><textarea name="pet_address_230041" required></textarea></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td><input type="text" name="pet_phone_230041" required></td>
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
