<?php
include("../koneksi-db/config.php");
$db = new Database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db->tambah_operator_sistem($_POST['Nama'], $_POST['Username'], $_POST['Password'], $_POST['Level'], $_POST['Login_Terakhir']);
    header("location:../tampil/operator-sistem.index.php");

} elseif ($aksi == 'update') {
    $db->update_operator_sistem($_POST['ID_Operator'], $_POST['Nama'], $_POST['Username'],  $_POST['Password'], $_POST['Level'], $_POST['Login_Terakhir']);
    header("location:../tampil/operator-sistem.index.php");

} elseif ($aksi == 'hapus') {
    $ID_Operator = $_GET['id'];
    $db->delete_operator_sistem($_GET['id']);
    header("location:../tampil/operator-sistem.index.php");
}
?>  