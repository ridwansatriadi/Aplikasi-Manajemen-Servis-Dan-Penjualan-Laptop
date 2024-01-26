<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_barang($_POST['Nama_Barang'], $_POST['Id_Kategori'], $_POST['Harga_Modal'], $_POST['Harga_Jual'], $_POST['Stok']);
    header("location:../tampil/barang.index.php");

} elseif ($aksi == 'update') {
    $db->update_barang($_POST['ID_Barang'], $_POST['Nama_Barang'], $_POST['Id_Kategori'], $_POST['Harga_Modal'], $_POST['Harga_Jual'], $_POST['Stok']);
    header("location:../tampil/barang.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Barang = $_GET['id'];
    $db->delete_barang($_GET['id']);
    header("location:../tampil/barang.index.php");
}
?>