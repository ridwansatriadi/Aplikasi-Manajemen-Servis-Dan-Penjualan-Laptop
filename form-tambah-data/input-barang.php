<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();

?>

<title>Input Barang | App Manajemen Servis dan Penjualan Laptop</title>
<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Input Barang</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-barang.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Nama_Barang">Nama Barang</label>
                    <input type="text" class="form-control" name="Nama_Barang" id="Nama_Barang"
                        placeholder="Masukkan nama barang" required />
                </div>

                <div class="form-group">
                    <label for="Id_Kategori">Nama Kategori</label>
                    <select class="form-control" name="Id_Kategori" id="Id_Kategori" required>
                        <option value="">Pilih Kategori</option>
                        <?php
                        // Lakukan kueri SQL untuk mengambil nilai dari tabel kategori
                        $query = "SELECT ID_Kategori, Nama_Kategori FROM tb_kategori_barang";
                        $result = $db->execute($query);

                        // Loop untuk menambahkan setiap opsi ke dropdown
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['ID_Kategori'] . '">' . $row['Nama_Kategori'] . '</option>';
                        }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Harga_Modal">Harga Modal</label>
                    <input type="text" class="form-control" name="Harga_Modal" id="Harga_Modal"
                        placeholder="Masukkan Harga Modal" required/>
                    
                </div>

                <div class="form-group">
                    <label for="Harga_Jual">Harga Jual</label>
                    <input type="text" class="form-control" name="Harga_Jual" id="Harga_Jual"
                        placeholder="Masukkan Harga Jual" required/>
                    
                </div>

                <div class="form-group">
                    <label for="Stok">Stok</label>
                    <input type="text" class="form-control" name="Stok" id="Stok" placeholder="Masukkan stok barang"
                        required/>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/barang.index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<?php
include("../layout/footer.php");
?>
