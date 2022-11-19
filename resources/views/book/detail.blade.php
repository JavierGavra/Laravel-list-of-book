@extends('layouts.main')
@section('content')
    {{-- <h1>{{ $buku['nama'] }}</h1> --}}
    <form>
        <div class="d-grid gap-2">
            <button class="btn btn-dark btn-sm" type="button" onclick="history.back();">Back</button>
        </div>
        <br>
        <div class="mb-3">
            <label >Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $buku->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label >Publisher</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $buku->publisher->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label >Pengarang</label>
            <input type="text" class="form-control" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}" readonly>
        </div>
        <div class="mb-3">
            <label >Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" value="{{ $buku->harga }}" readonly>
        </div>
        
        {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
    </form>
@endsection