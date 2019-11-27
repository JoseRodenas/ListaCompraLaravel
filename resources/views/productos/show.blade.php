@extends('layouts.master')

@section('content')

<div class="row">

<div class="col-sm-4">

    {{-- TODO: Imagen genérica de los productos --}}
    <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

</div>
<div class="col-sm-8">

    {{-- TODO: Datos del producto --}}
    <p>Nombre: {{$arrayProducto->nombre}}</p>
    <p>Categoria: {{$arrayProducto->categoria}}</p>
    <p><strong>Estado: </strong>
        @if($arrayProducto->pendiente)
        Producto actualmente comprado.
        @else
            Producto pendiente.
        @endif
    </p>
    @if($arrayProducto->pendiente)
        <a class="btn btn-danger" href="#">Comprado</a>
    @else
        <a class="btn btn-primary" href="#">Comprar</a>
    @endif
    <button class="btn btn-warning"><a href="../edit/{{$id}}">Editar producto</a></button>
    <button class="btn btn-default"><a href="../">Volver al listado de productos</a></button>
</div>
</div>

@stop
