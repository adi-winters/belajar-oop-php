<?php

// Autoloading
// Autoloading adalah cara pemanggilan file php secara terpisah agar codingan tidak menumpuk, disini menggunakan spl_autoload_register yang berisi anonim function unutk mengecek dan memanggil file yang berisi class secara otomatis

// spl -> standart php library

// Contoh penggunaaan autoloading spl_autoload_register
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/Toko/' . $class . '.php';
});
