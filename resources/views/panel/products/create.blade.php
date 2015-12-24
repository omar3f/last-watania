@extends('panel.template')
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
            {!! Form::open(['method' => 'post', 'action' => 'Panel\ProductsController@store']) !!}
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
                {!! Form::select('section_id', $dropdown_sections, null,["class" => "form-control", "placeholder" => "Section"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create new product', ['class' => 'btn btn-primary']) !!}
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