<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
?>
<title> Input Operator Sistem | App Manajement Servis dan Penjualan Laptop<</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Operator Sistem</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-operator-sistem.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Masukan Nama Lengkap " />
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="Username" id="v" placeholder="Masukan Username" />
                </div>
                <div class="form-group">
                    <label for="Level">Level</label>
                    <input type="text" class="form-control" name="Level" id="Level" placeholder=" Masukan Level" />
                </div>
                <div class="form-group">
                    <label for="Login_Terakhir">Login Terakhir</label>
                    <input type="datetime" class="form-control" name="Login_Terakhir" id="Login_Terakhir" placeholder="Login Terakhir" />
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
