<?php
include "session-login/cek-session.php";
?>

<?php
include 'session-login/koneksi.php';

$query_mysql = mysqli_query($mysqli, "SELECT * FROM kendaraan");

if (isset($_POST['hapus'])) {
    $noPlat = $_POST['hapus'];
    $sql = "DELETE FROM kendaraan WHERE noPlat = '$noPlat' ";
}

if (isset($_GET['hapus'])) {
    $sql = mysqli_query($mysqli, "DELETE FROM kendaraan where noPlat = '$_GET[hapus]'")
        or die(mysqli_error($mysqli));

    echo "<p><b> Data berhasil dihapus</b></p>"; //Menampilkan tulisan saat data berhasil dihapus
    echo "<meta http-equiv=refresh content=2;URL='table_kendaraan.php'>"; //Menghapus tulisan data berhasil dihapus dan melakukan refresh
}

?>


<!DOCTYPE html>
<html lang="en">
<title>Data Kendaraan</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kendaraan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f5f5f5;
            }
        .container-fluid {
            padding: 0;
        }
        .sidebar {
            width: 330px;
            height: 100vh;
            background-color: #dc3545;
            color: #fff;
            padding-top: 20px;
            float: left;
            position:fixed;
        }
        .dashboard {
            margin-left: 330px;
            padding: 20px;
        }
        .dashboard h2 {
            margin-bottom: 20px;
        }
        .profile {
            float: right;
            margin-top: -40px;
            margin-right: 20px;
        }
        .profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo img {
            width: 75%;
            height: auto;
        }
        .menu-item {
            padding: 10px 0;
            margin: 5px 0;
        }
        .menu-item a {
            color: #fff;
            text-decoration: none;
        }
        .menu-item i {
            margin-right: 10px;
        }
        .content {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
            margin-left: 347px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .welcome {
            font-size: 20px;
        }
        .header .profile {
            display: flex;
            align-items: center;
        }
        .header .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }
        h2 {
            margin-top: 20px;
        }
        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color:#FD6A6A;
        }
        .actions img {
            width: 24px;
            height: 24px;
            cursor: pointer;
        }
        .actions img:hover {
            transform: scale(1.1);
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }
        .button-container button {
            background-color: #FF7171;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }
        .button-container button:hover {
            background-color: #e55d5d;
        }
        .logout {
            padding: 10px;
            background-color: #fff;
            color: #dc3545;
            border: none;
            position: fixed;
            bottom: 20px;
            left: 20px;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="sidebar">
    <div class="container">
      <div class="logo">
        <!-- Logo perusahaan -->
        <img src="img/logo_simas.png" alt="Company Logo">
      </div>
    </div>
    <div class="container menu-items">
      <div class="menu-item"><a href="home-adm.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a></div>
      <div class="menu-item"><a href="tabel_kendaraan.php"><i class="fas fa-car"></i> Data Kendaraan</a></div>
      <div class="menu-item"><a href="#"><i class="fas fa-map-marker-alt"></i> Lacak Lokasi</a></div>
      <div class="menu-item"><a href="jadwal-adm.php"><i class="fas fa-calendar-alt"></i> Jadwal Pemeliharaan</a></div>
      <div class="menu-item"><a href="lihat_laporan.php"><i class="fas fa-gas-pump"></i> Pemantauan Bahan Bakar</a></div>
      <div class="menu-item"><a href="#"><i class="fas fa-user"></i> Kinerja Pengemudi</a></div>
      <a class="logout btn btn-primary" href="session-login/logout.php">Logout</a>
    </div>
  </div>

    <div class="content">
        <div class="header">
            <div class="welcome">
                <p>Welcome back, Dino!<br>let's do our best today</p>
            </div>
            <div class="profile">
                <img src="https://via.placeholder.com/40" alt="Profile Picture">
                <p>Dino Apriyanto<br>Admin</p>
            </div>
        </div>
        
        <h2>Mengelola Data Kendaraan</h2>
        <div class="button-container">
            <a href="tambah_kendaraan.php"><button>Tambah</button></a>
        </div>
        <div class="table-container">
            <table>
                <thead style="color: white;">
                    <tr>
                        <th>No</th>
                        <th>No Plat</th>
                        <th>Jenis Kendaraan</th>
                        <th>Merek</th>
                        <th>Status Kendaraaan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; while ($result = mysqli_fetch_assoc($query_mysql)) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $result['noPlat']; ?></td>
                        <td><?= $result['jenisKendaraan']; ?></td>
                        <td><?= $result['merek']; ?></td>
                        <td><?= $result['statusKendaraan']; ?></td>
                        <td>
                            <a href="edit_kendaraan.php?update=<?= $result['noPlat']; ?>"
                            data-tip="edit"><i class="fa fa-edit"></i></a>
                            <a href="?hapus=<?php echo $result['noPlat']; ?>"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data kendaraan dengan plat <?= $result['noPlat'] ?> ?');"
                            data-tip="delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
    </div>
</body>
</html>