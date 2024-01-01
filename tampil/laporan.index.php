<!DOCTYPE html>
<html>

<head>
<title>Data Laporan</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Laporan</h2>

        <a href="input-laporan.php">Tambah Data Laporan</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>ID_Transaksi</th>
                <th>ID_Pelanggan</th>
                <th>ID_Operator</th>
                <th>Total Transaksi</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_laporan() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Tanggal']; ?>
                    </td>
                    <td>
                        <?php echo $x['ID_Transaksi']; ?>
                    </td>
                    <td>
                        <?php echo $x['ID_Pelanggan']; ?>
                    </td>
                    <td>
                        <?php echo $x['ID_Operator']; ?>
                    </td>
                    <td>
                        <?php echo $x['Total_Transaksi']; ?>
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
