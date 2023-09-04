@extends('layouts.app')

@section('content')

@include('layouts._header')

<br><br><br>

<!-- Shop Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-primary font-weight-bold">Our Shop</h4>
        <h4 class="display-4 font-weight-bold">Best Products In The Industry</h4>
    </div>


    <h2 class="text-center mt-3 mb-5 text-primary">EMS Suits</h2>
    <div class="row">
        <div class="col-md-6 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-1')}}.jpg" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-6 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-2.jpg')}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>

    <h2 class="text-center mt-3 mb-5 text-primary">Products</h2>
    <div class="row">
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-1')}}.jpg" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-2.jpg')}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-1')}}.jpg" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-2.jpg')}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>

    <h2 class="text-center mt-3 mb-5 text-primary">Services</h2>
    <div class="row">
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-1')}}.jpg" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-2.jpg')}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-1')}}.jpg" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset('assets/images/blog-2.jpg')}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="d-flex flex-column align-items-center justify-content-center rounded-circle bg-primary text-white"
                    style="width: 80px; height: 80px;">
                    <small>01</small>
                    <strong class="text-uppercase m-0 text-white">Jan</strong>
                    <small>2045</small>
                </div>
                <div class="pl-3">
                    <h3 class="font-weight-bold">Lorem ipsum dolor sit amet</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted"><i class="fa fa-user"></i> Admin</small>
                        <small class="mr-2 text-muted"><i class="fa fa-folder"></i> Web Design</small>
                        <small class="mr-2 text-muted"><i class="fa fa-comments"></i> 15 Comments</small>
                    </div>
                </div>
            </div>
            <p>Eos kasd et sea labore. Et sed amet magna elitr amet, stet et amet erat nonumy labore lorem ut eos, sed
                ut at tempor diam no. Kasd sit ea amet lorem et sea, ipsum sed dolor dolores sed dolore eirmod vero
                dolor sed kasd accusam</p>
            <a class="btn btn-outline-primary mt-2 px-3" href="">Read More <i class="fa fa-angle-right"></i></a>
        </div>
    </div>
</div>
<!-- Shop End -->

@include('layouts._footer')

@endsection