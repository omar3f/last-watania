
<div class="row">
    <div class="col-sm-12 text-center">
        <h1>{{$page->title}}</h1>
        <hr>
    </div>

</div>
<div class="row">
    <div class="col-sm-6">
       {!! $page->content !!}
    </div>
    <div class="col-sm-6">
        <img src="{!! asset($page->image) !!}" alt="" width="100%">
    </div>
</div>
<br>

