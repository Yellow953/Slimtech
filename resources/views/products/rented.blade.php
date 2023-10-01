@extends('admin.app')

@section('content')
<a href="/products" class="btn text-secondary">
    <h3>
        < back</h3>
</a>

<div class="container">
    <h2 class="mb-4 text-center">Rented Items</h2>

    <div class="card">
        <div class="row p-4">
            <div class="col-3">
                <h4>Product</h4>
            </div>
            <div class="col-2 my-auto">
                <h4>Quantity</h4>
            </div>
            <div class="col-4 my-auto">
                <h4 class="text-center">
                    Rent Date
                </h4>
            </div>
            <div class="col-2 my-auto d-flex justify-content-end">
                <h4>Actions</h4>
            </div>
        </div>
    </div>

    @forelse ($rentedItems as $item)
    <div class="card my-2 ">
        @php
        $product = Helper::get_product($item->product_id)
        @endphp
        <div class="row p-4">
            <div class="col-1">
                <img src="{{$product->image}}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-2 my-auto">
                <h5>{{$product->name}}</h5>
            </div>
            <div class="col-2 my-auto">
                <div>{{$item->quantity}}</div>
            </div>
            <div class="col-4 my-auto">
                <div class="d-flex align-items-center justify-content-center">
                    <span class="date">{{$item->rented_at}}</span> -> <span class="date">{{$item->rented_untill}}</span>
                </div>
            </div>
            <div class="col-2 my-auto d-flex justify-content-end">
                <a href="/product_order/{{$item->id}}/return" class="btn btn-danger py-1 px-2">Return</a>
            </div>
        </div>
    </div>
    @empty
    <div class="m-4 text-center">No Items Rented...</div>
    @endforelse
</div>

@endsection