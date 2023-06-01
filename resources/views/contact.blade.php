<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('/css/nav.css')}}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="{{'/dashboard'}}" class="active">Home</a></li>
                <li><a href="{{'about'}}">About</a></li>
                <li><a href="{{'classes'}}">Classes</a></li>
                <li><a href="{{'trainer'}}">Trainor</a></li>
                <li><a href="{{'contact'}}">Contact</a></li>
                <li><a href="{{'membership'}}">Membership</a></li>
                <li><a href="/logout">Logout</a></li>
                <h1>CONTACT</h1>
            </ul>
        </nav>
    </header>
    
</body>
</html>