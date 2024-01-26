<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
 
function formatRupiah($angka) {
    $result = "Rp. " . number_format($angka, 0, ',', '.');
    return $result;
}
?>
<title> Data Laporan Penjualan| App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Laporan Penjualan</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="../form-tambah-data/input-laporan-penjualan.php" class="btn btn-primary mb-3">[+] Tambah Data Laporan Baru</a>
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Faktur</th>
                            <th>Nama Pelanggan</th>
                            <th>Operator</th>
                            <th>Total Transaksi</th>
                            <th>Opsi</th>
                        </tr>
                        <tr>
                            <?php
                            $data = 1;
                            foreach ($db->tampil_laporan_penjualan_dgn_transaksi_penjualan_dan_operator() as $x) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $data++; ?>
                                </td>
                                <td>
                                    <?php echo $x['Tanggal']; ?>
                                </td>
                                <td>
                                    <?php echo $x['Faktur']; ?>
                                </td>
                                <td>
                                    <?php echo $x['Nama_Pelanggan']; ?>
                                </td>
                                <td>
                                    <?php echo $x['Nama']; ?>
                                </td>
                                <td>
                                    <?php echo $result = "Rp. " .number_format($x['Total_Transaksi']); ?>
                                </td>
                                <td>
                                    <a href="../form-edit-data/edit-laporan-penjualan.php?id=<?php echo $x['ID_Laporan_Penjualan']; ?>&aksi=edit" class="btn btn-warning btn-sm" >Edit</a>
                                    <a href="../proses/proses-laporan-penjualan.php?id=<?php echo $x['ID_Laporan_Penjualan']; ?>&aksi=hapus"  class="btn btn-danger btn-sm"
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