<?php

// Static Keyword
// Static Keyword berfungsi untuk mengakses property dan method dalam konteks class tanpa instance


// Contoh class yang meggunakan static
// class Angka
// {
//pembuatan static dalam property 
//     public static $angka = 1;
// pembuatan static dalam method atau function 
//     public static function Halo()
//     {
// self ini sama seperti this mengambil property untuk method tetapi this harus class yang harus diinstace sedangkan self bisa dinstance maupun tidak
//         return "Ini adalah halo ke " . self::$angka++  . " kali.";
//     }
// }

// contoh pemanggilan static property
// echo Angka::$angka;
// echo "<br>";
// contoh pemanggilan static method
// echo Angka::Halo();
// echo "<br>";
// echo Angka::Halo();
// echo "<br>";
// echo Angka::Halo();


// class angka
// {
//     public $angka = 1;

//     public function jelasAngka()
//     {
//         return "ini adalah angka ke " . $this->angka++;
//     }
// }

// kalau memanggil class tanpa menggunakan static maka nilai object akan mereset kembali kesemula jika di instance ulang 
// $obj = new angka;
// echo $obj->jelasAngka();
// echo "<br>";
// echo $obj->jelasAngka();
// echo "<br>";
// echo $obj->jelasAngka();
// echo "<hr>";

// $obj2 = new angka;
// echo $obj2->jelasAngka();
// echo "<br>";
// echo $obj2->jelasAngka();
// echo "<br>";
// echo $obj2->jelasAngka();
// echo "<br>";


class angka
{
    public $angka = 1;

    public function jelasAngka()
    {
        return "ini adalah angka ke " . $this->angka++;
    }
}

// kalau memanggil class menggunakan static maka nilai object akan tetap walaupun di instance berulang kali
$obj = new angka;
echo $obj->jelasAngka();
echo "<br>";
echo $obj->jelasAngka();
echo "<br>";
echo $obj->jelasAngka();
echo "<hr>";

$obj2 = new angka;
echo $obj2->jelasAngka();
echo "<br>";
echo $obj2->jelasAngka();
echo "<br>";
echo $obj2->jelasAngka();
echo "<br>";
