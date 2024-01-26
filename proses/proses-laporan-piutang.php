<?php
include("../koneksi-db/config.php");
$db = new Database();

    $aksi = $_GET['aksi'];
    if ($aksi == 'tambah') {
        $db->tambah_laporan_piutang($_POST['Tanggal'], $_POST['ID_Transaksi_Piutang'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Hutang'],  $_POST['Total_Pembayaran'], $_POST['Sisa_Hutang']);
            header("location:../tampil/laporan-piutang.index.php");

    } elseif ($aksi == 'update') {
        $db->update_laporan_piutang($_POST['ID_Laporan_Piutang'], $_POST['Tanggal'], $_POST['ID_Transaksi_Piutang'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Hutang'], $_POST['Total_Pembayaran'], $_POST['Sisa_Hutang']);
        header("location:../tampil/laporan-piutang.index.php");

    } elseif ($aksi == 'hapus') {
        $ID_Laporan_Servis = $_GET['id'];
        $db->delete_laporan_piutang($_GET['id']);
        header("location:../tampil/laporan-piutang.index.php");

    }



?>