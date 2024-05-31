<!-- Agar home user tidak bisa diakses dengan link -->
<?php
session_start();
include "koneksi.php";

// Memeriksa apakah login atau tidak
if (!isset($_SESSION['login'])) {
    header('Location: ../index.php'); // Jika tidak, alihkan ke halaman index.php
    exit();
}
?>