@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-center">Create a new link</h1>
            <hr>
            {!! Form::open(['method' => 'post', 'action' => 'Panel\LinksController@store']) !!}

            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('link', null, ["class" => "form-control", "placeholder" => "URL"]) !!}
            </div>
            <div class="form-group col-sm-6">
                <label class="radio-inline">
                    {!! Form::radio('visibility', '1', false, ["class" => ""])!!}
                    Visible
                </label>
                <label class="radio-inline">
                    {!! Form::radio('visibility', '0', false)!!}
                    Not Visible
                </label>
            </div>
            <div class="form-group">
                {!! Form::select('parent_id', $dropdown_links, null ,["class" => "form-control"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('sort', null, ["class" => "form-control", "placeholder" => "Sort"]) !!}
            </div>
            <div class="form-group">
                    {!! Form::submit('Create Link', ["class" => "btn btn-primary"]) !!}

            </div>



            @include('panel.includes.validation_errors')
        </div>

        {!! Form::close() !!}

    </div>
@endsection