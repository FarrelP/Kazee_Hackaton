@extends('layout.main')

@section('content')
	<div class="page-content">
		<header class="page-content-header">
			<div class="container-fluid">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Tambah Daftar Barang</h3>
						</div>
					</div>
				</div>
			</div>
		</header>

	    <div class="card-body">
			<form method="post" action="/barang/store">

			{{ csrf_field() }}

			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang" style="width: 40%;">

				@if($errors->has('nama_barang'))
					<div class="text-danger">
						{{ $errors->first('nama_barang')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label>Harga Barang</label>
				<textarea name="harga_barang" class="form-control" placeholder="Harga Barang" style="width: 40%;"></textarea>

				@if($errors->has('harga_barang'))
					<div class="text-danger">
						{{ $errors->first('harga_barang')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<input type="submit" class="btn btn-success" value="Simpan">
			</div>

			</form>
	    </div>
	</div>
@endsection