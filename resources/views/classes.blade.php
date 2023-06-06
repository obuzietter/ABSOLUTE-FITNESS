<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/css/nav.css') }}">
    <link rel="stylesheet" href="{{ url('/css/classes.css') }}">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="{{ '/dashboard' }}" class="active">Home</a></li>
                <li><a href="{{ 'about' }}">About</a></li>
                <li><a href="{{ 'classes' }}">Classes</a></li>
                <li><a href="{{ 'trainer' }}">Trainor</a></li>
                <li><a href="{{ 'contact' }}">Contact</a></li>
                <li><a href="{{ 'membership' }}">Membership</a></li>
                <li><a href="/logout">Logout</a></li>

            </ul>
        </nav>
    </header>

    <main>
        <section class="sub-message">
            @if (Session::has('success'))
                <div class="success">{{ Session::get('success') }}</div>
            @endif
            @if (Session::has('fail'))
                <div class="success">{{ Session::get('fail') }}</div>
            @endif
        </section>
        <hr>
        <section>
            @foreach ($classes as $class)
                <form action="/book" method="POST">
                    @csrf
                    <input type="text" name="first_name" id="" value="{{ $data->first_name }}" hidden>
                    <input type="text" name="last_name" id="" value="{{ $data->last_name }}" hidden>
                    <input type="text" name="email" id="" value="{{ $data->email }}" hidden>
                    <input type="text" name="class_name" id="" value="{{ $class->class_name }}" hidden>



                    <div class="image">
                        <img src="{{ url('/images/trainer.jpg') }}" alt="card-image">
                    </div>
                    <div class="other-info">
                        <h3>Instructor: {{ $class->instructor_fname }} {{ $class->instructor_lname }}</h3>
                        <span>Class: {{ $class->class_name }}</span>
                    </div>
                    <div class="signup-btn">
                        <button type="submit">Sign Up</button>
                    </div>
                </form>
            @endforeach
        </section>
    </main>
    {{-- <footer>
        <ul>
            @foreach ($classes as $class)
            <li>{{$class}}</li>                
            @endforeach
        </ul>

    </footer> --}}

</body>

</html>
