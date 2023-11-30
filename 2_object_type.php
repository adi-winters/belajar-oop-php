<?php

class Toko
{
    public $nama, $harga, $produksi, $kadaluarsa, $bahan;

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
        return "$this->nama, Rp.{$this->harga}";
    }
}

// Object Type
// Mengambil object sebagai parameter pembuatan fungsi baru
class CetakInfoToko
{
    // Fungsi dibawah untuk mengambil parameter dari class Toko yang sudah di instance saja bukan yanng lain 
    public function cetak(Toko $item)
    {
        $prt = "{$item->dapatHarga()} | {$item->produksi} | {$item->kadaluarsa} | {$item->bahan}";
        return $prt;
    }
}

$makanan_1 = new Toko("Gekikara", 50000, "Jepang", "2050", "Terigu");
$minuman_1 = new Toko("Pocari", 10000, "Jepang", "2026", "Isotonik");

echo "Makanan : " . $makanan_1->dapatHarga();
echo "<br>";
echo "Minuman : " . $minuman_1->dapatHarga();
echo "<br>";

// Contoh pemanggilan Object Type
$info = new CetakInfoToko();
echo "Info Lengkap Makanan : " . $info->cetak($makanan_1);
