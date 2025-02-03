<style>
    /* Sidebar */
.sidebar {
    width: 250px;
    height: 100vh;
    background: linear-gradient(120deg, #c47171, #723535);
    color: white;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2);
    text-align: center;
    position: fixed;
    height: 100vh;
}

.sidebar h2 {
    font-size: 2em;
    color: #ffefdb;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
}

.sidebar h2::after {
    content: "🐾";
    font-size: 1.2em;
    margin-left: 5px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    display: block;
    padding: 10px;
    color: white;
    text-decoration: none;
    font-size: 1.1em;
    background: linear-gradient(45deg, #c47171, #ff6f91);
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
}

.sidebar ul li a:hover {
    background-color: #723535;
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Sidebar footer */
.sidebar-footer {
    margin-top: 30px;
    text-align: center;
}

.sidebar-footer a {
    display: block;
    padding: 8px 0;
    color: white;
    text-decoration: none;
    font-size: 0.9em;
    transition: background-color 0.3s;
}

.sidebar-footer a:hover {
    background-color: #723535;
    border-radius: 5px;
}

/* Sidebar profile photo */
.profile-pic {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: block;
    margin: 0 auto 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

/* User role in sidebar */
.role {
    font-size: 1.1em;
    color: #ffefdb;
}

/* Main Content */
.main {
    margin-left: 270px;
    padding: 20px;
    flex-grow: 1;
}

/* Style tombol-tombol */
button.add-pet, button.change-photo, button.edit, button.delete, button.back {
    background-color: #c47171;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button.add-pet a, button.change-photo a, button.edit a, button.delete a, button.back a {
    color: white;
    text-decoration: none;
}

button.add-pet:hover, button.change-photo:hover, button.edit:hover, button.delete:hover, button.back:hover {
    background-color: #723535;
}

</style>

<?php 
    session_start();
?>

<div class="sidebar">
    
    <img src="<?=$iniphoto;?>" class="profile-pic" alt="User Photo">
    <p class="username"><?=$_SESSION['fullname'];?></p>
    <p class="role">(<?=$_SESSION['usertype'];?>)</p>
    <div class="user-options">
            <button class="user-option-btn">
                <a href="user_photo_230041.php?id=<?=$data['userid_230041']?>" class="user-option-link">Change Photo</a>
            </button>
            <button class="user-option-btn">
                <a href="change_password_230041.php" class="user-option-link">Change Password</a>
            </button>
        </div>
    <ul>
        <li><a href="read_pet_230041.php">🐾 Pet List</a></li>
        <li><a href="read_doctor_230041.php">🩺 Doctor List</a></li>
        <?php if($_SESSION['usertype'] == 'Manager') { ?>
            <li><a href="read_user_230041.php">👥 User List</a></li>
        <?php } ?>
        <li><a href="read_med_230041.php">💊 Medicine List</a></li>
        <li><a href="report.php">📊 Monthly Report</a></li>
    </ul>
    <div class="sidebar-footer">
        <a href="logout_230041.php">Log Out</a>
    </div>
</div>
