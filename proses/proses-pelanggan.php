<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_pelanggan($_POST['Nama_Pelanggan'], $_POST['Alamat'], $_POST['Kontak'], $_POST['Email']);
    header("location:../tampil/pelanggan.index.php");

} elseif ($aksi == 'update') {
    $db->update_pelanggan($_POST['ID_Pelanggan'], $_POST['Nama_Pelanggan'], $_POST['Alamat'], $_POST['Kontak'], $_POST['Email'], );
    header("location:../tampil/pelanggan.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Pelanggan = $_GET['id'];
    $db->delete_pelanggan($_GET['id']);
    header("location:../tampil/pelanggan.index.php");
}
?>