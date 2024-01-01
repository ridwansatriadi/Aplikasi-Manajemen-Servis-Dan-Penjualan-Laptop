<!DOCTYPE html>
<html>

<head>
<title>Kategori Barang</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Kategori Barang</h2>

        <a href="input-kategori-barang.php">Tambah Kategori Barang</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_kategori_barang() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Nama_Kategori']; ?>
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
