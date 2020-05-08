@extends('layouts.home.layout')

@section('content')

<div class="container-fluid gtco-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1> We promise to bring
                    the best <span>solution</span> for
                    your business. </h1>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rhoncus turpis nisl. </p>
                
                <a href="{{route('contacto')}}">Contáctanos <i class="fa fa-angle-right" aria-hidden="true"></i></a></div>
            <div class="col-md-6">
                <div class="card"><img class="card-img-top img-fluid" src="/img/banner.png" alt=""></div>
            </div>
        </div>
    </div>
</div>

@endsection