@extends('layouts.app')
@section('content')
<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Artikel</h1>
			</div>
		</div><!--/.row-->
		
		<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-dark">
                    <div class="card-body">
                        <center>
                            <a href="{{ route('artikel.create') }}" 
                            class="btn btn-primary">Tambah</a>
                        </center>
                        <br>
                            <div class="table-responsive">
                                <table class="table table-striped text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Judul Artikel</th>
                                        <th scope="col">Foto</th>
										<th scope="col">Slug</th>
                                        <th scope="col">Konten</th>
                                        <th scope="col">Kategori</th>
										<th scope="col">Tag</th>
                                        <th colspan="2" class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                        <tbody class="data-artikel"></tbody>
                                            </form>
                                        </td>
                                    </tr>
                                </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>              
</div>
@endsection