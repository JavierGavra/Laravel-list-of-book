@extends('dashboard.layouts.main')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <div class="container">
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
    </div>
</div>
</main>
@endsection