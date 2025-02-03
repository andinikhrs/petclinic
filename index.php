<?php
session_start();
if(!isset($_SESSION['login'])) {
    echo "<script>alert('Please login first !');window.location.replace('form_login_230041.php');</script>";
    exit;
}

include "connection_230041.php";

$query = "SELECT userid_230041, user_photo_230041 FROM users_230041 WHERE userid_230041 = '".$_SESSION['userid']."'";

$result = mysqli_query($db_connection, $query);
$data = mysqli_fetch_assoc($result);

// Cek apakah file foto ada
$iniphoto = "uploads/users/" . $data['user_photo_230041'];
if (!file_exists($iniphoto) || empty($data['user_photo_230041'])) {
    $iniphoto = "uploads/users/default.png"; // Default image jika file tidak ada
}
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Pet Clinic</title>
            <link rel="stylesheet" type="text/css" href="css/index.css">
        </head>
        <body>
        <h1 class="main-title">Andin Pet Clinic</h1>
        <hr>
        <div class="container">
            <div class="sub-title">Welcome to Pet Clinic</div>
        </div>
        <ul>
            <div class="card">
                <li><a href="read_pet_230041.php">Pet List</a></li>
            </div>
            <div class="card">
                <li><a href="read_doctor_230041.php">Doctor List</a></li>
            </div>

            <?php if($_SESSION['usertype'] == 'Manager') { ?>
            <div class="card">
                <li><a href="read_user_230041.php">User List</a></li>
            </div>
            <?php } ?>

            <div class="card">
                <li><a href="read_med_230041.php">Medicine List</a></li>
            </div>
            <div class="card">
                <li><a href="report.php">Monthly Report</a></li>
            </div>
        </ul>

        <hr>
        <div class="container">
            <div class="welcome-message">
                Welcome <span><?=$_SESSION['fullname'];?></span>, 
                you are logged in as <span class="role"><?=$_SESSION['usertype'];?></span>.
            </div>
            <img src="<?=$iniphoto;?>" width="100" height="100">
        </div>

        <div class="button-section">
            <button class="button">
                <a href="user_photo_230041.php?id=<?=$data['userid_230041']?>">Change Photo</a>
            </button>
            <button class="button">
                <a href="change_password_230041.php">Change Password</a>
            </button>
            <button class="button">
                <a href="logout_230041.php">Log Out</a>
            </button>
        </div>
        
        <br>
    </body>
</html>