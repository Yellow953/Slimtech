@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{asset('assets/css/cart.css')}}">

@include('layouts._header')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)),
url({{asset('assets/images/logo.png')}});">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Checkout</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white"><a class="text-white" href="/cart">Cart</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Checkout</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

@include('admin._flash')

{{-- Cart --}}
<div class="container">
    <div class="row align-items-center">
        <div class="col-md-10 offset-md-1 items">
            <h2 class="mb-5 text-center">Items</h2>
            @forelse ($cart_items as $productID => $cart_item)
            <div class="cartItem row align-items-start">
                @php
                $product = Helper::get_product($productID);
                @endphp

                <div class="col-2 my-auto">
                    <img class="w-100 cart_image rounded" src="{{ asset($product->image) }}" alt="Image">
                </div>
                <div class="col-3 my-auto">
                    <h6>{{ ucwords($product->name) }}</h6>
                </div>
                <div class="col-3 my-auto">
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
            </div>
            <hr>
            @empty
            <div class="my-3">No Items Yet</div>
            @endforelse
            <form action="/checkout" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row my-3 text-center">
                    <div class="offset-md-6 col-6 col-md-3">
                        Sub Total:
                    </div>
                    <div class="col-6 col-md-3">
                        $<span id="subtotal">{{ number_format($sub_total, 2) }}</span>
                    </div>
                </div>
                <div class="row my-3 text-center">
                    <div class="offset-md-6 col-6 col-md-3">
                        Promo:
                    </div>
                    <div class="col-6 col-md-3">
                        <input type="text" name="promo" id="promo" style="width: 125px; height: 35px"><a id="apply"
                            class="text-info size-2 mx-3">Apply</a>
                        <span id="promoValue"></span>
                    </div>
                </div>
                <div class="row my-3 text-center">
                    <div class="offset-md-6 col-6 col-md-3">
                        Total:
                    </div>
                    <div class="col-6 col-md-3">
                        $<span id="total">{{ number_format($total, 2) }}</span>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info w-100 btn-rounded">Order</button>
                </div>
            </form>
        </div>
    </div>
</div>

@include('layouts._footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#apply').click(function () {
            const promoCode = $('#promo').val();
            
            $.ajax({
                method: 'POST',
                url: '{{ route("check_promo") }}',
                data: { promo: promoCode,_token: '{{ csrf_token() }}' },
                success: function (response) {
                    if (response.exists) {
                        let promoValue = response.value;
                        const subtotal = parseFloat($('#subtotal').text());
                        const total = calculateNewTotal(subtotal, promoValue);

                        $('#promo').hide();
                        $('#apply').hide();
                        $('.promo-value').show();
                        promoValue *= 100 ;
                        $('#promoValue').text(promoValue.toString() + "%");
                        
                        $('#total').text(total);
                    } else {
                        alert('Invalid promo code.');
                    }
                },
                error: function (error) {
                    console.error(error);
                }
            });
        });

        function calculateNewTotal(subtotal, promoValue) {
            // Apply the promo value to the total
            const newTotal = subtotal - (subtotal * promoValue);
            return newTotal; // Round to 2 decimal places
        }
    });
</script>
@endsection