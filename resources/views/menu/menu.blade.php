
@foreach($links as $link)

    <ul>
        <li><b>ID: </b>{!! $link->id !!}</li>
        <li><b>Title: </b>{!! $link->title !!}</li>
        <li><b>URL: </b>{!! $link->link !!}</li>




                @foreach($link->getVisibleChildren() as $child)
                    <ul>
                        <li>
                            <b>Child ID: </b>{!! $child->id !!}
                        </li>
                        <li>
                            <b>Child Title: </b>{!! $child->title !!}
                        </li>
                        <li>
                            <b>Child URL: </b>{!! $child->link !!}
                        </li>
                    </ul>
                    <br>
                @endforeach
    </ul>
        <hr>
@endforeach

