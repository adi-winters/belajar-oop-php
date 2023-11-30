<?php

// Interface
// Interface sama dengan abstract perbedaannya yaitu interface tidak boleh memiliki sebuah property hanya boleh memiliki deklarasi method saja seperti deklarasi method abstract
// Interface murni template untuk kelas turunannya

// Contoh pembuatan interface
interface infoDaftarLengkap
{
    public function daftarLengkap();
}

abstract class Toko
{
    protected $nama, $produksi, $kadaluarsa, $bahan, $harga, $diskon;

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

    abstract public function daftarInfo();
}

// Contoh pemanggilan Interface menggunakan keyword implements yang bisa digabung dengan extends(inheritance)
class Makanan extends Toko implements infoDaftarLengkap
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

    public function daftarInfo()
    {
        $str = "{$this->dapatHarga()} | {$this->produksi} | {$this->kadaluarsa} | {$this->bahan}";
        return $str;
    }
}

class Minuman extends Toko implements infoDaftarLengkap
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

    public function daftarInfo()
    {
        $str = "{$this->dapatHarga()} | {$this->produksi} | {$this->kadaluarsa} | {$this->bahan}";
        return $str;
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
