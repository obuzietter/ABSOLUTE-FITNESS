<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>      
    <div class="container">
        <form class="registration-form" action="{{route('register-user')}}" method="POST">
            @csrf
            <h2>Registration</h2>

            @if(Session::has ('success'))
            <div class="success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has ('fail'))
            <div class="success">{{Session::get('fail')}}</div>
            @endif

            <input type="text" name="firstName" placeholder="First Name" value="{{old('firstName')}}">
            <span class="error-message">@error('firstName') {{$message}} @enderror</span>

            <input type="text" name="lastName" placeholder="Last Name" value="{{old('lastName')}}">
            <span class="error-message">@error('lastName') {{$message}} @enderror</span>

            <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
            <span class="error-message">@error('email') {{$message}} @enderror</span>

            <input type="password" name="password" placeholder="Password" value="">
            <span class="error-message">@error('password') {{$message}} @enderror</span>

            <button type="submit">Register</button>

            <p>Already have an account? <a href="{{'/login'}}">Login</a></p>
        </form>
    </div>
</body>
</html>
