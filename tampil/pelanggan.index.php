<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
?>
<title>Data Pelanggan | App Manajemen Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="../form-tambah-data/input-pelanggan.php" class="btn btn-primary mb-3">[+] Tambah Data Pelanggan Baru</a>
                <table class="table table-bordered table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>Alamat</th>
                            <th>Kontak</th>
                            <th>Email</th>
                            <!-- <th>Opsi</th> -->
                        </tr>
                    <tbody>
                        <?php
                        $data = 1;
                        $result = $db->tampil_pelanggan();

                        if (is_array($result) || is_object($result)) {
                            foreach ($result as $x) {
                        ?>
                                <tr>
                                    <td><?php echo $data++; ?></td>
                                    <td><?php echo $x['Nama_Pelanggan']; ?></td>
                                    <td><?php echo $x['Alamat']; ?></td>
                                    <td><?php echo $x['Kontak']; ?></td>
                                    <td><?php echo $x['Email']; ?></td>
                                    <!-- <td>
                                        <a href="../form-edit-data/edit-pelanggan.php?id=<?php echo $x['ID_Pelanggan']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="../proses/proses-pelanggan.php?id=<?php echo $x['ID_Pelanggan']; ?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    </td> -->
                                </tr>
                        <?php
                            }
                        } else {
                            echo "<tr><td colspan='6'>Tidak ada data pelanggan</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
include("../layout/footer.php");
?>
