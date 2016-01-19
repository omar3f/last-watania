<div class="content">

    <div class="product">
        <div class="container">
            <span class="sec-name"> <a href="{!! action('Site\SectionsController@show', $product->section->id) !!}">{!! $product->section->title !!}</a></span>

            <h1> {!! $product->title !!} </h1>

            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p class="p-desc">
                        {!! $product->description !!}
                    </p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="album">
                        <div class="main-img">
                            <img src="{!! asset($product->image) !!}" alt="">
                        </div>
                        @if(count($product->sub_images()))
                            <ul class="list-unstyled">
                                @foreach($product->sub_images() as $sub_image)
                                <li class="col-xs-4">
                                    <img src="{!! asset($sub_image->image) !!}" class="img" alt="">
                                </li>
                                @endforeach

                            </ul>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

