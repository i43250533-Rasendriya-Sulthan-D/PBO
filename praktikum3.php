<?php

class Produk {
    public static $jumlahProduk = 0;
 
    public $namaProduk;
    public $harga;

    public function __construct($nama, $harga) {
        $this->namaProduk = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }

    public function tampilkanDetail() {
        echo "Nama Produk: " . $this->namaProduk . " | Harga: Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
    }
}

class Transaksi {
    final public function prosesTransaksi($produk) {
        echo "Memproses transaksi untuk: <strong>" . $produk->namaProduk . "</strong>... Berhasil!<br>";
    }
}

$p1 = new Produk("Laptop ASUS", 15000000);
$p1->tambahProduk();

$p2 = new Produk("Mouse Logitech", 250000);
$p2->tambahProduk();

$p3 = new Produk("Keyboard Mechanical", 750000);
$p3->tambahProduk();

echo "<h3>Daftar Produk:</h3>";
$p1->tampilkanDetail();
$p2->tampilkanDetail();
$p3->tampilkanDetail();

echo "<hr>";

echo "<strong>Total Produk yang terdaftar: </strong>" . Produk::$jumlahProduk . "<br>";

echo "<hr>";

echo "<h3>Simulasi Transaksi:</h3>";
$transaksi = new Transaksi();
$transaksi->prosesTransaksi($p1);
$transaksi->prosesTransaksi($p3);

?>