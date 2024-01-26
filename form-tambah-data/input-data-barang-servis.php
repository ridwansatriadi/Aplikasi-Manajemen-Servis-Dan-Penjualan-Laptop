<?php
include("../layout/app.php");
include("../koneksi-db/config.php");
$db = new Database();

?>

<title>Input Data Barang Servis | App Manajemen Servis dan Penjualan Laptop</title>

<div class="col-12 col-md-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Formulir Data Barang Servis</h4>
        </div>
        <div class="card-body">
            <form action="../proses/proses-data-barang-servis.php?aksi=tambah" method="post">
                <div class="form-group">
                    <label for="Serial_Barang">Serial Barang</label>
                    <input type="text" class="form-control" name="Serial_Barang" id="Serial_Barang"
                        placeholder="Masukkan serial barang" />
                </div>

                <div class="form-group">
                    <label for="barang_id">Nama Barang</label>
                    <select class="form-control" name="barang_id" id="barang_id" required>
                        <option value="">Pilih Barang Servis</option>
                        <?php
                        //Lakukan kueri SQL untuk mengambil nilai dari tabel barang
                        
                        $query_dbs = "SELECT ID_Barang, Nama_Barang FROM tb_barang";
                        $result_dbs = $db->execute($query_dbs);

                        // Loop untuk menambahkan setiap opsi ke dropdowna
                        while ($row_dbs = $result_dbs->fetch_assoc()) {
                            echo '<option value="' . $row_dbs['ID_Barang'] . '">' . $row_dbs['Nama_Barang'] . '</option>';
                        }

                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
           
                <div class="form-group">
                    <label for="Tipe_Barang">Tipe Barang</label>
                    <input type="text" class="form-control" name="Tipe_Barang" id="Tipe_Barang"
                        placeholder="Masukkan tipe barang" />
                </div>

                <div class="form-group">
                    <label for="Tanggal_Masuk">Tanggal Masuk</label>
                    <input type="date" class="form-control" name="Tanggal_Masuk" id="Tanggal_Masuk"
                        placeholder="Masukkan tanggal masuk" />
                </div>
                <div class="form-group">
                    <label for="Kondisi_Barang">Kondisi Barang</label>
                    <input type="text" class="form-control" name="Kondisi_Barang" id="Kondisi_Barang"
                        placeholder="Masukkan kondisi barang" />
                </div>
                <div class="form-group">
                    <label for="Kelengkapan_Barang">Kelengkapan Barang</label>
                    <input type="text" class="form-control" name="Kelengkapan_Barang" id="Kelengkapan_Barang"
                        placeholder="Masukkan kelengkapan barang" />
                </div>
                <div class="form-group">
                    <label for="solusi">solusi</label>
                    <input type="text" class="form-control" name="solusi" id="solusi" placeholder="Masukkan solusi" />
                </div>

                <!-- Tambahkan bagian formulir lainnya sesuai kebutuhan -->

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="../tampil/data-barang-servis.index.php" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?php
include("../layout/footer.php");

?>