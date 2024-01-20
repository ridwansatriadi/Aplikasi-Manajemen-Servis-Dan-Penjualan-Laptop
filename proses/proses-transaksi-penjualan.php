<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_transaksi_penjualan($_POST['Faktur'], $_POST['Tanggal'], $_POST['ID_Pelanggan'], $_POST['ID_Operator']);
    header("location:../tampil/transaksi-penjualan.index.php");

} elseif ($aksi == 'update') {
    $db->update_transaksi_penjualan($_POST['ID_Transaksi_Penjualan'], $_POST['Faktur'], $_POST['Tanggal'], $_POST['ID_Pelanggan'], $_POST['ID_Operator']);
    header("location:../tampil/transaksi-penjualan.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Transaksi_Penjualan = $_GET['id'];
    $db->delete_transaki_penjualan($_GET['id']);
    header("location:../tampil/transaksi-penjualan.index.php");
}
?>