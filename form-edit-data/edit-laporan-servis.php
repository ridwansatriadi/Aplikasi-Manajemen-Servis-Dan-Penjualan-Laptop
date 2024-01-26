<?php
include("../layout/app.php");
?>
<title>Edit Data laporan servis | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data laporan servis </h4>
        </div>
        <div class="card-body">
            <?php
            include "../koneksi-db/config.php";
            $db = new database();
            foreach ($db->edit_laporan_servis($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-laporan-servis.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Laporan_Servis" value="<?php echo $d['ID_Laporan_Servis'] ?>">
                  
                    <div class="form-group">
                        <label for="Tanggal">Tanggal</label>
                        <input type="datetame" class="form-control" name="Tanggal" id="Tanggal"
                            value="<?php echo $d['Tanggal'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="ID_Transaksi_Servis">Faktur</label>
                        <select class="form-control" name="ID_Transaksi_Servis" id="ID_Transaksi_Servis">
                            <?php
                            // Lakukan kueri SQL untuk mengambil nilai dari tabel kategori
                            $query = "SELECT ID_Transaksi_Servis, Faktur FROM tb_transaksi_servis";
                            $result = $db->execute($query);

                            // Loop untuk menambahkan setiap opsi ke dropdown
                            while ($row = $result->fetch_assoc()) {
                                $selected = ($row['ID_Transaksi_Servis'] == $d['ID_Transaksi_Servis']) ? 'selected' : '';
                                echo '<option value="' . $row['ID_Transaksi_Servis'] . '" ' . $selected . '>' . $row['Faktur'] . '</option>';
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
                        <label for="Total_Biaya">Total Biaya</label>
                        <input type="text" class="form-control" name="Total_Biaya" id="Total_Biaya"
                            value="<?php echo $d['Total_Biaya'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/laporan-servis.index.php" class="btn btn-secondary">Batal</a>
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



