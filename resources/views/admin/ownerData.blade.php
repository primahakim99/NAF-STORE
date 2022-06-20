@extends('layouts.indexAdmin')
@section('content')
<br/>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
            <h1>Owner Data</h1>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ url('ownerData/create') }}"> Input Owner Data</a>
            </div>

        </div>
    </div>

    <table class="table-bordered table">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
            <th>Postal Code</th>

            <th>Action</th>
        </tr>
        @foreach($owners as $key=>$value)
        <tr>
            <td>{{$value->name}}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->postal_code}}</td>
            <td>
                <form action="{{ route('ownerData.destroy',$value->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('ownerData.show',$value->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('ownerData.edit',$value->id) }}">Edit</a>
            
                @csrf
                @method("DELETE")
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection