




@extends('layouts.app')

@section('title')

     Building Added Successfully

@endsection

@section('header')

    {!! Html::style('cus/buall.css') !!}

    <style>
        .text-center{
            width: 98%;

        }

        .mb-0{
            padding: 0px 500px 0px 0px;
        }
    </style>

    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>--}}

@endsection

@section('content')


    {{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    {{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>--}}
    {{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
    {{--<!------ Include the above in your HEAD tag ---------->--}}





    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">--}}



    <div class="container">




        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}" >Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/user/create/building')}}" >Add New Building</a></li>
                <li class="breadcrumb-item active"><a href="#" >Added Building</a></li>



            </ol>
        </nav>




        <div class="row">


            @include('website.bu.pages')


            <div class="col">
                <div class="row">



                    <div class="text-center" style="padding: 15px 0px 30px 0px ; background-color: #ffffff;">

                       <div class="alert alert-success">
                           <b>
                               Added
                           </b>
                           Building Successfully.............

                       </div>


                    </div>




                </div>
            </div>

        </div>
    </div>




@endsection

@section('footer')
    {{--function formatState (state) {--}}
    {{--if (!state.id) {--}}
    {{--return state.text;--}}
    {{--}--}}
    {{--var baseUrl = "/user/pages/images/flags";--}}
    {{--var $state = $(--}}
    {{--'<span><img src="' + baseUrl + '/' + state.element.value.toLowerCase() + '.png" class="img-flag" /> ' + state.text + '</span>'--}}
    {{--);--}}
    {{--return $state;--}}
    {{--};--}}

    {{--$(".js-example-templating").select2({--}}
    {{--templateSelection: formatState--}}
    {{--});--}}

@endsection
