<?php

// contoh pemanggilan file yang berisi class secara otomatis di folder menggunakan autoloading tetapi yang dibawah ini menggunakan fungsi memecah string agar bisa mengakses namespace secara singkat
// contoh namespace app\service\user.php menjadi user.php saja yang diambil atau dipanggil
spl_autoload_register(function ($class) {
    // dibawah fungsi memecah string menjadi array
    $class = explode('\\', $class);
    // dibawah ini fungsi mengambil element terakhir array
    $class = end($class);
    require_once __DIR__ . '/Toko/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Service/' . $class . '.php';
});
