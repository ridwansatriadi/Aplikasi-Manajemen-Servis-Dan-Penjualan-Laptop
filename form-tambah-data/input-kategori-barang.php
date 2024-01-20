<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Kategori Barang | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Input Kategori Barang</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-kategori-barang.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Serial_Barang">Nama Kategori</label>
                    <input type="text" class="form-control" name="Nama_Kategori" id="Nama_Kategori" placeholder="Masukan serial Barang" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/kategori-barang.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>