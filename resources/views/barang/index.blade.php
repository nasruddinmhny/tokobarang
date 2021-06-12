@extends('layouts.app')
@section('content')

<a href="/barang/create" class="btn btn-primary btn sm">TAMBAH</a>
<table class="table table-striped table-hover">
    <thead>
        <th>NAMA BARANG</th>
        <th>JENIS</th>
        <th>HARGA</th>
        <th>AKSI</th>
    </thead>

    <tbody>

        @foreach ($barang as $brg)
            <tr>
                <td>{{$brg->namabarang}}</td>
                <td>{{$brg->jenis}}</td>
                <td>{{$brg->harga}}</td>
                <td>
                    <a href="/barang/{{$brg->id}}/edit" class="btn btn-warning btn-sm">EDIT</a>
                    <form action="/barang/{{$brg->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="btn btn-danger btn-sm">
                    </form>

                </td>
            </tr>
        @endforeach

    </tbody>
</table>
@endsection

