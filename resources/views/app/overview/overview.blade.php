@extends('layout.main')

@section('content')
<div class="page-content">
	<header class="page-content-header">
		<div class="container-fluid">
			<div class="tbl">
				<div class="tbl-row">
					<div class="tbl-cell">
						<h3>Dashboard Kazee Shop</h3>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="row">
		<div class="col-xs-4">
			<section class="widget widget-simple-sm-fill orange">
				<div class="widget-simple-sm-icon">
					<i class="font-icon glyphicon glyphicon-folder-open"></i>
				</div>
				@foreach ($jumlah_barang as $key => $val)
					<span>Jumlah Barang</span>
					<div class="widget-simple-sm-fill-caption">{{$val->jumlah}} Barang</div>
				@endforeach
			</section>
		</div>
		<div class="col-xs-4">
			<section class="widget widget-simple-sm-fill">
				<div class="widget-simple-sm-icon">
					<i class="font-icon font-icon-users-two"></i>
				</div>
				@foreach ($jumlah_pembeli as $key => $val)
					<span>Jumlah Pembeli</span>
					<div class="widget-simple-sm-fill-caption">{{$val->jumlah}} Orang</div>
				@endforeach
			</section>
		</div>
		<div class="col-xs-4">
			<section class="widget widget-simple-sm-fill green">
				<div class="widget-simple-sm-icon">
					<i class="font-icon glyphicon glyphicon-list-alt"></i>
				</div>
				@foreach ($jumlah_transaksi as $key => $val)
					<span>Jumlah Transaksi</span>
					<div class="widget-simple-sm-fill-caption">{{$val->jumlah}} Transaksi</div>
				@endforeach
			</section>
		</div>
	</div>
	<div class="container-fluid">
		<section class="card">
			<header class="card-header">
				Block Graph Penjualan
			</header>
			<div class="card-block">
				<div id="graph"></div>
			</div>
		</section>
	</div>
</div>
@endsection

@section('script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">
	Highcharts.chart('graph', {
	    chart: {
	        type: 'column'
	    },
	    title: {
	        text: ''
	    },
	    subtitle: {
	        text: ''
	    },
	    xAxis: {
	        categories: [
	            'Jan',
	            'Feb',
	            'Dec'
	        ],
	        crosshair: true
	    },
	    yAxis: {
	        min: 0,
	        title: {
	            text: 'Rainfall (mm)'
	        }
	    },
	    tooltip: {
	        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
	        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
	            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
	        footerFormat: '</table>',
	        shared: true,
	        useHTML: true
	    },
	    plotOptions: {
	        column: {
	            pointPadding: 0.1,
	            borderWidth: 0
	        }
	    },
	    series: [{
	        name: 'Tokyo',
	        data: [49.9, 71.5, 106.4]

	    }, {
	        name: 'New York',
	        data: [83.6, 78.8, 98.5]

	    }, {
	        name: 'London',
	        data: [48.9, 38.8, 39.3]

	    }, {
	        name: 'Berlin',
	        data: [42.4, 33.2, 34.5]

	    }]
	});
</script>
@endsection