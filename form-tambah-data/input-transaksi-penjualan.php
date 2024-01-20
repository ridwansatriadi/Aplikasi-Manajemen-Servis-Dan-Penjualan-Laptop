<?php
include("../layout/app.php");
include("../koneksi-db/config.php");

$db = new Database();

?>

<title>Input Data Transaksi Penjualan | App Manajemen Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Transaksi Penjualan</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-transaksi-penjualan.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Faktur">Faktur</label>
                    <input type="text" class="form-control" name="Faktur" id="Faktur" placeholder="Masukkan Faktur" />
                </div>
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="Tanggal" id="Tanggal" placeholder="Masukkan Tanggal" />
                </div>
                <div class="form-group">
                    <label for="ID_Pelanggan">ID Pelanggan</label>
                    <select class="form-control" name="ID_Pelanggan" id="ID_Pelanggan" required>
                        <option value="">Pilih Pelanggan</option>
                        <?php
                        // Ambil nilai dari tabel tb_pelanggan
                        $queryPelanggan = "SELECT ID_Pelanggan, Nama_Pelanggan FROM tb_pelanggan";
                        $resultPelanggan = $db->execute($queryPelanggan);

                        // Tambahkan setiap opsi ke dropdown
                        while ($rowPelanggan = $resultPelanggan->fetch_assoc()) {
                            echo '<option value="' . $rowPelanggan['ID_Pelanggan'] . '">' . $rowPelanggan['Nama_Pelanggan'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ID_Operator">ID Operator</label>
                    <select class="form-control" name="ID_Operator" id="ID_Operator" required>
                        <option value="">Pilih Operator</option>
                        <?php
                        // Ambil nilai dari tabel tb_operator
                        $queryOperator = "SELECT ID_Operator, Nama FROM tb_operator_sistem";
                        $resultOperator = $db->execute($queryOperator);

                        // Tambahkan setiap opsi ke dropdown
                        while ($rowOperator = $resultOperator->fetch_assoc()) {
                            echo '<option value="' . $rowOperator['ID_Operator'] . '">' . $rowOperator['Nama'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/transaksi-penjualan.index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>
