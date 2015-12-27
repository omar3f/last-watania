@extends('panel.template')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Sections</h1>
            {!!  Html::link(action('Panel\\SectionsController@create'), 'Create a new section', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Description</td>
            <td>Image</td>
            <td>Page</td>
            <td>Parent</td>
            <td>Action</td>

        </tr>

        @foreach($sections as $section)
            <tr>
                <td>{{ $section->id }}</td>
                <td>{{ $section->title }}</td>
                <td>{{ $section->description }}</td>
                <td><img src="{{ asset($section->image) }}" alt="" width="50%"></td>
                <td>{!! (new \App\Page)->find($section->page_id)->title !!}</td>
                <td>{{ $section->parent_id ? (new App\Section)->find($section->parent_id)->title : 'No Parent' }}</td>

                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\\SectionsController@edit', $section->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ["Panel\\SectionsController@destroy", $section->id], "class" => "form-inline"])  !!}
                            <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-sm-2">

                        </div>

                    </div>



                </td>
            </tr>
        @endforeach



        </tbody>
    </table>

@endsection

@section('scripts')

@endsection