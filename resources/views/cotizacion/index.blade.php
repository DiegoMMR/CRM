@extends ('layouts.app')

@section('content')

<div class="container">

{!!link_to_route('cotizacion.create', $title = 'Nueva Cotización', null, $attributes = ['class'=>'btn btn-primary'])!!}
<hr>
<table class="table">

<thead>
    <th>#</th>
    <th>CLIENTE</th>
    <th>TRABAJO</th>
    <th>DESCRIPCIÓN</th>
    <th>ACCION</th>
</thead>
<tbody>
        @foreach ($cotizacion as $cotizacion)
             <tr>
                <td>{{ $cotizacion->id }}</td>
                <td>{{ $cotizacion->nombrecomercial }}</td>
                <td>{{ $cotizacion->correo }}</td>
                <td>
                {!!link_to_route('cotizacion.edit', $title = 'Editar', $parameters = $cotizacion->id, $attributes = ['class'=>'btn btn-primary'])!!}
                {!!link_to_route('cotizacion.show', $title = 'Mostrar', $parameters = $cotizacion->id, $attributes = ['class'=>'btn btn-primary'])!!}
                </td>
            </tr> 
        @endforeach
</tbody>
  
</table>
{!! $cotizacion->render() !!}
</div>
@stop


