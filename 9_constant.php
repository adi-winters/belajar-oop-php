<?php

// Constant
// Constant adalah sejenis variabel tetapi nilai dari valuenya tidak dapat dirubah

// cara memanggil constant dengan define
// define('NAMA', 'Adi Ganteng');
// echo NAMA;

// cara memanggil constant dengan const
// const ANGKA = 12;
// echo ANGKA;

// perbedaan define dengan const yaitu define tidak bisa ditaruh didalam class hanya bisa dipanggil di luar class sedangkan const bisa dipanggil atau ditaruh didalam class maupun tidak
// contoh pemanggilan const di dalam class
// class Test
// {
//     const NAMA = "Adi Ariawan";
// }

// echo Test::NAMA;


// Magic Constant

// Magic Constant DIR untuk menampilkan alamat Directory file dibuat
echo __DIR__;
echo "<br>";

// Magic Constant FILE untuk menampilkan alamat File dibuat
echo __FILE__;
echo "<br>";

// Magic Constant LINE untuk menampilkan baris dimana constant dibuat
echo __LINE__;
echo "<br>";

// Magic Constant FUNCTION untuk menampilkan fungsi constant dipanggil
function Test()
{
    return __FUNCTION__;
}

echo Test();
echo "<br>";

// Magic Constant CLASS untuk menampilkan class mana yang memanggil constant
class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
echo "<br>";

// Magic Constant METHOD untuk menampilkan class dan method yang memekai constant
class Testing
{
    public $kelas = 1;

    public function Get()
    {
        return __METHOD__;
    }
}

$obj = new Testing;
echo $obj->Get();
echo "<br>";
