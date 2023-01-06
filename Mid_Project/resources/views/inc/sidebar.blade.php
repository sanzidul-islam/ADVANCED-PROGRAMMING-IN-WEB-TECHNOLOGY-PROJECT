

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header class="top">
        <br>

        <a class="btn btn-primary" href="{{route('Admindashboard')}}">Admindashboard</a>
        <a class="btn btn-primary" href="{{route('Adminlist')}}">Adminlist</a>
        <a class="btn btn-primary" href="{{route('Addhotel')}}">Addhotel</a>
        <a class="btn btn-primary" href="{{route('Hotellist')}}">Hotellist</a>
        <a class="btn btn-primary" href="{{route('Buslist')}}">Buslist</a>
        <a class="btn btn-primary" href="{{route('Complainlist')}}">Complainlist</a>
        <a class="btn btn-primary" href="{{route('logout')}}">logout</a>
        
        
    
</header>

    
</body>
</html>
<style>
  .top  {
    background-color: aqua;

    height: 90px;
    text-align:center

}  

</style>



    
