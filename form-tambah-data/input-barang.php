<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
</head>

<body>
    <h3>Tambah User</h3>
    <form action="../proses/proses-barang.php?aksi=tambah" method="post">

        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="Nama_Barang"></td>
            </tr>
            <tr>
                <td>ID Kategori</td>
                <td><input type="number" name="Id_Kategori"></td>
            </tr>
            <tr>
                <td>Harga Modal</td>
                <td><input type="number" name="Harga_Modal"></td>
            <tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="number" name="Harga_Jual"></td>
            <tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="Stok"></td>
            <tr>
                <td><input type="submit" value="Simpan"></td>
                <td><a href="../tampil/barang.index.php">Batal</a></td>
            </tr>
        </table>
    </form>
</body>

</html>