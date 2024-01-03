<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_operator_sistem($_POST['Nama'], $_POST['Username'], $_POST['Level'], $_POST['Login_Terakhir']);
    header("location:../tampil/operator-sistem.index.php");

    // }elseif($aksi == 'update'){
// $db->update($_POST['id'], $_POST['nama'],$_POST['fakultas'],$_POST['prodi'],$_POST['nim'],$_POST['semester']);
// header("location:tampil.php");

    // }elseif($aksi == 'hapus'){
// $db->delete($_GET['id']);
// header("location:tampil.php");
}
?>