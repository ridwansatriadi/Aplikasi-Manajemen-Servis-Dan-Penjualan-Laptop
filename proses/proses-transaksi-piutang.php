<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_transaksi_piutang($_POST['Faktur'], $_POST['Tanggal'], $_POST['ID_Operator'], $_POST['Total_Hutang'], $_POST['Total_Pembayaran'], $_POST['Sisa_Hutang']);
    header("location:../tampil/transaksi-piutang.index.php");

} elseif ($aksi == 'update') {
    $db->update_transaksi_piutang($_POST['ID_Transaksi_Piutang'], $_POST['Faktur'], $_POST['Tanggal'], $_POST['ID_Operator'], $_POST['Total_Hutang'], $_POST['Total_Pembayaran'], $_POST['Sisa_Hutang']);
    header("location:../tampil/transaksi-piutang.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Transaksi_Piutang = $_GET['id'];
    $db->delete_transaki_piutang($_GET['id']);
    header("location:../tampil/transaksi-piutang.index.php");
}
?>