<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class BookController extends Controller
{
    public function index()
    {
        return view('book.all',[
            'bukus'=>Buku::all()
        ]);
    }

    public function show(Buku $buku)
    {
        return view('book.detail', [
            'buku'=>$buku
        ]);    
        
    }
}