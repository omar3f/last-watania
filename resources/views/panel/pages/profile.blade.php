@extends('panel.template')

@section('content')
        <!--Top header start-->
<h3 class="ls-top-header">Profile</h3>
<!--Top header end -->

<!--Top breadcrumb start -->
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i></a></li>
    <li><a href="#">Pages</a></li>
    <li class="active">Profile</li>
</ol>
<!--Top breadcrumb start -->
</div>
</div>
<!-- Main Content Element  Start-->
<div class="row">
    <div class="col-md-12 col-lg-12">
        <!--User Details Start-->
        <div class="ls-user-details">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <!--User Name-->
                    <div class="ls-user-name">
                        <h1>Mr. John Doe</h1>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <!--User Social Link Wrapper Start-->
                    <div class="ls-user-links">
                        <ul>
                            <!--List Start-->
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                            </li>
                            <!--List Finish-->
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-skype"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-github-alt"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class="fa fa-foursquare"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!--User Social Link Wrapper Finish-->
                </div>
            </div>


            <div class="row">
                <!--User Details start-->
                <div class="user-detail col-md-4 col-sm-5">
                    <div class="ls-user-position">
                        <h4>Web Application Developer</h4>

                        <p>AimMate</p>
                    </div>

                    <!--Address-->
                    <address>
                        <i class="fa fa-map-marker"></i>
                        795 Folsom Ave, Suite 600<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone"><i class="fa fa-mobile"></i> P:</abbr> (123) 456-7890
                    </address>


                    <!--User Image-->
                    <div class="user-pic">
                        <img src="assets/images/userimage/avatar1-115.png" alt="image">
                    </div>
                </div>
                <!--User Info Start-->
                <div class="ls-user-info col-md-8 col-sm-7">
                    <div class="ls-user-text">
                        <p>I love to develop apps on web and mobile.</p>

                        <p>Last couple of year i am developing various project.</p>

                    </div>
                    <div class="ls-user-text2">
                        <h4>Performence</h4>
                        JQuery, PHP, MYSQL, Laravel, Wordpress, Codeigniter, ZendFramework
                    </div>
                </div>
                <!--User Info Finish-->
                <!--User Details Finish-->

            </div>


        </div>
        <!--User Details Finish-->
    </div>
</div>
<div class="row">
    <div class="col-md-4 hidden-sm">
        <!--User Scriber Wrapper Start-->
        <div class=" ls-user-subscriber hidden-xs clearfix">

            <div class="ls-user-element col-md-6">
                <!--EasyPie Start-->
                <div class="easy-pai-box">
                                        <span class="easyPieChartBlack" data-percent="55">
                                            <span class="easyPieChartBlackPercent"></span>
                                        </span>
                </div>
                <!--EasyPie Finish-->
            </div>

            <!--User Subscriber-->
            <div class="ls-user-box-content col-md-6">
                <i class="fa fa-envelope-o"></i>

                <h1>Subscribe</h1>
                <!--<p>10023</p>-->
            </div>
        </div>
        <!--User Scriber Wrapper Finish-->
    </div>
    <div class="hidden-xs col-md-8 col-sm-12">
        <!--Profile User Feature Wrapper Start -->
        <div class="ls-user-feature clearfix">
            <ul>
                <li>
                    <!-- User Feature List Start-->
                    <div id="ls-user-friends" class="hidden-sm" data-text="85" data-info="Friends"
                         data-fontsize="14" data-percent="85"
                         data-total="150" data-part="85" data-border="inline"
                         data-icon="fa fa-smile-o" data-icon-size="28" data-icon-color="#ccc">
                    </div>
                    <!-- User Feature List Start-->
                </li>

                <li>
                    <!-- User Feature List Start-->
                    <div id="ls-user-followers" data-text="75"
                         data-info="Followers"
                         data-fontsize="14" data-percent="75"
                         data-bgcolor="#eee" data-total="150" data-part="75" data-border="inline"
                         data-icon="fa fa-users" data-icon-size="28" data-icon-color="#ccc">
                    </div>
                    <!-- User Feature List Finish-->
                </li>
                <li>
                    <!-- User Feature List Start-->
                    <div id="ls-user-following" data-dimension="112" data-text="90"
                         data-info="Following"
                         data-fontsize="14" data-percent="90"
                         data-bgcolor="#eee" data-part="90" data-border="inline"
                         data-icon="fa fa-eye" data-icon-size="28" data-icon-color="#ccc">
                    </div>
                    <!-- User Feature List Finish-->
                </li>
                <li>
                    <!-- User Feature List Start-->
                    <div id="ls-user-posts" data-text="55" data-info="Posts"
                         data-fontsize="14" data-percent="55"
                         data-bgcolor="#eee" data-total="150" data-part="55" data-border="inline"
                         data-icon="fa fa-archive" data-icon-size="28" data-icon-color="#ccc">
                    </div>
                    <!-- User Feature List Finish-->
                </li>
                <li>
                    <!-- User Feature List Start-->
                    <div id="ls-user-likes" data-text="30" data-info="Likes"
                         data-fontsize="14" data-percent="30"
                         data-bgcolor="#eee" data-total="150" data-part="30" data-border="inline"
                         data-icon="fa fa-heart" data-icon-size="28" data-icon-color="#ccc">
                    </div>
                    <!-- User Feature List Finish-->
                </li>
            </ul>
        </div>
        <!--Profile User Feature Wrapper Finish -->
    </div>
