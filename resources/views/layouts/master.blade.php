<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Real Estate</title>
    <link rel="shortcut icon" href="{{url('/images/logo/logo.PNG')}}" rel="shortcut icon">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/front.css')}}" type="text/css" media="all" />

</head>
<body>
<section class="agileits_header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="logo_products">
                    <div class="container">
                        <a href="{{ url('') }}">
                            <img class="img-responsive logo" src="{{url('/images/logo/logo.PNG')}}"/>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <ul class="pull-right" style="display:flex;list-style:none;">
                    <li>
                        <form role="form" enctype="multipart/form-data"  method="POST" action="{{ URL::to('/cookie/lang') }}">
                            <input type="hidden"  name="lang" value="en"/>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default">English</button>
                        </form>
                    </li>
                    <li>
                        <form role="form" enctype="multipart/form-data"  method="POST" action="{{ URL::to('/cookie/lang') }}">
                            <input type="hidden" name="lang" value="kh">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default">Khmer</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <nav id="menu" class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand visible-xs visible-sm" href="#">Menu</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{url('')}}"><i class="fa fa-home"></i>Home</a></li>
                    @foreach($categories as $category)
                        <li class="dropdown" id="menuItem" onclick="onEventClick({{ $category->id }})">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{url('/images/category/'.$category->image)}}" style="width: 15px; height :15px;">
                                @if(Cookie::get('lang') == 'kh')
                                    <span class="menu-item"> {{ $category->name  }} </span>
                                @else
                                    <span class="menu-item"> {{ $category->name_en }} </span>
                                @endif
                            </a>
                            @if(isset($category->id))
                                @php
                                    $categoryChildren = \App\Category::where('parent_id', $category->id)->get();
                                @endphp
                                @if(count($categoryChildren) > 0)
                                    <ul class="dropdown-menu">
                                        @foreach($categoryChildren as $cateChild)
                                            <li>
                                                <a href="{{ URL::to('/category/'.$cateChild->id) }}">
                                                    @if(Cookie::get('lang') == 'kh')
                                                        {{ $cateChild->name  }}
                                                    @else
                                                        {{ $cateChild->name_en }}
                                                    @endif
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            @endif
                        </li>
                    @endforeach
                </ul>
                <script type="text/javascript">
                    function onEventClick(cateId) {
                        var url = "<?php echo URL::to('/category/');?>";
                        window.open(url+"/"+cateId,'_self');
                    }
                </script>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        {{--<li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>--}}
                        <li><a href="{{ route('login') }}">
                                <span class="glyphicon glyphicon-log-in"></span>
                                <span class="menu-item">
                                     @if(Cookie::get('lang') == 'kh')
                                        {{ Lang::get('message.login.kh') }}

                                    @else
                                        {{ Lang::get('message.login') }}
                                    @endif
                                </span></a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ URL::to('/admin/index') }}"><i class="icon-dashboard"></i> Admin</a></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                    @endguest
                </ul>
                <form class="navbar-form navbar-right" method="get" action="{{ URL::to('/search') }}" role="search" accept-charset="UTF-8">
                    <div class="form-group">
                        <div class="input-group col-sm-12 col-xs-12">
                            <input type="text" name="txtSearch" id="txtSearch" class="form-control" placeholder="@if(Cookie::get('lang') == 'kh'){{Lang::get('message.search.kh')}}@else{{Lang::get('message.search')}}@endif">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" id="btnSearch"><i><span class="glyphicon glyphicon-search"></span></i></button>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</section>

<br/>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            {{--SLIDE--}}
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @php
                        $i=0;
                    @endphp
                    @foreach($slides as $slide)
                        <li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{ $i == 0 ? 'active' : ''}}"></li>
                        @php
                            $i++;
                        @endphp
                    @endforeach
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @if($slides != null && count($slides) > 0)
                        @php
                            $i=0;
                        @endphp
                        @foreach($slides as $slide)
                            <div class="item {{ $i == 0 ? 'active' : ''}}">
                                <img src="{{asset('images/slide/'.$slide->image)}}" alt="Image" style="width:100%; height: 400px;">
                                <div class="carousel-caption">
                                    <h3>{{ $slide->title  }}</h3>
                                    <p>{{ $slide->desc_en }}</p>
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    @else
                        <div class="item active">
                            <img src="{{asset('images/not-found.png')}}" alt="Image" style="width:100%; height: 400px;">
                            <div class="carousel-caption">
                                <h3> No title </h3>
                                <p> No description </p>
                            </div>
                        </div>

                    @endif
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            {{--END SLIDE--}}
        </div>
    </div>

    @yield('master')

</div>

<footer id="footer">
    <div class="container">
        <div class="row footer-color-con">
            <div class="row">
                <div class="col-md-3">
                    <span>Contact Information</span>
                    <ul class="bottom-menu">
                        <li><span class="list-item">Tel: 012 12 12 12</span></li>
                        <li><span class="list-item">Email: example@info.com</span></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <span>Follow Us</span>
                    <ul class="bottom-menu">
                        <li><a href="https://www.facebook.com" target="_blank" rel="nofollow"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                        <li><a href="https://plus.google.com" target="_blank" rel="nofollow"><i class="fa fa-google" aria-hidden="true"></i> Google Plus</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <span>Customer Service</span>
                    <ul class="bottom-menu">
                        <li><a href="{{url('/about')}}" title="About Us">About Us</a></li>
                        <li><a href="{{url('/privacy')}}" title="Privacy Policy">Private Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <span>Download our app for free</span>
                    <ul class="bottom-menu li-buttom-menu-app">
                        <li>
                            <a href="{{url('')}}" target="_blank" rel="nofollow">
                                <img class="img-responsive" src="{{url('images/appstore.png')}}"/>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('')}}" target="_blank" rel="nofollow">
                                <img class="img-responsive" src="{{url('images/playstore.png')}}" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center copy-right">
        <span>Copyright ©2018 <a href="{{url('')}}">Real EState </a> (Cambodia). All rights reserved.</span>
    </div>
</footer>
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>


<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $().UItoTop({ easingType: 'easeOutQuart' });

        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
            }
        );

        var navoffeset = $(".agileits_header").offset().top;
        if (typeof navoffeset !== 'undefined') {

            $(window).scroll(function(){
                var scrollpos=$(window).scrollTop();
                if(scrollpos >=navoffeset){
                    $(".agileits_header").addClass("fixed");
                }else{
                    $(".agileits_header").removeClass("fixed");
                }
            });
        }

        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>

</body>
</html>


