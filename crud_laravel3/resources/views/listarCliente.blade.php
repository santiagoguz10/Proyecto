@extends('app')
@section('title', 'Listado de clientes')

@section('content')

{{ Form::open(  ['route' => ['clientesDestroy', ':USER'], 'method' => 'DELETE', 'id' => 'formDelete'] ) }}
<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                  <th>Documento</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Telefono</th>  
                   <th>Acciones</th>   
                </tr>
            </thead>
            <tbody>
            
                @foreach($clientes as $cliente)
                <tr data-id="{{ $cliente->cc }}">
                    <td>{{ $cliente->cc }}</td>
                    <td>{{ $cliente->name }}</td>
                    <td>{{ $cliente->last_name }}</td>
                    <td>{{ $cliente->phone }}</td>
                    <td>

                    <button type="button" class="btn btn-danger delete">Eliminar</button> &nbsp; 

                    <button type="button" class="btn btn-info edit" onclick="window.location.href='{{ route('clientes.edit', ['id' => $cliente->cc ]) }}'">Editar</button>

                    
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
