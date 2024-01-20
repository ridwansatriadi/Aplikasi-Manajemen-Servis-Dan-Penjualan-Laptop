<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
?>
<title> Data Transaksi Penjualan| App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Transaksi Penjualan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="../form-tambah-data/input-transaksi-penjualan.php" class="btn btn-primary mb-3">[+] Tambah Data
                    Transaksi Penjualan Baru</a>
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Faktur</th>
                            <th>Tanggal</th>
                            <th>Nama Pelanggan</th>
                            <th>Operator</th>
                            <th>Opsi</th>
                        </tr>
                        <tr>
                            <?php
                            $data = 1;
                            foreach ($db->tampil_transaksi_penjualan_dengan_pelanggan_dan_operator() as $x) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $data++; ?>
                                </td>
                                <td>
                                    <?php echo $x['Faktur']; ?>
                                </td>
                                <td>
                                    <?php echo $x['Tanggal']; ?>
                                </td>
                                <td>
                                    <?php echo $x['Nama_Pelanggan']; ?>
                                </td>
                                <td>
                                    <?php echo $x['Nama']; ?>
                                </td>
                                <td>
                                    <a href="../form-edit-data/edit-transaksi-penjualan.php?id=<?php echo $x['ID_Transaksi_Penjualan']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="../proses/proses-transaksi-penjualan.php?id=<?php echo $x['ID_Transaksi_Penjualan']; ?>&aksi=hapus" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                </td>
                            </tr>
                            <?php
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