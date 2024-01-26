<?php
include("../layout/app.php");
include("../koneksi-db/config.php");

$db = new Database();

?>

<title>Input Data Laporan Servis | App Manajemen Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Laporan Servis</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-laporan-servis.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="Tanggal" id="Tanggal"
                        placeholder="Masukkan Tanggal" />
                </div>
                <div class="form-group">
                    <label for="ID_Transaksi_Servis">Faktur</label>
                    <select class="form-control" name="ID_Transaksi_Servis" id="ID_Transaksi_Servis" required>
                        <option value="">Pilih Faktur Transaksi Penjualan</option>
                        <?php
                        // Ambil nilai dari tabel tb_pelanggan
                        $query_lprn_servis = "SELECT ID_Transaksi_Servis, Faktur FROM tb_transaksi_servis";
                        $result_lprn_servis= $db->execute($query_lprn_servis);

                        // Tambahkan setiap opsi ke dropdown
                        while ($row_lprn_servis = $result_lprn_servis->fetch_assoc()) {
                            echo '<option value="' . $row_lprn_servis['ID_Transaksi_Servis'] . '">' . $row_lprn_servis['Faktur'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Pelanggan">Pelanggan</label>
                    <select class="form-control" name="ID_Pelanggan" id="ID_Pelanggan" required>
                        <option value="">Pilih Pelanggan</option>
                        <?php
                        // Ambil nilai dari tabel tb_pelanggan
                        $query_lprn_servis = "SELECT ID_Pelanggan, Nama_Pelanggan FROM tb_pelanggan";
                        $result_lprn_servis = $db->execute($query_lprn_servis);
                        // Tambahkan setiap opsi ke dropdown
                        while ($row_lprn_servis = $result_lprn_servis->fetch_assoc()) {
                            echo '<option value="' . $row_lprn_servis['ID_Pelanggan'] . '">' . $row_lprn_servis['Nama_Pelanggan'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Operator">Operator</label>
                    <select class="form-control" name="ID_Operator" id="ID_Operator" required>
                        <option value="">Pilih Operator</option>
                        <?php
                        // Ambil nilai dari tabel tb_operator
                        $query = "SELECT ID_Operator, Nama FROM tb_operator_sistem";
                        $result = $db->execute($query);

                        // Tambahkan setiap opsi ke dropdown
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID_Operator'] . '">' . $row['Nama'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Total_Biaya">Total Biaya</label>
                    <input type="text" class="form-control" name="Total_Biaya" id="Total_Biaya"
                        placeholder="Masukkan Total Biaya" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/laporan-servis.index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>