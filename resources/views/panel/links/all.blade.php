{{--@extends('panel.template')--}}

{{--@section('content')--}}
    {{--<div class="row">--}}
        {{--<div class="col-sm-6">--}}
            {{--<h1>Your Links</h1>--}}
            {{--({!! Html::link(action('Panel\\LinksController@create'), 'Create a new link') !!})--}}
            {{--<hr>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row ">--}}
        {{--<div class="col-sm-12">--}}
            {{--@foreach($parent_links as $parent_link)--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-6">--}}
                    {{--{!! Html::link($parent_link->link, $parent_link->title) !!}--}}


                {{--</div>--}}

                {{--<div class="col-sm-1">--}}
                    {{--{!! Form::open(["method" => "delete", "class" => "form-inline", "action" => ["Panel\\LinksController@destroy", $parent_link->id]]) !!}--}}
                        {{--{!! Form::submit('Delete', ["class" => 'btn btn-danger']) !!}--}}
                    {{--{!! Form::close() !!}--}}



                {{--</div>--}}
                {{--<div class="col-sm-1">--}}
                    {{--{!! Html::link((action('Panel\\LinksController@edit', $parent_link->id)),'Edit', ["class" => "btn btn-primary"]) !!}--}}

                {{--</div>--}}
            {{--</div>--}}
                {{--<div class="child-links">--}}
                {{--@foreach($child_links as $child_link)--}}
                    {{--@if($child_link->parent_id == $parent_link->id)--}}


                        {{--<div class="row">--}}
                            {{--<div class="col-sm-3 col-sm-push-1">--}}
                                {{--{!! Html::link($child_link->link, $child_link->title) !!}--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-1">--}}
                                {{--{!! Form::open(["method" => "delete", "class" => "form-inline", "action" => ["Panel\\LinksController@destroy", $child_link->id]]) !!}--}}
                                {{--{!! Form::submit('Delete', ["class" => 'btn btn-danger']) !!}--}}
                                {{--{!! Form::close() !!}--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-1">--}}
                                {{--{!! Html::link((action('Panel\\LinksController@edit', $child_link->id)),'Edit', ["class" => "btn btn-primary"]) !!}--}}
                            {{--</div>--}}

                        {{--</div>--}}
                        {{--<hr>--}}


                    {{--@endif--}}
                {{--@endforeach--}}
                {{--</div>--}}
                {{--<br>--}}
            {{--@endforeach--}}


        {{--</div>--}}
    {{--</div>--}}

{{--@endsection--}}

{{--@section('scripts')--}}
    {{--<script>--}}



    {{--</script>--}}
{{--@endsection--}}