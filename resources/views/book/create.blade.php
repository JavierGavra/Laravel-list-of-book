@extends('layouts.main')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center">Tambah Buku</h2>
                    <form action="/book/add" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" required name="nama" id="nama" placeholder="Masukkan nama : " value="{{ old('nama') }}">
                        </div><br>
                        <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" id="pengarang" placeholder="Masukkan pengarang : " required value="{{ old('pengarang') }}">
                        </div><br>
                        <div class="form-group">
                            <label for="publisher">Publisher</label>
                            <select class="form-select" name="publisher_id" id="">
                                @foreach ($publisher as $publish)
                                    <option name="publisher_id" value="{{ $publish->id }}">{{ $publish->nama }}</option>
                                @endforeach
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" class="form-control" name="harga" id="harga" placeholder="Masukkan harga : " required>
                        </div><br>
                        <div class="form-group">
                            <label for="">Tanggal rilis</label>
                            <input type="date" class="form-control" name="rilis" id="rilis" placeholder="Tanggal rilis : " required>
                        </div><br>
                        <button type="submit" class="btn btn-primary float-end" name="submit">Simpan Data</button>
                    </form>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection