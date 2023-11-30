<?php

// Namespace
// Namespace berfungsi untuk mengelompokkan program file ke package tersendiri dan agar bisa menggunakan nama class yang sama tanpa adanya error

// contoh pembuatan namespace
// aturan pembuatan namespace yaitu vendor\namespace\Subnamespace
// pembuatan namespace menggunakan backslash "\" sama seperti mengakses tempat directory

namespace app\Toko;

class User
{

    public function __construct()
    {
        echo "ini adalah class " . __CLASS__;
    }
}
