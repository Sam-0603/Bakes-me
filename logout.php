<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    // Destroy the session
    session_destroy();
    header("Location: home.php");
    exit();
}
?>