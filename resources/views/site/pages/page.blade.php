@extends('site.template')

@section('content')
    @include('site.menu.menu', compact('links'))
    @include('site.pages.includes.page-info', compact('page'))
    @include('site.footer.footer', compact('social', 'data'))
@endsection