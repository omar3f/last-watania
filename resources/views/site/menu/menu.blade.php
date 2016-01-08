
<!--*************************************** Navbar  *******************************************-->
<div class="top-bar">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><img src="{!! asset($data['logo']) !!}" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @foreach($links as $link)

                        @if(count($children = $link->getVisibleChildren()))

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false">{!! $link->title !!} <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    @foreach($children = $link->getVisibleChildren() as $child)
                                        <li><a href="{!! url($child->link) !!}">{!! $child->title !!}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{!! url($link->link) !!}">{!! $link->title !!}</a>
                            </li>

                        @endif

                    @endforeach
                        <li>
                            <a href="{!! action('Site\PagesController@show', 'about-us') !!}">About Us</a>
                        </li>
                        <li>
                            <a href="{!! url('contact') !!}">Contact</a>
                        </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>

