@extends('site.template')
@section('styles')

    <link rel="icon" type="image/png" href="{!! asset($data['favicon']) !!}">

@endsection
@section('content')
    @include('site.menu.menu', compact('links'))

@endsection
@section('products')
    @include('site.products.includes.product-info', compact('product'))
@endsection
@section('footer')
    @include('site.footer.footer', compact('social', 'data'))
@endsection