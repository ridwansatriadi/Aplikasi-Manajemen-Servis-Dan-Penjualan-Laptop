<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
?>
<title> Data Operator Sistem | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Operator Sistem</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="../form-tambah-data/input-operator-sistem.php" class="btn btn-primary mb-3">[+] Tambah Data
                    Operator Sistem Baru</a>
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Login_Terakhir</th>
                            <th>Opsi</th>
                        </tr>
                        <tr>
                            <?php
                            $data = 1;
                            $result = $db->tampil_operator_sistem();

                            if (is_array($result) || is_object($result)) {
                                foreach ($result as $x) {
                                    ?>

                                <tr>
                                    <td>
                                        <?php echo $data++; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Nama']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Username']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Password']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Level']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Login_Terakhir']; ?>
                                    </td>
                                    <td>
                                        <a href="../form-edit-data/edit-operator-sistem.php?id=<?php echo $x['ID_Operator']; ?>&aksi=edit"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <a href="../proses/proses-operator-sistem.php?id=<?php echo $x['ID_Operator']; ?>&aksi=hapus"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                                }
                            } else {
                                echo "<tr><td colspan='6'>Tidak ada data pelanggan</td></tr>";
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include("../layout/footer.php");
?>