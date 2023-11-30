<?php

class Toko
{
    public $nama, $harga, $produksi, $kadaluarsa, $bahan;

    // Constructor
    // Sebuh fungsi spesial/khusus yang dijalankan otomatis setiap instance dilakukan dari sebuah kelas
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
        return "$this->nama, $this->harga";
    }
}

$makanan_1 = new Toko("Gekikara", 50000, "Jepang", "2050", "Terigu");
$minuman_1 = new Toko("Pocari", 10000, "Jepang", "2026", "Isotonik");

echo "Makanan : " . $makanan_1->dapatHarga();
echo "<br>";
echo "Minuman : " . $minuman_1->dapatHarga();
