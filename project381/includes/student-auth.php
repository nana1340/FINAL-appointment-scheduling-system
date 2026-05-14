<?php
session_start();
require_once __DIR__ . "/security.php";

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'student') {
    header("Location: ../login.php");
    exit();
}
?>