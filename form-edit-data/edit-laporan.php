<?php
include("../layout/app.php");
?>
<title>Edit Data Laporan | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Laporan </h4>
        </div>
        <div class="card-body">
            <?php
            include "../koneksi-db/config.php";
            $db = new database();
            foreach ($db->edit_laporan($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-laporan.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Laporan" value="<?php echo $d['ID_Laporan'] ?>">
                    <div class="form-group">
                        <label for="Tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="Tanggal" id="Tanggal"
                            value="<?php echo $d['Tanggal'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="ID_Transaksi_Penjualan">ID Transaksi Penjualan</label>
                        <input type="number" class="form-control" name="ID_Transaksi_Penjualan" id="ID_Transaksi_Penjualan"
                            value="<?php echo $d['ID_Transaksi_Penjualan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="ID_Pelanggan">ID Pelanggan</label>
                        <input type="number" class="form-control" name="ID_Pelanggan" id="ID_Pelanggan"
                            value="<?php echo $d['ID_Pelanggan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="ID_Operator">ID Operator</label>
                        <input type="number" class="form-control" name="ID_Operator" id="ID_Operator"
                            value="<?php echo $d['ID_Operator'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Total_Transaksi">Total Transaksi</label>
                        <input type="number" class="form-control" name="Total_Transaksi" id="Total_Transaksi"
                            value="<?php echo $d['Total_Transaksi'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/laporan.index.php" class="btn btn-secondary">Batal</a>
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





