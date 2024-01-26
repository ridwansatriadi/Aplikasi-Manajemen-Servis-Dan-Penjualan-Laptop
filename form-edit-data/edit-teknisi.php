<?php
include("../layout/app.php");
?>
<title>Edit Data Teknisi | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Teknisi </h4>
        </div>
        <div class="card-body">
            <?php
            include '../koneksi-db/config.php';
            $db = new database();
            foreach ($db->edit_teknisi($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-teknisi.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Teknisi" value="<?php echo $d['ID_Teknisi'] ?>">
                    <div class="form-group">
                        <label for="Nama_Teknisi">Nama Teknisi</label>
                        <input type="text" class="form-control" name="Nama_Teknisi" id="Nama_Teknisi"
                            value="<?php echo $d['Nama_Teknisi'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Almat">Alamat</label>
                        <input type="text" class="form-control" name="Almat" id="Almat"
                            value="<?php echo $d['Almat'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="No_Telpon">No Telpon</label>
                        <input type="text" class="form-control" name="No_Telpon" id="No_Telpon"
                            value="<?php echo $d['No_Telpon'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Email">No Telpon</label>
                        <input type="text" class="form-control" name="Email" id="Email"
                            value="<?php echo $d['Email'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/teknisi.index.php" class="btn btn-secondary">Batal</a>
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

