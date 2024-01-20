<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_transaksi_servis($_POST['Faktur'], $_POST['Tanggal'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['ID_Status']);
    header("location:../tampil/transaksi-servis.index.php");

} elseif ($aksi == 'update') {
    $db->update_transaksi_servis($_POST['ID_Transaksi_Servis'], $_POST['Faktur'], $_POST['Tanggal'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['ID_Status']);
    header("location:../tampil/transaksi-servis.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Transaksi_Servis = $_GET['id'];
    $db->delete_transaki_servis($_GET['id']);
    header("location:../tampil/transaksi-servis.index.php");
}
?>