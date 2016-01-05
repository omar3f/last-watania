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
            {!! Form::model($product, ['method' => 'put', 'action' => ['Panel\ProductsController@update', $product->id], 'files' => true]) !!}
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
                <span class="btn btn-primary btn-file">
                    Upload a Sub-Image{!! Form::file('sub_image') !!}
                </span>
                <span class="file-info"></span>
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