</div>

<hr>
<div class="row">
    <div class="col-md-12">
        <div class="user-profile-tab">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs  nav-justified icon-tab">
                <li class="active"><a href="#friends" data-toggle="tab"><i class="fa fa-home"></i> <span>Friends</span></a>
                </li>
                <li><a href="#job-history" data-toggle="tab"><i class="fa fa-envelope-o"></i>
                        <span>Job History</span></a></li>
                <li><a href="#about-me" class="user-google-location" data-toggle="tab"><i class="fa fa-gears"></i>
                        <span>About Me</span></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content tab-border">
                <div class="tab-pane fade in active" id="friends">
                    <div class="user-friend-list">
                        <ul>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar1-115.png">
                                </a>
                                <span class="is-online ls-friend-status"></span>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-offline ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar3-115.png">
                                    <span class="is-busy ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar2-115.png">
                                    <span class="is-busy ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-offline ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar1-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar3-115.png">
                                    <span class="is-offline ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-busy ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-offline ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar1-115.png">
                                    <span class="is-busy ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar3-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-busy ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-busy ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar2-115.png">
                                    <span class="is-online ls-friend-status"></span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#myModalFriends">
                                    <img class="img-circle" alt="friends pic"
                                         src="assets/images/userimage/avatar-115.png">
                                    <span class="is-busy ls-friend-status"></span>
                                </a>
                            </li>
                        </ul>


                        <div class="modal fade" id="myModalFriends" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header label-light-green white">
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabelSuccess">Friends Details</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="media ls-friends-info-wrap">
                                            <a class="pull-left" href="javascript:void(0);">
                                                <img class="media-object" src="assets/images/userimage/avatar2-115.png"
                                                     alt="image">
                                            </a>

                                            <div class="media-body">
                                                <div class="ls-friends-info">
                                                    <h4 class="media-heading">Jonh Doe</h4>
                                                    <ul>
                                                        <!--List Start-->
                                                        <li>
                                                            <a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                                        </li>
                                                        <!--List Finish-->
                                                        <li>
                                                            <a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><i
                                                                        class="fa fa-skype"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><i
                                                                        class="fa fa-github-alt"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><i
                                                                        class="fa fa-google-plus"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><i
                                                                        class="fa fa-foursquare"></i></a>
                                                        </li>
                                                    </ul>

                                                    <address>
                                                        <span><i class="fa fa-map-marker"></i></span> : 795 Folsom Ave,
                                                        Suite 600<br>
                                                        San Francisco, CA 94107<br>
                                                        <span><i class="fa fa-mobile-phone"></i></span> : (123) 456-7890
                                                    </address>
                                                </div>


                                            </div>
                                            <div class="ls-friends-about">
                                                <h3 class="ls-header">About Me</h3>

                                                <p>
                                                                        <span class="about-me-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                                            Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                                                            enim.
                                                                        </span>
                                                </p>

                                                <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                                                    rhoncus, sem quam semper libero, sit amet adipiscing sem
                                                    neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                                    hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn ls-light-green-btn btn-xs"
                                                data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="tab-pane fade" id="job-history">
                    <div class="row">
                        <div class="col-md-4 ls-profession">
                            <h3 class="user-profession-title">Web Designer</h3>

                            <p>
                                <span class="user-company-name">AimMate</span>
                            </p>

                            <p> Duis leo. Sed fringilla
                                mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat,
                                leo eget bibendum sodales, augue velit cursus nunc.
                            </p>

                            <p>Sed consequat,leo eget bibendum sodales, augue velit cursus nunc.</p>
                        </div>
                        <div class="col-md-4 ls-profession">
                            <h3 class="user-profession-title">Web Developer</h3>

                            <p>
                                <span class="user-company-name">AimMate</span>
                            </p>

                            <p> Duis leo. Sed fringilla
                                mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat,
                                leo eget bibendum sodales, augue velit cursus nunc.
                            </p>

                            <p>Sed consequat,leo eget bibendum sodales, augue velit cursus nunc.</p>
                        </div>
                        <div class="col-md-4 ls-profession">
                            <h3 class="user-profession-title">Software Engineer</h3>

                            <p>
                                <span class="user-company-name">AimMate</span>
                            </p>

                            <p> Duis leo. Sed fringilla
                                mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat,
                                leo eget bibendum sodales, augue velit cursus nunc.
                            </p>

                            <p>Sed consequat,leo eget bibendum sodales, augue velit cursus nunc.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="about-me">

                    <div class="row">
                        <div class="col-md-7">
                            <h3 class="ls-header">Jonh Doe</h3>

                            <p>
                                                    <span class="about-me-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                                        Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis
                                                        enim.
                                                    </span>
                            </p>

                            <p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum
                                rhoncus, sem quam semper libero, sit amet adipiscing sem
                                neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.
                                Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.
                                Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla
                                mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat,
                                leo eget bibendum sodales, augue velit cursus nunc.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <div id="user-locator" class="user-map-locator"></div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<div class="row">
    <div class="col-md-6">
        <!--User Skill Wrapper Start-->
        <div class="ls-user-skills">
            <h3 class="ls-header">Skills</h3>
            <hr>
            <ul>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>Design</h4>

                        <div class="progress ls-progress">
                            <div class="progress-bar ls-light-blue-progress six-sec-ease-in-out"
                                 aria-valuetransitiongoal="80">
                            </div>
                        </div>
                        <span>80%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>PSD</h4>

                        <div class="progress progress-striped active ls-progress">
                            <div class="progress-bar six-sec-ease-in-out ls-light-blue-progress"
                                 aria-valuetransitiongoal="20"></div>
                        </div>
                        <span>20%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>HTML</h4>

                        <div class="progress progress-striped active ls-progress">
                            <div class="progress-bar progress-bar-info six-sec-ease-in-out"
                                 aria-valuetransitiongoal="40"></div>
                        </div>
                        <span>40%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>CSS</h4>
                        <!--Progress Start-->
                        <div class="progress progress-striped active ls-progress">
                            <div class="progress-bar ls-green-progress six-sec-ease-in-out"
                                 aria-valuetransitiongoal="60"></div>
                        </div>
                        <!--Progress Finish-->
                        <span>60%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>JQuery</h4>

                        <div class="progress progress-striped active ls-progress">
                            <div class="progress-bar ls-yellow-progress six-sec-ease-in-out"
                                 aria-valuetransitiongoal="80"></div>
                        </div>
                        <span>80%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>JQuery</h4>

                        <div class="progress progress-striped active ls-progress">
                            <div class="progress-bar ls-yellow-progress six-sec-ease-in-out"
                                 aria-valuetransitiongoal="80"></div>
                        </div>
                        <span>80%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>JQuery</h4>

                        <div class="progress progress-striped active ls-progress">
                            <div class="progress-bar ls-yellow-progress six-sec-ease-in-out"
                                 aria-valuetransitiongoal="80"></div>
                        </div>
                        <span>80%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
                <li>
                    <!--User Skill List Start-->
                    <div class="ls-skill-list">
                        <h4>PHP</h4>

                        <div class="progress progress-striped active ls-progress">
                            <div class="progress-bar ls-red-progress six-sec-ease-in-out"
                                 aria-valuetransitiongoal="100"></div>
                        </div>
                        <span>100%</span>
                    </div>
                    <!--User Skill List Finish-->
                </li>
            </ul>
        </div>
        <!--User Skill Wrapper Finish-->
    </div>
    <div class="col-md-6">
        <!--User Os Skill Wrapper Start-->
        <div class="ls-user-interest">
            <h3 class="ls-header">OS Skills</h3>
            <hr class="ls-header-underline">
            <!--Donut Plugin Wrapper-->
            <div id="hero-donut"></div>
        </div>
        <!--User Os Skill Wrapper Finish-->
    </div>
