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

    @foreach ($categories as $category)
    <h2 class="text-center mt-3 mb-5 text-info">{{ ucwords($category->name) }}</h2>
    <div class="row">
        @forelse ($category->products as $product)
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
                                    @foreach ($product->secondary_images as $secondary_image)
                                    <div class="carousel-item">
                                        <img src="{{asset($secondary_image->image)}}" class="img-modal"
                                            alt="Secondary Image">
                                    </div>
                                    @endforeach
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
                                <div class="d-flex justify-content-center text-center my-3">
                                    <div class="mx-4">
                                        <small class="text-info">Quantity: {{$product->quantity}}pcs</small>
                                    </div>
                                    <div class="mx-4">
                                        <small class="text-success">Price:
                                            ${{number_format($product->sell_price,2)}}</small>
                                    </div>
                                    @if ($category->allow_rent)
                                    <div class="mx-4">
                                        <small class="text-success">Rent: ${{number_format($product->rent_price,
                                            2)}}</small>
                                    </div>
                                    @endif
                                </div>

                                @if($product->description)
                                <p class="my-3 text-center">
                                    {{$product->description}}
                                </p>
                                @endif

                                <form action="#" method="post" enctype="multipart/form-data" class="w-100 my-2">
                                    <div class="w-md-100 d-flex justify-content-center">
                                        <input type="number" name="quantity" id="quantity"
                                            class="form-control input-field quantity-field mx-1" value="1" step="1">
                                        @guest
                                        <input type="hidden" name="type" id="type" value="buy">
                                        <input type="hidden" name="months" id="months" value="0">
                                        @else
                                        @if((auth()->user()->role == 'gym' || auth()->user()->role == 'admin') &&
                                        $category->allow_rent)
                                        <select name="type" id="type"
                                            class="form-control input-field quantity-field mx-1">
                                            <option value="buy">Buy</option>
                                            <option value="rent">Rent</option>
                                        </select>
                                        <input type="number" name="months" id="months"
                                            class="form-control input-field quantity-field mx-1" step="1"
                                            placeholder="Months...">
                                        @else
                                        <input type="hidden" name="type" id="type" value="buy">
                                        <input type="hidden" name="months" id="months" value="0">
                                        @endif
                                        @endguest

                                        <button type="button" onclick="addToCart({{$product->id}}, this.form)"
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
        <div class="w-100 mb-3 text-center">No {{ ucwords($category->name) }} available right now...</div>
        @endforelse
    </div>
    @endforeach

    {{-- <h2 class="text-center mt-3 mb-5 text-info">Products</h2>
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
                                    @foreach ($product->secondary_images as $secondary_image)
                                    <div class="carousel-item">
                                        <img src="{{asset($secondary_image->image)}}" class="img-modal"
                                            alt="Secondary Image">
                                    </div>
                                    @endforeach
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

                                <form action="#" method="post" enctype="multipart/form-data" class="w-100 my-2">
                                    <div class="w-md-100 d-flex justify-content-center">
                                        <input type="number" name="quantity" id="quantity"
                                            class="form-control input-field quantity-field mx-1" value="1" step="1">

                                        @guest
                                        <input type="hidden" name="type" id="type" value="buy">
                                        <input type="hidden" name="months" id="months" value="0">
                                        @else
                                        @if(auth()->user()->role == 'gym' || auth()->user()->role == 'admin')
                                        <select name="type" id="type"
                                            class="form-control input-field quantity-field mx-1">
                                            <option value="buy">Buy</option>
                                            <option value="rent">Rent</option>
                                        </select>
                                        <input type="number" name="months" id="months"
                                            class="form-control input-field quantity-field mx-1" step="1"
                                            placeholder="Months...">
                                        @else
                                        <input type="hidden" name="type" id="type" value="buy">
                                        <input type="hidden" name="months" id="months" value="0">
                                        @endif
                                        @endguest

                                        <button type="button" onclick="addToCart({{$product->id}}, this.form)"
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
                                    @foreach ($service->secondary_images as $secondary_image)
                                    <div class="carousel-item">
                                        <img src="{{asset($secondary_image->image)}}" class="img-modal"
                                            alt="Secondary Image">
                                    </div>
                                    @endforeach
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

                                <form action="#" method="post" enctype="multipart/form-data" class="w-100 my-2">
                                    <div class="w-md-100 d-flex justify-content-center">
                                        <input type="number" name="quantity" id="quantity"
                                            class="form-control input-field quantity-field mx-1" value="1" step="1">

                                        <input type="hidden" name="type" id="type" value="buy">
                                        <input type="hidden" name="months" id="months" value="0">

                                        <button type="button" onclick="addToCart({{$service->id}}, this.form)"
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
        <div class="w-100 mb-3 text-center">No Services available right now...</div>
        @endforelse
    </div> --}}
</div>
<!-- Shop End -->

@include('layouts._footer')

<script>
    function addToCart(productId, form) {
        var quantity = parseInt(form.querySelector('#quantity').value) || 1;
        var type = form.querySelector('#type').value;
        var months = parseInt(form.querySelector('#months').value) || 1;

        try {
            var cart = JSON.parse(getCookie('cart'));
        } catch (error) {
            var cart = {};
        }

        if (cart[productId]) {
            cart[productId].quantity += quantity;
        } else {
            cart[productId] = {
                quantity: quantity,
                type: type,
                months: months
            };
        }

        document.cookie = 'cart=' + JSON.stringify(cart) + ';path=/';

        // increase cart count
        var currentCount = parseInt(document.getElementById('cartCount').innerText);
        var newCount = currentCount + 1;
        document.getElementById('cartCount').innerText = newCount;

        alert('Item added to cart!');
    }

    function getCookie(name) {
        var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) return match[2];
    }
</script>

@endsection