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
        <div class="col-lg-4">
            <img class="img-fluid mb-4 mb-lg-0" src="{{asset('assets/images/logo.png')}}" alt="Image">
        </div>
        <div class="col-lg-8 d-flex flex-column align-items-center align-items-md-start ">
            <h2 class="display-4 font-weight-bold mb-4">Who Are We?</h2>
            <p class="p-4 p-md-2">
                Welcome to SlimTech, your one-stop destination for cutting-edge fitness equipment and apparel. At
                SlimTech, we're dedicated to helping you achieve your fitness goals by providing top-quality EMS suits
                and a wide range of gym products. Whether you're a seasoned athlete or just starting your fitness
                journey, our products are designed to enhance your workouts and elevate your performance. Our mission is
                to empower you with the tools and gear you need to unlock your full potential and lead a healthier, more
                active lifestyle. Explore our collection and experience the future of fitness with SlimTech.
            </p>
            <div class="row py-2 my-3">
                <div class="col-6">
                    <div class="d-flex">
                        <div class="my-auto mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue"
                                class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                <path
                                    d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                            </svg>
                        </div>
                        <h4 class="font-weight-bold my-auto">Certified EMS Provider</h4>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex">
                        <div class="my-auto mr-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue"
                                class="bi bi-stars" viewBox="0 0 16 16">
                                <path
                                    d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
                            </svg>
                        </div>
                        <h4 class="font-weight-bold my-auto">Over 15 Years Experience</h4>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-lg px-4 btn-outline-info">Learn More</a>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-lg-4 p-0">
            <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                <img src="{{asset('assets/images/affordable.png')}}" alt="" class="svg-icon">
                <div class="">
                    <h2 class="text-white my-3">Affordable</h2>
                    <p>
                        You can commence your EMS training without breaking the bank. Begin today by either renting or
                        purchasing our EMS Suit!
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="d-flex align-items-center bg-info text-white px-5" style="min-height: 300px;">
                <img src="{{asset('assets/images/comfortable.png')}}" alt="" class="svg-icon">
                <div class="">
                    <h2 class="text-white my-3">Confortable</h2>
                    <p>
                        SlimTech is dedicated to providing comfortable EMS workouts. Our suits deliver gentle, pain-free
                        pulses, ensuring a bruise-free experience. Enjoy smooth and pleasant fitness sessions with us.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="d-flex align-items-center bg-secondary text-white px-5" style="min-height: 300px;">
                <img src="{{asset('assets/images/support.png')}}" alt="" class="svg-icon">
                <div class="">
                    <h2 class="text-white my-3">Support</h2>
                    <p>
                        We get your maintenance and service concerns, as we've been there too. Count on our top-notch
                        service and customer care. You can also work out at our facilities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<div class="container my-3">
    <h2 class="mt-5">Main Branch</h2>
    <div class="row m-3 m-md-5">
        <div class="col-md-3 my-auto">
            <img src="https://assets.website-files.com/61a7bda474dfe11266bb0b74/61cccbf73186dfc0dc8e9961_Locations%20.png"
                alt="" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-9 my-auto p-3 p-md-1">
            <h3 class="mt-3">SlimTech, France</h3>
            <p class="my-3">
                Our main branch is located in france, paris, rue 335. <br>
                In this location, we have a training center where you can use our EMS suits and train... Also this is
                the main supplier to all the other branches... <br><br>
                We are waiting for you !!!
            </p>
        </div>
    </div>

    <h3 class="mt-5">Sellers And Branches</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="row m-3 m-md-5">
                <div class="col-md-6 my-auto">
                    <img src="https://assets.website-files.com/61a914abfd1d953ff6a7154f/61ca2efde49c24ef8d21a764_olivebranch_1-thumb7.jpg"
                        alt="" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 my-auto p-3 p-md-1">
                    <h4 class="mt-3">SlimTech, USA</h4>
                    <p class="my-3">
                        Join us in our USA branch and enjoy all the perks...
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row m-3 m-md-5">
                <div class="col-md-6 my-auto">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSAhrFHnc4JDX5eiDfLvy40Dxzrfl9lj-sTFoiAQlEVdAF0kym_CgVK6sT_Iz9aSq6w5s&usqp=CAU"
                        alt="" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6 my-auto p-3 p-md-1">
                    <h4 class="mt-3">SlimTech, lebanon</h4>
                    <p class="my-3">
                        Join us in our Lebanon branch and enjoy all the perks...
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

@include('layouts._footer')

@endsection