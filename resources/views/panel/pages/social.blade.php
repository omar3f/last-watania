@extends('panel.template')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> Social links </h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'panel/main-data/social','class'=>'form-horizontal ls_form','files'=>true,'id'=>'social']) !!}

                {!! Form::label('linkedin','LinkedIn:') !!}
                <br>
                <br>
                {!! Form::text('linkedin',App\Social::getValueByKey('linkedin'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('facebook','Facebook:') !!}
                <br>
                <br>
                {!! Form::text('facebook',App\Social::getValueByKey('facebook'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('twitter','Twitter:') !!}
                <br>
                <br>
                {!! Form::text('twitter',App\Social::getValueByKey('twitter'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('google','Google:') !!}
                <br>
                <br>
                {!! Form::text('google',App\Social::getValueByKey('google'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('youtube','YouTube:') !!}
                <br>
                <br>
                {!! Form::text('youtube',App\Social::getValueByKey('youtube'),['class'=>'form-control']) !!}
                <br>
                <br>
                {!! Form::label('skype','Skype:') !!}
                <br>
                <br>
                {!! Form::text('skype',App\Social::getValueByKey('skype'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop()
