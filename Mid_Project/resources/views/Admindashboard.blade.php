
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Item Hover Effects</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  
  <ul>
  <h3>welcome</h3>
  @if(Session::get('user')) {{Session::get('user')}} 
    <li><a href="{{route('Adminlist')}}" data-text="Adminlist">Admin-List</a></li>
    <li><a href="{{route('Addhotel')}}" data-text="Addhotel">Add-Hotel</a></li>
    <li><a href="{{route('Hotellist')}}" data-text="Hotellist">Hotel-List</a></li>
    <li><a href="{{route('Buslist')}}" data-text="Buslist">Bus-List</a></li>
    <li><a href="{{route('Complainlist')}}" data-text="Complainlist">Show-Complain</a></li>
    <li><a href="{{route('logout')}}" data-text="logout">logout</a></li>

  @endif 
  </ul>
</body>

</html>
<style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  overflow: hidden;
}
ul {
  position: relative;
}
ul li {
  list-style: none;
  text-align: center;
}
ul li a {
  color: #333;
  text-decoration: none;
  font-size: 3em;
  padding: 5px 20px;
  display: inline-flex;
  font-weight: 700;
  transition: 0.5s;
}
ul:hover li a {
  color: #0002;
}
ul li:hover a {
  color: #000;
  background: rgba(255, 255, 255, 1);
}
ul li a:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 40%;
  transform: translate(-50%, -50%);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 5em;
  color: rgba(0, 0, 0, 0.1);
  border-radius: 50%;
  z-index: -1;
  opacity: 0;
  font-weight: 900;
  text-transform: uppercase;
  letter-spacing: 500px;
  transition: letter-spacing 0.5s, left 0.5s;
}
ul li a:hover:before {
  content: attr(data-text);
  opacity: 1;
  left: 50%;
  letter-spacing: 10px;
  width: 1800px;
  height: 1800px;
}
ul li:nth-child(6n + 1) a:before {
  background: #00ffff;
}
ul li:nth-child(6n + 2) a:before {
  background: #66ccff;
}
ul li:nth-child(6n + 3) a:before {
  background: #55efc4;
}
ul li:nth-child(6n + 4) a:before {
  background: #a29bfe;
}
ul li:nth-child(6n + 5) a:before {
  background: #fd79a8;
}
ul li:nth-child(6n + 6) a:before {
  background: #66ff66;
}

</style>