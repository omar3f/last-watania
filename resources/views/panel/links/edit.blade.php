@extends('panel.template')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h1 class="text-center">Edit {!! $link->title !!}</h1>
            <hr>
            {!! Form::model($link, ['method' => 'put', 'action' => ['Panel\LinksController@update', $link->id]]) !!}

            <div class="form-group">
                {!! Form::text('title', null, ["class" => "form-control", "placeholder" => "Title"]) !!}
            </div>
            <div class="form-group">
                {!! Form::text('link', null, ["class" => "form-control", "placeholder" => "URL"]) !!}
            </div>
            <div class="form-group col-sm-6">
                <label class="radio-inline">
                    {!! Form::radio('visibility', '1', $link->visibility, ["class" => ""])!!}
                    Visible
                </label>
                <label class="radio-inline">
                    {!! Form::radio('visibility', '0', $link->visibility, ["class" => ""])!!}
                    Not Visible
                </label>
            </div>
            <div class="form-group">
                {!! Form::select('parent_id', $dropdown_links, null ,["class" => "form-control"]) !!}
                <input type="hidden" value="{!! $link->id !!}" name="id_hidden">
            </div>
            <div class="form-group">
                {!! Form::text('sort', null, ["class" => "form-control", "placeholder" => "Sort"]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edit Link', ["class" => "btn btn-primary edit-btn"]) !!}
            </div>



            @include('panel.includes.validation_errors')

        </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('scripts')
    <script>
        $('.edit-btn').on("click", function (e) {
            var parent_id = "select[name=parent_id]";
            var parent_id_hidden = "input[name=id_hidden]";
            if($(parent_id).val() == $(parent_id_hidden).val()) {
                e.preventDefault();
                alert('The link cannot be nested inside itself');
            }
        });

    </script>

@endsection