@extends('panel.template')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1>The product's sub-images</h1>
        <hr>
    </div>
</div>

    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Sub-Image</td>
            <td>Action</td>

        </tr>

        @foreach($sub_images as $sub_image)
            <tr>
                <td>{{ $sub_image->id }}</td>
                <td><img src="{{ asset($sub_image->image) }}" alt="" width="20%"></td>
                <td>
                    <div class="row">


                        <div class="col-sm-2">
                            {!!  Form::open(["method" => "delete", "action" => ["Panel\\ProductsSubImagesController@destroy", $product->id, $sub_image->id], "class" => "form-inline"])  !!}
                            <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                            {!! Form::close() !!}
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