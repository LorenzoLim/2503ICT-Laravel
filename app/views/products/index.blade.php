@extends('layout')
@section('title')
Products
@stop
@section('content')
<ul>
 @foreach ($products as $product)
  <li> {{ link_to_route('product.show', $product->name, array($product->id)) }}</li>
 @endforeach
</ul>
@stop