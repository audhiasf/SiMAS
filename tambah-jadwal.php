<?php
include "session-login/cek-session.php";
?>

<?php
include 'session-login/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal - SiMAS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #FD6A6A;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navbar img {
            height: 65px;
        }
        .navbar .profile {
            display: flex;
            align-items: center;
        }
        .navbar .profile img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
            margin-left: 10px;
        }
        .container {
            max-width: 600px;
            margin: 100px auto 50px auto; /* Adjusted margin to account for fixed navbar */
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        /* .header {
            background-color: #FD6A6A;
            color: white;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        } */
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group button {
            /* background-color: #dc3545; */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            /* float: right; */
        }
        .form-group button:hover {
            background-color: #c82333;
        }
        .form-group span{
            color: #EE181E;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <img src="img/logo_simas.png" alt="Logo">
        <div class="profile">
            <span>Dino Apriyanto</span>
            <img src="https://via.placeholder.com/40" alt="Profile Picture">
        </div>
    </div>
    <div class="container">
        <h3>Silahkan Isi Data</h3>
        <hr>
        <form method="POST" action="tambah_jadwal_ex.php">
            <div class="form-group">
                <label for="noPlat">No Plat <span>*</span></label>
                <select name="id_kendaraan" id="id_kendaraan" class="form-control">
                    <option>Pilih Kendaraan</option>
                    <?php $query = mysqli_query($mysqli, "SELECT * FROM kendaraan") or die (mysqli_error($mysqli));
                    while ($data = mysqli_fetch_array($query)){
                        echo "<option value=$data[id_kendaraan]> $data[noPlat] </option>";
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="jenis_pemeliharaan">Jenis Pemeliharaan <span>*</span></label>
                <input type="text" name="jenis_pemeliharaan" id="jenis_pemeliharaan" required>
            </div>
            <div class="form-group">
                <label for="tanggal_pemeliharaan">Tanggal <span>*</span></label>
                <input type="date" name="tanggal_pemeliharaan" id="tanggal_pemeliharaan" required>
            </div>
            <div class="form-group">
                <label for="status_jadwal">Status Jadwal <span>*</span></label>
                <input type="text" name="status_jadwal" id="status_jadwal" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user btn-block"> Simpan</button>
            </div>
            <div class="form-group">
                <a href="jadwal-adm.php" class="btn btn-danger btn-user btn-block">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>