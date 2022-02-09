<!DOCTYPE html>
<html>
	<head>
		<title></title>
</head>
<body>
<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<!-- NAVBAR -->
<!--
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
<a class="navbar-brand" href="#">Tugas Besar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item active">
			<a class="nav-link" href="{{url('item')}}">Data<span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item active">
			<a class="nav-link" href="{{url('type')}}">Type<span class="sr-only">(current)</span></a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="{{url('transaction')}}">Transaction<span class="sr-only"></span></a>
		</li>

		<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Data
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{url('item')}}">Item</a>
          <a class="dropdown-item" href="{{url('type')}}">Type</a>
		  <a class="dropdown-item" href="{{url('size')}}">Size</a>
		  <a class="dropdown-item" href="{{url('unit')}}">Unit</a>
		  <a class="dropdown-item" href="{{url('weight')}}">Weight</a>
        </div>
</nav>-->
<div class="sidebar-container">
  <div class="sidebar-logo">
  Tugas Besar
  </div>
  <ul class="sidebar-navigation">
    
	<li>
      <a href="{{url('transaction/create')}}">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Transaction
      </a>
    </li>
    <li class="header">Data</li>
	<li>
      <a href="{{url('transaction')}}">
        <i class="fa fa-users" aria-hidden="true"></i> Transaction
      </a>
    </li>
    <li>
      <a href="{{url('item')}}">
        <i class="fa fa-users" aria-hidden="true"></i> Item
      </a>
    </li>
	
    <li>
      <a href="{{url('type')}}">
        <i class="fa fa-cog" aria-hidden="true"></i> Type
      </a>
    </li>
    <li>
      <a href="{{url('size')}}">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Size
      </a>
    </li>
	<li>
      <a href="{{url('unit')}}">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Unit
      </a>
    </li>
	<li>
      <a href="{{url('weight')}}">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Weight
      </a>
    </li>
	
  </ul>
</div>

<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
	  <div class="container">
			@yield('content')
		</div>
    </div>
  </div>
</div>



<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>