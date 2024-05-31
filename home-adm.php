<?php
include "session-login/cek-session.php";
?>

<?php
include 'session-login/koneksi.php';

$query_mysql = mysqli_query($mysqli, "SELECT * FROM kendaraan");
$total_kendaraan = mysqli_num_rows($query_mysql);

$query_mysql = mysqli_query($mysqli, "SELECT * FROM pengemudi");
$total_driver = mysqli_num_rows($query_mysql)

?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
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
      width: 100%
      height: auto;
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
    .job-title {
      margin-top: 30px;
      margin-bottom: 20px;
    }
    .job-menu {
      display: flex;
      flex-wrap: nowrap;
      overflow-x: auto;
    }
    .job-menu .card {
      flex: 0 0 auto;
      margin-right: 10px;
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

  <!-- Sidebar -->
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
      <div class="menu-item"><a href="kinerja.php"><i class="fas fa-user"></i> Kinerja Pengemudi</a></div>
      <a class="logout btn btn-primary" href="session-login/logout.php">Logout</a>
    </div>
  </div>

  <!-- Dashboard Content -->
  <div class="dashboard">
    <h4>Welcome Back, Dino</h4>
    <h6>let's do our best today</h6><br>
    <h3>Dashboard</h3>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-car" style="margin-right: 10px;"></i><?= $total_kendaraan; ?> Kendaraan</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-user"style="margin-right: 10px;"></i><?= $total_driver; ?> Pengemudi</h5>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="img/lokasi.jpg" class="card-img-top" alt="Lokasi">
            <div class="card-body">
              <h5 class="card-title">Lokasi</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="job-title">Your Job</div>
    <div class="job-menu">
      <div class="card">
        <div class="card-body">
          <a href="tabel_kendaraan.php" style="text-decoration: none; color:black;">
            <h5 class="card-title"><i class="fas fa-car"></i> Data Kendaraan</h5>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <a href="#" style="text-decoration: none; color:black;">
            <h5 class="card-title"><i class="fas fa-map-marker-alt"></i> Lacak Lokasi</h5>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <a href="jadwal-adm.php" style="text-decoration: none; color:black;">
            <h5 class="card-title"><i class="fas fa-calendar-alt"></i> Jadwal Pemeliharaan</h5>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <a href="lihat.laporan.php" style="text-decoration: none; color:black;">
            <h5 class="card-title"><i class="fas fa-gas-pump"></i> Pemantauan Bahan Bakar</h5>
          </a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <a href="#" style="text-decoration: none; color:black;">
            <h5 class="card-title"><i class="fas fa-user"></i> Kinerja Pengemudi</h5>
          </a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>