<!DOCTYPE html>
<html>

<head>
<title>Data Operator Sistem</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data Operator Sistem</h2>

        <a href="input-operator-sistem.php">Tambah Data Operator Sistem</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Lengkap L</th>
                <th>Username</th>
                <th>Level</th>
                <th>Login_Terakhir</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_operator_sistem() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Nama']; ?>
                    </td>
                    <td>
                        <?php echo $x['Username']; ?>
                    </td>
                    <td>
                        <?php echo $x['Level']; ?>
                    </td>
                    <td>
                        <?php echo $x['Login_Terakhir']; ?>
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
