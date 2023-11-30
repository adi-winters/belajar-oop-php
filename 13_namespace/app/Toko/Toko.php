<?php
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
