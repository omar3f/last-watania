@extends('site.template')
@section('content')

    @foreach($products as $product)
        @include('site.products.includes.product-info', compact('products'))
    @endforeach

@endsection