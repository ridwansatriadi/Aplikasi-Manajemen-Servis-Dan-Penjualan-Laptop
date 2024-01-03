<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Operator Sistem</title>
</head>

<body>
    <h3>Tambah Data Operator Sistem</h3>
    <form action="../proses/proses-operator-sistem.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>Level</td>
                <td><input type="text" name="Level"></td>
            </tr>
            <tr>
                <td>Login Terakhir</td>
                </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/pelanggan.index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>