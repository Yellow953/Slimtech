@extends('admin.app')

@section('content')
<a href="/app" class="btn text-secondary">
    <h3>
        < back</h3>
</a>

<div class="card m-3">
    <div class="card-body">
        <h4 class="header-title">Edit {{ucwords($currency->name)}}</h4>
        <p class="text-right my-2">Current Rate : {{number_format($currency->rate, 2)}}</p>
        <form method="POST" action="/currency/update" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="rate" class="col-form-label">Rate *</label>
                <input class="form-control input-rounded" name="rate" required type="number" value="{{$currency->rate}}"
                    step="0.1">
            </div>
            <div class="w-100 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-rounded">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection