<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<form action="{{route('Adminlistedit')}}" class="form-group" method="post">
<h2>You can edit now</h2>
    {{csrf_field()}}
    <label for="">ID</label>
        <input type="text" name="id" value="{{$Admins->id}}" class="form-control" readonly>
        @if($errors->has('id'))
        <span>
            <strong>{{$errors->first('id') }}</strong>
        </span>
        @endif
        <br> 
        <label for="">Name</label>
        <input type="text" name="name" value="{{$Admins->name}}" class="form-control">
        @if($errors->has('name'))
        <span>
            <strong>{{$errors->first('name') }}</strong>
        </span>
        @endif
        <br>
      
        <label for="">Phone</label>
        <input type="text" name="phone" value="{{$Admins->phone}}" class="form-control">
        @if($errors->has('phone'))
        <span>
            <strong>{{$errors->first('phone') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Email</label>
        <input type="text" name="email" value="{{$Admins->email}}" class="form-control">
        @if($errors->has('email'))
        <span>
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Password</label>
        <input type="text" name="password" value="{{$Admins->password}}" class="form-control">
        @if($errors->has('password'))
        <span>
            <strong>{{$errors->first('password') }}</strong>
        </span>
        @endif
        <br>
        
    
        <input type="submit" value="Submit" class="btn btn-outline-primary">
</form>
<style>
    .form-group{
      
        position: relative;
  width: 350px;
  height: 650px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #00b8e6;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;

        
    }

    body {
      
  margin: 0;
  width: 100vw;
  height: 100vh;
  background:#80e5ff;
  display: flex;
  align-items: center;
  text-align: center;
  justify-content: center;
  place-items: center;
  overflow: hidden;
  font-family: poppins;
}
input {
  caret-color: red;
}
a {
  position: absolute;
  font-size: 8px;
  bottom: 4px;
  right: 8px;
  text-decoration: none;
  color: black;
  background: yellow;
  border-radius: 10px;
  padding: 6px;
}


</style>