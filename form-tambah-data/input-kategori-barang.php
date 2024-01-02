<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Kategori Barang</title>
</head>

<body>
    <h3>Tambah Kategori Barang</h3>
    <form action="../proses/proses-kategori-barang.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Nama Kategori</td>
                <td><input type="text" name="Nama_Kategori"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/kategori-barang.index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>