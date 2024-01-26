<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Data Pelanggan | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-pelanggan.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Nama_Pelanggan">Nama Pelanggan</label>
                    <input type="text" class="form-control" name="Nama_Pelanggan" id="Nama_Pelanggan" placeholder="Masukan Nama Pelanggan" />
                </div>
                <div class="form-group">
                    <label for="Alamat">Alamat</label>
                    <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Masukan Alamat" />
                </div>
                <div class="form-group">
                    <label for="Kontak">Kontak</label>
                    <input type="number" class="form-control" name="Kontak" id="Kontak" placeholder="Masukan Kontak" />
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="text" class="form-control" name="Email" id="Email" placeholder="Masukan Kontak" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/pelanggan.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>