<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read | Doctor</title>
    <link rel="stylesheet" type="text/css" href="css/read.css">
</head>
<body>
    
    <div class="content">
    <h3>Doctors List</h3>
    <br>
    <th><a href="add_doctor_230041.php" class="btn btn-add">Add New Doctor</a></th></br>
    <form action="">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Photo</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
            include 'sidebar.php'; 
            include "connection_230041.php"; // call connection

            $query = "SELECT * FROM doctor_230041"; // make a sql query
            $doctors = mysqli_query ($db_connection, $query); // run query

            $i=1; //initial counter for numbering
            foreach ($doctors as $data) : // loop to extract data from database
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['doctor_name_230041']; ?></td>
            <td><?php echo $data['doctor_gender_230041']; ?></td>
            <td><?= $data['doctor_address_230041']; ?></td>
            <td><?= $data['doctor_phone_230041']; ?></td>
            <td align="center">
                <img src="uploads/doctors/<?=$data['doctor_photo_230041']; ?>" width="50" height="50"><br>
            </td>
            <td><a href="edit_doctor_230041.php?id=<?=$data['doctor_id_230041']?>" class="btn btn-edit">Edit doctor</a></td>
            <td><a href="delete_doctor_230041.php?id=<?=$data['doctor_id_230041']?>"onclick="return confirm('Are you sure?')" class="btn btn-delete">Delete doctor</a></td>
        </tr>
        <?php endforeach; ?>
    </table> 
    <p><a href="index.php" class="btn btn-add">Back to HOME</a></p>        
</body>
</html>