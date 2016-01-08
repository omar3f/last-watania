@extends('panel.template')

@section('content')

    @if(Session::has('update_page'))
        <div class="alert alert-success"> {{ session('update_page') }} </div>
    @endif
    @if(Session::has('new_user'))
        <div class="alert alert-success"> {{ session('new_user') }} </div>
    @endif

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Pages</h1>
            {!!  Html::link(action('Panel\\PagesController@create'), 'Create a new page', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Image</td>
            <td>URL</td>
            <td>Actions</td>

        </tr>

        @foreach($pages as $page)
            <tr>
                <td>{{ $page->id }}</td>
                <td>{{ $page->title }}</td>
                <td><img src="{{ asset($page->image) }}" alt="" width="20%"></td>

                <td>{!!  $page->url  !!}</td>



                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\\PagesController@edit', $page->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ["Panel\\PagesController@destroy", $page->id], "class" => "form-inline"])  !!}
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
    <script>



    </script>
@endsection
