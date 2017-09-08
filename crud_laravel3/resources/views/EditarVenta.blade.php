@extends('venta')
@section('title', 'Editar Ventas')

@section('content')

{{ Form::open(['route' => ['ventas.update'], 'method'=>'POST', 'id'=>'formStore' ]) }}

<div class="form-group">
<label for="code">Codigo Factura:</label>
{{ Form::text('code', '', array('class' => 'form-control', 'id'=>'code', 'placeholder'=>'Ingrese el codigo de la factura') ) }}
</div>

<div class="form-group">
<label for="cc_clients">Cedula Cliente:</label>
{{ Form::text('cc_clients', '', array('class' => 'form-control', 'id'=>'cc_clients', 'placeholder'=>'Ingrese numero de cedula cliente') ) }}
</div>

<div class="form-group">
<label for="date">Fecha:</label>
{{ Form::date('date', '', array('class' => 'form-control', 'id'=>'date', 'placeholder'=>'Ingrese la fecha') ) }}
</div>



{{ Form::submit('Àctualizar Ventas',  array('class' => 'btn btn-success') ) }} 

{{ Form::button('Volver',  array('class' => 'btn btn-warning', 'id'=> "volver") ) }} 


{{  Form::close()  }}

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){


$('#volver').on('click', function(){
window.location.replace("{{  URL::to('ventas') }}");
//window.location.href = "{{  URL::to('ventas') }}";
});

});  
</script>
@endsection
