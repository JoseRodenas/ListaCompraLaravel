@extends('layouts.master')

@section('content')

<div class="row">

<div class="col-sm-4">

    {{-- TODO: Imagen genérica de los productos --}}
    <img src="https://picsum.photos/200/300/?random" style="height:200px"/>

</div>
<div class="col-sm-8">

    {{-- TODO: Datos del producto --}}
    <p>Nombre: {{$arrayProducto[0]}}</p>
    <p>Categoria: {{$arrayProducto[1]}}</p>
    <p> Estado : Producto actualmente comprado</p>
    <button class="btn btn-danger">Pendiente de compra</button>
    <button class="btn btn-warning"><a href="../edit/{{$id}}">Editar producto</a></button>
    <button class="btn btn-default"><a href="../">Volver al listado de productos</a></button>
</div>
</div>

@stop
