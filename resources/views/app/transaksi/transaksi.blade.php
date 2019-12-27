@extends('layout.main')

@section('content')
	<div class="page-content">
		<header class="page-content-header">
			<div class="container-fluid">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Daftar Transaksi</h3>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="card-block">
			<a href="{{ url('transaksi/tambah') }}">
				<button type="button" class="btn btn-inline btn-primary" style="float: right;">
					<i class="font-icon glyphicon glyphicon-plus"></i>
					Tambah Transaksi
				</button>
			</a>
			<table class="display table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th width="1%" data-sortable="false"><div>No</div></th>
						<th width="5%"><div>Nama Pembeli</div></th>
						<th width="5%"><div>Nama Barang</div></th>
						<th align="center" width="1%" data-sortable="false"><div>Action</div></th>
					</tr>
				</thead>
				@foreach($transaksi as $key => $val)
					<tr>
						<td align="left">
							<div>{{$key+1}}</div>
						</td>
						<td align="left">
							{{$val->nama_pembeli}}
						</td>
						<td align="left">
							{{$val->nama_barang}}
						</td>
						<td align="center">
							<div class="btn-group btn-group-sm">
								<a href="/transaksi/hapus/{{ $val->id_transaksi }}" class="btn btn-sm btn-inline btn-danger" title="Mode NER">
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