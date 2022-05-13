<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | 1 | Alpins | Mountain and trekking Template</title>
    <meta name="description" content="">
    <script src="{{asset('assets/themekit/scripts/jquery.min.js')}}"></script>
    <script src="{{asset('assets/themekit/scripts/main.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/themekit/css/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/glide.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/content-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/contact-form.css')}}">
    <link rel="stylesheet" href="{{asset('assets/themekit/css/media-box.css')}}">
    <link rel="stylesheet" href="{{asset('assets/skin.css')}}">
    <link rel="icon" href="{{asset('assets/media/favicon.png')}}">
</head>
<body class="page-main">
    <div id="preloader"></div>
    <nav class="menu-classic menu-fixed menu-transparent light align-right" data-menu-anima="fade-in">
        <div class="container">
            <div class="menu-brand">
                <a href="#">
                    <img class="logo-default scroll-hide" src="{{asset('assets/media/logo-white-blue.svg')}}" alt="logo" />
                    <img class="logo-retina scroll-hide" src="{{asset('assets/media/logo-white-blue.svg')}}" alt="logo" />
                    <img class="logo-default scroll-show" src="{{asset('assets/media/logo-white-solid.svg')}}" alt="logo" />
                    <img class="logo-retina scroll-show" src="{{asset('assets/media/logo-white-solid.svg')}}" alt="logo" />
                </a>
            </div>
            <i class="menu-btn"></i>
            <div class="menu-cnt">
                <ul id="main-menu">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Tracks</a>
                    </li>
                    <li>
                        <a href="#">Contacts</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <section class="section-image section-full-width-right light ken-burn-center" data-parallax="scroll" data-image-src="{{asset('assets/img/hd-1.jpg')}}">
            <div class="container">
                <hr class="space-lg" />
                <hr class="space-sm" />
                <div class="row">
                    <div class="col-lg-6">
                        <h1 data-anima="fade-left" data-time="2000" class="text-lg text-uppercase text-black">Amazing mountain to explore</h1>
                        <hr class="space-lg" />
                        <hr class="space-sm hidden-lg" />
                        <ul class="slider width-50" data-options="type:slider,perView:1">
                            <li>
                                <p class="quote">
                                    Do not follow where the path may lead. Go instead where there is no path and leave a trail.
                                    <span class="quote-author">Ralph Emerson</span>
                                </p>
                            </li>
                            <li>
                                <p class="quote">
                                    When everything feels like an uphill struggle. Just wait and think of the view from the top.
                                    <span class="quote-author">Wislawa Symborska</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <hr class="space-xs" />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Altitude</h3>
                                <div class="value">
                                    <span class="text-md" data-to="1650" data-speed="5000">1650</span>
                                    <span>m</span>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Tracks</h3>
                                <div class="value">
                                    <span class="text-md" data-to="7" data-speed="5000">7</span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <hr class="space-sm" />
                        <div class="counter counter-vertical counter-icon">
                            <div>
                                <h3>Tourists / year</h3>
                                <div class="value">
                                    <span class="text-md" data-to="2000" data-speed="5000">2000</span>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                        <hr class="space" />
                        <ul class="slider" data-options="type:carousel,nav:true,perView:3,perViewLg:2,perViewSm:1,gap:30,controls:out,autoplay:3000">
                            <li>
                                <a class="img-box btn-video lightbox" href="https://www.youtube.com/watch?v=Lb4IcGF5iTQ" data-lightbox-anima="fade-top">
                                    <img src="{{asset('assets/img/image-1.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="{{asset('assets/img/image-2.jpg')}}" data-lightbox-anima="fade-top">
                                    <img src="{{asset('assets/img/image-2.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="{{asset('assets/img/image-3.jpg')}}" data-lightbox-anima="fade-top">
                                    <img src="{{asset('assets/img/image-3.jpg')}}" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="img-box lightbox" href="{{asset('assets/img/image-4.jpg')}}" data-lightbox-anima="fade-top">
                                    <img src="{{asset('assets/img/image-4.jpg')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="space-lg" />
            </div>
        </section>
        {{-- <section class="section-base">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="slider controls-right" data-options="type:carousel,nav:true,perView:2,perViewSm:1,gap:30,controls:out">
                            <li>
                                <div class="cnt-box cnt-box-info" data-href="#">
                                    <div class="extra-field">From $49</div>
                                    <a href="#" class="img-box"><img src="{{asset('assets/img/image-5.jpg')}}" alt="" /></a>
                                    <div class="caption">
                                        <h2>Bianco Excursion</h2>
                                        <div class="cnt-info">
                                            <div><span>Days</span><span>3</span></div>
                                            <div><span>Group size</span><span>10</span></div>
                                            <div><span>Difficulty</span><span>Easy</span></div>
                                        </div>
                                        <p>
                                            Monte bianco is a mountain located in the deep nature and rivers.
                                        </p>
                                        <div class="bottom-info">
                                            Monte bianco, Alpes, Italy
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-info" data-href="#">
                                    <div class="extra-field">From $89</div>
                                    <a href="#" class="img-box"><img src="{{asset('assets/img/image-6.jpg')}}" alt="" /></a>
                                    <div class="caption">
                                        <h2>Civetta Trekking</h2>
                                        <div class="cnt-info">
                                            <div><span>Days</span><span>5</span></div>
                                            <div><span>Group size</span><span>5</span></div>
                                            <div><span>Difficulty</span><span>Medium</span></div>
                                        </div>
                                        <p>
                                            Civetta is a mountain located in alps and is one of the most famous.
                                        </p>
                                        <div class="bottom-info">
                                            Civetta, Alpes, Italy
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="cnt-box cnt-box-info" data-href="#">
                                    <div class="extra-field">From $89</div>
                                    <a href="#" class="img-box"><img src="{{asset('assets/img/image-7.jpg')}}" alt="" /></a>
                                    <div class="caption">
                                        <h2>Nevegal Trekking</h2>
                                        <div class="cnt-info">
                                            <div><span>Days</span><span>1</span></div>
                                            <div><span>Group size</span><span>15</span></div>
                                            <div><span>Difficulty</span><span>Medium</span></div>
                                        </div>
                                        <p>
                                            Nevegal is a mountain near a great and friendly mountain village.
                                        </p>
                                        <div class="bottom-info">
                                            Civetta, Alpes, Italy
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <hr class="space-sm visible-sm" />
                        <div class="title">
                            <h2>Latest trips</h2>
                            <p>Explore the unexplored world</p>
                        </div>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                            Utenim ad minim veniam quiso.
                        </p>
                        <a href="#" class="btn btn-circle btn-xs">Join us now</a>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="section-base section-color">
            <div class="container">
                <div class="title align-center align-left-md">
                    <h2>About us</h2>
                    <p>We live for the nature</p>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do esectetur adipiscing elitsed do eiusmoiusmod tempor incididunt utlabore et dolore magna aliqua.
                            Utenim ad minim veniam quis nostrud exercitation ullamco laboris scing elitsed do esectetur adipiscing elite nature.
                        </p>
                    </div>
                    <div class="col-lg-3 no-margin-md">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing el adipiscing sscing elitsed do esectetur adipiscing eliectetur adipiscing elitsed do eiusmoelitsed do eiusmod tempor incididusmod titsed do eiusmod tempore.
                        </p>
                        <hr class="space-sm" />
                        <a href="about.html" class="btn-text">Read more</a>
                    </div>
                    <div class="col-lg-6">
                        <ul class="accordion-list" data-open="1">
                            <li>
                                <a href="#">Our mountains and our location</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">About our treks and trips</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation .
                                    </p>
                                </div>
                            </li>
                            <li>
                                <a href="#">About our team and guests</a>
                                <div class="content">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                        Utenim ad minim veniam quis nostrud exercitation.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base">
            <div class="container">
                <div class="title align-center align-left-md">
                    <h2>Our Team</h2>
                    <p>Experienced Guider</p>
                </div>
                <div class="grid-list gap-60" data-columns="4" data-columns-md="2" data-columns-sm="1" data-gap="60">
                    <div class="grid-box">
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-1" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-1.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Jessica Parker</h2>
                                    <span>Terapist</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-2" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-2.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Albert Travolta</h2>
                                    <span>Climber</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-1" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-3.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Alessia Cort</h2>
                                    <span>Climber</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-2" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-4.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Alexa Nigarra</h2>
                                    <span>Climber</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-1" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-5.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Sarah Alba</h2>
                                    <span>Climber</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-2" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-6.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Alicia Freddy</h2>
                                    <span>Terapist</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-1" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-7.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Mara Gomez</h2>
                                    <span>Climber</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-item">
                            <div class="cnt-box cnt-box-team lightbox" data-href="#user-2" data-lightbox-anima="fade-in">
                                <img src="{{asset('assets/img/user-8.jpg')}}" alt="" />
                                <div class="caption">
                                    <h2>Erik Pizz</h2>
                                    <span>Climber</span>
                                    <span class="icon-links">
                                        <a href="#" target="_blank"><i class="icon-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="icon-twitter"></i></a>
                                        <a href="#" target="_blank"><i class="icon-instagram"></i></a>
                                    </span>
                                    <p>
                                        Lorem ipsum dolor sitamet consectetur eiusmo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="user-1" class="box-lightbox-md light">
                    <h2>Jessica Parker</h2>
                    <h4>Terapist</h4>
                    <hr class="space-sm" />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <hr class="space-sm" />
                    <span class="icon-links icon-links-grid icon-social social-colors">
                        <a href="#" target="_blank" class="facebook"><i class="icon-facebook"></i></a>
                        <a href="#" target="_blank" class="twitter"><i class="icon-twitter"></i></a>
                        <a href="#" target="_blank" class="instagram"><i class="icon-instagram"></i></a>
                    </span>
                </div>
                <div id="user-2" class="box-lightbox-md light">
                    <h2>Albert Travolta</h2>
                    <h4>Alpinist</h4>
                    <hr class="space-sm" />
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    <hr class="space-sm" />
                    <span class="icon-links icon-links-grid icon-social social-colors">
                        <a href="#" target="_blank" class="facebook"><i class="icon-facebook"></i></a>
                        <a href="#" target="_blank" class="twitter"><i class="icon-twitter"></i></a>
                        <a href="#" target="_blank" class="instagram"><i class="icon-instagram"></i></a>
                    </span>
                </div>
                <hr class="space" />
            </div>
        </section>
        <section class="section-slider alpins-slider light section-full-width-left" data-slider-parallax="true" data-interval="0">
            <div class="background-slider">
                <div class="active" style="background-image:url({{asset('assets/img/hd-3.jpg')}})"></div>
                <div style="background-image:url({{asset('assets/img/hd-4.jpg')}})"></div>
                <div style="background-image:url({{asset('assets/img/hd-5.jpg')}})"></div>
                <div style="background-image:url({{asset('assets/img/hd-6.jpg')}})"></div>
                <div style="background-image:url({{asset('assets/img/hd-7.jpg')}})"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="slider" data-options="type:slider,nav:true,arrows:true,perView:3,perViewLg:2,perViewSm:1,gap:30,controls:out">
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="{{asset('assets/img/long-1.jpg')}}" alt="">
                                    <div class="caption">
                                        <h2>Bianco</h2>
                                        <div class="extra-field">From $95</div>
                                        <h3>Alpes, Italy</h3>
                                        <p>
                                            Lorem ipsum dolore consectetur adipisicing e ididunto pertinole.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="{{asset('assets/img/long-2.jpg')}}" alt="">
                                    <div class="caption">
                                        <h2>Civetta</h2>
                                        <div class="extra-field">From $95</div>
                                        <h3>Dolomiti, Italy</h3>
                                        <p>
                                            Lorem ipsum dolore consectetur adipisicing e ididunto pertinole.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="{{asset('assets/img/long-4.jpg')}}" alt="">
                                    <div class="caption">
                                        <h2>Teton</h2>
                                        <div class="extra-field">From $150</div>
                                        <h3>Wyoming, USA</h3>
                                        <p>
                                            Lorem ipsum dolore consectetur adipisicing e ididunto pertinole.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="{{asset('assets/img/long-6.jpg')}}" alt="">
                                    <div class="caption">
                                        <h2>Corsica</h2>
                                        <div class="extra-field">From $50</div>
                                        <h3>Corsica, France</h3>
                                        <p>
                                            Lorem ipsum dolore consectetur adipisicing a didunto pertinole.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="treks-single.html" class="media-box media-box-reveal" data-anima="scale" data-trigger="hover">
                                    <img class="anima" src="{{asset('assets/img/long-7.jpg')}}" alt="">
                                    <div class="caption">
                                        <h2>Norda</h2>
                                        <div class="extra-field">From $95</div>
                                        <h3>Monte Rosa, Italy</h3>
                                        <p>
                                            Lorem ipsum dolore consectetur adipisicing a didunto pertinole.
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6" data-anima="fade-left" data-time="2000">
                        <h1 class="text-lg text-uppercase text-black">Adventure Package</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiure consectetur adipisicing a didunto persmo. 
                        </p>
                        <a href="treks.html" class="btn btn-sm btn-circle">Start Journey</a>
                        <hr class="space hidden-md" />
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="title align-center align-left-md">
                    <h2>Special Food and Equipment</h2>
                    <p>Propper Equipment is a Good Deal</p>
                </div>
                <div class="tab-box" data-tab-anima="fade-in">
                    <ul class="tab-nav align-center">
                        <li class="active"><a href="#">Food</a></li>
                        <li><a href="#">Tent</a></li>
                        <li><a href="#">Backpack</a></li>
                        <li><a href="#">Suplement</a></li>
                    </ul>
                    <div class="panel active">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-1.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>1 Italian cheese</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus martillo.</p>
                                            <div>$15</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-3.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>2 Home made speck</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus area.</p>
                                            <div>$15</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-5.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>3 Mountain salumi</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimuso eccelso de latoco.</p>
                                            <div>$17</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-10.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>4 Kedua Home made bread</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimuse.</p>
                                            <div>$19</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-8.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>5 Mushroom and cheese</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto concillo speccato.</p>
                                            <div>$15</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-2.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>6 Bread with wurstel</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>$15</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-5.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>7 Ketiga Croissant</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-6.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>8 Blueberries</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-9.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>9 Ice cream</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-10.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>10 Keempat Brown cookies</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-1.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>11 Text list image</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-2.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>12 Text list image</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-8.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>13 Kelima Croissant</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-4.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>14 Blueberries</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-10.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>15 Ice cream</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-6.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>16 Brown cookies</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-10.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>17 Text list image</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-5.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>18 Text list image</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="row">
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-2.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>19 Croissant</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-1.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>20 Blueberries</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-3.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>21 Ice cream</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul class="text-list text-list-image">
                                    <li>
                                        <img src="{{asset('assets/img/square-5.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>22 Brown cookies</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-6.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>23 Text list image</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('assets/img/square-8.jpg')}}" alt="" />
                                        <div class="content">
                                            <h3>24 Text list image</h3>
                                            <p>Placeat orci commodo, amet quo rem architecto possimus.</p>
                                            <div>123</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-base">
            <div class="container">
                <div class="title align-center">
                    <h2>Top service</h2>
                    <p>We provide the best experience</p>
                </div>
                <table class="table table-grid table-border table-6-md">
                    <tbody>
                        <tr>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-foot-2"></i>
                                    <div class="caption">
                                        <h3>Experienced team</h3>
                                        <p>We always lived inside our amazing nature</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-icq"></i>
                                    <div class="caption">
                                        <h3>Easy joining</h3>
                                        <p>Contact us and in 2 minutes you're booked</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-landscape"></i>
                                    <div class="caption">
                                        <h3>Expert hikers</h3>
                                        <p>Our mountans teached us everything we know</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-forest"></i>
                                    <div class="caption">
                                        <h3>Secret locations</h3>
                                        <p>Discover hidden natural places with our tours</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-flag-4"></i>
                                    <div class="caption">
                                        <h3>Europe locations</h3>
                                        <p>We provide trips on varous europe countries</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-map2"></i>
                                    <div class="caption">
                                        <h3>Visit us</h3>
                                        <p>We are in the north of italy near the mountains</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-globe"></i>
                                    <div class="caption">
                                        <h3>United States</h3>
                                        <p>Once a year join us to the other part of the world</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="icon-box icon-box-top align-center">
                                    <i class="im-rainbow-2"></i>
                                    <div class="caption">
                                        <h3>Great waterfall</h3>
                                        <p>Our excursions will bring you to great waterfalls</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="section-base section-color">
            <div class="container">
                <div class="title align-center">
                    <h2>Newsletter</h2>
                    <p>Subscribe now to our newsletter</p>
                </div>
                <form data-anima="fade-in" data-time="1000" action="HTWF/scripts/php/contact-form.php" class="form-box form-ajax form-inline align-center" method="post" data-email="example@domain.com">
                    <div class="row">
                        <div class="col-lg-4">
                            <input id="name" name="name" placeholder="Name" type="text" class="input-text" required>
                        </div>
                        <div class="col-lg-4">
                            <input id="email" name="email" placeholder="Email" type="email" class="input-text" required>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-sm" type="submit">Subscribe</button>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-checkbox">
                                <input type="checkbox" id="check" name="check" value="check" required>
                                <label for="check">By click subscribe you accept the terms of service and the privacy policy.</label>
                            </div>
                        </div>
                    </div>
                    <div class="success-box">
                        <div class="alert alert-success">Congratulations. You're now a subscriber!</div>
                    </div>
                    <div class="error-box">
                        <div class="alert alert-warning">Error, please retry. Your message has not been sent.</div>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer class="light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3>Alpins</h3>
                    <p>Somewhere between the bottom of the climb and the summit is the answer to the mystery why we climb.</p>
                </div>
                <div class="col-lg-4">
                    <h3>Contacts</h3>
                    <ul class="icon-list icon-line">
                        <li>San Pellegrino, BG, Italy</li>
                        <li>hello@example.com</li>
                        <li>02 123 333 444</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="icon-links icon-social icon-links-grid social-colors">
                        <a class="facebook"><i class="icon-facebook"></i></a>
                        <a class="twitter"><i class="icon-twitter"></i></a>
                        <a class="instagram"><i class="icon-instagram"></i></a>
                        <a class="google"><i class="icon-google"></i></a>
                    </div>
                    <hr class="space-sm" />
                    <p>Subscribe to our newsletter of follow us on the social channels to stay tuned.</p>
                </div>
            </div>
        </div>
        <div class="footer-bar">
            <div class="container">
                <span>© 2019 Alpins - Hiking & Outdoor.</span>
                <span><a href="#">Contact us</a> | <a href="#">Privacy policy</a></span>
            </div>
        </div>
        <link rel="stylesheet" href="{{asset('assets/themekit/media/icons/iconsmind/line-icons.min.css')}}">
        <script src="{{asset('assets/themekit/scripts/parallax.min.js')}}"></script>
        <script src="{{asset('assets/themekit/scripts/glide.min.js')}}"></script>
        <script src="{{asset('assets/themekit/scripts/magnific-popup.min.js')}}"></script>
        <script src="{{asset('assets/themekit/scripts/tab-accordion.js')}}"></script>
        <script src="{{asset('assets/themekit/scripts/imagesloaded.min.js')}}"></script>
        <script src="{{asset('assets/themekit/scripts/progress.js')}}" async></script>
        <script src="{{asset('assets/themekit/scripts/custom.js')}}" async></script>
        <script src="{{asset('assets/themekit/scripts/contact-form/contact-form.js')}}" async></script>
    </footer>
</body>
</html>