
<!doctype html>
<html>
<head>
    <title>Pet Clinic</title>
    <link rel="stylesheet" type="text/css" href="css/read.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <h1>Andin Pet Clinic</h1><hr>
    <h3>Medicine List</h3>
    <p><a href="add_medicines_230041.php">Add New Medicine</a></p>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Medicine Name</th>
            <th>Type</th>
            <th>Unit</th>
            <th>Price</th>
            <th>Description</th>
            </th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            include "connection_230041.php"; // call connection
            $query = "SELECT * FROM medicines_230041"; // make a sql query
            $medicines = mysqli_query ($db_connection, $query); // run query

            $i=1; //initial counter for numbering
            foreach ($medicines as $data) : // loop to extract data from database
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['med_name_230041']; ?></td>
            <td><?php echo $data['med_type_230041']; ?></td>
            <td><?= $data['med_unit_230041']; ?></td>
            <td><?= $data['med_price_230041']; ?></td>
            <td><?= $data['med_description_230041']; ?></td>
            <td><a href="edit_med_230041.php?id=<?=$data['idmed_230041']?>">Edit Medicine</a></td>
            <td><a href="delete_med_230041.php?id=<?=$data['idmed_230041']?>"onclick="return confirm('Are you sure?')">Delete Medicine</a></td>
        </tr>
        <?php endforeach; ?>
    </table> 
    <p><a href="index.php">Back to HOME</a></p>        
</body>
</html>