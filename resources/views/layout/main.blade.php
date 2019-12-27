<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/separate/pages/widgets.min.css') }}">

<title>Kazee Hackaton</title>
</head>

<body class="with-side-menu">
	<header class="site-header">
		<div class="container-fluid">
			<a href="#" class="site-logo">
				<img class="hidden-md-down" src="{{ asset('assets/img/logo.png') }}">
			</a>
		</div>
	</header>
	<nav class="side-menu">
		<ul class="side-menu-list">
			<li class="grey">
				<a href="{{ url('overview') }}">
					<span>
						<i class="font-icon glyphicon glyphicon-dashboard"></i>
						<span class="lbl">Overview</span>
					</span>
				</a>
			</li>
			<li class="grey">
				<a href="{{ url('barang') }}">
					<span>
						<i class="font-icon glyphicon glyphicon-folder-open"></i>
						<span class="lbl">Daftar Barang</span>
					</span>
				</a>
			</li>
			<li class="grey">
				<a href="{{ url('pembeli') }}">
					<span>
						<i class="font-icon font-icon-user"></i>
						<span class="lbl">Daftar Pembeli</span>
					</span>
				</a>
			</li>
			<li class="grey">
				<a href="{{ url('transaksi') }}">
					<span>
						<i class="font-icon glyphicon glyphicon-list-alt"></i>
						<span class="lbl">Daftar Transaksi</span>
					</span>
				</a>
			</li>
		</ul>
	</nav>
	
	@yield('content')
	@yield('script')
</body>
</html>