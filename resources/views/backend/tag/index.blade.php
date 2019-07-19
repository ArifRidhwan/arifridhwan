@extends('layouts.app')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Tag</h1>
			</div>
		</div><!--/.row-->
		
		<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-dark">
                    <div class="card-body">
                        <center>
                            <a href="{{ route('tag.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Tag</th>
                                        <th scope="col">Slug</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    @php $no = 1; @endphp
                                    @foreach($tag as $data)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->slug }}</td>
                                        
                                        <td>
                                            <a href="{{ route('tag.edit',$data->id) }}" 
                                            class="btn btn-sm btn-success">Edit Data</a>
                                        </td>
                                        <td>
                                            <form action="{{ route('tag.destroy',$data->id) }}" method="post">
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