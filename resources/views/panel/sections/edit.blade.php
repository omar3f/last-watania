@extends('panel.template')
@section('style')
    <style href="{{ asset('assets/css/btn-file/btn-file.css') }}"></style>
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script>
        tinymce.init({
            selector: '#descriptionArea',
            plugins: 'link'
        });
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1>
                Edit {{ $section->title }}
            </h1>
            <hr>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::model($section, ['method' => 'put', 'action' => ['Panel\SectionsController@update', $section->id], 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('description', null, ["id" => 'descriptionArea', "class" => "form-control", "placeholder" => "Description"]) !!}
            </div>
            <div class="form-group">
                Upload Image{!! Form::file('image') !!}
            </div>
            <div class="form-group col-sm-6">
                <label class="radio-inline">
                    {!! Form::radio('home', '1', false)!!}
                    Home
                </label>
                <label class="radio-inline">
                    {!! Form::radio('home', '0', false)!!}
                    Not home
                </label>
            </div>
            <div class="form-group">
                {!! Form::select('page_id', $dropdown_pages, null,["class" => "form-control", "placeholder" => "Page"]) !!}
            </div>
            <div class="form-group">
                {!! Form::select('parent_id', $dropdown_sections, null,["class" => "form-control", "placeholder" => "Page"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit section', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            @include('panel.includes.validation_errors')
        </div>
    </div>
@endsection