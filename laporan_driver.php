<?php
include "session-login/cek-session.php";
?>

<?php
include 'session-login/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buat Laporan Pengemudi</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="img/logo_simas.png" alt="logo">
        </div>
        <div class="menu">
            <a href="home-driver.php">Dashboard</a>
            <a href="#">Lacak Lokasi</a>
            <a href="jadwal-driver.php">Jadwal Perjalanan</a>
            <a href="laporan_driver.php" class="active">Laporan</a>
            <a href="absensi.php">Absensi</a>
        </div>
        <div class="logout">
            <a href="session-login/logout.php"><button>Logout</button></a>
        </div>
    </div>
    <div class="main">
        <div class="header">
            <span>Welcome back, Budi!</span>
            <span class="role">Pengemudi</span>
        </div>
        <div class="form-container">
            <h1>Membuat Laporan</h1>
            <hr>
            <form method="POST" action="tambah_laporan.php">
            <div class="form-group">
                <label for="">No Plat</label>
                <select name="id_kendaraan" id="id_kendaraan" class="form-control">
                    <option>Pilih Kendaraan</option>
                    <?php $query = mysqli_query($mysqli, "SELECT * FROM kendaraan") or die (mysqli_error($mysqli));
                    while ($data = mysqli_fetch_array($query)){
                        echo "<option value=$data[id_kendaraan]> $data[noPlat] </option>";
                    } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal_laporan">Tanggal <span style="color:red;">*</span></label>
                <input type="date" name="tanggal_laporan" id="tanggal_laporan" required>
            </div>
            <div class="form-group">
                <label for="tipe_bb">Tipe Bahan Bakar <span style="color:red;">*</span></label>
                <input type="text" name="tipe_bb" id="tipe_bb" required>
            </div>
            <div class="form-group">
                <label for="merek">Jumlah Bahan Bakar <span style="color:red;">*</span></label>
                <input type="text" name="jumlah_bb" id="jumlah_bb" required>
            </div>
            <div class="form-group">
                <label for="biaya_bb">Biaya Pengisian <span style="color:red;">*</span></label>
                <input type="text" name="biaya_bb" id="biaya_bb" required>
            </div>
            <div class="form-group">
                <label for="lokasi_pengisian">Lokasi Pengisian <span style="color:red;">*</span></label>
                <input type="text" name="lokasi_pengisian" id="lokasi_pengisian" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Submit" class="add-button">
                <!-- <button type="submit" class="btn btn-primary btn-user btn-block"> Simpan</button> -->
            </div>
        

                
            </form>
        </div>
    </div>
</body>
</html>


<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    height: auto;
}

.sidebar {
    width: 250px;
    height: 95vh;
    background-color: #dc3545;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    position: fixed;
}

.logo img{
    width: 75%;
    height: auto;
    margin-bottom: 20px;
}

.menu a {
    color: #fff;
    text-decoration: none;
    display: block;
    padding: 10px 0;
    margin: 5px 0;
    border-radius: 5px;
}

.menu a.active, .menu a:hover {
    background-color: #ff5151;
}

.logout button {
    width: 100%;
    padding: 10px;
    background-color: #fff;
    color: #dc3545;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.main {
    flex-grow: 1;
    padding: 20px;
    background-color: #fff;
    padding-left: 300px;
}

.header {
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
    border-bottom: 1px solid #ddd;
}

.header .role {
    background-color: #FF8A65;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
}

.form-container {
    max-width: 600px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
    margin-top: 0;
}

label {
    display: block;
    margin-top: 10px;
    font-weight: bold;
}

input[type="text"], input[type="date"], select {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.add-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #ff5151;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.add-button:hover {
    background-color: #FF8A65;
}

</style>
