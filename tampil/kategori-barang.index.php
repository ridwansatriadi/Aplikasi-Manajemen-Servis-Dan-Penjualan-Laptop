
<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
?>
<title> Kategori Barang| App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Kategori Barang</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <a href="../form-tambah-data/input-kategori-barang.php" class="btn btn-primary mb-3">[+] Tambah Kategori Barang Baru</a>
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <!-- <th>Opsi</th> -->
                        </tr>
                        <tr>

                        <?php
                        $data = 1;
                        $result = $db->tampil_kategori_barang();

                        if (is_array($result) || is_object($result)) {
                            foreach ($result as $x) {
                        ?>
                       
                                <td>
                                    <?php echo $data++; ?>
                                </td>
                                <td>
                                    <?php echo $x['Nama_Kategori']; ?>
                                </td>
                                <!-- <td>
                                    <a href="../form-edit-data/edit-kategori-barang.php?id=<?php echo $x['ID_Kategori']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="../proses/proses-kategori-barang.php?id=<?php echo $x['ID_Kategori']; ?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td> -->
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
