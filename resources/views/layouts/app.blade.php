<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
<a class="navbar-brand" href="#">Tugas Besar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="{{url('item')}}">Data<span class="sr-only">(current)</span></a>
		</li>
		<!--<li class="nav-item active">
			<a class="nav-link" href="{{url('type')}}">Type<span class="sr-only">(current)</span></a>
		</li>
		-->
		<li class="nav-item active">
			<a class="nav-link" href="{{url('transaction')}}">Transaction<span class="sr-only">(current)</span></a>
		</li>
</nav>
<div class="container">
	@yield('content')
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>