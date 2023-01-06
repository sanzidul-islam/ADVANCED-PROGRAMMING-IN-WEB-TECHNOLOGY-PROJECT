<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="center">
<form class="form-group"action="{{route('logins')}}" method="post">
	<h1 id="lg">Login</h1>

	{{@csrf_field()}}
	<label for="">Enter your Phone number</label>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @if($errors->has('phone'))
        <span>
            <strong>{{$errors->first('phone') }}</strong>
        </span>
        @endif
        <br>
        <label for="">Roll</label>
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
        <label for="">Enter Password</label>
        <input type="text" name="password" value="{{old('password')}}" class="form-control">
        @if($errors->has('password'))
        <span>
            <strong>{{$errors->first('password') }}</strong>
        </span>
        @endif
        <br>
        <input type="submit" value="Submit" class="btn btn-outline-primary">
        <a href="{{route('AdminRegistation')}}">Register hare</a>
</form>
</div>
<style>

body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(45deg, greenyellow, dodgerblue);
  font-family: "Sansita Swashed", cursive;
}
.center {
  position: relative;
  padding: 50px 50px;
  background: #fff;
  border-radius: 10px;
}
.center h1 {
  font-size: 2em;
  border-left: 5px solid dodgerblue;
  padding: 10px;
  color: #000;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 300px;
  height: 50px;
  margin-bottom: 50px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 10px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 14px;
  left: 20px;
  font-size: 1em;
  transition: 0.6s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  transform: translateX(-13px) translateY(-35px);
  font-size: 1em;
}
.center .inputbox [type="button"] {
  width: 50%;
  background: dodgerblue;
  color: #fff;
  border: #fff;
}
.center .inputbox:hover [type="button"] {
  background: linear-gradient(45deg, greenyellow, dodgerblue);
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