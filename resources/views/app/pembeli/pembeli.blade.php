@extends('layout.main')

@section('content')
	<div class="page-content">
		<header class="page-content-header">
			<div class="container-fluid">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Daftar Pembeli</h3>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="card-block">
			<a href="{{ url('pembeli/tambah') }}">
				<button type="button" class="btn btn-inline btn-primary" style="float: right;">
					<i class="font-icon glyphicon glyphicon-plus"></i>
					Tambah Pembeli
				</button>
			</a>
			<table class="display table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="1%" data-sortable="false"><div>No</div></th>
						<th width="5%"><div>Nama Pembeli</div></th>
						<th width="5%"><div>Nomor Telepon</div></th>
						<th width="5%"><div>Lokasi Pembeli</div></th>
						<th align="center" width="7%" data-sortable="false"><div>Action</div></th>
					</tr>
				</thead>
				@foreach($pembeli as $key => $val)
					<tr>
						<td align="left">
							<div>{{$key+1}}</div>
						</td>
						<td align="left">
							{{$val->nama_pembeli}}
						</td>
						<td align="left">
							{{$val->telepon}}
						</td>
						<td align="left">
							{{$val->alamat}}
						</td>
						<td align="center">
							<div class="btn-group btn-group-sm">
								<a href="/pembeli/edit/{{ $val->id_pembeli }}" class="btn btn-sm btn-inline btn-info" title="Mode SNA">
									Update
								</a>
								<a href="/pembeli/hapus/{{ $val->id_pembeli }}" class="btn btn-sm btn-inline btn-danger" title="Mode NER">
									Hapus
								</a>
							</div>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
@stop