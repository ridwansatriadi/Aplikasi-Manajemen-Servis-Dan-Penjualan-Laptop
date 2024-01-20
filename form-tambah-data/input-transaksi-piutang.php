<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Data Transaksi Piutang | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Transaksi Piutang</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-transaksi-piutang.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Faktur">Faktur</label>
                    <input type="text" class="form-control" name="Faktur" id="Faktur" placeholder="Masukan Faktur" />
                </div>
                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="Tanggal" id="Tanggal" placeholder="Masukan Tanggal" />
                </div>
                <div class="form-group">
                    <label for="ID_Operator">ID Operator</label>
                    <input type="number" class="form-control" name="ID_Operator" id="ID_Operator" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="Grand_Total">Grand Total</label>
                    <input type="number" class="form-control" name="Grand_Total" id="Grand_Total" placeholder="Masukan total Bayar" />
                </div>
                <div class="form-group">
                    <label for="Bayar">Bayar</label>
                    <input type="number" class="form-control" name="Bayar" id="Bayar" placeholder="masukan Jumlah bayar" />
                </div>
                <div class="form-group">
                    <label for="Kembali">Kembali</label>
                    <input type="number" class="form-control" name="Kembali" id="Kembali" placeholder="Total kembali" />
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/transaksi-piutang.index.php" class="btn btn-secondary">Batal</a>
            </form>

        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>