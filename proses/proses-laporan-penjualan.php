<?php
include("../koneksi-db/config.php");
$db = new Database();

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$aksi = $_GET['aksi'];
if ($aksi == 'tambah') {
    $db->tambah_laporan_penjualan($_POST['Tanggal'], $_POST['ID_Transaksi_Penjualan'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Transaksi']);
        header("location:../tampil/laporan-penjualan.index.php");
    // } else {
    //     // Menambahkan informasi tambahan ke dalam log
    //     $error_message = "Gagal menambahkan data! - " . date('Y-m-d H:i:s') . "\n";
    //     $error_message .= "POST Data: " . json_encode($_POST) . "\n";
    //     error_log($error_message, 3, "error.log");
    // }

} elseif ($aksi == 'update') {
    $db->update_laporan_penjualan($_POST['ID_Laporan_Penjualan'], $_POST['Tanggal'], $_POST['ID_Transaksi_Penjualan'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Transaksi']);
    header("location:../tampil/laporan-penjualan.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Laporan = $_GET['id'];
    $db->delete_laporan_penjualan($_GET['id']);
    header("location:../tampil/laporan-penjualan.index.php");
}
?>