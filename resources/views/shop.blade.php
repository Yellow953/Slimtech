@extends('layouts.app')

@section('content')

@include('layouts._header')

<br><br><br>

<!-- Shop Start -->
<div class="container pt-5">
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="text-info font-weight-bold">Our Shop</h4>
        <h4 class="display-4 font-weight-bold">Best Products In The Industry</h4>
    </div>


    <h2 class="text-center mt-3 mb-5 text-info">EMS</h2>
    <div class="row">
        @forelse ($ems as $e)
        <div class="col-md-6 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset($e->image)}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="pl-3">
                    <h3 class="font-weight-bold">{{$e->name}}</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted">{{$e->category->name}}</small>
                        <small class="mr-2 text-muted">{{$e->quantity}}</small>
                        <small class="mr-2 text-muted">{{$e->sell_price}}</small>
                    </div>
                </div>
            </div>
            <p>{{$e->description}}</p>
            <a class="btn btn-outline-info mt-2 px-3" href="">Add to Cart <i class="fa fa-plus"></i></a>
        </div>
        @empty
        <div class="w-100 mb-3 text-center">No EMS Suits available right now...</div>
        @endforelse
    </div>

    <h2 class="text-center mt-3 mb-5 text-info">Products</h2>
    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset($product->image)}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="pl-3">
                    <h3 class="font-weight-bold">{{$product->name}}</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted">{{$product->category->name}}</small>
                        <small class="mr-2 text-muted">{{$product->quantity}}</small>
                        <small class="mr-2 text-muted">{{$product->sell_price}}</small>
                    </div>
                </div>
            </div>
            <p>{{$product->description}}</p>
            <a class="btn btn-outline-info mt-2 px-3" href="">Add to Cart <i class="fa fa-plus"></i></a>
        </div>
        @empty
        <div class="w-100 mb-3 text-center">No Products available right now...</div>
        @endforelse
    </div>

    <h2 class="text-center mt-3 mb-5 text-info">Services</h2>
    <div class="row">
        @forelse ($services as $service)
        <div class="col-md-4 mb-5 blog-item">
            <img class="img-fluid mb-4" src="{{asset($service->image)}}" alt="Image">
            <div class="d-flex align-items-center mb-4">
                <div class="pl-3">
                    <h3 class="font-weight-bold">{{$service->name}}</h3>
                    <div class="d-flex">
                        <small class="mr-2 text-muted">{{$service->category->name}}</small>
                        <small class="mr-2 text-muted">{{$service->quantity}}</small>
                        <small class="mr-2 text-muted">{{$service->sell_price}}</small>
                    </div>
                </div>
            </div>
            <p>{{$service->description}}</p>
            <a class="btn btn-outline-info mt-2 px-3" href="">Add to Cart <i class="fa fa-plus"></i></a>
        </div>
        @empty
        <div class="w-100 mb-3 text-center">No Services available right now...</div>
        @endforelse
    </div>
</div>
<!-- Shop End -->

@include('layouts._footer')

@endsection