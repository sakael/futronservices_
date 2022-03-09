<div class="container d-none d-md-block mt-3 bigscreen-nav">
    <div class="row">
        <div class="col-xl-11 col-lg-12  col-md-12 col-sm-12 col-12">
            <nav class="navbar navbar-expand-lg bigscreen">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
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
                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown"
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
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>