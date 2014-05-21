@extends('layout')
@section('content')

  {{Form::model($product, array('method' => 'PUT', 'route' => array('product.update', $product->id)));}}
  {{ Form::open(array('action' => 'ProductController@store')) }}
  {{ Form::label('name', 'Product Name: ') }}
  {{ Form::text('name') }}
  {{ $errors->first('name') }}
  {{ Form::label('price', 'Price: ') }}
  {{ Form::text('price') }}
  {{ $errors->first('price') }}
  {{ Form::submit('Edit') }}
  {{ Form::close() }}


@stop