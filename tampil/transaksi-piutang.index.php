<!DOCTYPE html>
<html>

<head>
<title>Data Piutang</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Piutang</h2>

        <a href="input-transaksi-piutang.php">Tambah Data Piutang</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Faktur</th>
                <th>Tanggal</th>
                <th>ID_Operator</th>
                <th>Grand Total</th>
                <th>Bayar</th>
                <th>Kembali</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_piutang() as $x) {
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
                        <?php echo $x['ID_Operator']; ?>
                    </td>
                    <td>
                        <?php echo $x['Grand_Total']; ?>
                    </td>
                    <td>
                        <?php echo $x['Bayar']; ?>
                    </td>
                    <td>
                        <?php echo $x['Kembali']; ?>
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
