@extends ('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron">
        <h2>{{ $cliente->nombrecomercial }}</h2>
        <p>
            <strong>Razon Social:</strong> {{ $cliente->razonsocial }}<br>
            <strong>Dirección:</strong> {{ $cliente->direccion }}<br>
            <strong>RFC:</strong> {{ $cliente->rfc }}<br>
            <strong>Teléfono:</strong> {{ $cliente->telefono }}<br>
            <strong>Movil:</strong> {{ $cliente->movil }}<br>
            <strong>Correo:</strong> {{ $cliente->correo }}<br>
            <strong>Nombre Contacto:</strong> {{ $cliente->nombrecontacto }}
        </p>
    <div>
        {!! link_to(URL::previous(), 'Regresar', ['class' => 'btn btn-default']) !!}
    </div>
    </div>

</div>
@stop


