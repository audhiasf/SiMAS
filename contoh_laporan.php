<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simas_db";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_plat = $_POST["no_plat"];
    $tanggal = $_POST["tanggal"];
    $jumlah_bahan_bakar = $_POST["jumlah_bahan_bakar"];
    $lokasi_pengisian = $_POST["lokasi_pengisian"];

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO laporan (no_plat, tanggal, jumlah_bahan_bakar, lokasi_pengisian)
    VALUES ('$no_plat', '$tanggal', '$jumlah_bahan_bakar', '$lokasi_pengisian')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Buat Laporan Pengemudi</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">SIMAS</div>
        <div class="menu">
            <a href="#">Dashboard</a>
            <a href="#">Lacak Lokasi</a>
            <a href="#">Jadwal Perjalanan</a>
            <a href="#" class="active">Laporan</a>
            <a href="#">Absensi</a>
        </div>
        <div class="logout">
            <button>Logout</button>
        </div>
    </div>
    <div class="main">
        <div class="header">
            <span>Welcome back, Budi!</span>
            <span class="role">Pengemudi</span>
        </div>
        <div class="form-container">
            <h1>Membuat Laporan</h1>
            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                <label for="no_plat">No Plat:</label>
                <input type="text" id="no_plat" name="no_plat" required><br>

                <label for="tanggal">Tanggal:</label>
                <input type="date" id="tanggal" name="tanggal" required><br>

                <label for="jumlah_bahan_bakar">Jumlah Bahan Bakar:</label>
                <input type="number" id="jumlah_bahan_bakar" name="jumlah_bahan_bakar" required><br>

                <label for="lokasi_pengisian">Lokasi Pengisian:</label>
                <input type="text" id="lokasi_pengisian" name="lokasi_pengisian" required><br>

                <input type="submit" value="Submit" class="add-button">
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
    height: 100vh;
}

.sidebar {
    width: 250px;
    background-color: #FF6F61;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

.logo {
    font-size: 24px;
    font-weight: bold;
    color: #fff;
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
    background-color: #FF8A65;
}

.logout button {
    width: 100%;
    padding: 10px;
    background-color: #fff;
    color: #FF6F61;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.main {
    flex-grow: 1;
    padding: 20px;
    background-color: #fff;
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

input[type="text"], input[type="date"], input[type="number"] {
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
    background-color: #6200ea;
    color: #fff;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.add-button:hover {
    background-color: #3700b3;
}

</style>
