<?php
include "session-login/cek-session.php";
?>

<?php
include 'session-login/koneksi.php';

$query_mysql = mysqli_query($mysqli, "SELECT * FROM laporanBahanBakar, kendaraan 
WHERE laporanBahanBakar.id_kendaraan = kendaraan.id_kendaraan");


?>


<!DOCTYPE html>
<html lang="en">
<title>Laporan Pemakaian</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Pemakaian</title>
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
        /* .sidebar {
            width: 347px;
            height: 100vh;
            background-color: #dc3545;
            color: #fff;
            padding-top: 20px;
            float: left;
            position:fixed;
        } */
        .dashboard {
            margin-left: 347px;
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
            width: 100px;
            height: auto;
        }
        .menu-item {
            margin-bottom: 10px;
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
            margin-left: 50px;
            margin-right: 50px;
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
      position: fixed;
      bottom: 20px;
      left: 20px;
      border-radius: 20px;
    }
    </style>
</head>
<body>
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
        
        <h2>Laporan Bahan Bakar</h2>
        <select id="filter_date" name="filter_date" class="form-control" onchange="this.form.submit()">
                    <option value="">Select Date</option>
                    <?php
                    // Fetch distinct dates from the database
                    $date_query = mysqli_query($mysqli, "SELECT DISTINCT tanggal_laporan FROM laporanBahanBakar ORDER BY tanggal_laporan DESC");
                    while ($date_result = mysqli_fetch_assoc($date_query)) {
                        echo "<option value='" . $date_result['tanggal_laporan'] . "'>" . $date_result['tanggal_laporan'] . "</option>";
                    }
                    ?>
                </select>
        <div class="table-container">
            <table>
                <thead style="color: white;">
                    <tr>
                        <!-- <th>No</th> -->
                        <th>No Plat</th>
                        <th>Tanggal</th>
                        <th>Tipe Bahan Bakar</th>
                        <th>jumlah Bahan Bakar</th>
                        <th>Biaya Bahan Bakar</th>
                        <th>Lokasi Pengisian</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; while ($result = mysqli_fetch_assoc($query_mysql)) { ?>
                    <tr>
                        <!-- <td><?= $no++; ?></td> -->
                        <td><?= $result['noPlat']; ?></td>
                        <td><?= $result['tanggal_laporan']; ?></td>
                        <td><?= $result['tipe_bb']; ?></td>
                        <td><?= $result['jumlah_bb']; ?></td>
                        <td><?= $result['biaya_bb']; ?></td>
                        <td><?= $result['lokasi_pengisian']; ?></td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="button-container">
            <a href="home-adm.php"><button>Kembali</button></a>
        </div>
    </div>
</body>
</html>