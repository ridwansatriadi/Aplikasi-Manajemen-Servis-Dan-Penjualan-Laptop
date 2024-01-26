<?php
include("../layout/app.php");
?>
<title>Edit Data Operator Sistem | App Manajement Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Operator Sistem </h4>
        </div>
        <div class="card-body">
            <?php
            include '../koneksi-db/config.php';
            $db = new database();
            foreach ($db->edit_operator_sistem($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-operator-sistem.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Operator" value="<?php echo $d['ID_Operator'] ?>">
                    <div class="form-group">
                        <label for="Nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="Nama" id="Nama" value="<?php echo $d['Nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" class="form-control" name="Username" id="Username"
                            value="<?php echo $d['Username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="text" class="form-control" name="Password" id="Password"
                            value="<?php echo $d['Password'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="Level">Level</label>
                        <input type="text" class="form-control" name="Level" id="Level" value="<?php echo $d['Level'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="Login_Terakhir">Login Terakhir</label>
                        <input type="dateme" class="form-control" name="Login_Terakhir" id="Login_Terakhir"
                            value="<?php echo $d['Login_Terakhir'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/operator-sistem.index.php" class="btn btn-secondary">Batal</a>
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