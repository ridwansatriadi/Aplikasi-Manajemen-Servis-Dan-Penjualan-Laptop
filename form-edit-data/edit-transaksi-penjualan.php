<?php
include("../layout/app.php");
?>
<title>Edit Data Transaki Penjualan | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Transaki Penjualan </h4>
        </div>
        <div class="card-body">
            <?php
            include "../koneksi-db/config.php";
            $db = new database();
            foreach ($db->edit_transaksi_penjualan($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-transaksi-penjualan.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Transaksi_Penjualan" value="<?php echo $d['ID_Transaksi_Penjualan'] ?>">
                    <div class="form-group">
                        <label for="Faktur">Faktur</label>
                        <input type="text" class="form-control" name="Faktur" id="Faktur"
                            value="<?php echo $d['Faktur'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Tanggal">Tanggal</label>
                        <input type="datetame" class="form-control" name="Tanggal" id="Tanggal"
                            value="<?php echo $d['Tanggal'] ?>">
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
                        <label for="Total_Penjualan">Total Penjualan</label>
                        <input type="text" class="form-control" name="Total_Penjualan" id="Total_Penjualan"
                            value="<?php echo $d['Total_Penjualan'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/transaksi-penjualan.index.php" class="btn btn-secondary">Batal</a>
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



