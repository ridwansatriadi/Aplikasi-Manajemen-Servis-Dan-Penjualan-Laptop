<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
function formatRupiah($angka) {
    $result = "Rp. " . number_format($angka, 0, ',', '.');
    return $result;
}
?>
<title> Data Transakis Piutang | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Transakis Piutang</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="../form-tambah-data/input-transaksi-piutang.php" class="btn btn-primary mb-3">[+] Tambah Data
                    Transakis Piutang Baru</a>
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Faktur</th>
                            <th>Tanggal</th>
                            <th>ID_Operator</th>
                            <th>Grand Total</th>
                            <th>Bayar</th>
                            <th>Kembali</th>
                            <th>Opsi</th>
                        </tr>
                        <tr>
                            <?php
                            $data = 1;
                            foreach ($db->tampil_piutang() as $x) {
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
                                    <?php echo $x['ID_Operator']; ?>
                                </td>
                                <td>
                                    <?php echo $result = "Rp. " .number_format($x['Grand_Total']); ?>
                                </td>
                                <td>
                                    <?php echo $result = "Rp. " .number_format($x['Bayar']); ?>
                                </td>
                                <td>
                                    <?php echo $result = "Rp. " .number_format($x['Kembali']); ?>
                                </td>
                                <td>
                                    <a href="../form-edit-data/edit-transaksi-piutang.php?id=<?php echo $x['ID_Transaksi_Piutang']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="../proses/proses-transaksi-piutang.php?id=<?php echo $x['ID_Transaksi_Piutang']; ?>&aksi=hapus" class="btn btn-danger btn-sm"
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