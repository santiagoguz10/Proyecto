@extends('app')
@section('title', 'Crear Cliente')

@section('content')

{{ Form::open(['route' => ['clientes.store'], 'method'=>'POST', 'id'=>'formStore' ]) }}

<div class="form-group">
<label for="cc">CC:</label>
{{ Form::text('cc', '', array('class' => 'form-control', 'id'=>'cc', 'placeholder'=>'Ingresa tu Cedula') ) }}
         <!-- name -->
</div>

<div class="form-group">
<label for="name">Nombre:</label>
{{ Form::text('name', '', array('class' => 'form-control', 'id'=>'name', 'placeholder'=>'Ingresa tu Nombre') ) }}
</div>

<div class="form-group">
<label for="last_name">Apellido:</label>
{{ Form::text('last_name', '', array('class' => 'form-control', 'id'=>'last_name', 'placeholder'=>'Ingresa tu Apellido') ) }}
</div>

<div class="form-group">
<label for="phone">Teléfono:</label>
{{ Form::text('phone', '', array('class' => 'form-control', 'id'=>'phone', 'placeholder'=>'Ingresa tu Teléfono') ) }}
</div>


{{ Form::submit('Crear Cliente',  array('class' => 'btn btn-success') ) }} 

{{ Form::button('Volver',  array('class' => 'btn btn-warning', 'id'=> "volver") ) }} 


{{  Form::close()  }}

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){


$('#volver').on('click', function(){
window.location.replace("{{  URL::to('clientes') }}");
//window.location.href = "{{  URL::to('clientes') }}";
});

});  
</script>
@endsection
