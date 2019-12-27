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
	    	<form method="post" action="/pembeli/update">

			{{ csrf_field() }}

			@foreach($pembeli as $key => $val)
				<div class="form-group">
					<label>Nama Pembeli</label>
					<input type="text" name="nama_pembeli" readonly class="form-control" placeholder="Nama Pembeli" value="{{$val->nama_pembeli}}" style="width: 40%;">

					@if($errors->has('nama_pembeli'))
						<div class="text-danger">
							{{ $errors->first('nama_pembeli')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label>Nomor Telepon</label>
					<input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" value="{{$val->telepon}}" style="width: 40%;">

					@if($errors->has('telepon'))
						<div class="text-danger">
							{{ $errors->first('telepon')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label>Lokasi Pembeli</label>
					<input name="alamat" class="form-control" placeholder="Lokasi Pembeli" value="{{$val->alamat}}" style="width: 40%;">

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
	    	@endforeach
	    </div>
	</div>
@endsection