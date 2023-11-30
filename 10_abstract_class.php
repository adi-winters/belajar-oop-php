<?php

// Abstarct Class
// Abstarct Class adalah class yang sebagai kerangka dasar dan tidak bisa di-intansiasi dan harus menerapkan inhertitance
// yang dimana harus memiliki nama method yang sama dari abstarct class ke turunannnya

// Contoh Abstract Class
abstract class Toko
{
    private $nama, $produksi, $kadaluarsa, $bahan, $harga;
    protected $diskon;

    public function __construct($nama, $harga, $produksi, $kadaluarsa, $bahan)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->produksi = $produksi;
        $this->kadaluarsa = $kadaluarsa;
        $this->bahan = $bahan;
    }

    public function setNama($nama)
    {
        return $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function setProduksi($produksi)
    {
        return $this->produksi = $produksi;
    }

    public function getProduksi()
    {
        return $this->produksi;
    }
    public function setKadaluarsa($kadaluarsa)
    {
        return $this->kadaluarsa = $kadaluarsa;
    }

    public function getKadaluarsa()
    {
        return $this->kadaluarsa;
    }
    public function setBahan($bahan)
    {
        return $this->bahan = $bahan;
    }

    public function getBahan()
    {
        return $this->bahan;
    }

    public function dapatHarga()
    {
        return "$this->nama | " . $this->harga - ($this->harga * $this->diskon / 100);
    }

    // Fungsi Abstarct class yang harus dimiliki oleh turunannya agar bisa memanggil fungsi dari parent class abstract 
    abstract public function daftarLengkap();

    public function daftarInfo()
    {
        $str = "{$this->dapatHarga()} | {$this->produksi} | {$this->kadaluarsa} | {$this->bahan}";
        return $str;
    }
}

class Makanan extends Toko
{
    public $beratmakanan;

    public function __construct($nama, $harga, $produksi, $kadaluarsa, $bahan, $beratmakanan)
    {
        parent::__construct($nama, $harga, $produksi, $kadaluarsa, $bahan);

        $this->beratmakanan = $beratmakanan;
    }

    public function daftarLengkap()
    {
        $str = "Makanan : " . $this->daftarInfo() . " ~ {$this->beratmakanan} gram";
        return $str;
    }
}

class Minuman extends Toko
{
    public $beratminuman;

    public function __construct($nama, $harga, $produksi, $kadaluarsa, $bahan, $beratminuman)
    {
        parent::__construct($nama, $harga, $produksi, $kadaluarsa, $bahan);

        $this->beratminuman = $beratminuman;
    }

    public function daftarLengkap()
    {
        $str = "Minuman : " . $this->daftarInfo() . " ~ {$this->beratminuman} liter";
        return $str;
    }

    public function dapatDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
}

// Perubahan mencetak info lengkap produk toko agar rapih
class CetakInfoLengkapnya
{
    public $daftarProduk = [];

    public function tambahProduk(Toko $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetakInfoSelengkapnya()
    {
        $str = "DAFTAR PRODUK DI TOKO : <br>";

        foreach ($this->daftarProduk as $pt) {
            $str .= "~ {$pt->daftarLengkap()} <br>";
        }

        return $str;
    }
}

$makanan_1 = new Makanan("Gekikara", 50000, "Jepang", "2050", "Terigu", 120);
$minuman_1 = new Minuman("Pocari", 50000, "Jepang", "2026", "Isotonik", 1.5);

$cetak = new cetakInfoLengkapnya();
$cetak->tambahProduk($makanan_1);
$cetak->tambahProduk($minuman_1);
echo $cetak->cetakInfoSelengkapnya();
