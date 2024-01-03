<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Status Servis</title>
</head>

<body>
    <h3>Tambah Sataus Sarvis</h3>
    <form action="../proses/proses-status-servis.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Status</td>
                <td><input type="text" name="Status"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/status-servis.index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>