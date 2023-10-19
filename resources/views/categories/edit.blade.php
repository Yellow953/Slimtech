@extends('admin.app')

@section('content')
<div class="container">
    <a href="/categories" class="btn text-secondary">
        <h3>
            < back</h3>
    </a>

    <div class="row mt-3">
        <div class="offset-md-2 col-md-8">
            <div class="card border">
                <div class="card-header bg-primary">
                    <h2 class="font-weight-bolder text-center my-4">Edit Category</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/categories/{{$category->id}}/update" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name *</label>
                            <input class="form-control" name="name" required type="text" value="{{$category->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label>
                            <input class="form-control" name="description" type="text"
                                value="{{$category->description}}">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input id="allow_rent" class="form-check-input" name="allow_rent" type="checkbox" {{
                                    $category->allow_rent ? 'checked' : '' }}>
                                <label class="form-check-label" for="allow_rent">Allow Rent</label>
                            </div>
                        </div>

                        <div class="w-100 mt-5">
                            <button type="submit" class="btn btn-primary w-100">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection