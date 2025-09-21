<?php
// test_db.php

// Panggil file koneksi dari config
require_once "UMKM/config/db.php";

// Cek koneksi
if ($conn) {
    echo "✅ Koneksi ke database berhasil!";
} else {
    echo "❌ Koneksi gagal: " . mysqli_connect_error();
}
?>
