<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Buku;
use App\Models\Publisher;
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

    public function create()
    {
        return view('book.create', [
            'publisher' => Publisher::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'publisher_id' => 'required',
            'nama' => 'required|max:255',
            'pengarang' => 'required|max:255',
            'harga' => 'required',
            'rilis' => 'required'
        ]);

        Buku::create($validateData);
        return redirect('/book/all')->with('success', 'Book has been added !');
    }

    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);
        return redirect('/book/all')->with('success', 'Data has been deleted !');
    }

    public function edit(Buku $buku)
    {
        return view('book.edit', [
            'publisher' => Publisher::all(),
            'buku' => $buku
        ]);
    }

    public function update(Request $request, Buku $buku)
    {
        $validateData = $request->validate([
            'publisher_id' => 'required',
            'nama' => 'required|max:255',
            'pengarang' => 'required|max:255',
            'harga' => 'required',
            'rilis' => 'required'
        ]);

        Buku::where('id', $buku->id)->update($validateData);
        return redirect('/book/all')->with('success', 'Book has been Updated !');
    }
}