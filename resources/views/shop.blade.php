@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('assets/css/shop.css')}}">

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
            <a type="button" class="w-100 nav-link" data-toggle="modal" data-target="#exampleModal{{$e->id}}">
                <div class="d-flex align-items-center mb-4 justify-content-center">
                    <div class="w-custom-shop mx-auto">
                        <img class="img-shop mb-4 shadow" src="{{asset($e->image)}}" alt="Image">
                        <h3 class="text-center font-weight-bold">{{ucwords($e->name)}}</h3>
                    </div>
                </div>
            </a>
        </div>

        <section class="modals">
            <div class="modal fade" id="exampleModal{{$e->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body py-0 px-4">
                            <h2 class="custom-font my-4 text-center">{{ucwords($e->name)}}</h2>

                            <div id="productImageCarousel{{$e->id}}" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset($e->image)}}" class="img-modal rounded shadow"
                                            alt="Main Image">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#productImageCarousel{{$e->id}}" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#productImageCarousel{{$e->id}}" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="w-50 my-3 mx-auto">
                                <div class="row text-center my-3">
                                    <div class="col-4">
                                        <small class="text-info">Quantity: {{$e->quantity}}pcs</small>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-success">Price:
                                            ${{number_format($e->sell_price,2)}}</small>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-success">Rent: ${{number_format($e->rent_price,
                                            2)}}</small>
                                    </div>
                                </div>

                                @if($e->description)
                                <p class="my-3 text-center">
                                    {{$e->description}}
                                </p>
                                @endif

                                <form action="/cart/create" method="post" enctype="multipart/form-data"
                                    class="w-100 my-2">
                                    @csrf
                                    <div class="w-100 d-flex justify-content-center">
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="product_id" value="{{$e->id}}">
                                        <input type="number" name="quantity" id="quantity"
                                            class="form-control input-field quantity-field mx-1" value="1" step="1">
                                        @if(auth()->user()->role == 'gym' || auth()->user()->role == 'admin')
                                        <select name="type" id="type"
                                            class="form-control input-field quantity-field mx-1">
                                            <option value="buy">Buy</option>
                                            <option value="rent">Rent</option>
                                        </select>
                                        @endif

                                        <button type="submit"
                                            class="btn btn-info mx-2 rounded d-flex align-items-center">
                                            <span class="fa fa-plus mr-1"></span>
                                            Cart
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @empty
        <div class="w-100 mb-3 text-center">No EMS Suits available right now...</div>
        @endforelse
    </div>

    <h2 class="text-center mt-3 mb-5 text-info">Products</h2>
    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-4 mb-5 blog-item">
            <a type="button" class="w-100 nav-link" data-toggle="modal" data-target="#exampleModal{{$product->id}}">
                <div class="d-flex align-items-center mb-4 justify-content-center">
                    <div class="w-custom-shop mx-auto">
                        <img class="img-shop mb-4 shadow" src="{{asset($product->image)}}" alt="Image">
                        <h3 class="text-center font-weight-bold">{{ucwords($product->name)}}</h3>
                    </div>
                </div>
            </a>
        </div>

        <section class="modals">
            <div class="modal fade" id="exampleModal{{$product->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body py-0 px-4">
                            <h2 class="custom-font my-4 text-center">{{ucwords($product->name)}}</h2>

                            <div id="productImageCarousel{{$product->id}}" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset($product->image)}}" class="img-modal rounded shadow"
                                            alt="Main Image">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#productImageCarousel{{$product->id}}"
                                    role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#productImageCarousel{{$product->id}}"
                                    role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="w-50 my-3 mx-auto">
                                <div class="row text-center my-3">
                                    <div class="col-4">
                                        <small class="text-info">Quantity: {{$product->quantity}}pcs</small>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-success">Price:
                                            ${{number_format($product->sell_price,2)}}</small>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-success">Rent: ${{number_format($product->rent_price,
                                            2)}}</small>
                                    </div>
                                </div>

                                @if($product->description)
                                <p class="my-3 text-center">
                                    {{$product->description}}
                                </p>
                                @endif

                                <form action="/cart/create" method="post" enctype="multipart/form-data"
                                    class="w-100 my-2">
                                    @csrf
                                    <div class="w-100 d-flex justify-content-center">
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                        <input type="number" name="quantity" id="quantity"
                                            class="form-control input-field quantity-field mx-1" value="1" step="1">

                                        @if(auth()->user()->role == 'gym' || auth()->user()->role == 'admin')
                                        <select name="type" id="type"
                                            class="form-control input-field quantity-field mx-1">
                                            <option value="buy">Buy</option>
                                            <option value="rent">Rent</option>
                                        </select>
                                        @endif

                                        <button type="submit" class="btn btn-info mx-2 rounded">
                                            <span class="fa fa-plus"></span>
                                            Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @empty
        <div class="w-100 mb-3 text-center">No Products available right now...</div>
        @endforelse
    </div>

    <h2 class="text-center mt-3 mb-5 text-info">Services</h2>
    <div class="row">
        @forelse ($services as $service)
        <div class="col-md-4 mb-5 blog-item">
            <a type="button" class="w-100 nav-link" data-toggle="modal" data-target="#exampleModal{{$service->id}}">
                <div class="d-flex align-items-center mb-4 justify-content-center">
                    <div class="w-custom-shop mx-auto">
                        <img class="img-shop mb-4 shadow" src="{{asset($service->image)}}" alt="Image">
                        <h3 class="text-center font-weight-bold">{{ucwords($service->name)}}</h3>
                    </div>
                </div>
            </a>
        </div>

        <section class="modals">
            <div class="modal fade" id="exampleModal{{$service->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body py-0 px-4">
                            <h2 class="custom-font my-4 text-center">{{ucwords($service->name)}}</h2>

                            <div id="productImageCarousel{{$service->id}}" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset($service->image)}}" class="img-modal rounded shadow"
                                            alt="Main Image">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#productImageCarousel{{$service->id}}"
                                    role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#productImageCarousel{{$service->id}}"
                                    role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="w-50 my-3 mx-auto">
                                <div class="row text-center my-3">
                                    <div class="col-4">
                                        <small class="text-info">Quantity: {{$service->quantity}}pcs</small>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-success">Price:
                                            ${{number_format($service->sell_price,2)}}</small>
                                    </div>
                                    <div class="col-4">
                                        <small class="text-success">Rent: ${{number_format($service->rent_price,
                                            2)}}</small>
                                    </div>
                                </div>

                                @if($service->description)
                                <p class="my-3 text-center">
                                    {{$service->description}}
                                </p>
                                @endif

                                <form action="/cart/create" method="post" enctype="multipart/form-data"
                                    class="w-100 my-2">
                                    @csrf
                                    <div class="w-100 d-flex justify-content-center">
                                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                        <input type="hidden" name="product_id" value="{{$service->id}}">
                                        <input type="number" name="quantity" id="quantity"
                                            class="form-control input-field quantity-field mx-1" value="1" step="1">

                                        <button type="submit" class="btn btn-info mx-2 rounded">
                                            <span class="fa fa-plus"></span>
                                            Cart</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @empty
        <div class="w-100 mb-3 text-center">No Services available right now...</div>
        @endforelse
    </div>
</div>
<!-- Shop End -->

@include('layouts._footer')

@endsection