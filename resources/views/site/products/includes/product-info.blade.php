<div class="content">

    <div class="product">
        <div class="container">
            <span class="sec-name"> {!! $product->section->title !!} </span>

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

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

