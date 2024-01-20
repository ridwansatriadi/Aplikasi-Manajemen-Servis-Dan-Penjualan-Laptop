<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Data Barang Servis | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Data Barang Servis</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-data-barang-servis.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Serial_Barang">Serial Barang</label>
                    <input type="text" class="form-control" name="Serial_Barang" id="Serial_Barang" placeholder="Masukan serial barang" />
                </div>
                <div class="form-group">
                    <label for="Tipe_Barang">Tipe Barang</label>
                    <input type="text" class="form-control" name="Tipe_Barang" id="Tipe_Barang" placeholder="Masukan Tipe Barang" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/data-barang-servis.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>