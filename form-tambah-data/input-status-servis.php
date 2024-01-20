<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Status Servis | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Data Status Servis</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-status-servis.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Status">Status</label>
                    <input type="text" class="form-control" name="Status" id="Status" placeholder="Masukan Status Servis" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/status-servis.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>
