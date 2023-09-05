@extends('admin.app')

@section('content')
<div class="container-fluid px-2 px-md-4">
    <div class="page-header border-rounded mt-4"
        style="background-image: url({{asset('assets/images/bg.png')}}); height: 300px; width: 100%; background-repeat: no-repeat; background-size: 100%; background-position: center;">
    </div>

    <div class="card card-body m-3 mx-md-4 mt-n6">
        <h1 class="text-center text-primary">SlimTech</h1>
        <div class="row my-3">
            <div class="col-md-3">
                <img src="{{asset('/assets/images/logo.png')}}" alt="" class="rounded img-responsive w-100 h-auto">
            </div>
            <div class="col-md-9">
                <p class="my-3">
                    Welcome to SlimTech, your one-stop destination for cutting-edge fitness equipment and apparel. At
                    SlimTech, we're dedicated to helping you achieve your fitness goals by providing top-quality EMS
                    suits and a wide range of gym products. Whether you're a seasoned athlete or just starting your
                    fitness journey, our products are designed to enhance your workouts and elevate your performance.
                    Our mission is to empower you with the tools and gear you need to unlock your full potential and
                    lead a healthier, more active lifestyle. Explore our collection and experience the future of fitness
                    with SlimTech.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection