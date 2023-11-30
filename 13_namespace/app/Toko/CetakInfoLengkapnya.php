<?php
class CetakInfoLengkapnya
{
    public $daftarProduk = [];

    public function tambahProduk(Toko $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetakInfoSelengkapnya()
    {
        $str = "DAFTAR PRODUK DI TOKO : <br>";

        foreach ($this->daftarProduk as $pt) {
            $str .= "~ {$pt->daftarLengkap()} <br>";
        }

        return $str;
    }
}
