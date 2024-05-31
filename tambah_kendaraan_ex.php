<?php
include 'session-login/koneksi.php';

// Mengambil data yang dikirimkan dari formulir
$noPlat = $_POST['noPlat'];
$jenisKendaraan = $_POST['jenisKendaraan'];
$merek = $_POST['merek'];
$statusKendaraan = $_POST['statusKendaraan'];

$query = "INSERT INTO kendaraan (id_kendaraan, noPlat, jenisKendaraan, merek, statusKendaraan) VALUES (NULL, '$noPlat', '$jenisKendaraan', '$merek', '$statusKendaraan')";
$result = mysqli_query($mysqli, $query);
if ($result) {
    header("Location: tabel_kendaraan.php");
    exit();
} else {
    echo "Gagal menambahkan data kendaraan: " . mysqli_error($mysqli);
}

// Menutup koneksi database
mysqli_close($mysqli);
?>