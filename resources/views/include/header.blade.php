
        <header class="header">
            <div class="container">
                <div class="hovermenu ttmenu">
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand" href="{{ url('index') }}"><img
                                        src="{{ asset('asset/images/xlogo.png.pagespeed.ic.vap6Ukaf0i.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown ttmenu-half"><a href="{{ url('index') }}"
                                        >Home </a>
                                </li>
                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown"
                                        class="dropdown-toggle">About<b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="ttmenu-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="{{ url('aboutus') }}">About Us</a></li>
                                                                <li><a href="{{ url('messages') }}">Message</a></li>
                                                                <li><a href="{{ url('plannings') }}">Planning</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>


                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown"
                                        class="dropdown-toggle">Examination <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="ttmenu-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="{{ url('notices') }}">Notice</a></li>
                                                                <li><a href="{{ url('results') }}">Result</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown"
                                        class="dropdown-toggle">Courses <b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="ttmenu-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="box">
                                                            <ul>
                                                                @foreach ($categories as $category)
  <li><a href="{{ url('courses/'.$category->c_id) }}">{{ $category->c_name }}</a></li>
@endforeach

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('teachers') }}">Teachers</a></li>
                                 <li class="dropdown ttmenu-half"><a href="{{ url('contacts') }}"
                                        >Contact </a>
                                </li>

                                <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown"
                                        class="dropdown-toggle">Pages<b class="fa fa-angle-down"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="ttmenu-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="{{ url('galleries') }}">Gallery</a></li>
                                                                <li><a href="{{ url('events') }}">Event</a></li>
                                                                <li><a href="{{ url('blogs') }}">Blogs</a>
                                                                <li><a href="{{ url('newses') }}">News</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </header>
