@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('assets/css/cart.css')}}">

@include('layouts._header')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url({{asset('assets/images/logo.png')}});">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Cart</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

@include('admin._flash')

{{-- Cart --}}
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-8 offset-md-2 items">
            <h2 class="mb-5 text-center">Items</h2>
            <div class="cartItem row align-items-start">
                <div class="col-4 my-auto">
                    <h6 class="text-center">{{ ucwords('product') }}</h6>
                </div>
                <div class="col-2 my-auto">
                    <h6>{{ ucwords('type') }}</h6>
                </div>
                <div class="col-2 my-auto">
                    <h6>{{ ucwords('quantity') }}</h6>
                </div>
                <div class="col-2 my-auto">
                    <h6>{{ ucwords('price') }}</h6>
                </div>
                <div class="col-2 my-auto">
                    <h6>{{ ucwords('actions') }}</h6>
                </div>
            </div>
            <hr>
            @forelse ($cart_items as $productID => $cart_item)
            <div class="cartItem row align-items-start" id="cartItem{{ $productID }}">
                @php
                $product = Helper::get_product($productID);
                @endphp

                <div class="col-2 my-auto">
                    <img class="w-100 cart_image rounded" src="{{ asset($product->image) }}" alt="Image">
                </div>
                <div class="col-2 my-auto">
                    {{ ucwords($product->name) }}
                </div>
                <div class="col-2 my-auto">
                    {{ ucwords($cart_item['type']) }}
                </div>
                <div class="col-2 my-auto">
                    <span id="cartItemQuantity">{{ $cart_item['quantity'] }}</span>pcs <br>
                    @if ($cart_item['type'] == 'rent')
                    {{ $cart_item['months'] }}month(s)
                    @endif
                </div>
                <div class="col-2 my-auto">
                    <span id="cartItem{{ $productID }}Price">
                        @if ($cart_item['type'] == 'buy')
                        ${{ number_format($product->sell_price *
                        $cart_item['quantity'], 2) }}
                        @elseif ($cart_item['type'] == 'rent')
                        ${{ number_format($product->rent_price *
                        $cart_item['quantity'] * $cart_item['months'], 2) }}
                        @endif
                    </span>
                </div>
                <div class="col-2 my-auto">
                    <a href="#" class="btn btn-danger btn-rounded pt-2" onclick="deleteCartItem({{ $productID }})">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
            @empty
            No Items Yet
            @endforelse
            <div class="row my-3 text-center">
                <div class="offset-md-6 col-6 col-md-3">
                    Total:
                </div>
                <div class="col-6 col-md-3">
                    ${{ number_format($sub_total, 2) }}
                </div>
            </div>
            <div class="text-center">
                <a href="/checkout" class="btn btn-info w-100 btn-rounded">Checkout</a>
            </div>
        </div>
    </div>
</div>

@include('layouts._footer')

<script>
    function deleteCartItem(productId) {
        // Remove the cart item's HTML
        var cartItemElement = document.getElementById('cartItem' + productId);
        if (cartItemElement) {
            cartItemElement.remove();
        }

        try {
            var cart = JSON.parse(getCookie('cart'));

           // Remove the cart item from the cart object
            delete cart[productId];

            // Update the cart cookie with the new cart object
            document.cookie = 'cart=' + JSON.stringify(cart) + ';path=/';

            // decrease cart count
            var currentCount = parseInt(document.getElementById('cartCount').innerText);
            if (currentCount != 0) {
                var newCount = currentCount - 1;
                document.getElementById('cartCount').innerText = newCount;
            }

            alert('Item removed from cart!');
        } catch (error) {
            console.log('Error deleting cart item' + error);
        }
    }

    function getCookie(name) {
        var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
        if (match) return match[2];
    }
</script>

@endsection