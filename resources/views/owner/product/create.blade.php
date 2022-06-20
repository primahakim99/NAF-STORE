@extends('layouts.indexOwner')
@section('content')
<div class="mx-5 my-5 mt-3">
    <div class="card px-3 py-3">
        <form action="/product" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="title">Product Name: </label>
                        <input type="text" class="form-control" required="required" name="name"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="title">Product Slug: </label>
                        <input type="text" class="form-control" required="required" name="slug"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="category" class="form-label">Store</label>
                        <select class="form-control" name="store_id">
                            @foreach ($stores as $store)
                            <option value="{{ $store->id }}">{{ $store->storeName }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="content">Description: </label>
                        <textarea type="text" class="form-control" required="required"
                            name="description"></textarea></br>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Stock</label>
                        <input type="number" name="stock" id="" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Weight</label>
                        <input type="text" name="weight" id="" class="form-control">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="">Price</label>
                        <input type="text" name="price" id="" class="form-control">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="image">Image: </label>
                        <input type="file" class="form-control" required="required" name="image"></br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection