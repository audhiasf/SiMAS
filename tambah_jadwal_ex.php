<?php
include 'session-login/koneksi.php';

// Mengambil data yang dikirimkan dari formulir
$id_kendaraan = $_POST['id_kendaraan'];
$jenis_pemeliharaan = $_POST['jenis_pemeliharaan'];
$tanggal_pemeliharaan = $_POST['tanggal_pemeliharaan'];
$status_jadwal = $_POST['status_jadwal'];

$query = "INSERT INTO jadwal (id_jadwal, jenis_pemeliharaan, tanggal_pemeliharaan, status_jadwal, id_kendaraan) VALUES (NULL, '$jenis_pemeliharaan', '$tanggal_pemeliharaan', '$status_jadwal', '$id_kendaraan')";
$result = mysqli_query($mysqli, $query);
if ($result) {
    header("Location: jadwal-adm.php");
    exit();
} else {
    echo "Gagal menambahkan jadwal: " . mysqli_error($mysqli);
}

// Menutup koneksi database
mysqli_close($mysqli);
?>