@extends('layouts.indexOwner')
@section('content')
<div class="container">
    <h1 class="mt-3 text-center" style="text-transform: uppercase"><b> Store Detail </b></h1>
    <div class="mt-3 mb-5">
        <table class="table table-striped table-bordered">
            @foreach ($store as $str)
            <tr>
                <th>Store Name:</th>
                <td> {{ $str->storeName }} </td>
            </tr>
            <tr>
                <th>Owner Name:</th>
                <td> {{ auth()->user()->name }} </td>
            </tr>
            <tr>
                <th>Address:</th>
                <td> {{ $str->address }} </td>
            </tr>
            <tr>
                <th>Phone Number:</th>
                <td> {{ auth()->user()->phone }} </td>
            </tr>
            <tr>
                <th>Email:</th>
                <td> {{ auth()->user()->email }} </td>
            </tr>
            <tr>
                <th>Description:</th>
                <td> {{ $str->description }} </td>
            </tr>
            <tr>
                <th>Image:</th>
                <td><img class="img-fluid img-responsive"
                src="{{ asset('storage/'.$str->img) }}" style="height: 300px;"></td>
            </tr>
        </table>
        
        <div class="col-md-12 text-right">
            <a href="/storeOwner/{{ $str->id }}/edit" class="btn btn-warning mb-3 text-right">Edit Data</a>
        </div>
        @endforeach
    </div>
</div>
@endsection