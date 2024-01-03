<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_barang($_POST['Nama_Barang'], $_POST['Id_Kategori'], $_POST['Harga_Modal'], $_POST['Harga_Jual'], $_POST['Stok']);
    header("location:../tampil/barang.index.php");

    // }elseif($aksi == 'update'){
// $db->update($_POST['id'], $_POST['nama'],$_POST['fakultas'],$_POST['prodi'],$_POST['nim'],$_POST['semester']);
// header("location:tampil.php");

    // }elseif($aksi == 'hapus'){
// $db->delete($_GET['id']);
// header("location:tampil.php");
}
?>