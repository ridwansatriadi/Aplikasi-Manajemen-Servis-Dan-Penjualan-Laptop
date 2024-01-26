<?php
include("../layout/app.php");
?>
<title>Edit Data laporan Penjualan | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data laporan Penjualan </h4>
        </div>
        <div class="card-body">
            <?php
            include "../koneksi-db/config.php";
            $db = new database();
            foreach ($db->edit_laporan_penjualan($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-laporan-penjualan.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Laporan_Penjualan" value="<?php echo $d['ID_Laporan_Penjualan'] ?>">
                  
                    <div class="form-group">
                        <label for="Tanggal">Tanggal</label>
                        <input type="datetame" class="form-control" name="Tanggal" id="Tanggal"
                            value="<?php echo $d['Tanggal'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="ID_Transaksi_Penjualan">Faktur</label>
                        <select class="form-control" name="ID_Transaksi_Penjualan" id="ID_Transaksi_Penjualan">
                            <?php
                            // Lakukan kueri SQL untuk mengambil nilai dari tabel kategori
                            $query = "SELECT ID_Transaksi_Penjualan, Faktur FROM tb_transaksi_penjualan";
                            $result = $db->execute($query);

                            // Loop untuk menambahkan setiap opsi ke dropdown
                            while ($row = $result->fetch_assoc()) {
                                $selected = ($row['ID_Transaksi_Penjualan'] == $d['ID_Transaksi_Penjualan']) ? 'selected' : '';
                                echo '<option value="' . $row['ID_Transaksi_Penjualan'] . '" ' . $selected . '>' . $row['Faktur'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ID_Pelanggan">Pelanggan</label>
                        <select class="form-control" name="ID_Pelanggan" id="ID_Pelanggan">
                            <?php
                            // Lakukan kueri SQL untuk mengambil nilai dari tabel kategori
                            $query = "SELECT ID_Pelanggan, Nama_Pelanggan FROM tb_pelanggan";
                            $result = $db->execute($query);

                            // Loop untuk menambahkan setiap opsi ke dropdown
                            while ($row = $result->fetch_assoc()) {
                                $selected = ($row['ID_Pelanggan'] == $d['ID_Pelanggan']) ? 'selected' : '';
                                echo '<option value="' . $row['ID_Pelanggan'] . '" ' . $selected . '>' . $row['Nama_Pelanggan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="ID_Operator">Operator</label>
                        <select class="form-control" name="ID_Operator" id="ID_Operator">
                            <?php
                            // Lakukan kueri SQL untuk mengambil nilai dari tabel kategori
                            $query = "SELECT ID_Operator, Nama FROM tb_operator_sistem";
                            $result = $db->execute($query);

                            // Loop untuk menambahkan setiap opsi ke dropdown
                            while ($row = $result->fetch_assoc()) {
                                $selected = ($row['ID_Operator'] == $d['ID_Operator']) ? 'selected' : '';
                                echo '<option value="' . $row['ID_Operator'] . '" ' . $selected . '>' . $row['Nama'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Total_Transaksi">Total Transaksi</label>
                        <input type="text" class="form-control" name="Total_Transaksi" id="Total_Transaksi"
                            value="<?php echo $d['Total_Transaksi'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/laporan-penjualan.index.php" class="btn btn-secondary">Batal</a>
                </form>
            <?php } ?>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>



