<?php
include 'session-login/koneksi.php';

$noPlat = $_POST['noPlat'];
$jenisKendaraan = $_POST['jenisKendaraan'];
$merek = $_POST['merek'];
$statusKendaraan = $_POST['statusKendaraan'];

$query = "UPDATE kendaraan SET jenisKendaraan='$jenisKendaraan', merek='$merek', statusKendaraan='$statusKendaraan' WHERE noPlat='$noPlat'";
$result = mysqli_query($mysqli, $query);

if ($result) {
    header("Location: tabel_kendaraan.php");
    exit();
} else {
    echo "Gagal memperbarui data kendaraan: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>
