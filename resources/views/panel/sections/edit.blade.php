@extends('panel.template')
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
            {!! Form::model($section, ['method' => 'put', 'action' => ['Panel\SectionsController@update', $section->id]]) !!}
            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('description', null, ["class" => "form-control", "placeholder" => "Description"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('image', null, ["class" => "form-control", "placeholder" => "Image"]) !!}
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