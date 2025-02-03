<?php
session_start();
session_destroy();
echo "<script>alert('Logout successs !');window.location.replace('form_login_230041.php');</script>";
?>