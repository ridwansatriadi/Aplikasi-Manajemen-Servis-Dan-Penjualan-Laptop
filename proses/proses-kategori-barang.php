<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_kategori_barang($_POST['Nama_Kategori']);
    header("location:../tampil/kategori-barang.index.php");

} elseif ($aksi == 'update') {
    $db->update_kategori_barang($_POST['ID_Kategori'], $_POST['Nama_Kategori']);
    header("location:../tampil/kategori-barang.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Kategori = $_GET['id'];
    $db->delete_kategori_barang($_GET['id']);
    header("location:../tampil/kategori-barang.index.php");
}
?>