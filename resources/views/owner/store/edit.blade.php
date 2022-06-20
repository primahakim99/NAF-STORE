@extends('layouts.indexOwner')
@section('content')
<div class="mx-5 my-5 mt-3">
    <div class="card px-3 py-3">
        @foreach($stores as $store)
        <form action="/storeOwner/{{ $store->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="title">Store Name: </label>
                        <input type="text" class="form-control" required="required" name="storeName"
                            value="{{old('storeName', $store->storeName)}}"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="title">Owner Name: </label>
                        <input type="text" class="form-control" required="required" name="name"
                            value="{{old('name', auth()->user()->name)}}"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="title">Phone Number: </label>
                        <input type="text" class="form-control" required="required" name="phone"
                            value="{{old('phone', auth()->user()->phone)}}"></br>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="title">Email: </label>
                        <input type="text" class="form-control" required="required" name="email"
                            value="{{old('email', auth()->user()->email)}}"></br>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="title">Address: </label>
                        <input type="text" class="form-control" required="required" name="address"
                            value="{{old('address', $store->address)}}"></br>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="content">Description: </label>
                        <textarea type="text" class="form-control" required="required"
                            name="description">{{ $store->description }}</textarea>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="image">Image: </label>
                        <input type="file" class="form-control" name="img"></br>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
</div>
@endsection