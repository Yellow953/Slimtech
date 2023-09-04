@extends('layouts.app')

@section('content')

@include('layouts._header')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url({{asset('assets/images/bg.jpg')}});">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">About Us</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">About Us</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="{{asset('assets/images/about.jpg')}}" alt="Image">
        </div>
        <div class="col-lg-6">
            <h2 class="display-4 font-weight-bold mb-4">10 Years Experience</h2>
            <p>Labore vero lorem eos sed aliquy ipsum aliquy sed. Vero dolore dolore takima ipsum lorem rebum</p>
            <div class="row py-2">
                <div class="col-sm-6">
                    <i class="flaticon-barbell display-2 text-primary"></i>
                    <h4 class="font-weight-bold">Certified GYM Center</h4>
                    <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                </div>
                <div class="col-sm-6">
                    <i class="flaticon-medal display-2 text-primary"></i>
                    <h4 class="font-weight-bold">Award Winning</h4>
                    <p>Ipsum sanctu dolor ipsum dolore sit et kasd duo</p>
                </div>
            </div>
            <a href="" class="btn btn-lg px-4 btn-outline-primary">Learn More</a>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-4 p-0">
            <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                <i class="flaticon-training display-3 text-primary mr-3"></i>
                <div class="">
                    <h2 class="text-white mb-3">Progression</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="d-flex align-items-center bg-primary text-white px-5" style="min-height: 300px;">
                <i class="flaticon-weightlifting display-3 text-secondary mr-3"></i>
                <div class="">
                    <h2 class="text-white mb-3">Workout</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                <i class="flaticon-treadmill display-3 text-primary mr-3"></i>
                <div class="">
                    <h2 class="text-white mb-3">Nutrition</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu suscipit orci velit id libero
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

@include('layouts._footer')

@endsection