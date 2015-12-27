<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        <h1 class="text-center">This is a product: {!! $product->title !!}</h1>
        <hr>
        <div>
            <b>ID: </b><p>{!! $product->id !!}</p>
        </div>
        <div>
            <b>Title: </b><p>{!! $product->title !!}</p>
        </div>
        <div>
            <b>Description: </b><p>{!! $product->description !!}</p>
        </div>
        <div>
            <b>Image: </b><img src="{!! url($product->image) !!}" alt="">
        </div>

        <div>
            <b>Section: </b> <p>{!! $product->section->title !!}</p>
        </div>


    </div>
</div>
