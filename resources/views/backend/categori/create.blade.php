@extends('layouts.app')

@section('content')
<title>Create Categori</title>
    <div class="container">
        <form action="{{ route('categori.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="">Nama Kategori</label>
              <input type="text" name="nama_categori" id="" class="form-control" >
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('categori.index')}}" role="button">Kembali</a>

            
        </form>
    </div>
@endsection