</div>
<hr>
<div class="row ls-bottom-gap">
    <div class="col-md-4">
        <!--User Activities Wrapper Start-->
        <div class="ls-user-activities">
            <h3 class="ls-header">Activities</h3>
            <hr>
            <!--Nano Scroll Wrap Start-->
            <div class="feed-box-profile">


                <div class="nano">
                    <div class="nano-content">
                        <div class="feed-box">
                            <ul class="ls-feed">
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-check white"></i>
                                                    </span>
                                    You have 4 pending tasks.
                                    <span class="date">Just now</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-light-green">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </span>
                                    Finance Report for year 2013.
                                    <span class="date">30 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </span>
                                    New order received <span class="red">ID: DR23923</span>
                                    <span class="date">45 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                    You have 5 pending membership <a class="">view</a>
                                    <span class="date">50 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-bell"></i>
                                                    </span>
                                    Web server hardware upgraded. <a class="">view</a>
                                    <span class="date">1 hr</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-blue">
                                                        <i class="fa fa-briefcase"></i>
                                                    </span>
                                    IPO Report for year <a class="lightGreen">2014</a>
                                    <span class="date">5 hrs</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-check white"></i>
                                                    </span>
                                    You have 4 pending tasks.
                                    <span class="date">Just now</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-light-green">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </span>
                                    Finance Report for year 2013.
                                    <span class="date">30 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </span>
                                    New order received <span class="red">ID: DR23923</span>
                                    <span class="date">45 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                    You have 5 pending membership <a class="">view</a>
                                    <span class="date">50 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-bell"></i>
                                                    </span>
                                    Web server hardware upgraded <a class="">view</a>
                                    <span class="date">1 hr</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-blue">
                                                        <i class="fa fa-briefcase"></i>
                                                    </span>
                                    IPO Report for year <a class="lightGreen">2014</a>
                                    <span class="date">5 hrs</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-check white"></i>
                                                    </span>
                                    You have 4 pending tasks.
                                    <span class="date">Just now</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-light-green">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </span>
                                    Finance Report for year 2013.
                                    <span class="date">30 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </span>
                                    New order received <span class="red">ID: DR23923</span>
                                    <span class="date">45 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                    You have 5 pending membership <a class="">view</a>
                                    <span class="date">50 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-bell"></i>
                                                    </span>
                                    Web server hardware upgrade. <a class="">view</a>
                                    <span class="date">1 hr</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-blue">
                                                        <i class="fa fa-briefcase"></i>
                                                    </span>
                                    IPO Report for year <a class="lightGreen">2014</a>
                                    <span class="date">5 hrs</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-check white"></i>
                                                    </span>
                                    You have 4 pending tasks.
                                    <span class="date">Just now</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-light-green">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </span>
                                    Finance Report for year 2013.
                                    <span class="date">30 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </span>
                                    New order received <span class="red">ID: DR23923</span>
                                    <span class="date">45 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                    You have 5 pending membership <a class="">view</a>
                                    <span class="date">50 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-bell"></i>
                                                    </span>
                                    Web server hardware upgraded. <a class="">view</a>
                                    <span class="date">1 hr</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-blue">
                                                        <i class="fa fa-briefcase"></i>
                                                    </span>
                                    IPO Report for year <a class="lightGreen">2014</a>
                                    <span class="date">5 hrs</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-check white"></i>
                                                    </span>
                                    You have 4 pending tasks.
                                    <span class="date">Just now</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-light-green">
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </span>
                                    Finance Report for year 2013.
                                    <span class="date">30 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </span>
                                    New order received <span class="red">ID: DR23923</span>
                                    <span class="date">45 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-lightBlue">
                                                        <i class="fa fa-user"></i>
                                                    </span>
                                    You have 5 pending membership <a class="">view</a>
                                    <span class="date">50 min</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-red">
                                                        <i class="fa fa-bell"></i>
                                                    </span>
                                    Web server hardware upgraded.<a class="">view</a>
                                    <span class="date">1 hr</span>
                                </li>
                                <!--List Finish-->
                                <!--List Start-->
                                <li>
                                                    <span class="label label-blue">
                                                        <i class="fa fa-briefcase"></i>
                                                    </span>
                                    IPO Report for year <a class="lightGreen">2014</a>
                                    <span class="date">5 hrs</span>
                                </li>
                                <!--List Finish-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--Nano Scroll Wrap Finish-->
        </div>
        <!--User Activities Wrapper Finish-->

        <a id="ls-downloadLink" href="javascript:void(0);" target="_blank"
           type="application/octet-stream" download="" class=" btn ls-red-btn col-md-12">Download Resume</a>

    </div>
    <div class="col-md-4">
        <!--User Task Wrapper Start-->
        <div class="ls-user-task">
            <h3 class="ls-header">Tasks</h3>

            <hr>
            <!--Task List Start-->
            <ul id="slippylist">
                <li><i class="fa fa-circle-o"></i> <span>Task A1 Create PSD design</span>
                    <button class="btn ls-red-btn removeTask"><i class="fa fa-trash-o"></i></button>
                </li>
                <li><i class="fa fa-circle-o"></i> <span>Task A2 Create HTML</span>
                    <button class="btn ls-red-btn removeTask"><i class="fa fa-trash-o"></i></button>
                </li>
                <li><i class="fa fa-circle-o"></i> <span>Task A3 Create Wordpress</span>
                    <button class="btn ls-red-btn removeTask"><i class="fa fa-trash-o"></i></button>
                </li>
                <li>
                    <i class="fa fa-circle-o"></i>
                    <span>Task A4 Testing</span>
                    <button class="btn ls-red-btn removeTask"><i class="fa fa-trash-o"></i></button>
                </li>
                <li class="strikeout"><i class="fa fa-check"></i> <span>Swipe to remove </span>
                    <button class="btn ls-red-btn removeTask"><i class="fa fa-trash-o"></i></button>
                </li>
            </ul>
            <!--Task List Finish-->
            <!--Task Action -->
            <form class="lsn_form" action="#">
                <input id="newTask" type="text" class="form-control" value="" placeholder="Write your task here">
                <button id="newTaskAdd" class=" btn ls-red-btn col-md-12" type="button">Add</button>
            </form>
        </div>
        <!--User Task Wrapper Finish-->
    </div>

    <div class="col-md-4">
        <div class="ls-project ls-prettyPhoto">
            <h3 class="ls-header">Projects</h3>
            <hr>

            <ul id="ls-project-lightGallery">
                <li data-src="assets/images/gallery/book-table-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/1.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>

                </li>
                <li data-src="assets/images/gallery/dj-mix-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/2.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/iphone-hand-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/3.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/camera-lense-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/4.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/i-phone5s-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/5.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/iphone-diary-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/7.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/book-table-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/1.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/dj-mix-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/2.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">
                                Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/iphone-hand-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/3.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/camera-lense-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/4.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/i-phone5s-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/5.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">Read More</a>
                        </div>
                    </div>
                </li>
                <li data-src="assets/images/gallery/iphone-diary-460x290.png">
                    <div class="ls-view ls-hover-effect">
                        <img class="img-thumbnail" src="assets/images/gallery/120/7.png" alt=" ">

                        <div class="ls-mask">
                            <a class="info" href="javascript:void(0);">Read More</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>
<!-- Main Content Element  End-->

</div>
</div>
@stop