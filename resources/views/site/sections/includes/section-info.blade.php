<div class="row">
    <div class="col-sm-6 col-sm-push-3">
        <h1 class="text-center">This is a section: {!! $section->title !!}</h1>
        <hr>
        <div>
            <b>ID: </b><p>{!! $section->id !!}</p>
        </div>
        <div>
            <b>Title: </b><p>{!! $section->title !!}</p>
        </div>
        <div>
            <b>Description: </b><p>{!! $section->description !!}</p>
        </div>
        <div>
            <b>Image: </b><img src="{!! url($section->image) !!}" alt="">
        </div>

        <div>
            <b>Products: </b>
            <ul>
                @foreach($section->products as $product)
                    <li>{!! $product->title !!}</li>
                @endforeach
            </ul>

        </div>


    </div>
</div>
