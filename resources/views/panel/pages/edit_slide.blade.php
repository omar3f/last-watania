@extends('panel.template')
<style>
    .radio input[type="radio"], .radio-inline input[type="radio"], .checkbox input[type="checkbox"], .checkbox-inline input[type="checkbox"] {
        position: relative !important;
    }
</style>
@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> New Slide </h3>
            </div>
            <div class="errors">
                @if($errors->any())
                    <ul style="margin-top: 20px; padding-right: 15px;" class="">
                        @foreach( $errors->all() as $error )
                            <li class="alert alert-danger" > {{ $error }} </li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="panel-body">

                {!! Form::model($slide,['method'=>'POST','url'=>'panel/slider/'.$slide->id.'/edit','class'=>'form-horizontal ls_form','files'=>true]) !!}
                {!! Form::hidden('__method','edit') !!}
                {!! Form::label('title','Slide Title:') !!}
                <br>
                <br>

                {!! Form::text('title',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('desc','desc:') !!}
                <br>
                <br>

                {!! Form::textarea('desc',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('sort','sort:') !!}
                <br>
                <br>

                {!! Form::input('number','sort',null,['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('image','Image:') !!}
                <br>
                <br>

                {!! Form::file('image',null,['class'=>'form-control']) !!}
                <br>
                <br>

                <div class="checkbox">
                    <label class="radio-inline"> <input type="radio" name="status" value="1"
                                                        style="margin-right: 10px;"> Show </label>
                    <label class="radio-inline"><input type="radio" name="status" value="0"
                                                       style="margin-right: 10px;"> Hidden </label>
                </div>

                <br>
                {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop()