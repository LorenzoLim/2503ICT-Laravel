@extends('layout')
@section('content')
<h1>Product</h1>
<p>Name: {{{ $product->name }}}</p>
<p>Price: {{{ $product->price }}}</p>
<p>{{ link_to_route('product.edit', 'Edit', array($product->id)) }} </p>
@stop