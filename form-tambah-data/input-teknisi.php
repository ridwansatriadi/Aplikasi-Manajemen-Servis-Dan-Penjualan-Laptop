<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Data Teknisi | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Data Teknisi</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-teknisi.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Nama_Teknisi">Nama Teknisi</label>
                    <input type="text" class="form-control" name="Nama_Teknisi" id="Nama_Teknisi" placeholder="Masukan Nama Teknisi" />
                </div>
                <div class="form-group">
                    <label for="Almat">Alamat</label>
                    <input type="text" class="form-control" name="Almat" id="Almat" placeholder="Masukan Alamat" />
                </div>
                <div class="form-group">
                    <label for="no_telpon">No Telpon</label>
                    <input type="number" class="form-control" name="no_telpon" id="no_telpon" placeholder="Masukan no telpon" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/teknisi.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>