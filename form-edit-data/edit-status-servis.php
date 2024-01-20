<?php
include("../layout/app.php");
?>
<title>Edit Data Status Servis | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Status Servis </h4>
        </div>
        <div class="card-body">
            <?php
            include '../koneksi-db/config.php';
            $db = new database();
            foreach ($db->edit_status_servis($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-status-servis.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Status" value="<?php echo $d['ID_Status'] ?>">
                    <div class="form-group">
                        <label for="Status">Status Servis</label>
                        <input type="text" class="form-control" name="Status" id="Status"
                            value="<?php echo $d['Status'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/status-servis.index.php" class="btn btn-secondary">Batal</a>
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


