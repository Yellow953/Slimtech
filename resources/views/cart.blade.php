@extends('layouts.app')

@section('content')

@include('layouts._header')

<br><br><br>

{{-- Cart --}}
<main id="cart" style="max-width:960px">
    <h1 class="custom-font">Your Cart</h1>
    <div class="container-fluid">

        <div class="row align-items-start">
            <div class="col-12 col-sm-8 items">
                @forelse ($cart_items as $cart_item)
                <div class="cartItem row align-items-start">
                    <div class="col-3 mb-2">
                        <img class="w-100" src="{{asset($cart_item->product->image)}}" alt="art image">
                    </div>
                    <div class="col-3 mb-2">
                        <h6 class="">{{$cart_item->product->name}}</h6>
                    </div>
                    <div class="col-2">
                        <p id="cartItem{{$cart_item->id}}Quantity">{{$cart_item->quantity}}</p>
                    </div>
                    <div class="col-2">
                        <p id="cartItem{{$cart_item->id}}Price">${{number_format($cart_item->product->sell_price *
                            $cart_item->quantity,
                            2)}}</p>
                    </div>
                    <div class="col-2">
                        <a href="/cart/{{$cart_item->id}}/destroy" class="btn btn-danger pt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <hr>
                @empty
                No Items Yet
                @endforelse
            </div>
            <div class="col-12 col-sm-4 p-3 proceed form">
                <form action="/order/checkout" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row m-0">
                        <div class="col-8 p-0 my-auto">
                            <h3 class="border-b-0 custom-font size-1">Subtotal</h3>
                        </div>
                        <div class="col-4 p-0 my-auto">
                            $<span id="subtotal">{{number_format($sub_total, 2)}}</span>
                        </div>
                    </div>
                    <div class="row m-0">
                        <div class="col-8 p-0 my-auto">
                            <h3 class="border-b-0 custom-font size-1">Promo</h3>
                        </div>
                        <div class="col-4 p-0 my-auto">
                            <input type="text" name="promo" id="promo" style="width: 75px;">
                            <span id="promoValue"></span>
                        </div>
                    </div>
                    <div class="w-90 d-flex justify-content-end">
                        <a id="apply" class="text-primary size-2">Apply</a>
                    </div>
                    <hr>
                    <div class="row mx-0 mb-2">
                        <div class="col-8 p-0 my-auto">
                            <h3 class="border-b-0 custom-font size-1">Total</h3>
                        </div>
                        <div class="col-4 p-0 my-auto">
                            $<span id="total">{{number_format($total, 2)}}</span>
                        </div>
                    </div>

                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                    <button typr="submit" id="btn-checkout" class="shopnow"><span>Order</span></button>
                </form>
            </div>
        </div>
    </div>
    </div>
</main>

<br><br><br>

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
            return newTotal.toFixed(2); // Round to 2 decimal places
        }
    });
</script>
@endsection