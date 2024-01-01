<?php
class Database
{
    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $db = "db_servislaptop";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    function tampil_kategori_barang()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_kategori_barang");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_barang()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_barang");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_data_barang_servis()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_data_barang_servis");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_pelanggan()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_pelanggan");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_teknisi()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_teknisi");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_operator_sistem()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_operator_sistem");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    

    // public function tambah($nama, $stok, $harga_beli, $harga_jual)
    // {
    //     mysqli_query($this->koneksi, "INSERT INTO `tb_barang`(`nama`, `stok`, `harga_beli`, `harga_jual`) 
	// 	VALUES ('$nama', '$stok', '$harga_beli', '$harga_jual')");
    // }

    // public function update($id, $nama, $stok, $harga_beli, $harga_jual)
	// {
	// 	mysqli_query($this->koneksi, "UPDATE `tb_barang` SET `nama`='$nama', `stok`='$stok', `harga_beli`='$harga_beli', `harga_jual`='$harga_jual' WHERE `id`='$id'");

	// }
    // public function edit($id)
	// {
	// 	$data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE id=$id");
	// 	while ($d = mysqli_fetch_array($data)) {
	// 		$hasil[] = $d;
	// 	}
	// 	return $hasil;
	// }
    // public function delete($id)
	// {
	// 	mysqli_query($this->koneksi, "DELETE FROM tb_barang WHERE id='$id'");
	// }


}
?>