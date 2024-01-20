<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Data Laporan | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Data Laporoan</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-laporan.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="Tanggal" id="Tanggal" placeholder="Masukan Tanggal" />
                </div>
                <div class="form-group">
                    <label for="ID_Transaksi_Penjualan">ID Transaksi Penjualan</label>
                    <input type="text" class="form-control" name="ID_Transaksi_Penjualan" id="ID_Transaksi_Penjualan" placeholder="" />
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
                    <label for="Total_Transaksi">Total Transaksi</label>
                    <input type="number" class="form-control" name="Total_Transaksi" id="Total_Transaksi" placeholder="Masukan Jumlah Transaksi" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/laporan.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>
