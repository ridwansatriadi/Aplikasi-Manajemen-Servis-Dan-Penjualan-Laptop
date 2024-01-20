<?php
include("../layout/app.php");
?>
<title>Edit Data Barang Servis | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Barang Servis </h4>
        </div>
        <div class="card-body">
            <?php
            include '../koneksi-db/config.php';
            $db = new database();
            foreach ($db->edit_data_barang_servis($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-data-barang-servis.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Service" value="<?php echo $d['ID_Service'] ?>">
                    <div class="form-group">
                        <label for="Serial_Barang">Serial Barang</label>
                        <input type="text" class="form-control" name="Serial_Barang" id="Serial_Barang"
                            value="<?php echo $d['Serial_Barang'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Tipe_Barang">Tipe Barang</label>
                        <input type="text" class="form-control" name="Tipe_Barang" id="Tipe_Barang"
                            value="<?php echo $d['Tipe_Barang'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/data-barang-servis.index.php" class="btn btn-secondary">Batal</a>
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