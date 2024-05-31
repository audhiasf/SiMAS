<?php
include 'session-login/koneksi.php';

// Mengambil data yang dikirimkan dari formulir
$id_kendaraan = $_POST['id_kendaraan'];
$tanggal_laporan = $_POST['tanggal_laporan'];
$tipe_bb = $_POST['tipe_bb'];
$jumlah_bb = $_POST['jumlah_bb'];
$biaya_bb = $_POST['biaya_bb'];
$lokasi_pengisian = $_POST['lokasi_pengisian']

$query = "INSERT INTO laporanbahanbakar (id_laporan, tanggal_laporan, tipe_bb, jumlah_bb, biaya_bb, lokasi_pengisian, id_kendaraan, id_pengemudi) VALUES (NULL, '$tanggal_laporan', '$tipe_bb', '$jumlah_bb', '$biaya_bb', '$lokasi_pengisian', '$id_kendaraan', '$id_pengemudi')";
$result = mysqli_query($mysqli, $query);
if ($result) {
    header("Location: laporan_driver.php");
    exit();
} else {
    echo "Gagal menambahkan data kendaraan: " . mysqli_error($mysqli);
}

// Menutup koneksi database
mysqli_close($mysqli);
?>