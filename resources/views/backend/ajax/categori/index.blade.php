<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Ajax</li>
				<li class="active">Kategori</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Kategori</h1>
			</div>
		</div><!--/.row-->

		<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div id="body-kategori"></div>
                        <input class="form-control nama_categori" type="text" name="nama_categori">
                    <p></p>
                    <button type="button" class="btn btn-primary tombol-simpan">Tambah</button>
                <p></p>
                    <table class="table dataTable">
                        <thead>
                            <tr>
								<th>Nama</th>
								<th>Slug</th>
                                <th colspan="2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="data-kategori">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>