@extends('layouts.app')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Artikel</h1>
			</div>
		</div>

        <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-dark">
                    <div class="card-body">
                        <center>
                            <a href="{{ route('artikel.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Judul Artikel</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Categori</th>                                    
                                        <th scope="col">Tag</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($artikel as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->user->name }}</td>
                                        <td>{{ $data->judul }}</td>
                                        <td>{{ $data->slug }}</td>
                                        <td><img  src="{{ asset('assets/img/artikel/'.$data->foto)}}" width="100"></td>
                                        <td>{{ $data->categori->nama_categori}}</td>
                                        <td>
                                            <ol>
                                                @foreach($data->tag as $isi)
                                                    <li>{{ $isi->nama }}</li>
                                                @endforeach
                                            </ol>
                                        </td>
                                        <td>
                                            <a href="{{ route('artikel.edit',$data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('artikel.destroy',$data->id) }}" method="post">
                                            {{csrf_field()}}
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Hapus Data
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>              
</div>
@endsection