<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('website/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('website/css/flexslider.css')}}" rel="stylesheet" />
    <link href="{{asset('website/css/style.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('website/css/font-awesome.min.css')}}">
    <script src="{{asset('website/js/jquery.min.js')}}"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>




    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>

        {{--  {{getSetting()}} --}}

        3karat

        |

        @yield('title')

    </title>

    @yield('header')

            <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {!! Html::style('cus/css/select2.min.css') !!}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

</head>


<body >



<div id="app" >


        <div class="header" style="padding-bottom: 25px ;" >
            <div class="container" style="padding-top: 0px; "> <a class="navbar-brand" href="{{ url('/') }}"><i class="fa fa-paper-plane"></i> 3karat</a>
                <div class="menu"> <a class="toggleMenu" href="#"><img src="{{asset('website/images/nav_icon.png')}}" alt="" /> </a>
                    <ul class="nav" id="nav">
                        <li class="current"><a href="{{url('/home')}}">Home</a></li>
                        <li class=""><a href="{{url('/showAllBuildings')}}">All Buildings</a></li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               {{__('rent')}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <ul  {{-- class="dropdown-menu" role="menu" --}}>

                                        @foreach(bu_type() as $keyType => $type)
                                            <li style="width:100% ;"><a href="{{url('/search?bu_rent=0&bu_type='.$keyType)}}">{{$type}}</a> </li>
                                        @endforeach

                                    </ul>
                                </a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{__('ownership')}} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <ul  {{-- class="dropdown-menu" role="menu" --}}>

                                        @foreach(bu_type() as $keyType => $type)
                                            <li style="width:100% ;"><a  href="{{url('/search?bu_rent=1&bu_type='.$keyType)}}">{{$type}}</a> </li>
                                        @endforeach

                                    </ul>
                                </a>
                            </div>
                        </li>





                        <li><a href="about.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="{{url('/contact')}}">Contact Us</a></li>



                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest


                            <div class="clear"></div>
                    </ul>

                </div>
            </div>
        </div>



    <main class="py-4 " style="padding: 0px 0px 0px 0px;" >

        @yield('content')
    </main>



</div>



<div class="footer">
    <div class="footer_bottom">
        <div class="follow-us">
            <a class="fa fa-facebook social-icon" href=" {{getSetting('facebook')}}"></a>
            <a class="fa fa-twitter social-icon" href="{{getSetting('twitter')}}"></a>
            <a class="fa fa-linkedin social-icon" href="{{getSetting('facebook')}}"></a>
            <a class="fa fa-google-plus social-icon" href="{{getSetting('facebook')}}"></a>
            <a class="fa fa-youtube social-icon" href="{{getSetting('youtube')}}"></a>
        </div>
        <div class="copy">
            <p>Copyright &copy; 2018 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">Shimaa Naga</a></p>
        </div>
    </div>
</div>


<script type="text/javascript" src="{{asset('website/js/responsive-nav.js')}}"></script>
<script src="{{asset('website/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/js/jquery.flexslider.js')}}"></script>


{!! Html::script('cus/js/select2.min.js') !!}


@yield('footer')
<script type="text/javascript" >

    {{--    function formatState (state) {
        if (!state.id) {
            return state.text;
        }
        var baseUrl = "/user/pages/images/flags";
        var $state = $(
                '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
        );
        return $state;
    };

    $(".select2").select2({
        templateSelection: formatState
    }); --}}

    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('.select2').select2();
    });

</script>

</body>
</html>
