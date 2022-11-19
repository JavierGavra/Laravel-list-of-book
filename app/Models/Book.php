<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book{
    private static $book = [
        [
            "id" => 1,
            "nama" => "How to Mytic",
            "pengarang" => "Maulana Adityo",
            "harga" => 50000
        ],
        [
            "id" => 2,
            "nama" => "Every day is Losestreak",
            "pengarang" => "Javier Gavra",
            "harga" => 12000
        ],
        [
            "id" => 3,
            "nama" => "What is Space?",
            "pengarang" => "M. Vitto",
            "harga" => 77000
        ],
        [
            "id" => 4,
            "nama" => "This is expensive book",
            "pengarang" => "Khoiru rizal",
            "harga" => 10400000
        ],
        [
            "id" => 5,
            "nama" => "All nuclear code in the worls",
            "pengarang" => "rasyid fawwaz",
            "harga" => 177013
        ]
    ];
    
    public static function all()
    {
        return collect(self::$book);
    }

    public static function find($id)
    {
        $book_data = static::all();
        return $book_data->firstWhere('id', $id);
    }
}
