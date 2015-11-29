<?php
session_start(); 
session_unset($_SESSION['fdk_user_id']);
session_destroy();
header("Location:../admin.php");
?>