@extends ('layouts.app')

@section('content')

<div class="container">

{!!link_to_route('cliente.create', $title = 'Registrar Nuevo', null, $attributes = ['class'=>'btn btn-primary'])!!}
<hr>
<table class="table">

<thead>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>CORREO</th>
    <th>ACCION</th>
</thead>
<tbody>
        @foreach ($clientes as $cliente)
             <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombrecomercial }}</td>
                <td>{{ $cliente->correo }}</td>
                <td>
                {!!link_to_route('cliente.edit', $title = 'Editar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary'])!!}
                {!!link_to_route('cliente.show', $title = 'Mostrar', $parameters = $cliente->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
            </tr> 
        @endforeach
</tbody>
  
</table>
{!! $clientes->render() !!}
</div>
@stop


