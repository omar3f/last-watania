
        <!--*************************************** Footer  *******************************************-->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="logo f-block">
                    <img src="{!!  asset($data['footer-photo'])!!}" class="img-responsive" alt="logo">
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="f-block">
                    <ul class="list-unstyled col-xs-2">
                        <li><i class="fa fa-building fa-2x fa-2x"></i></li>
                        <li><span class="glyphicon  glyphicon-phone-alt" aria-hidden="true"></span></li>
                        <li><i class="fa fa-globe fa-2x"></i></li>
                        <li><i class="fa fa-envelope-o fa-2x"></i></li>
                    </ul>
                    <ul class="list-unstyled col-xs-10">
                        <li> {!! $data['address'] !!}</li>
                        <li> {!! $data['phone'] !!} </li>
                        <li> {!! $data['websitename'] !!} </li>
                        <li>{!! $data['mail'] !!}</li>

                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="f-block social-media">
                    <h3> Follow us on : </h3>
                        <ul class="list-unstyled ">
                        <li>
                        <a href="{!! $social['facebook'] !!}" class="facebook">
                        <i class="fa fa-facebook-official fa-2x"></i>
                        </a>
                        </li>
                        <li>
                        <a href="{!! $social['linkedin'] !!}">
                        <i class="fa fa-linkedin-square fa-2x"></i>
                        </a>
                        </li>
                        <li>
                        <a href="{!! $social['twitter'] !!}" class="twitter">
                        <i class="fa fa-2x fa-twitter-square"></i>
                        </a>
                        </li>
                        <li>
                        <a href="{!! $social['google'] !!}" class="youtube">
                        <i class="fa fa-2x fa-google-plus-square"></i>
                        </a>
                        </li>
                        <li>
                        <a href="{!! $social['youtube'] !!}" class="youtube">
                        <i class="fa fa-2x fa-youtube-square"></i>
                        </a>
                        </li>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</footer>