<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    die();
} else {
    header("Location: login.php");
    die();
}
