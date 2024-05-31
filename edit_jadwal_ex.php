<?php
include 'session-login/koneksi.php';

$noPlat = $_POST['noPlat'];
$jenis_pemeliharaan = $_POST['jenis_pemeliharaan'];
$tanggal_pemeliharaan = $_POST['tanggal_pemeliharaan'];
$status_jadwal = $_POST['status_jadwal'];

$query = "UPDATE jadwal JOIN kendaraan ON jadwal.id_kendaraan = kendaraan.id_kendaraan SET jenis_pemeliharaan='$jenis_pemeliharaan', tanggal_pemeliharaan='$tanggal_pemeliharaan', status_jadwal='$status_jadwal' WHERE noPlat='$noPlat'";
$result = mysqli_query($mysqli, $query);

if ($result) {
    header("Location: jadwal-adm.php");
    exit();
} else {
    echo "Gagal memperbarui data jadwal pemeliharaan: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
