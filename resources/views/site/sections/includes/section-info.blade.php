{{--<div class="row">--}}
    {{--<div class="col-sm-6">--}}
        {{--<h1 class="text-center">This is a section: {!! $section->title !!}</h1>--}}
        {{--<hr>--}}
        {{--<div>--}}
            {{--<b>ID: </b><p>{!! $section->id !!}</p>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<b>Title: </b><p>{!! $section->title !!}</p>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<b>Description: </b><p>{!! $section->description !!}</p>--}}
        {{--</div>--}}
        {{--<div>--}}
            {{--<b>Image: </b><img src="{!! url($section->image) !!}" alt="">--}}
        {{--</div>--}}

        {{--<div>--}}
            {{--<b>Products: </b>--}}
            {{--<ul>--}}
                {{--@foreach($section->products as $product)--}}
                    {{--<li>{!! $product->title !!}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}

        {{--</div>--}}


    {{--</div>--}}
{{--</div>--}}


<div class="content">
    <div class="con-head">
        <div class="container">
            <img src="images/5.png" class="img-responsive" alt="">
        </div>
    </div>
    <div class="sec-data">
        <div class="container">
            <h2> {!! $section->title !!} </h2>

            <p class="sec-desc">
                {!! $section->description !!}
            </p>
            @if($section->page)
                <div class="sec-sups">
                    <ul class="nav nav-pills">

                        <li><a href="{!! url($section->page->url) !!}"> {!! $section->page->title  !!}</a> </li>

                    </ul>
                </div>
        </div>

            @endif
            <div class="products">
                <div class="container">
                    <div class="sec-sups">
                    @if(count($child_sections))

                            <ul class="nav nav-pills">

                                @foreach($child_sections as $child_section)
                                    <li>
                                        <a href="{!! action('Site\SectionsController@show', $child_section->id) !!}"> {!! $child_section->title !!} </a>
                                    </li>
                                @endforeach
                            </ul>

                    @endif
                    @if(count($section->products))
                    <ul class="list-unstyled">
                        @foreach($section->products as $product)
                        <li class="col-xs-12 col-sm-3">
                            <div class="product">
                                <div class="product-poster">
                                    <img src="{!! asset($product->image) !!}" alt="">
                                </div>
                                <div class="product-details">
                                    <a href="{!! action('Site\ProductsController@show', $product->id) !!}">{!! $product->title !!}  </a>

                                    <p class="product-desc">
                                                                {!! $product->description !!}
                                    </p>
                                </div>
                            </div>
                        </li>
                            @endforeach
                    </ul>
                        @endif
                    </div>
                </div>
            </div>
    </div>



</div>
