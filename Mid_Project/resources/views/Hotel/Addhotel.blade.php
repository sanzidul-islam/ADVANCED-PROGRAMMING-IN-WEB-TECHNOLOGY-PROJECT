
@extends('layouts.app')
@section('content')
<form action="{{ route('Addhotel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row ">
            <div class="form-group">
                <label for="">hotelname</label>
                    <input type="text" name="hotelname" placeholder="hotelname" class="form-control">
                </div>
                <br>
                <div class="form-group">
                <label for="">location</label>
                    <input type="text" name="location" placeholder="location" class="form-control">
                </div>
                <br>
                <div class="form-group">
                <label for="">phone</label>
                    <input type="text" name="phone" Placeholder="phone"class="form-control">
                </div>

                <br>
                <div class="form-group">
                <label for="">price</label>
                    <input type="text" name="price" Placeholder="price"class="form-control">
                </div>

                <br>
                <div class="form-group">
                <label for="">image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>

            </div>
            </div>
</form>
@endsection