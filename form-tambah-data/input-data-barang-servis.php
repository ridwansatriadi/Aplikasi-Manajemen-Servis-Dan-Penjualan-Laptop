<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Barang Servis</title>
</head>

<body>
    <h3>Tambah Data Barang Servis </h3>
    <form action="../proses/proses-data-barang-servis.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Serial Barang</td>
                <td><input type="text" name="Serial_Barang"></td>
            </tr>
            <tr>
                <td>Tipe_Barang</td>
                <td><input type="text" name="Tipe_Barang"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/data-barang-servis.index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>