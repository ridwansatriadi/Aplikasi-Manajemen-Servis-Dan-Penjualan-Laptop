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
    public function execute($query) {
        return mysqli_query($this->koneksi, $query);
    }
    public function login($username, $password)
    {
        // Gunakan prepared statement
        $query = "SELECT * FROM tb_user WHERE Username=? AND Password=?";
        $stmt = mysqli_prepare($this->koneksi, $query);

        // Bind parameter
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);

        // Eksekusi query
        mysqli_stmt_execute($stmt);

        // Dapatkan hasilnya
        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $user = mysqli_fetch_assoc($result);
            if ($user) {
                // Login berhasil, periksa peran pengguna
                $role = $user['Role'];

                // Sesuaikan logika berikut sesuai dengan struktur peran yang Anda miliki
                if ($role === 'admin') {
                    // User dengan peran admin
                    return 'admin';
                } elseif ($role === 'teknisi') {
                    // User dengan peran teknisi
                    return 'teknisi';
                }
            } else {
                // Nama pengguna atau kata sandi salah
                return false;
            }
        } else {
            // Eksekusi query gagal
            return false;
        }
    }

// Tampil Data

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
        // select from dari 3 tabel sehingga query sql disesuikan dengan data yang  di tampilkalan sepierti nama pelanggan yang tidak ada di data penjualan ->inherit
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
    public function tambah_pelanggan($Nama_Pelanggan, $Alamat, $Kontak )
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_pelanggan`(`Nama_Pelanggan`, `Alamat`, `Kontak`) 
		VALUES ('$Nama_Pelanggan', '$Alamat', '$Kontak')");
    }
    public function tambah_teknisi($Nama_Teknisi, $Almat, $no_telpon )
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_teknisi`(`Nama_Teknisi`, `Almat`, `no_telpon`) 
		VALUES ('$Nama_Teknisi', '$Almat', '$no_telpon')");
    }
    public function tambah_operator_sistem($Nama, $Username, $Level, $Login_Terakhir)
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_operator_sistem`(`Nama`, `Username`, `Level`, `Login_Terakhir`) 
		VALUES ('$Nama', '$Username', '$Level', '$Login_Terakhir')");
    }
    public function tambah_status_servis($Status)
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_status_servis`(`Status`) 
		VALUES ('$Status')");
    }
    public function tambah_transaksi_penjualan($Faktur, $Tanggal, $ID_Pelanggan, $ID_Operator)
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_transaksi_penjualan`(`Faktur`, `Tanggal`, `ID_Pelanggan`, `ID_Operator`) 
		VALUES ('$Faktur', '$Tanggal', '$ID_Pelanggan', '$ID_Operator')");
    }
    public function tambah_transaksi_servis($Faktur, $Tanggal, $ID_Pelanggan, $ID_Operator, $ID_Status)
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_transaksi_servis`(`Faktur`, `Tanggal`, `ID_Pelanggan`, `ID_Operator`, `ID_Status`) 
		VALUES ('$Faktur', '$Tanggal', '$ID_Pelanggan', '$ID_Operator', '$ID_Status')");
    }
    public function tambah_transaksi_piutang($Faktur, $Tanggal, $ID_Operator, $Grand_Total, $Bayar, $Kembali)
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_transaksi_piutang`(`Faktur`, `Tanggal`, `ID_Operator`, `Grand_Total`, `Bayar`, `Kembali`) 
		VALUES ('$Faktur', '$Tanggal', '$ID_Operator', '$Grand_Total', '$Bayar', '$Kembali')");
    }
    public function tambah_laporan($Tanggal, $ID_Transaksi_Penjualan, $ID_Pelanggan, $ID_Operator, $Total_Transaksi)
    {
        mysqli_query($this->koneksi, "INSERT INTO `tb_laporan`(`Tanggal`, `ID_Transaksi_Penjualan`, `ID_Pelanggan`, `ID_Operator`, `Total_Transaksi`) 
		VALUES ('$Tanggal', '$ID_Transaksi_Penjualan', '$ID_Pelanggan', '$ID_Operator', '$Total_Transaksi')");
    }

    // Edit data

    public function update_kategori_barang($ID_Kategori, $Nama_Kategori)
    {
        mysqli_query($this->koneksi, "UPDATE `tb_kategori_barang` SET `Nama_Kategori`='$Nama_Kategori' WHERE `ID_Kategori`='$ID_Kategori'");
    }
    
    public function edit_kategori_barang($ID_Kategori)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_kategori_barang WHERE ID_Kategori='$ID_Kategori'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_barang($ID_Barang, $Nama_Barang, $Id_Kategori, $Harga_Modal, $Harga_Jual, $Stok)
    {
        mysqli_query($this->koneksi, "UPDATE `tb_barang` SET `ID_Barang`='$ID_Barang', `ID_Barang`='$ID_Barang', `Nama_Barang`='$Nama_Barang', `Id_Kategori`='$Id_Kategori', `Harga_Modal`='$Harga_Modal', `Harga_Jual`='$Harga_Jual', `Stok`='$Stok' WHERE `ID_Barang`='$ID_Barang'");
    }
    
    public function edit_barang($ID_Barang)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_barang WHERE ID_Barang='$ID_Barang'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_data_barang_servis($ID_Service, $Serial_Barang, $Tipe_Barang)
    {
        mysqli_query($this->koneksi, "UPDATE `tb_data_barang_servis` SET `ID_Service`='$ID_Service', `Serial_Barang`='$Serial_Barang', `Tipe_Barang`='$Tipe_Barang' WHERE `ID_Service`='$ID_Service'");
    }
    
    public function edit_data_barang_servis($ID_Service)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_data_barang_servis WHERE ID_Service='$ID_Service'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_pelanggan($ID_Pelanggan, $Nama_Pelanggan, $Alamat, $Kontak )
    {
        mysqli_query($this->koneksi, "UPDATE `tb_pelanggan` SET `ID_Pelanggan`='$ID_Pelanggan', `Nama_Pelanggan`='$Nama_Pelanggan', `Alamat`='$Alamat', `Kontak`='$Kontak' WHERE `ID_Pelanggan`='$ID_Pelanggan'");
    }
    
    public function edit_pelanggan($ID_Pelanggan)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_pelanggan WHERE ID_Pelanggan='$ID_Pelanggan'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_teknisi($ID_Teknisi, $Nama_Teknisi, $Almat, $no_telpon )
    {
        mysqli_query($this->koneksi, "UPDATE `tb_teknisi` SET `ID_Teknisi`='$ID_Teknisi', `Nama_Teknisi`='$Nama_Teknisi', `Almat`='$Almat', `no_telpon`='$no_telpon' WHERE `ID_Teknisi`='$ID_Teknisi'");
    }
    
    public function edit_teknisi($ID_Teknisi)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_teknisi WHERE ID_Teknisi='$ID_Teknisi'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_operator_sistem($ID_Operator, $Nama, $Username, $Level, $Login_Terakhir)
    {
        mysqli_query($this->koneksi, "UPDATE `tb_operator_sistem` SET `ID_Operator`='$ID_Operator', `Nama`='$Nama', `Username`='$Username', `Level`='$Level', `Login_Terakhir`='$Login_Terakhir' WHERE `ID_Operator`='$ID_Operator'");
    }
    
    public function edit_operator_sistem($ID_Operator)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_operator_sistem WHERE ID_Operator='$ID_Operator'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_status_servis($ID_Status, $Status)
    {
        mysqli_query($this->koneksi, "UPDATE `tb_status_servis` SET `ID_Status`='$ID_Status', `Status`='$Status' WHERE `ID_Status`='$ID_Status'");
    }
    
    public function edit_status_servis($ID_Status)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_status_servis WHERE ID_Status='$ID_Status'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_transaksi_penjualan($ID_Transaksi_Penjualan, $Faktur, $Tanggal, $ID_Pelanggan, $ID_Operator )
    {
        mysqli_query($this->koneksi, "UPDATE `tb_transaksi_penjualan` SET `ID_Transaksi_Penjualan`='$ID_Transaksi_Penjualan', `Faktur`='$Faktur' , `Tanggal`='$Tanggal' , `ID_Pelanggan`='$ID_Pelanggan' , `ID_Operator`='$ID_Operator' WHERE `ID_Transaksi_Penjualan`='$ID_Transaksi_Penjualan'");
    }
    
    public function edit_transaksi_penjualan($ID_Transaksi_Penjualan)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_transaksi_penjualan WHERE ID_Transaksi_Penjualan='$ID_Transaksi_Penjualan'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_transaksi_servis($ID_Transaksi_Servis, $Faktur, $Tanggal, $ID_Pelanggan, $ID_Operator, $ID_Status )
    {
        mysqli_query($this->koneksi, "UPDATE `tb_transaksi_servis` SET `ID_Transaksi_Servis`='$ID_Transaksi_Servis', `Faktur`='$Faktur' , `Tanggal`='$Tanggal' , `ID_Pelanggan`='$ID_Pelanggan' , `ID_Operator`='$ID_Operator', `ID_Status`='$ID_Status' WHERE `ID_Transaksi_Servis`='$ID_Transaksi_Servis'");
    }
    
    public function edit_transaksi_servis($ID_Transaksi_Servis)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_transaksi_servis WHERE ID_Transaksi_Servis='$ID_Transaksi_Servis'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_transaksi_piutang($ID_Transaksi_Piutang, $Faktur, $Tanggal, $ID_Operator, $Grand_Total, $Bayar, $Kembali )
    {
        mysqli_query($this->koneksi, "UPDATE `tb_transaksi_piutang` SET `ID_Transaksi_Piutang`='$ID_Transaksi_Piutang', `Faktur`='$Faktur' , `Tanggal`='$Tanggal' , `ID_Operator`='$ID_Operator' , `Grand_Total`='$Grand_Total', `Bayar`='$Bayar', `Kembali`='$Kembali' WHERE `ID_Transaksi_Piutang`='$ID_Transaksi_Piutang'");
    }
    
    public function edit_transaksi_piutang($ID_Transaksi_Piutang)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_transaksi_piutang WHERE ID_Transaksi_Piutang='$ID_Transaksi_Piutang'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_laporan($ID_Laporan, $Tanggal, $ID_Transaksi_Penjualan, $ID_Pelanggan, $ID_Operator, $Total_Transaksi )
    {
        mysqli_query($this->koneksi, "UPDATE `tb_laporan` SET `ID_Laporan`='$ID_Laporan', `Tanggal`='$Tanggal', `ID_Transaksi_Penjualan`='$ID_Transaksi_Penjualan' , `ID_Pelanggan`='$ID_Pelanggan' , `ID_Operator`='$ID_Operator' , `Total_Transaksi`='$Total_Transaksi' WHERE `ID_Laporan`='$ID_Laporan'");
    }
    
    public function edit_laporan($ID_Laporan)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_laporan WHERE ID_Laporan='$ID_Laporan'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}
    public function update_user($ID_User, $Username, $Password, $Role)
    {
        mysqli_query($this->koneksi, "UPDATE `tb_user` SET `ID_User`='$ID_User', `Username`='$Username', `Password`='$Password' , `Role`='$Role' WHERE `ID_User`='$ID_User'");
    }
    
    public function edit_user($ID_User)
{
    $hasil = array();

    $data = mysqli_query($this->koneksi, "SELECT * FROM tb_user WHERE ID_User='$ID_User'");
    while ($d = mysqli_fetch_array($data)) {
        $hasil[] = $d;
    }
    return $hasil;
}

    // hapus data
    public function delete_kategori_barang($ID_Kategori)
    {
        mysqli_query($this->koneksi, "DELETE FROM tb_kategori_barang WHERE ID_Kategori='$ID_Kategori'");
    }   
     public function delete_barang($ID_Barang)
	{
		mysqli_query($this->koneksi, "DELETE FROM `tb_barang` WHERE ID_Barang='$ID_Barang'");
	}
     public function delete_data_barang_servis($ID_Service)
	{
		mysqli_query($this->koneksi, "DELETE FROM `tb_data_barang_servis` WHERE ID_Service='$ID_Service'");
	}
     public function delete_pelanggan($ID_Pelanggan)
	{
		mysqli_query($this->koneksi, "DELETE FROM `tb_pelanggan` WHERE ID_Pelanggan='$ID_Pelanggan'");
	}
     public function delete_teknisi($ID_Teknisi)
	{
		mysqli_query($this->koneksi, "DELETE FROM `tb_teknisi` WHERE ID_Teknisi='$ID_Teknisi'");
	}
     public function delete_operator_sistem($ID_Operator)
	{
		mysqli_query($this->koneksi, "DELETE FROM `tb_operator_sistem` WHERE ID_Operator='$ID_Operator'");
	}
    
    public function delete_transaki_penjualan($ID_Transaksi_Penjualan)
   {
       mysqli_query($this->koneksi, "DELETE FROM `tb_transaksi_penjualan` WHERE ID_Transaksi_Penjualan='$ID_Transaksi_Penjualan'");
   }
    public function delete_transaki_servis($ID_Transaksi_Servis)
   {
       mysqli_query($this->koneksi, "DELETE FROM `tb_transaksi_servis` WHERE ID_Transaksi_Servis='$ID_Transaksi_Servis'");
   }
    public function delete_transaki_piutang($ID_Transaksi_Piutang)
   {
       mysqli_query($this->koneksi, "DELETE FROM `tb_transaksi_piutang` WHERE ID_Transaksi_Piutang='$ID_Transaksi_Piutang'");
   }
    public function delete_laporan($ID_Laporan)
   {
       mysqli_query($this->koneksi, "DELETE FROM `tb_laporan` WHERE ID_Laporan='$ID_Laporan'");
   }





   
// relasi tabel
public function tampil_barang_dengan_kategori()
{
    $query = "SELECT tb_barang.*, tb_kategori_barang.Nama_Kategori
              FROM tb_barang
              INNER JOIN tb_kategori_barang ON tb_barang.ID_Kategori = tb_kategori_barang.ID_Kategori";
    
    $result = mysqli_query($this->koneksi, $query);

    $hasil = array();
    while ($dat = mysqli_fetch_array($result)) {
        $hasil[] = $dat;
    }
    return $hasil;
}
public function tampil_transaksi_penjualan_dengan_pelanggan_dan_operator()
{
    $query = "SELECT tb_transaksi_penjualan.*, tb_pelanggan.Nama_Pelanggan, tb_operator_sistem.Nama
              FROM tb_transaksi_penjualan
              INNER JOIN tb_pelanggan ON tb_transaksi_penjualan.ID_Pelanggan = tb_pelanggan.ID_Pelanggan
              INNER JOIN tb_operator_sistem ON tb_transaksi_penjualan.ID_Operator = tb_operator_sistem.ID_Operator";
    
    $result = mysqli_query($this->koneksi, $query);

    $hasil = array();
    while ($dat = mysqli_fetch_array($result)) {
        $hasil[] = $dat;
    }
    return $hasil;
}
public function tampil_laporan_dengan_transaksi_pelanggan_dan_operator()
{
    $query = "SELECT tb_laporan.*, tb_transaksi_penjualan.Faktur, tb_pelanggan.Nama_Pelanggan, tb_operator_sistem.Nama
              FROM tb_laporan
              INNER JOIN tb_transaksi_penjualan ON tb_laporan.ID_Laporan = tb_transaksi_penjualan.ID_Transaksi_Penjualan
              INNER JOIN tb_pelanggan ON tb_laporan.ID_Laporan = tb_pelanggan.ID_Pelanggan
              INNER JOIN tb_operator_sistem ON tb_laporan.ID_Laporan = tb_operator_sistem.ID_Operator";
    
    $result = mysqli_query($this->koneksi, $query);

    $hasil = array();
    while ($dat = mysqli_fetch_array($result)) {
        $hasil[] = $dat;
    }
    return $hasil;
}

}

?>