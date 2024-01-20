<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_status_servis($_POST['Status']);
    header("location:../tampil/status-servis.index.php");

} elseif ($aksi == 'update') {
    $db->update_status_servis($_POST['ID_Status'], $_POST['Status']);
    header("location:../tampil/status-servis.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Status = $_GET['id'];
    $db->delete_status_servis($_GET['id']);
    header("location:../tampil/status-servis.index.php");
}
?>