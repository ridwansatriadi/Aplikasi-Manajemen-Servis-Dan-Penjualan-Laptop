<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();

function formatRupiah($angka) {
    $result = "Rp. " . number_format($angka, 0, ',', '.');
    return $result;
}
?>
<title>Data Barang | App Manajemen Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Barang </h4>
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <a href="../form-tambah-data/input-barang.php" class="btn btn-primary mb-3">[+] Tambah Barang Baru</a>
            <table class="table table-bordered table-md">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Nama Kategori</th>
                        <th>Harga Modal</th>
                        <th>Harga Jual</th>
                        <th>Stok</th>
                        <!-- <th>Opsi</th> -->
                    </tr>
                    <?php
                    $data = 1;
                    foreach ($db->tampil_barang_dengan_kategori() as $x) {
                        ?>
                        <tr>
                            <td>
                                <?php echo $data++; ?>
                            </td>
                            <td>
                                <?php echo $x['Nama_Barang']; ?>
                            </td>
                            <td>
                                <?php echo $x['Nama_Kategori']; ?>
                            </td>
                            <td>
                                <?php echo $result = "Rp. " .number_format($x['Harga_Modal'], 0, ',', '.'); ?>
                            </td>
                            <td>
                                <?php echo $result = "Rp. " .number_format($x['Harga_Jual'], 0, ',', '.'); ?>
                            </td>
                            <td>
                                <?php echo $x['Stok']?>
                            </td>
                            <!-- <td>
                                <a href="../form-edit-data/edit-barang.php?id=<?php echo $x['ID_Barang']; ?>&aksi=edit"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <a href="../proses/proses-barang.php?id=<?php echo $x['ID_Barang']; ?>&aksi=hapus"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                            </td> -->
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>
