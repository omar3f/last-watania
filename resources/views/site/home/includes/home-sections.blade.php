@if(count($sections))
    <div class="blocks">
        <div class="row">
            @foreach($sections as $section)

            <div class="col-xs-12 col-md-4">
                <div class="more-about block">
                    <div class="more-about data">
                        <div class="more-poster">
                            <img src="{!! asset($section->image) !!}" class="img-responsive" alt="">

                            <div class="p-head">
                                <h3><a href="#">{!! $section->title !!} </a></h3>
                                <p>  </p>
                            </div>
                        </div>

                        <div class="more-data">
                            <h3> {!! $section->title !!}  </h3>

                            <p>
                                {!! $section->description !!} <a href="{!! action('Site\SectionsController@show', $section->id) !!}"> Read More.. </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
@endif
