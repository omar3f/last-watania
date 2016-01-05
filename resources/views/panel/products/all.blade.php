@extends('panel.template')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Your Products</h1>
            {!!  Html::link(action('Panel\\ProductsController@create'), 'Create a new product', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Title</td>
            <td>Image</td>
            <td>Sub-Images</td>
            <td>Section</td>
            <td>Actions</td>

        </tr>

        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td><img src="{{ asset($product->image) }}" alt="" width="20%"></td>
                <td><a href="{!! action('Panel\ProductsSubImagesController@index', $product->id) !!}">Sub-Images</a></td>
                <td>{!! (new \App\Section)->find($product->section_id)->title !!}</td>


                <td>
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-primary" href="{{ action('Panel\\ProductsController@edit', $product->id) }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ["Panel\\ProductsController@destroy", $product->id], "class" => "form-inline"])  !!}
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