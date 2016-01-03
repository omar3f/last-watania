<div class="row">
    <div class="col-sm-6">

        <h1 class="text-center">This is a page: {!! $page->title !!}</h1>
        <hr>
        <div>
            <b>ID: </b><p>{!! $page->id !!}</p>
        </div>
        <div>
            <b>URL: </b><p>{!! $page->url !!}</p>
        </div>
        <div>
            <b>Parent ID: </b><p>{!! $page->parent_id !!}</p>
        </div>
        <div>
            <b>Title: </b><p>{!! $page->title !!}</p>
        </div>
        <div>
            <b>Description: </b><p>{!! $page->content !!}</p>
        </div>
        <div>
            <b>Image: </b><img src="{!! asset($page->image) !!}" alt="">
        </div>
    </div>
</div>
