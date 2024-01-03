 problem soving
memperbaiki struktur database
update database 
program code db_servislaptop

User ( tb_user )
ID_User (INT, Primary Key)
Username (VARCHAR(30)
Password (VARCHAR(30)
Role (VARCHAR(20)

Master Data:
Tabel Kategori Barang (tb_kategori_barang):
ID_Kategori (INT, Primary Key)
Nama_Kategori (VARCHAR(50))

Tabel Barang (tb_barang):
ID_Barang (INT, Primary Key)
Nama_Barang (VARCHAR(100))
Id_Kategori (INT, Foreign Key ke tb_kategori_barang)
Harga_Modal (DECIMAL(10, 2))
Harga_Jual (DECIMAL(10, 2))
Stok (INT)

Tabel Data Barang Servis (tb_data_barang_servis):
ID_Service (INT, Primary Key)
Serial_Barang (VARCHAR(100))
Tipe_Barang (VARCHAR(100))

Tabel Pelanggan (tb_pelanggan):
ID_Pelanggan (INT, Primary Key)
Nama_Pelanggan (VARCHAR(100))
Alamat (VARCHAR(255))
Kontak (VARCHAR(20))

Tabel Teknisi (tb_teknisi):
ID_Teknisi (INT, Primary Key)
Nama_Teknisi (VARCHAR(100))
Alamat (VARCHAR(255))
no_telpon (VARCHAR(20))

Tabel Operator Sistem (tb_operator_sistem):
ID_Operator (INT, Primary Key)
Nama (VARCHAR(100))
Username (VARCHAR(50))
Level (VARCHAR(20))
engkap (DATETIME)

Tabel Status Servis (tb_status_servis):
ID_Status (INT, Primary Key)
Status (VARCHAR(100)) // Menyimpan status dari servis (contohnya: selesai, pending, cancel)

Transaksi:
Tabel Transaksi Penjualan (tb_transaksi_penjualan):
ID_Transaksi_Penjualan (INT, Primary Key)
Faktur (VARCHAR(100))
Tanggal (DATE)
ID_Pelanggan (INT, Foreign Key ke tb_pelanggan)
ID_Operator (INT, Foreign Key ke tb_operator_sistem)

Tabel Transaksi Servis (tb_transaksi_servis):
ID_Transaksi_Servis (INT, Primary Key)
Faktur (VARCHAR(100))
Tanggal (DATE)
ID_Pelanggan (INT, Foreign Key ke tb_pelanggan)
ID_Operator (INT, Foreign Key ke tb_operator_sistem)
ID_Status (INT, Foreign Key ke tb_status_servis)

Tabel Transaksi Piutang (tb_transaksi_piutang):
ID_Transaksi_Piutang (INT, Primary Key)
Faktur (VARCHAR(100))
Tanggal (DATE)
ID_Operator (INT, Foreign Key ke tb_operator_sistem)
Grand_Total (DECIMAL(10, 2))
Bayar (DECIMAL(10, 2))
Kembali (DECIMAL(10, 2))

Tabel Laporan:
Tabel Laporan (tb_laporan):             
ID_Laporan (INT, Primary Key)
Tanggal (DATE)
ID_Transaksi (INT, Foreign Key ke Tabel Transaksi)
ID_Pelanggan (INT, Foreign Key ke tb_pelanggan)
ID_Operator (INT, Foreign Key ke tb_operator_sistem)
Total_Transaksi (DECIMAL(10, 2))


