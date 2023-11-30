<?php

use app\Service\User;

require_once 'app/init.php';


// $makanan_1 = new Makanan("Gekikara", 50000, "Jepang", "2050", "Terigu", 120);
// $minuman_1 = new Minuman("Pocari", 50000, "Jepang", "2026", "Isotonik", 1.5);

// $cetak = new cetakInfoLengkapnya();
// $cetak->tambahProduk($makanan_1);
// $cetak->tambahProduk($minuman_1);
// echo $cetak->cetakInfoSelengkapnya();

// fungsi dibawah untuk memanggil namsepace dan memberikan nama alias agar php tidak bingung karena nama file atau classnya sama
use app\Service\User as Serviceuser;
use app\Toko\User as Tokouser;

new Serviceuser();
echo "<br>";
new Tokouser();
