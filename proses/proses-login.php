<?php
include("../koneksi-db/config.php");
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($db->koneksi, $_POST['Username']);
    $password = mysqli_real_escape_string($db->koneksi, $_POST['Password']);

    // Lakukan proses login dengan memanggil metode login dari objek Database
    $result = $db->login($username, $password);

    if ($result === 'admin') {
        // Redirect ke halaman admin
        header("location:../tampil/dashboard.php");
    } elseif ($result === 'teknisi') {
        // Redirect ke halaman teknisi
        header("location:../../app-manajement-servis-dan-penjualan-laptop-KASIR/tampil/dashboard.php");
    } else {
        // Login gagal, redirect kembali ke halaman login
        header("location:../auth/login.php");
    }
} else {
    // Metode request bukan POST, redirect kembali ke halaman login
    header("location:../login.php");
}
?>
