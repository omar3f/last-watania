@extends('panel.template')

@section('content')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="login-box">
                    <div class="login-content">
                        <div class="login-user-icon">
                            <i class="glyphicon glyphicon-user"></i>
                            <!--<img src="images/login.png" alt="Logo"/>-->
                        </div>
                        <h3>Admit Yourself</h3>
                    </div>

                    <div class="login-form">

                        {!! Form::open(['url','/admin/register', 'class'=>'form-horizontal ls_form']) !!}
                        <div class="input-group ls-group-input">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        </div>

                        <div class="input-group ls-group-input">
                            <input class="form-control" type="email" name="email" placeholder="someone@mail.com">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>


                        <div class="input-group ls-group-input">
                            <input type="password" placeholder="Password" name="password"
                                   class="form-control" value="">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>
                        <div class="input-group ls-group-input">
                            <input type="password" placeholder="Repeat password" name="password_confirmation"
                                   class="form-control" value="">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        </div>

                        <div class="remember-me">
                            <input class="switchCheckBox" type="checkbox" checked data-size="mini" name="remember"
                                   data-on-text="<i class='fa fa-check'><i>"
                                   data-off-text="<i class='fa fa-times'><i>">
                            <span>Remember me</span>
                        </div>

                        <div class="input-group ls-group-input login-btn-box">
                            {!! Form::submit('register',['class'=>'btn ls-dark-btn ladda-button col-md-12 col-sm-12 col-xs-12','data-style','slide-down']) !!}
                            <a class="" href="login.html">Login</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop()