@extends('layouts.app')

@section('content')

<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Kategori</h1>
			</div>
		</div>

        <div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card border-dark">
                    <div class="card-body">
                    <center>
                        <a href="{{route('categori.create')}}"
                        class="btn btn-primary">Tambah</a>
                    </center>
                    <div class="table-responsive">
                                <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Slug</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                   </tr>
                </thead>
                @php $no = 1; @endphp
                @foreach($cat as $data)
                <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_categori}}</td>
                <td>{{ $data->slug}}</td>
                 
                 <td>
                 <a href ="{{ route('categori.edit',$data->id)}} "
                 class="btn btn-sm btn-success">Edit Data</a>
                 </td>
                        <td>
                                 <form action="{{ route('categori.destroy',$data->id) }}" method="post">
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
<script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
           var alamat="http://arifridhwan.herokuapp.com/api/category";
           $.ajax({
               url: alamat,
               method:"GET",
               dataType: "json",
               success: function(berhasil){
                   console.log(berhasil)
                   $.each(berhasil.data,function (key, val){
                       $('.data-categori').append(
                           `
                           <tr>
                                <td>${val.nama}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-id="${val.id}" data-nama="${val-nama}" >Edit</button>
                                    <button type="button" class="btn btn-danger" data-id="${val.id}">Hapus</button>
                                    </td>
                            </tr>
                            `
                       )
                   })
               }
           });
           $('.simpan-categori').on('click', function (e){
               e.preventDefault();
               var nama = $('.nama').val();
           })
        })
    </script>
    @endsection
