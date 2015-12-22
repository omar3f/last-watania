@extends('panel.template')

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> slider </h3>
            </div>
            <div class="panel-body">

                @if(Session::has('new_slide'))
                    <div class="alert alert-success alert-dismissible fade in text-right">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        {{ session('new_slide') }}
                    </div>
                @endif

                @if(Session::has('update_slide'))
                    <div class="alert alert-success alert-dismissible fade in text-right">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        {{ session('update_slide') }}
                    </div>
                @endif
                @if(Session::has('delete_slide'))
                    <div class="alert alert-success alert-dismissible fade in text-right">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        {{ session('delete_slide') }}
                    </div>
                @endif

                @if(Session::has('hideSlide'))
                    <div class="alert alert-success alert-dismissible fade in text-right">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        {{ session('hideSlide') }}
                    </div>
                @endif

                @if(Session::has('showSlide'))
                    <div class="alert alert-success alert-dismissible fade in text-right">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                            ×
                        </button>
                        {{ session('showSlide') }}
                    </div>
                @endif

                <div class="panel-heading">
                    <a href="{{ url('panel/slider/new') }}" class="panel-title btn btn-info"
                       style="margin-bottom: 20px;"> New Slide </a>
                </div>
                <ul>
                    @foreach($sliders as $slide)
                        <li style="margin-bottom: 50px">
                            <div class="col-xs-10 ">
                                <a href="{{ url('panel/slider/'.$slide->id.'/edit') }}" class="btn btn-primary"
                                   style="float: left; margin-right: 15px;"> Edit </a>
                                {!! Form::open(['method'=>'POST','url'=>'panel/slider/'.$slide->id,'class'=>'form-inline','style'=>"float: left; margin-right: 15px;"]) !!}
                                {!! Form::submit('delete',['class'=>'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                @if($slide->status == 0)
                                    {!! Form::open(['method'=>'POST','url'=>'panel/slider/'.$slide->id.'/show','class'=>'form-inline','style'=>"float: left; margin-right: 15px;"]) !!}
                                    {!! Form::submit('Show',['class'=>'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                @else
                                    {!! Form::open(['method'=>'POST','url'=>'panel/slider/'.$slide->id.'/hide','class'=>'form-inline','style'=>"float: left; margin-right: 15px;"]) !!}
                                    {!! Form::submit('hide',['class'=>'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                @endif

                            </div>

                            <span class="col-xs-2"> {{ $slide->title}} </span>
                        </li>
                        <hr>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop