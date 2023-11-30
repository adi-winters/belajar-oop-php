<?php

// Visibility
// Visibility berfungsi untuk mengatur akses dari property dan method
// Visibility ada 3 yaitu
// 1. Public -> property dan method dapat digunakan dimana saja, bahkan diluar class dan berbahaya karena bisa mengubah value yang tidak diinginkan
// 2. Protected -> property dan method hanya dapat digunakan didalam kelas beserta turunnanya yaitu class parent dan class child
// 3. Private -> property dan method yang hanya dapat digunakan didalam kelas tertentu saja anggap hanya bisa digunakan di class parent saja tidak bisa di class child

class Toko
{
    public $nama, $produksi, $kadaluarsa, $bahan;
    protected $diskon;
    private $harga;

    public function __construct($nama, $harga, $produksi, $kadaluarsa, $bahan)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->produksi = $produksi;
        $this->kadaluarsa = $kadaluarsa;
        $this->bahan = $bahan;
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

$minuman_1->dapatDiskon(50);
echo $minuman_1->dapatHarga();
