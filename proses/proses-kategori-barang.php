<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_kategori_barang($_POST['Nama_Kategori']);
    header("location:../tampil/kategori-barang.index.php");

    // }elseif($aksi == 'update'){
// $db->update($_POST['id'], $_POST['nama'],$_POST['fakultas'],$_POST['prodi'],$_POST['nim'],$_POST['semester']);
// header("location:tampil.php");

    // }elseif($aksi == 'hapus'){
// $db->delete($_GET['id']);
// header("location:tampil.php");
}
?>