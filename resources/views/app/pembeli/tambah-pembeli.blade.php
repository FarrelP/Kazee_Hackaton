@extends('layout.main')

@section('content')
	<div class="page-content">
		<header class="page-content-header">
			<div class="container-fluid">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Tambah Daftar Pembeli</h3>
						</div>
					</div>
				</div>
			</div>
		</header>

	    <div class="card-body">
	    	<form method="post" action="/pembeli/store">

			{{ csrf_field() }}

			<div class="form-group">
				<label>Nama Pembeli</label>
				<input type="text" name="nama_pembeli" class="form-control" placeholder="Nama Pembeli" style="width: 40%;">

				@if($errors->has('nama_pembeli'))
					<div class="text-danger">
						{{ $errors->first('nama_pembeli')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label>Nomor Telepon</label>
				<input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" style="width: 40%;">

				@if($errors->has('telepon'))
					<div class="text-danger">
						{{ $errors->first('telepon')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label>Lokasi Pembeli</label>
				<textarea name="alamat" class="form-control" placeholder="Lokasi Pembeli" style="width: 40%;"></textarea>

				@if($errors->has('alamat'))
					<div class="text-danger">
						{{ $errors->first('alamat')}}
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