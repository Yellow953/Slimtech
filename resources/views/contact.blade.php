@extends('layouts.app')

@section('content')

@include('layouts._header')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url({{asset('assets/images/bg.jpg')}});">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Contact Us</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Contact Us</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


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
    <div class="row">
        <div class="col-md-12 pb-5">
            <iframe style="width: 100%; height: 500px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</div>
<!-- Contact End -->

@include('layouts._footer')

@endsection