@extends('site.template')

@section('content')
    @include('site.products.includes.product-info', compact('product'))
@endsection