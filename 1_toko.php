<?php

class toko
{
    // property
    public $nama = "nama",
        $harga = 0,
        $produksi = "produksi",
        $kadaluarsa = "kadaluarsa",
        $bahan = "bahan";
    // menulis property bisa dibawah ini
    // public $nama, $harga, $produksi, $kadaluarsa, $bahan;

    // Method
    public function dapatHarga()
    {
        // memanggil isi dari property
        return "$this->nama, $this->harga";
    }
}

$makanan_1 = new toko;
// menimpa string
// $makanan_1->nama = "Gekikara";

$makanan_1->nama = "Gekikara";
$makanan_1->harga = 50000;
$makanan_1->produksi = "Japan";
$makanan_1->kadaluarsa = "10-02-2050";
$makanan_1->bahan = "Tepung Terigu";

// memanggil method
// echo $makanan_1->dapatHarga();

$minuman_1 = new Toko;
$minuman_1->nama = "Pocari";
$minuman_1->harga = 10000;
$minuman_1->produksi = "Japan";
$minuman_1->kadaluarsa = "10-02-2022";
$minuman_1->bahan = "Isotonik";

echo "Makanan : " . $makanan_1->dapatHarga();
echo "<br>";
echo "Minuman : " . $minuman_1->dapatHarga();
