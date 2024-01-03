<!DOCTYPE html>
<html>

<head>
<title>Data Barang Servis</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Barang Servis</h2>

        <a href="../form-tambah-data/input-data-barang-servis.php">Tambah Data Barang Servis</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Serial Barang</th>
                <th>Tipe Barang</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_data_barang_servis() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Serial_Barang']; ?>
                    </td>
                    <td>
                        <?php echo $x['Tipe_Barang']; ?>
                    </td>
                    
                    <!-- <td>
                        <a href="edit.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
                        <a href="proses.php?id=<?php echo $x['id']; ?>&aksi=hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td> -->
                </tr>
            <?php
            }
            ?>
        </table>
    </div>

</body>

</html>
