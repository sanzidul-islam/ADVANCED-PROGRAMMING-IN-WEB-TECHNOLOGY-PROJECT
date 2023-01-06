<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<form action="{{route('AdminRegistation')}}" class="form-group" method="post">
<h2>Registation</h2>
    {{csrf_field()}}

    <label for="">Id</label>
        <input type="text" name="id" value="{{old('id')}}" class="form-control">
        @if($errors->has('id'))
        <span>
            <strong>{{$errors->first('id') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Name</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @if($errors->has('name'))
        <span>
            <strong>{{$errors->first('name') }}</strong>
        </span>
        @endif
        <br>
      
        <label for="">Phone</label>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @if($errors->has('phone'))
        <span>
            <strong>{{$errors->first('phone') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Email</label>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @if($errors->has('email'))
        <span>
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Role</label>
        <select id="roll" name="roll" value="{{old('roll')}}" class="form-control">
        <option value="admin">admin</option>
        <option value="customer">customer</option>
        </select>
        @if($errors->has('roll'))
        <span>
        <strong>{{$errors->first('roll') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Password</label>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @if($errors->has('password'))
        <span>
            <strong>{{$errors->first('password') }}</strong>
        </span>
        @endif
        <br>
        
    
        <input type="submit" value="Submit" class="btn btn-outline-primary">
        <a href="{{route('logins')}}">Already have an account</a>
</form>
<style>
    .form-group{
      
        position: relative;
  width: 350px;
  height: 650px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ffffff;
  box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;

        
    }

    body {
      
  margin: 0;
  width: 100vw;
  height: 100vh;
  background:#e6e6e6;
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