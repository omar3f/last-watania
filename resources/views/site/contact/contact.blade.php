

@extends('site.template')
@section('content')
    @include('site.menu.menu', compact('links'))
@endsection
@section('contact-form')
    <div class="content">


        <div class="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                        {!! Form::open(['method' => 'post', 'action' => 'Site\ContactController@email']) !!}
                        <div class="form-group">
                        {!! Form::text('name', null, ["class" => "form-control", "placeholder" => "Name"]) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::text('email', null, ["class" => "form-control", "placeholder" => "Email"]) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::text('subject', null, ["class" => "form-control", "placeholder" => "Subject"]) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::textarea('message', null, ["class" => "form-control", "placeholder" => "Message"]) !!}
                        </div>
                        <div class="form-group">
                        {!! Form::submit('Send', ['class' => 'form-control btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('site.footer.footer', compact('social', 'data'))
@endsection