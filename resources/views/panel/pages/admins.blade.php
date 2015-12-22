@extends('panel.template')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> Admins </h3>
            </div>
            <div class="panel-body">

                @if(Session::has('user_delete'))
                    <div class="alert alert-success"> {{ session('user_delete') }} </div>
                @endif
                @if(Session::has('new_user'))
                    <div class="alert alert-success"> {{ session('new_user') }} </div>
                @endif
                <div class="panel-heading">
                    <a href="{{ url('panel/admins/new') }}" class="panel-title btn btn-info"
                       style="margin-bottom: 20px;"> New Admin </a>

                </div>
                <ul>
                    @foreach($admins as $admin)
                        <li style="margin-bottom: 50px">
                            <div class="col-xs-10 ">
                                {!! Form::open(['method'=>'POST','url'=>'panel/main-data/admins/'.$admin->id,'class'=>'text-right']) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-danger pull-right']) !!}
                                {!! Form::close() !!}
                            </div>

                            <span class="col-xs-2"> {{ $admin->name }} </span>
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop