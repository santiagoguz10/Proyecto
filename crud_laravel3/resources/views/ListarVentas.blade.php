@extends('venta')
@section('title', 'Listado de Ventas')

@section('content')

{{ Form::open(  ['route' => ['ventasDestroy', ':USER'], 'method' => 'DELETE', 'id' => 'formDelete'] ) }}
<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Codigo Venta</th>
                  <th>Cedula Clientes</th>
                  <th>Fecha </th>
                </tr>
            </thead>
            <tbody>
            
                @foreach($ventas as $ventas)
                <tr data-id="{{ $ventas->code }}">
                    <td>{{ $ventas->code }}</td>
                    <td>{{ $ventas->cc_clients }}</td>
                    <td>{{ $ventas->date }}</td>
                    <td>

                    <button type="button" class="btn btn-danger delete">Eliminar</button> &nbsp; 

                    <button type="button" class="btn btn-info edit" onclick="window.location.href='{{ route('ventas.edit', ['id' => $ventas->code ]) }}'">Editar</button>

                    
                    </td>
 
                </tr>
                @endforeach
            </tbody>
        </table>

{{ Form::close() }}

@endsection

@section('script')
<script type="text/javascript">
$(document).ready(function(){

$(".delete").on("click", function(){

if( confirm('Esta seguro de eliminar?') ){

var fila = $(this).parents('tr');
var id = fila.data('id');

var form = $("#formDelete");
var url = form.attr('action').replace(':USER', id);
var data = form.serialize();

       fila.fadeOut();
 $.post(url, data, function (result){
               
    alert(result['result'].mensaje);

            }).fail(function(){
                
         alert("No se pudo eliminar");
            fila.fadeIn();

            });

}else{

    return false;
}


});


});  
</script>
@endsection
