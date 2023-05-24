<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
    <div class="container">
        <form class="login-form" action="{{route('login-user')}}" method="POST">
            @csrf
            <h2>Login</h2>
            
            @if(Session::has ('success'))
            <div class="success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has ('fail'))
            <div class="success">{{Session::get('fail')}}</div>
            @endif
            

            <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
            <span class="error-message">@error('email') {{$message}} @enderror</span>
            <input type="password" name="password" placeholder="Password">
            <span class="error-message">@error('password') {{$message}} @enderror</span>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="{{'/register'}}">Register</a></p>
        </form>
    </div>
</body>
</html>
