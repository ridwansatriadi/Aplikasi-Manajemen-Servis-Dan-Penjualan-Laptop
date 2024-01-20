<?php
include("../layout/app.php");
?>
<title>Edit Data Transaki Piutang | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Transaki Piutang </h4>
        </div>
        <div class="card-body">
            <?php
            include "../koneksi-db/config.php";
            $db = new database();
            foreach ($db->edit_transaksi_piutang($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-transaksi-piutang.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Transaksi_Piutang" value="<?php echo $d['ID_Transaksi_Piutang'] ?>">
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
                        <label for="ID_Operator">ID Operator</label>
                        <input type="number" class="form-control" name="ID_Operator" id="ID_Operator"
                            value="<?php echo $d['ID_Operator'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Grand_Total">Grand Total</label>
                        <input type="decimal" class="form-control" name="Grand_Total" id="Grand_Total"
                            value="<?php echo $d['Grand_Total'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Bayar">Bayar</label>
                        <input type="decimal" class="form-control" name="Bayar" id="Bayar"
                            value="<?php echo $d['Bayar'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Kembali">Kembali</label>
                        <input type="decimal" class="form-control" name="Kembali" id="Kembali"
                            value="<?php echo $d['Kembali'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/transaksi-piutang.index.php" class="btn btn-secondary">Batal</a>
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




