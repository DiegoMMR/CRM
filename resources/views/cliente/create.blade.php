@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route'=>'cliente.store', 'method'=>'POST']) !!}
            <div class="form-group">
                {!! Form::label('nombrecomercial','Nombre Comercial') !!}
                {!! Form::text('nombrecomercial',null,['class'=>'form-control','placeholder'=>'Nombre o Marca','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('razonsocial','Razon Social') !!}
                {!! Form::text('razonsocial',null,['class'=>'form-control','placeholder'=>'Para facturación','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('direccion','Direccion') !!}
                {!! Form::text('direccion',null,['class'=>'form-control','placeholder'=>'calle, colonia, numero, estado, municipio','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('rfc','RFC') !!}
                {!! Form::text('rfc',null,['class'=>'form-control','placeholder'=>'Para facturación','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('telefono','Telefono') !!}
                {!! Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Local','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('movil','Nuemro Celular') !!}
                {!! Form::text('movil',null,['class'=>'form-control','placeholder'=>'044 55','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('correo','Correo') !!}
                {!! Form::text('correo',null,['class'=>'form-control','placeholder'=>'Correo electronico','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('nombrecontacto','Nombre de Contacto') !!}
                {!! Form::text('nombrecontacto',null,['class'=>'form-control','placeholder'=>'Enlace con el cliente','required']) !!}
            </div>
            <div class="form-group">
                {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                {!! link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) !!}
            </div>          
    {!! Form::close() !!}

</div>
@endsection