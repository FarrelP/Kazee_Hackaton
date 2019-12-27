@extends('layout.main')

@section('content')
	<div class="page-content">
		<header class="page-content-header">
			<div class="container-fluid">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Tambah Daftar Transaksi</h3>
						</div>
					</div>
				</div>
			</div>
		</header>

	    <div class="card-body">
	    	<form method="post" action="/transaksi/store">

			{{ csrf_field() }}

			<div class="form-group">
				<label>Nama Pembeli</label>
				  <select class="form-control" name="id_pembeli" style="width: 40%;">
				    @foreach($pembeli as $key => $val)
				      <option value="{{$val->id_pembeli}}">{{$val->nama_pembeli}}</option>
				    @endforeach
				  </select>

				@if($errors->has('id_pembeli'))
					<div class="text-danger">
						{{ $errors->first('id_pembeli')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label>Nama Barang</label>
				<select class="form-control" name="id_barang" style="width: 40%;">
				    @foreach($barang as $key => $val)
				      <option value="{{$val->id_barang}}">{{$val->nama_barang}}</option>
				    @endforeach
				  </select>

				@if($errors->has('id_barang'))
					<div class="text-danger">
						{{ $errors->first('id_barang')}}
					</div>
				@endif
			</div>

			<div class="form-group">
				<label>Tanggal Beli</label>
				<input type="date" name="tanggal" style="width: 40%;">

				@if($errors->has('tanggal'))
					<div class="text-danger">
						{{ $errors->first('tanggal')}}
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