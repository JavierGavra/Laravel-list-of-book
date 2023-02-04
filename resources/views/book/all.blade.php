@extends('layouts.main')
@section('content')
<div class="container">
    <h3 class="text-center mt-3">Book List</h3>

        @if (session()->has('success'))
            <br>
            <div class="alert alert-success col-lg-12" role="alert">
                {{ session ('success')}}
            </div>
        @endif

        <br><br>
        {{-- <div class="d-grid gap-2">
            <a class="btn btn-primary" type="button" href="/book/create">Create</a>
        </div> --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">nama</th>
                                    <th scope="col">pengarang</th>
                                    <th scope="col">harga</th>
                                    <th scope="col">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            @foreach ($bukus as $buku)
                            <tr>
                                <td>{{ $no++; }}</td>
                                <td>{{ $buku->nama }}</td>
                                <td >{{ $buku->pengarang }}</td>
                                <td >{{ $buku->harga }}</td>
                                <td>
                                    <a type="button" class="btn btn-outline-primary"  href="/book/detail/{{ $buku->id }}" >Detail</a>
                                    {{-- <a type="button" class="btn btn-outline-warning"  href="/book/edit/{{ $buku->id }}" >Edit</a>
                                    <form action="/book/delete/{{ $buku->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Hapus</button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection