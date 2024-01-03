<!DOCTYPE html>
<html>

<head>
<title>Data Teknisi</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Teknisi</h2>

        <a href="../form-tambah-data/input-teknisi.php">Tambah Data Teknisi</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Teknisi</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_teknisi() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Nama_Teknisi']; ?>
                    </td>
                    <td>
                        <?php echo $x['Almat']; ?>
                    </td>
                    <td>
                        <?php echo $x['no_telpon']; ?>
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
