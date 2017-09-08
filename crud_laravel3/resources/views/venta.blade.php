<!DOCTYPE html>
<html>
<head>
	<title>Mi Página</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Venta</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
   
      <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ventas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('ventas.index') }}">Listar</a></li>
            <li><a href="{{ route('ventas.create') }}">Crear</a></li>
            
            <li role="separator" class="divider"></li>
            <li><a href="#">Yo que sé algo menos.</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




@if ($errors->any())
 <div class="alert alert-danger">
  <strong>Error: </strong> {{ implode('', $errors->all(':message')) }}
</div>
@endif
 
@if (Session::has('message'))
  <div class="alert alert-success">
  <strong>Exito:</strong> {{ Session::get('message') }}
</div>
@endif


<div class="container">

<div class="panel panel-primary">

<div class="panel-heading"> 
<h3 class="panel-title">              @yield('title')    </h3> 
</div>
  <div class="panel-body">
    


            @yield('content')



  </div>
  <div class="panel-footer">Hecho por: El espiritu santo.)</div>
</div>

</div>


<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('script')
</body>
</html>