@extends('layouts.app')

@section('content')

@include('layouts._header')

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('assets/images/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-info text-capitalize m-0">Your Fitness Partner</h3>
                    <h2 class="display-2 m-0 mt-2 mt-md-4 text-white font-weight-bold text-capitalize">
                        EMS Suits & Gym Products</h2>
                    <a href="/shop" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Explore Our
                        Products</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('assets/images/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-info text-capitalize m-0">Achieve Your Fitness Goals</h3>
                    <h2 class="display-2 m-0 my-2 my-md-4 text-white font-weight-bold text-capitalize">EMS Suits,
                        Gym Equipment...</h2>
                    <a href="/shop" class="btn btn-lg btn-outline-light mt-3 mt-md-5 py-md-3 px-md-5">Join Us Now</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<!-- Carousel End -->



<!-- Gym Class Start -->
<div class="container gym-class mb-5">
    <div class="row px-3">
        <div class="col-md-6 p-0">
            <div
                class="gym-class-box d-flex flex-column align-items-center align-items-md-end justify-content-center bg-info text-center text-md-right text-white py-5 px-5">
                <h3 class="display-4 mb-3 text-white font-weight-bold">EMS Provider</h3>
                <p>
                    Experience a revolution in fitness with our state-of-the-art EMS suits. We offer
                    cutting-edge technology that maximizes workout efficiency, saves you time, and delivers personalized
                    training. Our EMS suits are not just about achieving your fitness goals; they're also about faster
                    recovery and relaxation.
                </p>
                <a href="#" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <div
                class="gym-class-box d-flex flex-column align-items-center align-items-md-start justify-content-center bg-secondary text-center text-md-left text-white py-5 px-5">
                <h3 class="display-4 mb-3 text-white font-weight-bold">Training Center</h3>
                <p>
                    We also offer our training center space for
                    personalized sessions and workouts, expert guidance, and achieving your fitness aspirations. Whether
                    you're a
                    beginner or an experienced athlete, our certified trainers and specialized equipment are there
                    to help you reach your fitness goals. You can also rent an EMS suit and train here...
                </p>
                <a href="#" class="btn btn-lg btn-outline-light mt-4 px-4">Join Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Gym Class End -->


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


<!-- GYM Feature Start -->
<div class="container feature pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-info font-weight-bold">Why Do you need an EMS Suit?</h4>
        <h4 class="display-4 font-weight-bold">Benifits of EMS Suits</h4>
    </div>
    <div class="row">
        <div class="col-md-6 mb-5">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <img class="img-fluid rounded shadow mb-3 mb-sm-0" src="{{asset('assets/images/feature-2.jpg')}}"
                        alt="Image">
                </div>
                <div class="col-sm-7 p-3 p-md-1">
                    <h4 class="font-weight-bold">Efficient Muscle Activation</h4>
                    <p class="small">
                        EMS technology can simultaneously target multiple muscle groups, making it an efficient way to
                        activate and engage your muscles. This can help you achieve a more effective workout in less
                        time compared to traditional exercise routines.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <img class="img-fluid rounded shadow mb-3 mb-sm-0" src="{{asset('assets/images/feature-1.jpg')}}"
                        alt="Image">
                </div>
                <div class="col-sm-7 p-3 p-md-1">
                    <h4 class="font-weight-bold">Time-Saving</h4>
                    <p class="small">
                        With an EMS suit, you can get a full-body workout in a shorter amount of time. This is
                        especially appealing for individuals with busy schedules who struggle to find time for lengthy
                        gym sessions. EMS can be a time-efficient alternative for maintaining or improving muscle tone
                        and strength.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <img class="img-fluid rounded shadow mb-3 mb-sm-0" src="{{asset('assets/images/feature-3.jpg')}}"
                        alt="Image">
                </div>
                <div class="col-sm-7 p-3 p-md-1">
                    <h4 class="font-weight-bold">Muscle Recovery</h4>
                    <p class="small">
                        EMS technology is not only for workouts but can also aid in muscle recovery. Many EMS devices
                        offer programs designed specifically for recovery and relaxation, helping to reduce muscle
                        soreness and stiffness after intense physical activity.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-5">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <img class="img-fluid rounded shadow mb-3 mb-sm-0" src="{{asset('assets/images/feature-4.jpg')}}"
                        alt="Image">
                </div>
                <div class="col-sm-7 p-3 p-md-1">
                    <h4 class="font-weight-bold">Customized Training</h4>
                    <p class="small">
                        Our EMS suits come with mobile apps or control panels that allow you to customize your workout
                        intensity and target specific muscle groups. This level of personalization can help you tailor
                        your training to your fitness goals, whether it's muscle building, fat loss, or improved
                        endurance.
                    </p>
                </div>
            </div>
        </div>
        <div class="offset-md-3 col-md-6 mb-5">
            <div class="row align-items-center">
                <div class="col-sm-5">
                    <img class="img-fluid rounded shadow mb-3 mb-sm-0" src="{{asset('assets/images/feature-4.jpg')}}"
                        alt="Image">
                </div>
                <div class="col-sm-7 p-3 p-md-1">
                    <h4 class="font-weight-bold">Home Usage</h4>
                    <p class="small">
                        Our EMS suits guides users on effectively integrating electrical muscle stimulation into their
                        home workouts. It offers tailored instructions, safety precautions, and personalized training
                        plans for convenient use at home, enabling users to enhance muscle strength and toning without
                        gym visits.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- GYM Feature End -->

<!-- Testimonial Start -->
<div class="container-fluid position-relative testimonial my-5" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url({{asset('assets/images/bg.jpg')}});">
    <div class="container">
        <div class="row px-3 align-items-center">
            <div class="col-md-6 bg-secondary">
                <div class="d-flex align-items-center px-3" style="min-height: 450px;">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <div class="d-flex align-items-center mb-4 text-white">
                                    <img width="80" height="80" class="rounded-circle bg-dark p-2"
                                        src="{{asset('assets/images/testimonial-1.jpg')}}" alt="Image">
                                    <div class="pl-4">
                                        <h4 class="text-info">Client Name</h4>
                                        <p class="m-0">Profession</p>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod
                                    clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex align-items-center mb-4 text-white">
                                    <img width="80" height="80" class="rounded-circle bg-dark p-2"
                                        src="{{asset('assets/images/testimonial-2.jpg')}}" alt="Image">
                                    <div class="pl-4">
                                        <h4 class="text-info">Client Name</h4>
                                        <p class="m-0">Profession</p>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod
                                    clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-flex align-items-center mb-4 text-white">
                                    <img width="80" height="80" class="rounded-circle bg-dark p-2"
                                        src="{{asset('assets/images/testimonial-3.jpg')}}" alt="Image">
                                    <div class="pl-4">
                                        <h4 class="text-info">Client Name</h4>
                                        <p class="m-0">Profession</p>
                                    </div>
                                </div>
                                <div class="testimonial-text position-relative border bg-dark text-white mb-5 p-4">
                                    Sed ea amet kasd elitr stet nonumy, stet rebum et ipsum est duo elitr eirmod
                                    clita lorem. Dolores tempor voluptua ipsum sanctus clita
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pl-md-3 d-none d-md-block">
                    <h4 class="text-info">Testimonial</h4>
                    <h4 class="display-4 mb-4 text-white font-weight-bold">Client Feedback</h4>
                    <p class="m-0 text-white">See what our satisfied clients say after trying our products...</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Class Timetable Start -->
{{-- <div class="container gym-feature py-5">
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
</div> --}}
<!-- Class Timetable End -->

<!-- Contact Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-info font-weight-bold">Get In Touch</h4>
        <h4 class="display-4 font-weight-bold">Contact Us For More Informations</h4>
    </div>
    <div class="row px-3 pb-2">
        <div class="col-sm-3 text-center mb-3">
            <i class="fa fa-2x fa-map-marker-alt mb-3 text-info"></i>
            <h4 class="font-weight-bold">Address</h4>
            <a class="text-gray" target="_blank" href="https://www.maps.google.com">123 Street, Paris, France</a> <br>
            <a class="text-gray" target="_blank" href="https://www.maps.google.com">123 Street, Beirut, Lebanon</a>
        </div>
        <div class="col-sm-3 text-center mb-3">
            <i class="fa fa-2x fa-phone-alt mb-3 text-info"></i>
            <h4 class="font-weight-bold">Phone</h4>
            <a class="text-gray" href="tel:96176656054" title="Click to Call">+961 76 656 054</a> <br>
            <a class="text-gray" href="tel:96176656054" title="Click to Call">+961 76 656 054</a>
        </div>
        <div class="col-sm-3 text-center mb-3">
            <i class="fab fa-whatsapp fa-2x mb-3 text-info"></i>
            <h4 class="font-weight-bold">Whatsapp</h4>
            <a href="https://api.whatsapp.com/send/?phone=96176656054" class="text-gray" target="_blank"
                title="Click to Whatsapp">+961 76
                656 054</a> <br>
            <a href="https://api.whatsapp.com/send/?phone=96176656054" class="text-gray" target="_blank"
                title="Click to Whatsapp">+961 76
                656 054</a>
        </div>
        <div class="col-sm-3 text-center mb-3">
            <i class="far fa-2x fa-envelope mb-3 text-info"></i>
            <h4 class="font-weight-bold">Email</h4>
            <a href="mailto:info@slimtech.com" title="Click to Email" class="text-gray">info@slimtech.com</a>
        </div>
    </div>
</div>
<!-- Contact End -->

@include('layouts._footer')

@endsection