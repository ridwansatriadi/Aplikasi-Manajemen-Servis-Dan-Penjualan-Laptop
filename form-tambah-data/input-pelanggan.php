<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pelanggan</title>
</head>

<body>
    <h3>Tambah Data Pelanggan</h3>
    <form action="../proses/proses-pelanggan.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td><input type="text" name="Nama_Pelanggan"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Alamat"></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="text" name="Kontak"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/pelanggan.index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>