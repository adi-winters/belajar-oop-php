<?php

// Inheritancce
// Pewarisan yang dimana setiap class child bisa mengambil dan menggunakan property dan method dari class parent


// contoh kelas parent dibawah ini
class Toko
{
    public $nama, $harga, $produksi, $kadaluarsa, $bahan, $beratminuman, $beratmakanan;

    public function __construct($nama, $harga, $produksi, $kadaluarsa, $bahan, $beratmakanan, $beratminuman)
    {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->produksi = $produksi;
        $this->kadaluarsa = $kadaluarsa;
        $this->bahan = $bahan;
        $this->beratmakanan = $beratmakanan;
        $this->beratminuman = $beratminuman;
    }

    public function dapatHarga()
    {
        return "$this->nama, $this->harga";
    }
}

// ini contoh kelas child
class Makanan extends Toko
{
    public function daftarLengkap()
    {
        $str = "Makanan : {$this->dapatHarga()} | {$this->produksi} | {$this->kadaluarsa} | {$this->bahan} ~{$this->beratmakanan} gram";
        return $str;
    }
}

// ini juga kelas child
class Minuman extends Toko
{
    public function daftarLengkap()
    {
        $str = "Minuman : {$this->dapatHarga()} | {$this->produksi} | {$this->kadaluarsa} | {$this->bahan} ~ {$this->beratminuman} liter";
        return $str;
    }
}




$makanan_1 = new Makanan("Gekikara", 50000, "Jepang", "2050", "Terigu", 120, 0);
$minuman_1 = new Minuman("Pocari", 10000, "Jepang", "2026", "Isotonik", 0, 1.5);

echo "Makanan : " . $makanan_1->daftarLengkap();
echo "<br>";
echo "Minuman : " . $minuman_1->daftarLengkap();
