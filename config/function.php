<?php
// config/functions.php

// Fungsi redirect sederhana
function redirect($url) {
    header("Location: $url");
    exit;
}

// Fungsi sanitize input (biar aman dari SQL Injection dasar)
function sanitize($conn, $data) {
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($data)));
}

// Fungsi cek login user
function check_login() {
    if (!isset($_SESSION['user_id'])) {
        redirect("login.php");
    }
}
?>
