<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
?>
<title> Data Transaksi Servis | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Daftar Data Transaksi Servis</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="../form-tambah-data/input-transaksi-servis.php" class="btn btn-primary mb-3">[+] Tambah Data
                    Transaksi Servis Baru</a>
                <table class="table table-bordered table-md">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>Faktur</th>
                            <th>Tanggal</th>
                            <th>ID_Pelanggan</th>
                            <th>ID_Operator</th>
                            <th>ID_Status</th>
                            <th>Opsi</th>
                        </tr>
                        <tr>
                            <?php
                            $data = 1;
                            foreach ($db->tampil_transaksi_servis() as $x) {
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
                                    <?php echo $x['ID_Pelanggan']; ?>
                                </td>
                                <td>
                                    <?php echo $x['ID_Operator']; ?>
                                </td>
                                <td>
                                    <?php echo $x['ID_Status']; ?>
                                </td>
                                <td>
                                    <a href="../form-edit-data/edit-transaksi-servis.php?id=<?php echo $x['ID_Transaksi_Servis']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="../proses/proses-transaksi-servis.php?id=<?php echo $x['ID_Transaksi_Servis']; ?>&aksi=hapus" class="btn btn-danger btn-sm"
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