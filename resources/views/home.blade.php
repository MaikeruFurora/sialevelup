@extends('layouts.app')
@section('content')
<div class="container">
    {{-- <div class="jumbotron pt-3 pb-3 animated fadeInUp" style="background: #FDCE86">
        <div class="row">
            <div class="col-lg-7 col-sm-12 py-5">
                <h1 id="barcode" class="lead">DASHBOARD</h1>
                <p class="lead">This is a simple component <br> for calling extra attention to featured content or information. <br>
                    <small>{{ date("M,d Y") }}</small></p>
            </div>
            <div class="col-lg-5 col-sm-12 text-center">
                <img src="{{ asset('img/plan.svg') }}" class="hvr-grow py-4" width="75%" alt="">
            </div>
        </div>
    </div> --}}
    {{-- <div class="row">
        <div class="col-12">
            <div class="card" style="background: #FDCE86">
                <div class="card-body lead">
                    dsdd
                </div>
            </div>
        </div>
    </div> --}}
    
    <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <div class="row" id="showData"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row" id="showData2"></div>
        </div>
    </div>
    {{-- <div class="d-flex flex-row bd-highlight mb-3 mt-3 animated fadeInUp">
        <div class="p-2 bd-highlight"><small>This project created by <em>Team Avengers</em></small></div>
        <div class="p-2 bd-highlight"><small>|&nbsp;&nbsp;&nbsp; Bootstrap <b>&middot;</b> Jquery <b>&middot;</b>
                Animated Effects</small>
        </div>
    </div> --}}
</div>
@include('layouts.modal')
@endsection