<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>Kinerja Pengemudi</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }
    header {
      background-color: #FD6A6A;
      color: #fff;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    header img {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-left: auto;
    }
    .admin-info {
      text-align: right;
    }
    .admin-info p {
      margin: 0;
    }
    .admin-info p:first-child {
      color: #fff;
      font-size: 1.2em;
    }
    .admin-info p:last-child {
      color: #f0f0f0;
      font-size: 0.8em;
    }
    .admin-info img {
      margin-right: 150px;
    }
    .container {
      padding: 20px;
    }
    .search-box {
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .driver-list h3,
    .driver-stats h3 {
      margin-bottom: 20px;
    }
    .driver-stat {
      background-color: #D9D9D9;
      border: 1px solid #dee2e6;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
    }
    .driver-stat img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .driver-name {
      font-weight: bold;
      margin-bottom: 10px;
    }
    
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div>
      <!-- Logo perusahaan -->
      <img src="img/logo_simas.png" alt="Company Logo">
    </div>
    <div class="admin-info">
      <p>Dino Apriyanto</p>
      <p>Admin</p>
      <!-- Foto profil -->
      <img src="https://flyclipart.com/thumb2/account-person-profile-user-icon-user-profile-icon-196363.png" alt="Profile Picture">
    </div>
  </header>

  <!-- Konten -->
  <div class="container">
    <!-- Statistik Pengemudi -->
    <div class="driver-stats">
      <h3><b>Kinerja Pengemudi</b></h3>
      <div class="row">
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Budi Susanto</div>
            <p>Jumlah Perjalanan: 4</p>
            <p>Rata-rata Kecepatan: 63 km/jam</p>
            <p>Pengereman Keras: 2</p>
            <p>Percepatan Tiba-tiba: 1</p>
            <p>Efisiensi Bahan Bakar: 8.1 L/100 km</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Suryanto</div>
            <p>Jumlah Perjalanan: 5</p>
            <p>Rata-rata Kecepatan: 55 km/jam</p>
            <p>Pengereman Keras: 3</p>
            <p>Percepatan Tiba-tiba: 2</p>
            <p>Efisiensi Bahan Bakar: 8.5 L/100 km</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Herman</div>
            <p>Jumlah Perjalanan: 6</p>
            <p>Rata-rata Kecepatan: 60 km/jam</p>
            <p>Pengereman Keras: 2</p>
            <p>Percepatan Tiba-tiba: 1</p>
            <p>Efisiensi Bahan Bakar: 7.2 L/100 km</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Hayang Jajan</div>
            <p>Jumlah Perjalanan: 4</p>
            <p>Rata-rata Kecepatan: 40 km/jam</p>
            <p>Pengereman Keras: 2</p>
            <p>Percepatan Tiba-tiba: 0</p>
            <p>Efisiensi Bahan Bakar: 9.1 L/100 km</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Coki Yono</div>
            <p>Jumlah Perjalanan: 7</p>
            <p>Rata-rata Kecepatan: 62 km/jam</p>
            <p>Pengereman Keras: 2</p>
            <p>Percepatan Tiba-tiba: 1</p>
            <p>Efisiensi Bahan Bakar: 8.3 L/100 km</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Dadang Mbew</div>
            <p>Jumlah Perjalanan: 3</p>
            <p>Rata-rata Kecepatan: 35 km/jam</p>
            <p>Pengereman Keras: 3</p>
            <p>Percepatan Tiba-tiba: 2</p>
            <p>Efisiensi Bahan Bakar: 8.1 L/100 km</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Purdadi Ya</div>
            <p>Jumlah Perjalanan: 4</p>
            <p>Rata-rata Kecepatan: 63 km/jam</p>
            <p>Pengereman Keras: 1</p>
            <p>Percepatan Tiba-tiba: 1</p>
            <p>Efisiensi Bahan Bakar: 9.6 L/100 km</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="driver-stat">
            <img src="https://cdn-icons-png.flaticon.com/128/14987/14987727.png" alt="Profile Picture">
            <div class="driver-name">Kak Gem</div>
            <p>Jumlah Perjalanan: 8</p>
            <p>Rata-rata Kecepatan: 60 km/jam</p>
            <p>Pengereman Keras: 2</p>
            <p>Percepatan Tiba-tiba: 1</p>
            <p>Efisiensi Bahan Bakar: 9.3 L/100 km</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    // Anda bisa menambahkan skrip JavaScript di sini jika diperlukan
  </script>
</body>
</html>
