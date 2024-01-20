<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_teknisi($_POST['Nama_Teknisi'], $_POST['Almat'], $_POST['no_telpon']);
    header("location:../tampil/teknisi.index.php");

} elseif ($aksi == 'update') {
    $db->update_teknisi($_POST['ID_Teknisi'], $_POST['Nama_Teknisi'], $_POST['Almat'], $_POST['no_telpon']);
    header("location:../tampil/teknisi.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Teknisi = $_GET['id'];
    $db->delete_teknisi($_GET['id']);
    header("location:../tampil/teknisi.index.php");
}
?>