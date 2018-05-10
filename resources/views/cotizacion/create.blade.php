@extends('layouts.app')

@section('content')
<div class="container">
    {!! Form::open(['route'=>'cotizacion.store', 'method'=>'POST']) !!}
        <div class="row">
            <div class="form-group col-xs-6">
                {!!Form::label('cliente_id','Cliente:')!!}
                {!!Form::select('cliente_id',$clientes,['class'=>'form-control'])!!}
            </div>
            {{-- Trabajo --}}
            <div class="form-group col-xs-6">
                {!!Form::label('trabajo_id','Traabajo:')!!}
                {!!Form::select('trabajo_id',$trabajos,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('descripcionp ','Descripción:') !!}
                {!! Form::text('descripcionp ',null,['class'=>'form-control','placeholder'=>'Describa el trabajo a realizar','required']) !!}
            </div>   
        </div>    
        <div class="row">
            {{-- Dimensiones --}}
            <div class="form-group col-xs-3">
                {!! Form::label('base_ex','Base Extendidad') !!}
                {!! Form::text('base_ex',null,['class'=>'form-control','placeholder'=>'centimetros','required']) !!}
            </div>
            <div class="form-group col-xs-3">
                {!! Form::label('altura_ex','Altura Extendida') !!}
                {!! Form::text('altura_ex',null,['class'=>'form-control','placeholder'=>'centimetros','required']) !!}
            </div>
            <div class="form-group col-xs-3">
                {!! Form::label('base_fin','Base Final') !!}
                {!! Form::text('base_fin',null,['class'=>'form-control','placeholder'=>'centimetros','required']) !!}
            </div>
            <div class="form-group col-xs-3">
                {!! Form::label('altura_fin','Altura Final') !!}
                {!! Form::text('altura_fin',null,['class'=>'form-control','placeholder'=>'centimetros','required']) !!}
            </div>
        </div>
            {{-- Aqui inician las cantidades --}}
            <div class="row">
                <div class="form-group col-xs-2">
                {!! Form::label('cant1','Cantidades') !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant1',null,['class'=>'form-control','placeholder'=>'Cant 1','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant2',null,['class'=>'form-control','placeholder'=>'Cant 2','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant3',null,['class'=>'form-control','placeholder'=>'Cant 3','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant4',null,['class'=>'form-control','placeholder'=>'Cant 4','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant5',null,['class'=>'form-control','placeholder'=>'Cant 5','required']) !!}
                </div>
                <div class="form-group col-xs-2  col-xs-offset-2">
                    {!! Form::text('cant6',null,['class'=>'form-control','placeholder'=>'Cant 6','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant7',null,['class'=>'form-control','placeholder'=>'Cant 7','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant8',null,['class'=>'form-control','placeholder'=>'Cant 8','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant9',null,['class'=>'form-control','placeholder'=>'Cant 9','required']) !!}
                </div>
                <div class="form-group col-xs-2">
                    {!! Form::text('cant10',null,['class'=>'form-control','placeholder'=>'Cant 10','required']) !!}
                </div>
            </div>
            {{-- Papel --}}
            <div class="row">
                <div class="form-group col-xs-4">
                    {!!Form::label('pa1','Papel 1:')!!}
                    {!!Form::select('pa1',$papeles,['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-4">
                    {!!Form::label('pa2','Papel 2:')!!}
                    {!!Form::select('pa2',$papeles,['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-4">
                    {!!Form::label('pa3','Papel 3:')!!}
                    {!!Form::select('pa3',$papeles,['class'=>'form-control'])!!}
                </div>
            </div>
            {{-- Gramaje --}}
            <div class="row">
                <div class="form-group col-xs-4">
                    {!!Form::label('gr1','Gramaje 1:')!!}
                    {!!Form::select('gr1',[''=> 'Seleccione un gramaje','1'=>'20mm','2'=>'30mm'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-4">
                    {!!Form::label('gr2','Gramaje 2:')!!}
                    {!!Form::select('gr2',[''=> 'Seleccione un gramaje','1'=>'20mm','2'=>'30mm'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-4">
                    {!!Form::label('gr3','Gramaje 3:')!!}
                    {!!Form::select('gr3',[''=> 'Seleccione un gramaje','1'=>'20mm','2'=>'30mm'],['class'=>'form-control'])!!}
                </div>
            </div>
            {{-- Tintas --}}
            <div class="row">
                <div class="form-group col-xs-3">
                    {!!Form::label('fr1','Frente 1:')!!}
                    {!!Form::select('fr1',[''=>' ','1'=>'1','2'=>'2','3'=>'3','4'=>'4'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-3">
                    {!!Form::label('vu1','Vuelta 1:')!!}
                    {!!Form::select('vu1',['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-3">
                    {!!Form::label('fr2','Frente 2:')!!}
                    {!!Form::select('fr2',[''=>' ','1'=>'1','2'=>'2','3'=>'3','4'=>'4'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-3">
                    {!!Form::label('vu2','Vuelta 2:')!!}
                    {!!Form::select('vu2',['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-3">
                    {!!Form::label('fr3','Frente 3:')!!}
                    {!!Form::select('fr3',[''=>' ','1'=>'1','2'=>'2','3'=>'3','4'=>'4'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-3">
                    {!!Form::label('vu3','Vuelta 3:')!!}
                    {!!Form::select('vu3',['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-3">
                    {!!Form::label('fr4','Frente 4:')!!}
                    {!!Form::select('fr4',[''=>' ','1'=>'1','2'=>'2','3'=>'3','4'=>'4'],['class'=>'form-control'])!!}
                </div>
                <div class="form-group col-xs-3">
                    {!!Form::label('vu4','Vuelta 4:')!!}
                    {!!Form::select('vu4',['1'=>'0','2'=>'1','3'=>'2','4'=>'3','5'=>'4'],['class'=>'form-control'])!!}
                </div>
            </div>
            {{-- Barniz --}}
            <div class="row">
                <div class="form-group col-xs-2">
                    {!!Form::label('barsel1r1','Maquina')!!}
                    {{ Form::radio('barsel1r1', '1') }}
                    {!!Form::label('barsel1r1','Plasta')!!}
                    {{ Form::radio('barsel1r1', '0') }}
                </div>
                <div class="form-group col-xs-2">
                    {!!Form::label('barsel2r1','Mate')!!}
                    {{ Form::radio('barsel2r1', '1') }}
                    {!!Form::label('barsel2r1','Brillante')!!}
                    {{ Form::radio('barsel2r1', '0') }}
                </div>
                <div class="form-group col-xs-3">
                    {{ Form::checkbox('tags[]', 1) }}
                    {{ Form::label(' Frente') }}
                    {{ Form::checkbox('tags[]', 2) }}
                    {{ Form::label(' Vuelta') }}
                </div>
                <div class="form-group col-xs-3">
                    {{ Form::checkbox('tags[]', 3) }}
                    {{ Form::label(' UV Registro Brillante') }}
                </div>
                <div class="form-group col-xs-2">
                    {{ Form::checkbox('tags[]', 4) }}
                    {{ Form::label(' Frente') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' Vuelta') }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-2">
                    {!!Form::label('barsel1r1','Maquina')!!}
                    {{ Form::radio('barsel1r1', '1') }}
                    {!!Form::label('barsel1r1','Plasta')!!}
                    {{ Form::radio('barsel1r1', '0') }}
                </div>
                <div class="form-group col-xs-2">
                    {!!Form::label('barsel2r1','Mate')!!}
                    {{ Form::radio('barsel2r1', '1') }}
                    {!!Form::label('barsel2r1','Brillante')!!}
                    {{ Form::radio('barsel2r1', '0') }}
                </div>
                <div class="form-group col-xs-3">
                    {{ Form::checkbox('tags[]', 1) }}
                    {{ Form::label(' Frente') }}
                    {{ Form::checkbox('tags[]', 2) }}
                    {{ Form::label(' Vuelta') }}
                </div>
                <div class="form-group col-xs-3">
                    {{ Form::checkbox('tags[]', 3) }}
                    {{ Form::label(' UV Registro Brillante') }}
                </div>
                <div class="form-group col-xs-2">
                    {{ Form::checkbox('tags[]', 4) }}
                    {{ Form::label(' Frente') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' Vuelta') }}
                </div>
            </div>
            {{-- Laminado Plastico --}}
            <div class="row">
                <div class="form-group col-xs-8">
                    {!!Form::label('barsel1r1','Plastificado')!!}
                    {{ Form::radio('barsel1r1', '1') }}
                    {!!Form::label('barsel2r1','Texturizado')!!}
                    {{ Form::radio('barsel2r1', '1') }}
                    {!!Form::label('barsel2r1','Termico')!!}
                    {{ Form::radio('barsel2r1', '0') }}
                    {!!Form::label('barsel1r1','Metalizado')!!}
                    {{ Form::radio('barsel1r1', '1') }}
                    {!!Form::label('barsel2r1','Mate')!!}
                    {{ Form::radio('barsel2r1', '1') }}
                    {!!Form::label('barsel2r1','Brillante')!!}
                    {{ Form::radio('barsel2r1', '0') }}
                </div>
                <div class="form-group col-xs-4">
                    {{ Form::checkbox('tags[]', 4) }}
                    {{ Form::label(' Frente') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' Vuelta') }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-8">
                    {!!Form::label('barsel1r1','Plastificado')!!}
                    {{ Form::radio('barsel1r1', '1') }}
                    {!!Form::label('barsel2r1','Texturizado')!!}
                    {{ Form::radio('barsel2r1', '1') }}
                    {!!Form::label('barsel2r1','Termico')!!}
                    {{ Form::radio('barsel2r1', '0') }}
                    {!!Form::label('barsel1r1','Metalizado')!!}
                    {{ Form::radio('barsel1r1', '1') }}
                    {!!Form::label('barsel2r1','Mate')!!}
                    {{ Form::radio('barsel2r1', '1') }}
                    {!!Form::label('barsel2r1','Brillante')!!}
                    {{ Form::radio('barsel2r1', '0') }}
                </div>
                <div class="form-group col-xs-4">
                    {{ Form::checkbox('tags[]', 4) }}
                    {{ Form::label(' Frente') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' Vuelta') }}
                </div>
            </div>
            {{-- Acabado --}}
            <div class="row">
                <div class="form-group col-xs-12">
                    {{ Form::checkbox('tags[]', 4) }}
                    {{ Form::label(' Corte y doblez') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' Corte') }}
                    {{ Form::checkbox('tags[]', 4) }}
                    {{ Form::label(' Montado') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' Grabado') }}
                    {{ Form::checkbox('tags[]', 4) }}
                    {{ Form::label(' Foliado') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' 1') }}
                    {{ Form::checkbox('tags[]', 5) }}
                    {{ Form::label(' 2') }}
                </div>
            </div>
            <div class="row">
                <div class="form-group col-xs-4">
                    {!! Form::label('acabadoe ','Acabado Especial:') !!}
                    {!! Form::text('acabadoe ',null,['class'=>'form-control','placeholder'=>'','required']) !!}
                </div>
                <div class="form-group col-xs-4">
                    {!! Form::label('costo ','Costo:') !!}
                    {!! Form::text('costo ',null,['class'=>'form-control','placeholder'=>'','required']) !!}
                </div>
                <div class="form-group col-xs-4">
                    {{ Form::checkbox('pleca', 1) }}
                    {{ Form::label(' Pleca') }}
                </div> 
            </div>
            <div class="form-group">
                {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                {!! link_to(URL::previous(), 'Cancel', ['class' => 'btn btn-default']) !!}
            </div>          
    {!! Form::close() !!}

</div>
@endsection


