<?php

namespace App\Http\Controllers\dashboard;

use App\Models\Book;
use App\Models\Buku;
use App\Models\Publisher;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardBookController extends Controller
{
    public function index()
    {
        return view('dashboard.book.all',[
            'bukus'=>DB::table('bukus')->paginate(5)
        ]);
    }

    public function show(Buku $buku)
    {
        return view('dashboard.book.detail', [
            'buku'=>$buku
        ]);    
        
    }

    public function create()
    {
        return view('dashboard.book.create', [
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
        return redirect('/dashboard/book/all')->with('success', 'Book has been added !');
    }

    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);
        return redirect('/dashboard/book/all')->with('success', 'Data has been deleted !');
    }

    public function edit(Buku $buku)
    {
        return view('dashboard.book.edit', [
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
        return redirect('/dashboard/book/all')->with('success', 'Book has been Updated !');
    }
}
