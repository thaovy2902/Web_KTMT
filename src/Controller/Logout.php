<?php
session_start();
unset($_SESSION["username"]);
header("Location: ../View/Login.php");
?>