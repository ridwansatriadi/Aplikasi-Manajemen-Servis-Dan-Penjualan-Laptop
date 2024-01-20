<?php
include("../koneksi-db/config.php");
$db = new database();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Data User</title>
</head>

<body>
    <h3 class="mb-4">Edit Data User</h3>
    <?php foreach ($db->edit_user($_GET['id']) as $d) { ?>
        <form action="../proses/proses-user.php?aksi=update" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td>
                        <input type="hidden" name="ID_User" value="<?php echo $d['ID_User'] ?>">
                        <input type="text" class="form-control" id="Username" name="Username" value="<?php echo $d['Username'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="text" class="form-control" id="Password" name="Password" value="<?php echo $d['Password'] ?>">
                    </td>
                <tr>
                    <td>Role</td>
                    <td>
                        <input type="text" class="form-control" id="Role" name="Role" value="<?php echo $d['Role'] ?>">
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                    <td><a href="../tampil/user.index.php">Batal</a></td>
                </tr>
            </table>
        </form>
    <?php } ?>
</body>

</html>
