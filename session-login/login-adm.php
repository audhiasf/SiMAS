<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek kondisi jika user ada atau tidak
$sql_user = mysqli_query($mysqli, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
$cek_user = mysqli_num_rows($sql_user);



if ($cek_user > 0) {
    $_SESSION['login'] = true;
    header('Location: ../home-adm.php');
    exit();
} else {
    header('Location: ../index.php');
    exit();
}
?>