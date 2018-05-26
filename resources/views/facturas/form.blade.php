<div class="row">
  
  <div class="col-xs-12">
    <div class="form-group">
      <strong>Codigo Cliente :</strong>
      <?php
         $clientes = DB::table('cliente')->select('id as idCliente','nombre','apellido')->get(); 
      ?>
      <select class="form-control" name="idCliente">
        @foreach($clientes as $cliente)
          <option value="{{$cliente->idCliente}}">{{$cliente->nombre}} {{$cliente->apellido}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="col-xs-12">
    <a class="btn btn-xs btn-success" href="{{ route('facturas.index') }}">Regresar</a>
    <button type="submit" class="btn btn-xs btn-primary" name="button">Aceptar</button>
  </div>
</div>
