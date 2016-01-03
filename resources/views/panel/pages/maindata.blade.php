@extends('panel.template')
@section('style')
    <style href="{{ asset('assets/css/btn-file/btn-file.css') }}"></style>
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script>
        tinymce.init({
            selector: '#short-desc',
            plugins: 'link'
        });
    </script>
@endsection


@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> Main Data </h3>
            </div>
            <div class="panel-body">
                {!! Form::open(['url'=>'panel/main-data','class'=>'form-horizontal ls_form','files'=>true]) !!}
                {!! Form::label('logo','Logo') !!}
                <br>
                <br>

                {!! Form::file('logo',['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('favicon','Favicon') !!}
                <br>
                <br>

                {!! Form::file('favicon',['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('short-desc-photo','Short Description Photo:') !!}
                <br>
                <br>

                {!! Form::file('short-desc-photo',['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('footer-photo','Footer Photo:') !!}
                <br>
                <br>

                {!! Form::file('footer-photo',['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('websitename','Website Name:') !!}
                <br>
                <br>

                {!! Form::text('websitename',App\MainData::getValueByKey('websitename'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('phone','Phone:') !!}
                <br>
                <br>

                {!! Form::text('phone',App\MainData::getValueByKey('phone'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('mail','Email:') !!}
                <br>
                <br>

                {!! Form::text('mail',App\MainData::getValueByKey('mail'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('address','Address:') !!}
                <br>
                <br>

                {!! Form::text('address',App\MainData::getValueByKey('address'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('short-desc-title','Short Description Title:') !!}
                <br>
                <br>
                {!! Form::text('short-desc-title',App\MainData::getValueByKey('short-desc-title'),['class'=>'form-control']) !!}
                <br>
                <br>

                {!! Form::label('short-desc','Short Description:') !!}
                <br>
                <br>
                {!! Form::textarea('short-desc',App\MainData::getValueByKey('short-desc'),['class'=>'form-control', 'id' => 'short-desc']) !!}
                <br>
                <br>


                {!! Form::submit('save',['class'=>'btn btn-primary']) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop()