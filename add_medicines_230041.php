<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic Andin - Add Medicine</title>
    <link rel="stylesheet" type="text/css" href="css/add.css">
</head>
<body>
    <div class="container">
        <h1>Pet Clinic Andin</h1>
        <hr>
        <h3>Form Add Medicine</h3>
        <form method="post" action="create_med_230041.php">
            <div class="form-group">
                <label for="med_name">Medicine Name</label>
                <input type="text" id="med_name" name="med_name_230041" required>
            </div>

            <div class="form-group">
                <label>Type</label>
                <div class="radio-group">
                    <input type="radio" id="generic" name="med_type_230041" value="generic" required>
                    <label for="generic">Generic</label>
                    <input type="radio" id="patent" name="med_type_230041" value="patent" required>
                    <label for="patent">Patent</label>
                </div>
            </div>

            <div class="form-group">
                <label for="med_unit">Unit</label>
                <select id="med_unit" name="med_unit_230041" required>
                    <option value="">Choose</option>
                    <option value="strip">Strip</option>
                    <option value="bottle">Bottle</option>
                    <option value="sachet">Sachet</option>
                </select>
            </div>

            <div class="form-group">
                <label for="med_price">Price</label>
                <input type="number" id="med_price" name="med_price_230041" required>
            </div>

            <div class="form-group">
                <label for="med_description">Description</label>
                <textarea id="med_description" name="med_description_230041" required></textarea>
            </div>

            <div class="form-actions">
                <input type="submit" name="save" value="SAVE" class="btn btn-primary">
                <input type="reset" name="reset" value="RESET" class="btn btn-secondary">
            </div>
        </form>
        <p><a href="read_med_230041.php">Cancel</a></p>
    </div>
</body>
</html>
