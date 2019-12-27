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
	    	<form method="post" action="/barang/update">

			{{ csrf_field() }}

			@foreach($barang as $key => $val)
				<div class="form-group">
					<label>Nama Barang</label>
					<input type="text" name="nama_barang" readonly class="form-control" placeholder="Nama Barang" value="{{$val->nama_barang}}" style="width: 40%;">

					@if($errors->has('nama_barang'))
						<div class="text-danger">
							{{ $errors->first('nama_barang')}}
						</div>
					@endif
				</div>

				<div class="form-group">
					<label>Harga Barang</label>
					<input name="harga_barang" class="form-control" placeholder="Harga Barang" value="{{$val->harga_barang}}" style="width: 40%;">

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
	    	@endforeach
	    </div>
	</div>
@endsection