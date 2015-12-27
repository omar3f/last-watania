@extends('site.template')
@section('content')

    @foreach($sections as $section)
        @include('site.sections.includes.section-info', compact('sections'))
    @endforeach

@endsection