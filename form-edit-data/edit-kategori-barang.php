<?php
include("../layout/app.php");
?>
<title>Edit Data Kategori Barang | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Kategori Barang </h4>
        </div>
        <div class="card-body">
            <?php
            include '../koneksi-db/config.php';
            $db = new database();
            foreach ($db->edit_kategori_barang($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-kategori-barang.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Kategori" value="<?php echo $d['ID_Kategori'] ?>">
                    <div class="form-group">
                        <label for="Nama_Barang">Nama Barang</label>
                        <input type="text" class="form-control" name="Nama_Kategori" id="Nama_Kategori"
                            value="<?php echo $d['Nama_Kategori'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/kategori-barang.index.php" class="btn btn-secondary">Batal</a>
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