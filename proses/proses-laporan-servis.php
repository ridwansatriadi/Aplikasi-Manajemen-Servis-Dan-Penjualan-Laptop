<?php
include("../koneksi-db/config.php");
$db = new Database();

    $aksi = $_GET['aksi'];
    if ($aksi == 'tambah') {
        $db->tambah_laporan_servis($_POST['Tanggal'], $_POST['ID_Transaksi_Servis'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Biaya']);
            header("location:../tampil/laporan-servis.index.php");

    } elseif ($aksi == 'update') {
        $db->update_laporan_servis($_POST['ID_Laporan_Servis'], $_POST['Tanggal'], $_POST['ID_Transaksi_Servis'], $_POST['ID_Pelanggan'], $_POST['ID_Operator'], $_POST['Total_Biaya']);
        header("location:../tampil/laporan-servis.index.php");

    } elseif ($aksi == 'hapus') {
        $ID_Laporan_Servis = $_GET['id'];
        $db->delete_laporan_servis($_GET['id']);
        header("location:../tampil/laporan-servis.index.php");

    }



?>