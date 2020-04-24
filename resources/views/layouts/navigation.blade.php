<nav id="navigation_bar" class="navbar navbar-default sa-navbar">
    <div class="container">
        <div class="navbar-header">
            <div class="logo">
                <a href="{{'/'}}"><img src="{{asset('images/logo.png')}}" alt="image" /></a>
            </div> <!-- /Logo -->
            <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav">

                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="">Programmes</a></li>

                <li class="dropdown has-mega-menu clearfix">
                    <a href="#">
                        Branches <span class="nav_arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="mega-menu-item">
                            <ul class="sub-menu">
                                <li><a href="">Kampala headquarters </a></li>
                                <li><a href="">Kiboga</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown has-mega-menu clearfix">
                    <a href="#">
                        Ministries <span class="nav_arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="mega-menu-item">
                            <ul class="sub-menu">
                                <li><a href="">Youth</a></li>
                                <li><a href="">Woman</a></li>
                                <li><a href="">Man</a></li>
                                <li><a href="">Worship team</a></li>
                                <li><a href="">Evangelism</a></li>

                            </ul>
                        </li>
                    </ul>
                </li>



                <li><a href="blog.html">Gallery</a></li>
                <li><a href="{{route('contact-us')}}">Contact</a></li>



                <li><a class="btn btn-primary" href="">Donate</a></li>
            </ul>
        </div>
    </div>
</nav>
