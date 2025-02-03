

<!doctype html>
<html>
<head>
    <title>Pet Clinic Andin</title>
    <link rel="stylesheet" type="text/css" href="css/read.css">
</head>
<body>

<?php include 'sidebar.php';  ?>

<h1>Pet Clinic Andin</h1>
<hr>
<h3>Pet List</h3>
<p><a href="add_pet_230041.php">Add New Pet</a></p>

<table border="1">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Type</th>
        <th>Gender</th>
        <th>Age (month)</th>
        <th>Photo</th>
        <th>Owner</th>
        <th>Address</th>
        <th>Phone</th>
        <th colspan="3">Action</th>
    </tr>
    <?php
    include "connection_230041.php";
    $query = "SELECT * FROM petclinic_230041";
    $pets = mysqli_query($db_connection, $query);

    $i = 1;
    foreach ($pets as $data) : 
    ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><a href="medicals_230041.php?pet_id=<?=$data['pet_id_230041']?>"><?=$data['pet_name_230041']; ?></a></td>
        <td><?php echo $data['pet_type_230041']; ?></td>
        <td><?php echo $data['pet_gender_230041']; ?></td>
        <td><?php echo $data['pet_age_230041']; ?></td>
        <td align="center">
            <img src="uploads/pets/<?php echo $data['pet_photo_230041']; ?>" width="50" height="50"><br>
            <button class="change-photo" onclick="window.location.href='pet_photo_230041.php?id=<?=$data['pet_id_230041']?>'">Change Photo</button>
        </td>
        <td><?= $data['pet_owner_230041']; ?></td>
        <td><?= $data['pet_address_230041']; ?></td>
        <td><?= $data['pet_phone_230041']; ?></td>
        <td>
            <button class="edit" onclick="window.location.href='edit_pet_230041.php?id=<?=$data['pet_id_230041']?>'">Edit Pet</button>
        </td>
        <td>
            <button class="delete" onclick="return confirm('Are you sure you want to delete this pet?') && window.location.href='delete_pet_230041.php?id=<?=$data['pet_id_230041']?>'">Delete Pet</button>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<p><a href="index.php">Back to Home</a></p>

</body>
</html>
