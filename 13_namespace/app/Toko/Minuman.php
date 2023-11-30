<?php
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
