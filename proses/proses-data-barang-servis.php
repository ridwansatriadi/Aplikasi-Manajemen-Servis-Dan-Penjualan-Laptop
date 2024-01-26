<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_data_barang_servis(
        $_POST['Serial_Barang'], 
        $_POST['Tipe_Barang'], 
        $_POST['barang_id'],
        $_POST['Tanggal_Masuk'], 
        $_POST['Kondisi_Barang'], 
        $_POST['Kelengkapan_Barang'], 
        $_POST['solusi']
    );
    header('Location:../tampil/data-barang-servis.index.php');



} elseif ($aksi == 'update') {
    $db->update_data_barang_servis($_POST['ID_Service'],
    $_POST['Serial_Barang'], 
    $_POST['Tipe_Barang'], 
    $_POST['barang_id'],
    $_POST['Tanggal_Masuk'], 
    $_POST['Kondisi_Barang'], 
    $_POST['Kelengkapan_Barang'], 
    $_POST['solusi']
    );
    header("location:../tampil/data-barang-servis.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Service = $_GET['id'];
    $db->delete_data_barang_servis($_GET['id']);
    header("location:../tampil/data-barang-servis.index.php");
 }
?>