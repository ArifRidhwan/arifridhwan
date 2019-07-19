@extends('layouts.app')

@section('content')
<title>Create Categori</title>
    <div class="container">
        <form action="{{ route('categori.update', $cat->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">
            @csrf
            <div class="form-group">
              <label for="">Nama Kategori</label>
              <input type="text" name="nama_categori" id="" class="form-control" value="{{ $cat->nama_categori }}" >
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('categori.index')}}" role="button">Kembali</a>

            
        </form>
    </div>
@endsection