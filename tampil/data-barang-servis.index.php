    <?php
    include("../layout/app.php");
    include("../koneksi-db/config.php");
    $db = new Database();
    ?>
    <title> Data Barang Servis| App Manajement Servis dan Penjualan Laptop</title>
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Data Barang Servis</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="../form-tambah-data/input-data-barang-servis.php" class="btn btn-primary mb-3">[+] Tambah Data
                        Barang Seris Baru</a>
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>No</th>
                                <th>Serial Barang</th>
                                <th>Nama Barang Servis</th>
                                <th>Tipe Barang</th>
                                <th>Tanggal Masuk</th>
                                <th>Kondisi Barang</th>
                                <th>Kelengkapan Barang</th>
                                <th>solusi</th>
                                <th>Opsi</th>
                            </tr>
                            <tr>
                                <?php
                                $data = 1;
                                foreach ($db->tampil_dbs_dgn_kategori() as $x) {
                                    ?>
                                <tr>
                                    <td>
                                        <?php echo $data++; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Serial_Barang']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Nama_Barang']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Tipe_Barang']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Tanggal_Masuk']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Kondisi_Barang']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['Kelengkapan_Barang']; ?>
                                    </td>
                                    <td>
                                        <?php echo $x['solusi']; ?>
                                    </td>
                                    <td>
                                        <a href="../form-edit-data/edit-data-barang-servis.php?id=<?php echo $x['ID_Service']; ?>&aksi=edit" class="btn btn-warning btn-sm" >Edit</a>
                                        <a href="../proses/proses-data-barang-servis.php?id=<?php echo $x['ID_Service']; ?>&aksi=hapus" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("../layout/footer.php");
    ?>