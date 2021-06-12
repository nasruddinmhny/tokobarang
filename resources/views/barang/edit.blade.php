@extends('layouts.app')
@section('content')

<form action="/barang/{{$barang->id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
        <input type="text" name="namabarang" class="form-control" value="{{$barang->namabarang}}">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">JENIS</label>
        <input type="text" name="jenis" class="form-control" value="{{$barang->jenis}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">HARGA</label>
        <input type="text" name="harga" class="form-control" value="{{$barang->harga}}">
    </div>
    <button type="submit" class="btn btn-primary">UPDATE</button>
</form>
@endsection
