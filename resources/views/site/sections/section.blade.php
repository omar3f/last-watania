@extends('site.template')
@section('styles')

    <link rel="icon" type="image/png" href="{!! asset($data['favicon']) !!}">

@endsection
@section('content')
    @include('site.header.header', compact('social', 'data'))
    @include('site.menu.menu', compact('links'))

@endsection

@section('products')
    @include('site.sections.includes.section-info', compact('section', 'child_sections'))

@endsection
@section('footer')

    @include('site.footer.footer', compact('social', 'data'))
@endsection

