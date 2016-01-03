@extends('site.template')
@section('content')
    @include('site.menu.menu', compact('links'))
    @include('site.home.includes.short-desc', compact('data'))
    @include('site.home.includes.home-sections', compact('sections'))
@endsection

@section('footer')
    @include('site.footer.footer', compact('social', 'data'))
@endsection