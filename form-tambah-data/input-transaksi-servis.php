
<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Data Transaksi Servis | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Transaksi Servis</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-transaksi-servis.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Faktur">Faktur</label>
                    <input type="text" class="form-control" name="Faktur" id="Faktur" placeholder="Masukan Faktur" />
                </div>
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="Tanggal" id="Tanggal" placeholder="Masukan Tanggal" />
                </div>
                <div class="form-group">
                    <label for="ID_Pelanggan">ID Pelanggan</label>
                    <input type="number" class="form-control" name="ID_Pelanggan" id="ID_Pelanggan" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="ID_Operator">ID Operator</label>
                    <input type="number" class="form-control" name="ID_Operator" id="ID_Operator" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="ID_Status">ID Status</label>
                    <input type="number" class="form-control" name="ID_Status" id="ID_Operator" placeholder="" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/transaksi-servis.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>