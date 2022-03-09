<div class="topbar pt-3 pb-3">
    <div class="container ">
        <div class="row align-items-center">
            <div class="col-md-6 col-5 text-md-start  text-center d-none d-md-block">
                <ul class="list-inline top-menu uppercase fs-16 m-0 ms-5">
                    <li class="list-inline-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="list-inline-item"><a href="{{route('career')}}">Careers</a></li>
                    <li class="list-inline-item"><a href="{{route('leadership')}}">Leadership</a></li>
                    <li class="list-inline-item"><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-10 white text-md-end text-center ">
                <ul class="list-inline top-contact-info uppercase fs-16 m-0 ms-0 ms-md-5">
                    <!--<li class="list-inline-item position-relative me-md-5 me-0"><i
                            class="icon-phone2 fs-18 white"></i><span class="fs-14 raleway">(757)
                            269-9864</span></li>-->
                    <li class="list-inline-item position-relative ms-2 me-3"><i
                            class="icon-mail fs-18 white"></i><span
                            class="fs-14 raleway">Info@futronaviation.com</span></li>
                    <li class="list-inline-item"><a href="mailto:>Info@futronaviation.com" class="me-1"><i
                                class="icon-facebook fs-20 white"></i></a></li>
                    <li class="list-inline-item"><a href="#" class=""><i
                                class="icon-twitter fs-20 white"></i></a></li>
                </ul>
            </div>
            <div class="col-2 d-inline d-md-none">
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavMobile"
                aria-controls="navbarNavMobile" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon top-bar"></span>
                <span class="toggler-icon middle-bar"></span>
                <span class="toggler-icon bottom-bar"></span>
              </button>
            </div>
        </div>
    </div>
</div>
<div class="position-relative d-md-block d-md-none ">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarNavMobile">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('research-studies')) ? 'active' : '' }}" aria-current="page" href="{{route('pageRoute',['page_slug'=>'research-studies'])}}">RESEARCH
                            STUDIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('rtms-and-conferences')) ? 'active' : '' }}" aria-current="page" href="{{route('pageRoute',['page_slug'=>'rtms-and-conferences'])}}">RTMs AND
                            CONFERENCES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('risk-management')) ? 'active' : '' }}" aria-current="page" href="{{route('pageRoute',['page_slug'=>'risk-management'])}}">Risk Management</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Safety Management Systems
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item   {{ (request()->is('safety-management-systems')) ? 'active' : '' }}" aria-current="page" href="{{route('pageRoute',['page_slug'=>'safety-management-systems'])}}">Safety Management Systems</a></li>
                            <li><a class="dropdown-item  {{ (request()->is('safety-culture')) ? 'active' : '' }}" aria-current="page" href="{{route('pageRoute',['page_slug'=>'safety-culture'])}}">Safety Culture</a></li>
                            <li><a class="dropdown-item  {{ (request()->is('safety-risk-assessments')) ? 'active' : '' }}" aria-current="page" href="{{route('pageRoute',['page_slug'=>'safety-risk-assessments'])}}">Safety Risk Assessments</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('unmanned-aircraft-systems-uas')) ? 'active' : '' }}" href="{{route('pageRoute',['page_slug'=>'unmanned-aircraft-systems-uas'])}}">Unmanned Aircraft Systems (UAS)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}>Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('career')}}">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('leadership')}}">Leadership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="logo-wrap mt-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7">
                <div class="row align-items-center">
                    <div class="col-3 col-md-3">
                        <img src="{{ asset('images/logos/35Logo.png') }}" class="img-fluid"
                            style="max-width: 100%;">
                    </div>
                    <div class="col-6 col-md-6">
                        <img src="{{ asset('images/logos/logo_blue.png') }}" class="img-fluid"
                            style="max-width: 100%">
                    </div>
                    <div class="col-3 col-md-3">
                        <img src="{{ asset('images/logos/topbarlogo.png') }}" class="img-fluid"
                            style="max-width: 100%;">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>