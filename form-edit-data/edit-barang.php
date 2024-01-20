<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();
?>

<title>Edit Data Barang | App Manajemen Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Edit Data Barang</h4>
        </div>
        <div class="card-body">
            <?php
            foreach ($db->edit_barang($_GET['id']) as $d) {
                ?>
                <form action="../proses/proses-barang.php?aksi=update" method="post">
                    <input type="hidden" name="ID_Barang" value="<?php echo $d['ID_Barang'] ?>">
                    <div class="form-group">
                        <label for="Nama_Barang">Nama Barang</label>
                        <input type="text" class="form-control" name="Nama_Barang" id="Nama_Barang"
                            value="<?php echo $d['Nama_Barang'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Id_Kategori">Nama Kategori</label>
                        <select class="form-control" name="Id_Kategori" id="Id_Kategori" required>
                            <?php
                            // Lakukan kueri SQL untuk mengambil nilai dari tabel kategori
                            $query = "SELECT ID_Kategori, Nama_Kategori FROM tb_kategori_barang";
                            $result = $db->execute($query);

                            // Loop untuk menambahkan setiap opsi ke dropdown
                            while ($row = $result->fetch_assoc()) {
                                $selected = ($row['ID_Kategori'] == $d['Id_Kategori']) ? 'selected' : '';
                                echo '<option value="' . $row['ID_Kategori'] . '" ' . $selected . '>' . $row['Nama_Kategori'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Harga_Modal">Harga Modal</label>
                        <input type="text" class="form-control" id="Harga_Modal" name="Harga_Modal"
                            value="<?php echo $d['Harga_Modal'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Harga_Jual">Harga Jual</label>
                        <input type="text" class="form-control" id="Harga_Jual" name="Harga_Jual"
                            value="<?php echo $d['Harga_Jual'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Stok">Stok</label>
                        <input type="text" class="form-control" id="Stok" name="Stok"
                            value="<?php echo $d['Stok'] ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="../tampil/barang.index.php" class="btn btn-secondary">Batal</a>
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
