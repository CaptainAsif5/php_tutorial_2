<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['admin'] != 1) {
    header('Location: login.php');
    exit();
}
?>
