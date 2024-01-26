<?php
include("../layout/app.php");
?>
<title>Edit Data Pelanggan | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Pelanggan </h4>
        </div>
        <div class="card-body">
            <?php
            include '../koneksi-db/config.php';
            $db = new database();
            foreach ($db->edit_pelanggan($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-pelanggan.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Pelanggan" value="<?php echo $d['ID_Pelanggan'] ?>">
                    <div class="form-group">
                        <label for="Nama_Pelanggan">Nama Pelanggan</label>
                        <input type="text" class="form-control" name="Nama_Pelanggan" id="Nama_Pelanggan"
                            value="<?php echo $d['Nama_Pelanggan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Alamat">Alamat</label>
                        <input type="text" class="form-control" name="Alamat" id="Alamat"
                            value="<?php echo $d['Alamat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Kontak">Kontak</label>
                        <input type="number" class="form-control" name="Kontak" id="Kontak"
                            value="<?php echo $d['Kontak'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control" name="Email" id="Email"
                            value="<?php echo $d['Email'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/pelanggan.index.php" class="btn btn-secondary">Batal</a>
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
