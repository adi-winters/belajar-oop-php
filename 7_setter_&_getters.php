<?php

// Setter & Getter
// Setter & Getter berfungsi sebagai merubah dan mendapatkan perubahan dari pemanggilan property dan method yang berkaitan erat dengan visibility

class Toko
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

    // ini contoh pembuatan fungsi setter yang dimana visibility nama itu private dan tidak bisa dirubah diluar kelas Toko maka dibuatkan fungsi setter ini agar bisa diubah atau di set diluar class
    public function setNama($nama)
    {
        return $this->nama = $nama;
    }
    // ini contoh pembuatan fungsi getter yang dimana visibility nama itu private dan tidak bisa dilihat diluar kelas Toko maka dibuatkan fungsi getter ini agar bisa dilihat atau di get diluar class
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


    public function daftarLengkap()
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
        $str = "Makanan : " . parent::daftarLengkap() . " ~ {$this->beratmakanan} gram";
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
        $str = "Minuman : " . parent::daftarLengkap() . " ~ {$this->beratminuman} liter";
        return $str;
    }

    public function dapatDiskon($diskon)
    {
        return $this->diskon = $diskon;
    }
}

$makanan_1 = new Makanan("Gekikara", 50000, "Jepang", "2050", "Terigu", 120);
$minuman_1 = new Minuman("Pocari", 50000, "Jepang", "2026", "Isotonik", 1.5);

echo $makanan_1->daftarLengkap();
echo "<br>";
echo $minuman_1->daftarLengkap();
echo "<hr>";

$minuman_1->dapatDiskon(10);
echo $minuman_1->dapatHarga();
echo "<hr>";

// ini contoh setter
$makanan_1->setProduksi("Jerman");
// ini contoh getter
echo $makanan_1->getProduksi();
