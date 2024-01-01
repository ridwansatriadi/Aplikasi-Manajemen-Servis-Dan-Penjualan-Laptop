<!DOCTYPE html>
<html>

<head>
<title>Data Barang</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Barang</h2>

        <a href="input-barang.php">Tambah Data Barang</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Harga Modal</th>
                <th>Harga Jual</th>
                <th>Stok</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_barang() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Nama_Barang']; ?>
                    </td>
                    <td>
                        <?php echo $x['ID_Kategori']; ?>
                    </td>
                    <td>
                        <?php echo $x['Harga_Modal']; ?>
                    </td>
                    <td>
                        <?php echo $x['Harga_Jual']; ?>
                    </td>
                    <td>
                        <?php echo $x['Stok']; ?>
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
