<?php
session_start();
session_destroy();
header('location: http://localhost/bootstrap/admin/login.php');
?>