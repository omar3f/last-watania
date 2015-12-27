@extends('panel.template')
@section('style')
    <style href="{{ asset('assets/css/btn-file/btn-file.css') }}"></style>
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script>
        tinymce.init({
            selector: '#descriptionArea'
        });
    </script>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-6 text-center">
            <h1>
                Create a new section
            </h1>
            <hr>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            {!! Form::open(['method' => 'post', 'action' => 'Panel\SectionsController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::textarea('description', null, ["id" => 'descriptionArea', "class" => "form-control", "placeholder" => "Description"]) !!}
            </div>
            <div class="form-group">
                <span class="btn btn-primary btn-file">
                    Upload Image{!! Form::file('image') !!}
                </span>
                <span class="file-info"></span>
            </div>
            <div class="form-group">
                {!! Form::select('page_id', $dropdown_pages, null,["class" => "form-control", "placeholder" => "Page"]) !!}
            </div>
            <div class="form-group">
                {!! Form::select('parent_id', $dropdown_sections, null,["class" => "form-control", "placeholder" => "Page"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create new section', ['class' => 'btn btn-primary']) !!}
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
@section('scripts')
    <script src="{{ asset('assets/js/btn-file/btn-file.js') }}">  </script>
@endsection