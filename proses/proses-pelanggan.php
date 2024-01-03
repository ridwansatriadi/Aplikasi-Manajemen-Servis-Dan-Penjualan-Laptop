<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_pelanggan($_POST['Nama_Pelanggan'], $_POST['Alamat'], $_POST['Kontak']);
    header("location:../tampil/pelanggan.index.php");

    // }elseif($aksi == 'update'){
// $db->update($_POST['id'], $_POST['nama'],$_POST['fakultas'],$_POST['prodi'],$_POST['nim'],$_POST['semester']);
// header("location:tampil.php");

    // }elseif($aksi == 'hapus'){
// $db->delete($_GET['id']);
// header("location:tampil.php");
}
?>