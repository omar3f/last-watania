@extends('panel.template')

@section('content')

    <div class="row">
    <div class="col-sm-6">
    <h1>Your Links</h1>
    {!!  Html::link(action('Panel\\LinksController@create'), 'Create a new link', ["class" => "btn btn-primary"])  !!}
    <hr>
    </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Parent</td>
            <td>Status</td>
            <td>Sort</td>

            <td>Action</td>
        </tr>

            @foreach($links as $link)
            <tr>
                <td>{{ $link->id }}</td>
                <td>{{ $link->title }}</td>
                <td>{{ $link->parent_id ? (new App\Link)->find($link->parent_id)->title : '' }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="{{action('Panel\\LinksController@toggleVisibility', $link->id) }}" style="text-decoration: none">
                            {!! $link->visibility ? "<span class=\"label label-success\">Show</span>" : "<span class=\"label label-warning\">Hide</span>"  !!}



                            </a>
                        </div>

                    </div>

                </td>
                <td>{{$link->sort}}</td>

                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\\LinksController@edit', $link->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ["Panel\\LinksController@destroy", $link->id], "class" => "form-inline"])  !!}
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