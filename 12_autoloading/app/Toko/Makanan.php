<?php
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
