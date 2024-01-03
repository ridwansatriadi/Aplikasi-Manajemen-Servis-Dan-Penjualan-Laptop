<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Teknisi</title>
</head>

<body>
    <h3>Tambah Data Teknisi</h3>
    <form action="../proses/proses-teknisi.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Nama Teknisi</td>
                <td><input type="text" name="Nama_Teknisi"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="Almat"></td>
            </tr>
            <tr>
                <td>No telpon</td>
                <td><input type="text" name="no_telpon"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/teknisi.index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>