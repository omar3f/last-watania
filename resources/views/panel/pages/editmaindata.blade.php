@extends('panel.template')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> Main Data </h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'main-data','class'=>'form-horizontal ls_form','files'=>true]) !!}
                {!! Form::label('logo','Logo') !!}
                <br>
                <br>

                {!! Form::file('logo',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('favicon','Favicon') !!}
                <br>
                <br>

                {!! Form::file('favicon',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('websitename','Website Name:') !!}
                <br>
                <br>

                {!! Form::text('websitename',$row1->value,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('phone','Phone:') !!}
                <br>
                <br>

                {!! Form::text('phone',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('mail','Email:') !!}
                <br>
                <br>

                {!! Form::text('mail',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('address','Address:') !!}
                <br>
                <br>

                {!! Form::text('address',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop()