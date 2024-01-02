<!DOCTYPE html>
<html>

<head>
<title>Data User</title>
</head>

<body>

    <div class="container">
        <?php
        include("../koneksi-db/config.php");
        $db = new Database();
        ?>
       
        <h2>Data User</h2>

        <a href="../form-tambah-data/input-user.php">Tambah Data User</a>
        <br>
        <br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Opsi</th>
            </tr>
            <?php
            $data = 1;
            foreach ($db->tampil_user() as $x) {
                ?>
                <tr>
                    <td>
                        <?php echo $data++; ?>
                    </td>
                    <td>
                        <?php echo $x['Username']; ?>
                    </td>
                    <td>
                        <?php echo $x['Password']; ?>
                    </td>
                    <td>
                        <?php echo $x['Role']; ?>
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
