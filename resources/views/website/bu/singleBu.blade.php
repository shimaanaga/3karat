@extends('layouts.app')

@section('title')


    {{$buInfo->bu_name}}

@endsection

@section('header')

    {!! Html::style('cus/buall.css') !!}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <style>
        hr {
            border: 0;
            clear:both;
            display:block;
            width: 115%;
            color: #FFFF00;
            height: 1px;


        }


        #line {

            float: left;
            width: 731px;
            height: 10px;
            display:block;
        }



    </style>

@endsection

@section('content')


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->




    {{--
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
        <!-- Font Awesome -->

    --}}


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">



    <div class="container">




        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" >Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/showAllBuildings')}}" >All Buildings</a></li>
                <li class="breadcrumb-item"><a href="{{url('/singleBuilding/'.$buInfo->id)}}" >{{$buInfo->bu_name}}</a></li>

            </ol>
        </nav>




        <div class="row">


      @include('website.bu.pages')


            <div class="col">
                <div class="row">

                    <h1>
                        {{$buInfo->bu_name}}

                    </h1>
                    <br />

                    <div id="line"><hr  /></div>
                    <br />


                    <div class="btn-group" role="group"  style="padding: 7px 0px 0px 0px ;">

                        <a class="btn btn-info " class="btn btn-info " {{-- class="btn btn-light" --}} href="{{url('/search?bu_square='.$buInfo->bu_square)}}"> Square: {{$buInfo->bu_square}} </a>


                        <a class="btn btn-info " href="{{url('/search?bu_price='.$buInfo->bu_price)}}">Price: {{$buInfo->bu_price}} </a>


                        <a class="btn btn-info " href="{{url('/search?bu_place='.$buInfo->bu_place)}}"> Region: {{bu_place()[$buInfo->bu_place]}} </a>


                        <a class="btn btn-info " href="{{url('/search?rooms='.$buInfo->rooms)}}"> No.of Rooms: {{$buInfo->rooms}} </a>


                        <a class="btn btn-info " href="{{url('/search?bu_rent='.$buInfo->bu_rent)}}"> Process Type: {{bu_rent()[$buInfo->bu_rent]}} </a>


                        <a class="btn btn-info " href="{{url('/search?bu_type='.$buInfo->bu_type)}}"> Type: {{bu_type()[$buInfo->bu_type]}} </a>


                    </div>

                    <div id="line"><hr /></div>

                      <br>

                    <p>
                        {!! nl2br($buInfo->bu_long_des) !!}}
                    </p>



                </div>
            </div>

        </div>
    </div>




@endsection

@section('footer')
    function formatState (state) {
    if (!state.id) {
    return state.text;
    }
    var baseUrl = "/user/pages/images/flags";
    var $state = $(
    '<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'
    );
    return $state;
    };

    $(".js-example-templating").select2({
    templateSelection: formatState
    });

@endsection