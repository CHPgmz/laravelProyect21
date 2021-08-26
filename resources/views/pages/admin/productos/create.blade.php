@extends('layouts.app')

@section('content')
<div class="container">
   <h4 class="mb-3">Registrar Producto</h4>
   <form class="row g-3" method="POST" action="{{route('productos.store')}}">
      <input id="formMethod" name="_method" type="hidden" value="POST">
      <div class="col-md-6">
        <label for="categoria" class="form-label">Categoria</label>
        <input type="text" class="form-control" id="categoria" name="categoria">
      </div>
      <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
      <div class="col-md-6">
         <label for="descripcion" class="form-label">Descripcion</label>
         <input type="text" class="form-control" id="descripcion" name="descripcion">
       </div>
       <div class="col-md-6">
         <label for="marca" class="form-label">Marca</label>
         <input type="text" class="form-control" id="marca" name="marca">
       </div>
       <div class="col-md-6">
         <label for="cantidad" class="form-label">Cantidad</label>
         <input type="number" class="form-control" id="cantidad" name="cantidad" min="0">
       </div>
       <div class="col-md-6">
         <label for="precio" class="form-label">Precio</label>
         <input type="number" class="form-control" id="precio" name="precio" min="0">
       </div>
      
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar</button>
      </div>
    </form>
</div>
    
@endsection