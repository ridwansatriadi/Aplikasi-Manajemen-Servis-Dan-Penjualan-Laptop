<!DOCTYPE html>
<html>

<head>
<title>Data Transaksi Penjualan</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Transaksi Penjualan</h2>

        <a href="input-transaksi-penjualan.php">Tambah Data Transaksi </a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Faktur</th>
                <th>Tanggal</th>
                <th>ID_Pelanggan</th>
                <th>ID_Operator</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_transaksi_penjualan() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Faktur']; ?>
                    </td>
                    <td>
                        <?php echo $x['Tanggal']; ?>
                    </td>
                    <td>
                        <?php echo $x['ID_Pelanggan']; ?>
                    </td>
                    <td>
                        <?php echo $x['ID_Operator']; ?>
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
