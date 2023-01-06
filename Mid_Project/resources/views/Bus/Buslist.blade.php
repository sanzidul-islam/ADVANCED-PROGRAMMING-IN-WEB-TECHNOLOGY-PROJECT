@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<form action="" class="col-9" type="get" action="{{ url('/search')}}">
    <div class="form-group">
        <input type="search" name="name" id="" class="form-control" placeholder="search by name">

    </div>
    <button class="btn btn-primary">search</button>
</form>
<table class="table table-border">
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>seat</th>
        <th>location</th>
        <th>description</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($Admins as $Admin)
    <tr>
         <td>{{$Admin->id}}</td>
         <td>{{$Admin->name}}</td>
        <td>{{$Admin->seat}}</td>
        <td>{{$Admin->location}}</td>
        <td>{{$Admin->description}}</td>
        <td><a href="/BusDelete/{{$Admin->id}}">Delete</a></td> 
        
        </tr>
    @endforeach

</table>
<div class="d-flex justify-content-center">
    {!! $Admins->links() !!}
</div>
@endsection