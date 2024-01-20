<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_laporan($_POST['Tanggal'], $_POST['ID_Transaksi_Penjualan'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Transaksi']);
    header("location:../tampil/laporan.index.php");

} elseif ($aksi == 'update') {
    $db->update_laporan($_POST['ID_Laporan'], $_POST['Tanggal'], $_POST['ID_Transaksi_Penjualan'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Transaksi']);
    header("location:../tampil/laporan.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Laporan = $_GET['id'];
    $db->delete_laporan($_GET['id']);
    header("location:../tampil/laporan.index.php");
}
?>