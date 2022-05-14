<nav class="menu-classic menu-fixed {{ Request::is('/') ? 'menu-transparent light' : '' }}  align-right " data-menu-anima="fade-in">
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
                    <a href="/tracks">Tracks</a>
                </li>
                <li>
                    <a href="/contact">Contacts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>