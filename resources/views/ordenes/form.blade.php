<div class="row">
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Cantidad : </strong>
      {!! Form::text('cantidad', null, ['placeholder'=>'2','class'=>'form-control']) !!}
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Plato : </strong>
      <?php $platos = DB::table('menu')->select('id','plato')->get(); ?>

      <select class="form-control" name="idPlato">
        @foreach($platos as $plato)
          <option value="{{$plato->id}}">{{$plato->plato}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-xs-12">
    <div class="form-group">
      <strong>No. Factura : </strong>
      <?php $facturas = DB::select('CALL verFacturas()'); ?>

      <select class="form-control" name="idFactura">
        @foreach($facturas as $factura)
          <option value="{{$factura->NoFactura}}">#{{$factura->NoFactura}} &nbsp;&nbsp;&nbsp;&nbsp; De: {{$factura->nombre}} {{$factura->apellido}}</option>
        @endforeach
      </select>
    </div>
  </div>
   
  
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('ordenes.index') }}">Regresar</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Aceptar</button>
  </div>
</div>