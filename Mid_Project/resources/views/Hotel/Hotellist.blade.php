@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<section class="products"> 
    
        @foreach ($products as $item)
            <div class="card" style="width: 18rem;">
                <!-- <img class="card-img-top" src="{{$item->image}}" alt="Card image cap"> -->
                <img class="card-img-top" src="{{asset('images/'.$item->image)}}" alt="Card image cap">
                <div class="card-body">
                <p class="card-text text-center">{{$item->name}}<br>
                
                <span>hotelname : {{$item->hotelname}}</span><br>
                <span>location : {{$item->location}}</span><br>
                <span>phone : {{$item->phone}}</span><br>
                <span>Price : BDT{{$item->price}}</span><br>
                <td><a href="/HotelDelete/{{$item->id}}">Delete</a></td> 
                
                </div>
            </div>
        @endforeach 
    @endsection
</section>
<style>
.products {
  display: flex;
  flex-wrap: wrap;
}
</style>