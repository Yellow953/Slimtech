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
        <div class="col-lg-8">
            <h2 class="display-4 font-weight-bold mb-4">Who Are We?</h2>
            <p>
                Welcome to SlimTech, your one-stop destination for cutting-edge fitness equipment and apparel. At
                SlimTech, we're dedicated to helping you achieve your fitness goals by providing top-quality EMS suits
                and a wide range of gym products. Whether you're a seasoned athlete or just starting your fitness
                journey, our products are designed to enhance your workouts and elevate your performance. Our mission is
                to empower you with the tools and gear you need to unlock your full potential and lead a healthier, more
                active lifestyle. Explore our collection and experience the future of fitness with SlimTech.
            </p>
            <div class="row py-2 my-3">
                <div class="col-sm-6">
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
                <div class="col-sm-6">
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

            <a href="" class="btn btn-lg px-4 btn-outline-info">Learn More</a>
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
                    <h2 class="text-white mb-3">Affordable</h2>
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
                    <h2 class="text-white mb-3">Confortable</h2>
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
                    <h2 class="text-white mb-3">Support</h2>
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

<!-- Class Timetable Start -->
<div class="container gym-feature py-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-info font-weight-bold">Class Timetable</h4>
        <h4 class="display-4 font-weight-bold">Working Hours and Class Time</h4>
    </div>
    <div class="tab-class">
        <ul class="nav nav-pills justify-content-center mb-4">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" href="#class-all">All Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#class-cardio">Cardio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#class-crossfit">Crossfit</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="pill" href="#class-powerlifting">Powerlifting</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="class-all" class="container tab-pane p-0 active">
                <div class="table-responsive">
                    <table class="table table-bordered table-lg m-0">
                        <thead class="bg-secondary text-white text-center">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="class-cardio" class="container tab-pane fade p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-lg m-0">
                        <thead class="bg-secondary text-white text-center">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Cardio</h5>John Deo
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="class-crossfit" class="container tab-pane fade p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-lg m-0">
                        <thead class="bg-secondary text-white text-center">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Crossfit</h5>Adam Phillips
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td>
                                    <h5>Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="class-powerlifting" class="container tab-pane fade p-0">
                <div class="table-responsive">
                    <table class="table table-bordered table-lg m-0">
                        <thead class="bg-secondary text-white text-center">
                            <tr>
                                <th>Time</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <th class="bg-secondary text-white align-middle">6.00am - 8.00am</th>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">10.00am - 12.00am</th>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">5.00pm - 7.00pm</th>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                            </tr>
                            <tr>
                                <th class="bg-secondary text-white align-middle">7.00pm - 9.00pm</th>
                                <td></td>
                                <td>
                                    <h5>Cardio</h5>John Deo
                                </td>
                                <td></td>
                                <td>
                                    <h5>Crossfit</h5>Adam Phillips
                                </td>
                                <td></td>
                                <td class="bg-info text-white">
                                    <h5 class="text-white">Power Lifting</h5>James Alien
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Class Timetable End -->

@include('layouts._footer')

@endsection