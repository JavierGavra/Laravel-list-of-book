@extends('layouts.main')
@section('content')
<div class="container">
    <h3 class="text-center mt-3">Book List</h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">pengarang</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bukus as $buku)
                            <tr>
                                <td>{{ $buku->id }}</td>
                                <td>{{ $buku->nama }}</td>
                                <td >{{ $buku->pengarang }}</td>
                                <td >{{ $buku->harga }}</td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary"  href="/book/detail/{{ $buku->id }}" >Detail</a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection