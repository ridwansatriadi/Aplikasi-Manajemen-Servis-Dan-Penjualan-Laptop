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

// Tampil Data
    function tampil_user()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_user");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
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
    function tampil_status_servis()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_status_servis");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    
    function tampil_transaksi_penjualan()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_transaksi_penjualan");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_transaksi_servis()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_transaksi_servis");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_piutang()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_transaksi_piutang");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    function tampil_laporan()
    {
        $data = mysqli_query($this->koneksi, " SELECT * FROM tb_laporan");
        while ($dat = mysqli_fetch_array($data)) {
            $hasil[] = $dat;
        }
        return $hasil;
    }
    
    // tambah data

    public function tambah_user($Username, $Password, $Role, )
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_user`(`Username`, `Password`, `Role`) 
		VALUES ('$Username', '$Password', '$Role')");
    }
    public function tambah_kategori_barang($Nama_Kategori, )
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_kategori_barang`(`Nama_Kategori`) 
		VALUES ('$Nama_Kategori')");
    }
    public function tambah_barang($Nama_Barang, $Id_Kategori, $Harga_Modal, $Harga_Jual, $Stok )
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_barang`(`Nama_Barang`, `Id_Kategori`, `Harga_Modal`, `Harga_Jual`, `stok`) 
		VALUES ('$Nama_Barang', '$Id_Kategori', '$Harga_Modal', '$Harga_Jual', '$Stok')");
    }
    public function tambah_data_barang_servis($Serial_Barang, $Tipe_Barang )
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_data_barang_servis`(`Serial_Barang`, `Tipe_Barang`) 
		VALUES ('$Serial_Barang', '$Tipe_Barang')");
    }

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