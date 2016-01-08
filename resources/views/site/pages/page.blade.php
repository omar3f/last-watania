@extends('site.template')
@section('styles')

    <link rel="icon" type="image/png" href="{!! asset($data['favicon']) !!}">

@endsection
@section('content')
    @include('site.menu.menu', compact('links'))
    @include('site.pages.includes.page-info', compact('page'))

@endsection

@section('footer')

    @include('site.footer.footer', compact('social', 'data'))
@endsection