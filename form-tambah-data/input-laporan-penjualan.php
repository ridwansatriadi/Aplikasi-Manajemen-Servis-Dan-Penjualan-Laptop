<?php
include("../layout/app.php");
include("../koneksi-db/config.php");

$db = new Database();

?>

<title>Input Data Laporan Penjualan | App Manajemen Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Laporan Penjualan</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-laporan-penjualan.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="Tanggal" id="Tanggal"
                        placeholder="Masukkan Tanggal" />
                </div>
                <div class="form-group">
                    <label for="ID_Transaksi_Penjualan">Faktur</label>
                    <select class="form-control" name="ID_Transaksi_Penjualan" id="ID_Transaksi_Penjualan" required>
                        <option value="">Pilih Faktur Transaksi Penjualan</option>
                        <?php
                        // Ambil nilai dari tabel tb_pelanggan
                        $query = "SELECT ID_Transaksi_Penjualan, Faktur FROM tb_transaksi_penjualan";
                        $result= $db->execute($query);

                        // Tambahkan setiap opsi ke dropdown
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID_Transaksi_Penjualan'] . '">' . $row['Faktur'] . '</option>';
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
                        $query = "SELECT ID_Pelanggan, Nama_Pelanggan FROM tb_pelanggan";
                        $result = $db->execute($query);
                        // Tambahkan setiap opsi ke dropdown
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID_Pelanggan'] . '">' . $row['Nama_Pelanggan'] . '</option>';
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
                    <label for="Total_Transaksi">Total Transaksi</label>
                    <input type="text" class="form-control" name="Total_Transaksi" id="Total_Transaksi"
                        placeholder="Masukkan Total Transaksi" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/laporan-penjualan.index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>