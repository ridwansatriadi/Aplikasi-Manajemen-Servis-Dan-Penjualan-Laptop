<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input User</title>
</head>

<body>
    <h3>Tambah User</h3>
    <form action="../proses/proses-user.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="Password"></td>
            </tr>
            <tr>
                <td>Role</td>
                <td><input type="text" name="Role"></td>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/user.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>