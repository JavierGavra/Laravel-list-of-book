@extends('layouts.main')
@section('content')

<div class="container">
    <h3 class="text-center mt-3">Publisher List</h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">email</th>
                                    <th scope="col">almat</th>
                                    <th scope="col">Buku</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($publishers as $publisher)
                            <tr>
                                <td>{{ $publisher->id }}</td>
                                <td>{{ $publisher->nama }}</td>
                                <td >{{ $publisher->email }}</td>
                                <td >{{ $publisher->alamat }}</td>
                                <td >
                                    @foreach ($publisher->book as $book)
                                        <ul>
                                            <li>{{ $book->nama }}</li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td>
                                    <a type="button" class="btn btn-primary"  href="/publisher/detail/{{ $publisher->id }}" >Detail</a>
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