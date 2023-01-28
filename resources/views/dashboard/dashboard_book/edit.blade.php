@extends('dashboard.layouts.main')
@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">Edit Buku</h2>
                    <form action="/dashboard/book/update/ {{ $buku->id }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" required name="nama" id="nama" placeholder="Masukkan nama : " value="{{ old('nama', $buku->nama) }}">
                        </div><br>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan pengarang : " required value="{{ old('pengarang', $buku->pengarang) }}">
                        </div><br>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <select class="form-select" name="publisher_id" id="">
                                @foreach ($publisher as $publish)
                                @if (old('publisher_id', $buku->publisher_id == $publish->id))
                                    <option name="publisher_id" value="{{ $publish->id }}" selected>{{ $publish->nama }}</option>
                                @else
                                    <option name="publisher_id" value="{{ $publish->id }}">{{ $publish->nama }}</option>
                                @endif
                                @endforeach
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan harga : " required value="{{ old('pengarang', $buku->harga) }}">
                        </div><br>
                        <div class="form-group">
                            <label for="">Tanggal rilis</label>
                            <input type="date" class="form-control" name="rilis" id="rilis" placeholder="Tanggal rilis : " required value="{{ old('pengarang', $buku->rilis) }}">
                        </div><br>
                        <button type="submit" class="btn btn-primary float-end" name="submit">Update Data</button>
                    </form>          
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main>
@endsection