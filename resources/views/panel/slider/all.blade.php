@extends('panel.template')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Products</h1>
            {!!  Html::link(action('Panel\\SliderController@create'), 'Create a new slider', ["class" => "btn btn-primary"])  !!}
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
            <td>Status</td>
            <td>Actions</td>

        </tr>

        @foreach($sliders as $slider)
            <tr>
                <td>{{ $slider->id }}</td>
                <td>{{ $slider->title }}</td>
                <td>{!!  $slider->description  !!}</td>
                <td><img src="{{ asset($slider->image) }}" alt="" width="50%"></td>
                <td>
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="{{action('Panel\\SliderController@toggleVisibility', $slider->id) }}" style="text-decoration: none">
                                {!! $slider->status ? "<span class=\"label label-success\">Show</span>" : "<span class=\"label label-warning\">Hide</span>"  !!}



                            </a>
                        </div>

                    </div>

                </td>

                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\\SliderController@edit', $slider->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ["Panel\\SliderController@destroy", $slider->id], "class" => "form-inline"])  !!}
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