@extends('panel.template')

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Admins</h1>
            {!!  Html::link(action('AdminController@newAdmin'), 'Create a new admin', ["class" => "btn btn-primary"])  !!}
            <hr>
        </div>
    </div>
    <table class="table table-bordered">
        <tbody>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>

        @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->id }}</td>
                <td>{{ $admin->name }}</td>
                <td>{{ $admin->email }}</td>
                <td>
                    <div class="col-sm-2">
                        {!!  Form::open(["method" => "post", "action" => ["AdminController@destroyAdmin", $admin->id], "class" => "form-inline"])  !!}
                        <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                        {!! Form::close() !!}
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