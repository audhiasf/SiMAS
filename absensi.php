<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simas_db";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jumlah_perjalanan = $_POST["jumlah_perjalanan"];
    $pengereman_keras = $_POST["pengereman_keras"];
    $rata_rata_kecepatan = $_POST["rata_rata_kecepatan"];
    $efisiensi_bahan_bakar = $_POST["efisiensi_bahan_bakar"];
    $percepatan_mendadak = $_POST["percepatan_mendadak"];
    $tanggal_pemeliharaan = $_POST["tanggal_pemeliharaan"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO absensi (nama, jumlah_perjalanan, pengereman_keras, rata_rata_kecepatan, efisiensi_bahan_bakar, percepatan_mendadak, tanggal_pemeliharaan)
    VALUES ('$nama', '$jumlah_perjalanan', '$pengereman_keras', '$rata_rata_kecepatan', '$efisiensi_bahan_bakar', '$percepatan_mendadak', '$tanggal_pemeliharaan')";

    if ($conn->query($sql) === TRUE) {
        header("Location: absensi.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Absensi Pengemudi</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #FF666A;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .sidebar a {
            padding: 10px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            margin-bottom: 10px;
        }

        .logout {
            margin-top: auto;
            text-align: center;
        }

        .logout button {
            width: 80%;
            padding: 20px;
            background-color: #fff;
            color: #FF6F61;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }

        .sidebar a:hover {
            background-color: #FD8383;
        }

        .sidebar .logo-img {
            width: 80%;
            margin-bottom: 20px;
        }

        .sidebar .menu-icon {
            width: 20px;
            margin-right: 10px;
        }

        .main {
            flex-grow: 1;
            padding: 20px;
            background-color: #fff;
            margin-left: 250px;
            display: flex;
            flex-direction: column;
        }

        .header {
            display: flex;
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
            max-width: 800px;
            width: 100%;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        h1 {
            margin-top: 0;
            font-size: 24px;
            margin-bottom: 20px;
            width: 100%;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            width: 48%;
        }

        input[type="text"], input[type="date"], input[type="number"] {
            width: 48%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-row {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 10px;
            width: 100%;
        }

        .form-row > * {
            flex: 0 0 48%;
        }

        .add-button {
            width: 100%;
            padding: 10px 20px;
            background-color: #6382A1;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #496077;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="img/logo_simas.png" alt="Logo Perusahaan" class="logo-img">
        <a href="home-driver.php"><img src="img/dashboard.png" alt="Dashboard" class="menu-icon"> Dashboard</a>
        <a href="#"><img src="img/tracking.png" alt="Lacak Lokasi" class="menu-icon"> Lacak Lokasi</a>
        <a href="jadwal-driver.php"><img src="img/calendar (1).png" alt="Jadwal Pemeliharaan" class="menu-icon"> Jadwal Pemeliharaan</a>
        <a href="laporan_driver.php"><img src="img/report (1).png" alt="Laporan" class="menu-icon"> Laporan</a>
        <a href="absensi.php"><img src="img/group (3).png" alt="Absensi" class="menu-icon"> Absensi</a>
        <button type="button" class="btn btn-danger logout-btn">Logout</button>
    </div>
    <div class="main">
        <div class="header">
            <span>Welcome back, Budi!</span>
            <span class="role">Pengemudi</span>
        </div>
        <div class="form-container">
            <h1>Absensi Pengemudi</h1>
            <form id="absensiForm" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <div class="form-row">
                    <label for="nama">Nama:</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-row">
                    <label for="tanggal_pemeliharaan">Tanggal Pemeliharaan:</label>
                    <input type="date" id="tanggal_pemeliharaan" name="tanggal_pemeliharaan" required>
                </div>
                <div class="form-row">
                    <label for="jumlah_perjalanan">Jumlah Perjalanan:</label>
                    <input type="number" id="jumlah_perjalanan" name="jumlah_perjalanan" required>
                </div>
                <div class="form-row">
                    <label for="pengereman_keras">Pengereman Keras:</label>
                    <input type="number" id="pengereman_keras" name="pengereman_keras" required>
                </div>
                <div class="form-row">
                    <label for="rata_rata_kecepatan">Rata-rata Kecepatan:</label>
                    <input type="number" id="rata_rata_kecepatan" name="rata_rata_kecepatan" required>
                </div>
                <div class="form-row">
                    <label for="efisiensi_bahan_bakar">Efisiensi Bahan Bakar:</label>
                    <input type="number" id="efisiensi_bahan_bakar" name="efisiensi_bahan_bakar" required>
                </div>
                <div class="form-row">
                    <label for="percepatan_mendadak">Percepatan Mendadak:</label>
                    <input type="number" id="percepatan_mendadak" name="percepatan_mendadak" required>
                </div>
                <a href="session-login/loginDriver.php"><button type="submit" class="add-button">Submit</button></a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.getElementById("absensiForm").addEventListener("submit", function(event){
            event.preventDefault(); // Prevent form submission
            Swal.fire({
                title: 'Data berhasil disimpan!',
                icon: 'success',
                showCancelButton: false,
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form
                    this.submit();
                }
            });
        });
    </script>
</body>
</html>
