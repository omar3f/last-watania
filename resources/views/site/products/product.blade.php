@extends('site.template')

@section('content')
    @include('site.menu.menu', compact('links'))

@endsection
@section('products')
    @include('site.products.includes.product-info', compact('product'))
@endsection
@section('footer')
    @include('site.footer.footer', compact('social', 'data'))

@endsection