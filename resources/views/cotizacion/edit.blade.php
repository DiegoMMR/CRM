@extends('layouts.app')
@section('content')
<div class="container">
	{!! Form::open(['route'=>['cliente.update',$cliente], 'method'=>'PUT']) !!}
			<div class="form-group">
                {!! Form::label('nombrecomercial','Nombre Comercial') !!}
                {!! Form::text('nombrecomercial',$cliente->nombrecomercial,['class'=>'form-control','placeholder'=>'Nombre o Marca','required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('razonsocial','Razon Social') !!}
                {!! Form::text('razonsocial',$cliente->razonsocial,['class'=>'form-control','placeholder'=>'Para facturación','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('direccion','Direccion') !!}
                {!! Form::text('direccion',$cliente->direccion,['class'=>'form-control','placeholder'=>'calle, colonia, numero, estado, municipio','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('rfc','RFC') !!}
                {!! Form::text('rfc',$cliente->rfc,['class'=>'form-control','placeholder'=>'Para facturación','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('telefono','Telefono') !!}
                {!! Form::text('telefono',$cliente->telefono,['class'=>'form-control','placeholder'=>'Local','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('movil','Nuemro Celular') !!}
                {!! Form::text('movil',$cliente->movil,['class'=>'form-control','placeholder'=>'044 55','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('correo','Correo') !!}
                {!! Form::text('correo',$cliente->correo,['class'=>'form-control','placeholder'=>'Correo electronico','required']) !!}
            </div>
                        <div class="form-group">
                {!! Form::label('nombrecontacto','Nombre de Contacto') !!}
                {!! Form::text('nombrecontacto',$cliente->nombrecontacto,['class'=>'form-control','placeholder'=>'Enlace con el cliente','required']) !!}
            </div>
			<div class="form-group">
				{!!Form::submit('Guardar Cambios',['class'=>'btn btn-primary'])!!}
                {!! link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) !!}
                {!!Form::close()!!}
			</div>
            <div class="form-group">
                {!!Form::open(['route'=> ['cliente.destroy',$cliente->id],'method'=>'DELETE'])!!}
                    {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
                {!!Form::close()!!}
            </div>
    </div>
@stop