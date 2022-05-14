@extends('visitor-layout.main')

@section('content')
<header class="header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{asset('assets/img/hd-3.jpg')}}" data-offset="0">
    <div class="container">
        <h1>The trek</h1>
        <h2>Talent wins games, but teamwork win championships</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Treks</a></li>
            <li><a href="#">Single trek</a></li>
        </ol>
    </div>
</header>
<main>
    <section class="section-base section-color">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                        Utenim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquipo.
                    </p>  
                </div>
                <div class="col-lg-6">
                    <ul class="text-list text-list-line">
                        <li><b>Mountain</b><hr /><p>Monte Bianco</p></li>
                        <li><b>Address</b><hr /><p>Monte Bianco, Veneto, Italy</p></li>
                        <li><b>Altitude</b><hr /><p>1900 m</p></li>
                        <li><b>Area</b><hr /><p>123.456 m2</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section-base">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="timeline">
                        <div>
                            <div class="badge"><p>Day 1</p></div>
                            <div class="panel">
                                <h3 class="timeline-title">11 May 2023</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor incididunt utlabore et dolore magna aliqua.
                                    Utenim ad minim veniam rcitation ullamco laboris nisi ut aliquip.
                                </p>
                            </div>
                        </div>
                        <div class="inverted">
                            <div class="badge"><p>Day 2</p></div>
                            <div class="panel">
                                <h3 class="timeline-title">12 May 2023</h3>
                                <p>
                                    Lorem ipsum dolor sit amet corcitation ullamco laboris nisi ut aliquipnsected do eiusmod tempore artnesiano orte.
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="badge"><p>Day 3</p></div>
                            <div class="panel">
                                <h3 class="timeline-title">13 May 2023</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectedrcitation ullamco laboris nisi ut aliquip  re martllo artnesiano orte.
                                </p>
                            </div>
                        </div>
                        <div class="inverted">
                            <div class="badge"><p>Day 4</p></div>
                            <div class="panel">
                                <h3 class="timeline-title">14 May 2023</h3>
                                <p>
                                    Lorem ipsum dolor sit amet crcitation ullamco laboris nisi ut aliquiponsected do eiusmod tempore martllo artnesiano orte.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="counter counter-vertical counter-icon">
                        <div>
                            <h3>Duration</h3>
                            <div class="value">
                                <span class="text-lg" data-to="10" data-speed="2000">10</span>
                                <span>Days</span>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="counter counter-vertical counter-icon">
                        <div>
                            <h3>Tracks length</h3>
                            <div class="value">
                                <span class="text-lg" data-to="8000" data-speed="2000">8000</span>
                                <span>km</span>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="counter counter-vertical counter-icon">
                        <div>
                            <h3>Team Members</h3>
                            <div class="value">
                                <span class="text-lg" data-to="25" data-speed="2000">25</span>
                                <span>+</span>
                            </div>
                        </div>
                    </div>
                    <hr class="space" />
                    <ul class="slider" data-options="type:slider,nav:true,arrows:true,controls:out,perView:1">
                        <li>
                            <a class="img-box lightbox" href="http://via.placeholder.com/800x500" data-lightbox-anima="fade-left">
                                <img src="http://via.placeholder.com/800x500" alt="">

                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="http://via.placeholder.com/800x500" data-lightbox-anima="fade-left">
                                <img src="http://via.placeholder.com/800x500" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="img-box lightbox" href="http://via.placeholder.com/800x500" data-lightbox-anima="fade-left">
                                <img src="http://via.placeholder.com/800x500" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12" style="margin-top: 100px">
                    
                    <a href="/contact" class="btn btn-sm btn-circle full-width-sm" style="width: 100%">Join Now</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection