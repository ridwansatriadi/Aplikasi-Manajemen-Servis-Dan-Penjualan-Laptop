<?php
include("../layout/app.php");
?>
<title>Edit Data Transaki Servis | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Transaki Servis </h4>
        </div>
        <div class="card-body">
            <?php
            include "../koneksi-db/config.php";
            $db = new database();
            foreach ($db->edit_transaksi_servis($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-transaksi-servis.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Transaksi_Servis" value="<?php echo $d['ID_Transaksi_Servis'] ?>">
                    <div class="form-group">
                        <label for="Faktur">Faktur</label>
                        <input type="text" class="form-control" name="Faktur" id="Faktur"
                            value="<?php echo $d['Faktur'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="Tanggal" id="Tanggal"
                            value="<?php echo $d['Tanggal'] ?>">
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
                        <label for="ID_Status">ID Status</label>
                        <input type="number" class="form-control" name="ID_Status" id="ID_Status"
                            value="<?php echo $d['ID_Status'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/transaksi-servis.index.php" class="btn btn-secondary">Batal</a>
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



