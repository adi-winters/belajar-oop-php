<?php

// Overriding
// Overriding fungsinya menimpa fungsi yang sama di class parent ke kelas child atau artinya menjalankan method dengan nama yang sama di class parent ke kelas child tanpa rekursiv (berulang-ulang)


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
        return "$this->nama | $this->harga";
    }

    public function daftarLengkap()
    {
        $str = "{$this->dapatHarga()} | {$this->produksi} | {$this->kadaluarsa} | {$this->bahan}";
        return $str;
    }
}

// ini contoh kelas child
class Makanan extends Toko
{
    public $beratmakanan;

    public function __construct($nama, $harga, $produksi, $kadaluarsa, $bahan, $beratmakanan)
    {
        // Contoh pemakaian overriding
        parent::__construct($nama, $harga, $produksi, $kadaluarsa, $bahan);

        $this->beratmakanan = $beratmakanan;
    }

    public function daftarLengkap()
    {
        // Contoh pemakaian overriding 
        $str = "Makanan : " . parent::daftarLengkap() . " ~ {$this->beratmakanan} gram";
        return $str;
    }
}

// ini juga kelas child
class Minuman extends Toko
{
    public $beratminuman;

    public function __construct($nama, $harga, $produksi, $kadaluarsa, $bahan, $beratminuman)
    {
        // Contoh pemakaian overriding
        parent::__construct($nama, $harga, $produksi, $kadaluarsa, $bahan);

        $this->beratminuman = $beratminuman;
    }

    public function daftarLengkap()
    {
        // Contoh pemakaian overriding
        $str = "Minuman : " . parent::daftarLengkap() . " ~ {$this->beratminuman} liter";
        return $str;
    }
}

$makanan_1 = new Makanan("Gekikara", 50000, "Jepang", "2050", "Terigu", 120);
$minuman_1 = new Minuman("Pocari", 10000, "Jepang", "2026", "Isotonik", 1.5);

echo $makanan_1->daftarLengkap();
echo "<br>";
echo $minuman_1->daftarLengkap();
